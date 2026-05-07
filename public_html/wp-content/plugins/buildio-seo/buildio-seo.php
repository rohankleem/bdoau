<?php
/**
 * Plugin Name: Buildio SEO
 * Plugin URI: https://buildio.au
 * Description: Fully custom SEO + GEO layer for buildio.au. Replaces Yoast / Rank Math frontend output entirely. Outputs JSON-LD schema (ProfessionalService, WebSite, BlogPosting, Article), Open Graph tags, Twitter Cards, meta description, canonical, robots, sitemap redirect. Every article attributed to Buildio as a brand-level Organization, never to a WordPress user. One file, no third-party plugin dependencies, no settings UI. Ported from UniPixelHQ SEO 2026-05-07.
 * Version: 1.0.0
 * Author: Buildio
 * Author URI: https://buildio.au
 * License: GPL-2.0+
 */

if (!defined('ABSPATH')) {
    exit;
}

/* =========================================================================
 * BRAND CONSTANTS — update these once, propagates everywhere.
 * Items marked PLACEHOLDER need real values before going live.
 * ====================================================================== */

define('BUILDIO_BRAND_NAME', 'Buildio');
define('BUILDIO_BRAND_URL', 'https://buildio.au');
define('BUILDIO_BRAND_LOGO', 'https://buildio.au/wp-content/uploads/buildio-logo.png'); // PLACEHOLDER — confirm logo path
define('BUILDIO_BRAND_OG_IMAGE', 'https://buildio.au/wp-content/uploads/buildio-og-image.png'); // PLACEHOLDER — 1200x630 ideal

// Social / external presence — leave empty string to omit.
define('BUILDIO_LINKEDIN_URL', ''); // PLACEHOLDER — set when LinkedIn presence exists
define('BUILDIO_FACEBOOK_URL', ''); // PLACEHOLDER — set when FB presence exists
define('BUILDIO_TWITTER_HANDLE', ''); // PLACEHOLDER — e.g. '@buildio' when X account exists

// Default site description used as fallback for home + pages without excerpt.
// Source: positioning skeleton — consultancy framing, primary Ballarat market.
define('BUILDIO_DEFAULT_DESCRIPTION', 'Buildio helps businesses grow through great digital systems — software, business transformation, streamlining, marketing and automations. Based in Ballarat, working across regional Victoria and Australia.');

// Geographic / local SEO signals.
define('BUILDIO_LOCALITY', 'Ballarat');
define('BUILDIO_REGION', 'Victoria');
define('BUILDIO_COUNTRY', 'Australia');
define('BUILDIO_AREA_SERVED', 'Australia'); // Where Buildio offers service. Override with comma-separated list if more specific.

// URL segment used to identify "docs-like" content on the site (Scrapbook, etc).
// Set to empty string to disable Article schema for non-post singulars.
define('BUILDIO_DOCS_URL_SEGMENT', '/scrapbook/');

/* =========================================================================
 * KILL OFF ANY THIRD-PARTY SEO PLUGIN'S COMPETING OUTPUT.
 * Defensive — works whether Yoast or Rank Math is active or not.
 * ====================================================================== */

// Yoast SEO (legacy filters, pre-v14)
add_filter('wpseo_json_ld_output', '__return_empty_array', 99);
add_filter('wpseo_schema_graph_pieces', '__return_empty_array', 99);
add_filter('wpseo_schema_graph', '__return_empty_array', 99);
add_filter('wpseo_opengraph', '__return_false', 99);
add_filter('wpseo_twitter', '__return_false', 99);
add_filter('wpseo_metadesc', '__return_false', 99);
add_filter('wpseo_canonical', '__return_false', 99);

// Yoast SEO v14+ (Indexables / Presenters architecture).
// Strip every frontend presenter so Yoast outputs nothing in the head.
add_filter('wpseo_frontend_presenter_classes', '__return_empty_array', 99);
add_filter('wpseo_frontend_presentation', '__return_false', 99);

// Rank Math
add_filter('rank_math/json_ld', '__return_empty_array', 99);
add_filter('rank_math/opengraph/facebook', '__return_false', 99);
add_filter('rank_math/opengraph/twitter', '__return_false', 99);
add_filter('rank_math/frontend/description', '__return_false', 99);
add_filter('rank_math/frontend/canonical', '__return_false', 99);

/* =========================================================================
 * AUTHOR IDENTITY — force Buildio everywhere.
 * Themes that call the_author() / get_the_author_display_name() pick this up.
 * ====================================================================== */

add_filter('the_author', 'buildio_force_author_name', 99);
add_filter('get_the_author_display_name', 'buildio_force_author_name', 99);
add_filter('get_the_author_user_nicename', 'buildio_force_author_name', 99);
add_filter('get_the_author_nickname', 'buildio_force_author_name', 99);

function buildio_force_author_name($display_name) {
    return BUILDIO_BRAND_NAME;
}

/* =========================================================================
 * REMOVE WORDPRESS NOISE we replace ourselves.
 * ====================================================================== */

// We output our own canonical. Stop core from doubling up.
remove_action('wp_head', 'rel_canonical');

// We output our own <title>. Stop core's default document_title generation.
add_filter('pre_get_document_title', 'buildio_filter_document_title', 99);

function buildio_filter_document_title($title) {
    // Returning a non-empty string here short-circuits core's title machinery.
    // We then output our own <title> tag in buildio_output_title().
    return buildio_compute_title(buildio_page_context());
}

// Suppress the "Powered by WordPress" generator tag.
remove_action('wp_head', 'wp_generator');

/* =========================================================================
 * HEAD OUTPUT — the main hook.
 * ====================================================================== */

add_action('wp_head', 'buildio_output_head', 1);

function buildio_output_head() {
    $context = buildio_page_context();

    buildio_output_title($context);
    buildio_output_robots($context);
    buildio_output_meta_description($context);
    buildio_output_canonical($context);
    buildio_output_open_graph($context);
    buildio_output_twitter_card($context);
    buildio_output_schema($context);
}

/* =========================================================================
 * TITLE OUTPUT
 * ====================================================================== */

add_action('init', 'buildio_take_over_title_rendering');

function buildio_take_over_title_rendering() {
    remove_action('wp_head', '_wp_render_title_tag', 1);
}

function buildio_output_title($context) {
    $title = buildio_compute_title($context);
    if ($title) {
        echo '<title>' . esc_html($title) . '</title>' . "\n";
    }
}

/* =========================================================================
 * PAGE CONTEXT — single source of truth for what page we're on.
 * ====================================================================== */

function buildio_page_context() {
    static $cached = null;
    if ($cached !== null) {
        return $cached;
    }

    $context = [
        'is_home'        => is_front_page(),
        'is_post'        => is_singular('post'),
        'is_docs'        => buildio_is_docs_page(),
        'is_singular'    => is_singular(),
        'title'          => '',
        'og_title'       => '',
        'twitter_title'  => '',
        'description'    => BUILDIO_DEFAULT_DESCRIPTION,
        'og_description' => '',
        'twitter_description' => '',
        'url'            => '',
        'image'          => BUILDIO_BRAND_OG_IMAGE,
        'og_type'        => 'website',
        'published'      => '',
        'modified'       => '',
        'noindex'        => false,
    ];

    if ($context['is_home']) {
        $context['title']       = get_bloginfo('name') ?: BUILDIO_BRAND_NAME;
        $context['description'] = get_bloginfo('description') ?: BUILDIO_DEFAULT_DESCRIPTION;
        $context['url']         = BUILDIO_BRAND_URL;
        $context['og_type']     = 'website';

        // Yoast home-page overrides (option-based, not postmeta-based)
        $home_yoast = buildio_get_yoast_home_meta();
        if (!empty($home_yoast['title'])) {
            $context['title'] = $home_yoast['title'];
        }
        if (!empty($home_yoast['description'])) {
            $context['description'] = $home_yoast['description'];
        }
    } elseif ($context['is_singular']) {
        $post = get_post();
        if ($post) {
            $context['url']       = get_permalink($post);
            $context['published'] = get_the_date('c', $post);
            $context['modified']  = get_the_modified_date('c', $post);
            $context['og_type']   = $context['is_post'] ? 'article' : 'website';

            // ----- TITLE: Yoast custom title > post title -----
            $yoast_title = buildio_get_yoast_meta($post->ID, 'title');
            $context['title'] = $yoast_title
                ? buildio_expand_yoast_placeholders($yoast_title, $post)
                : get_the_title($post);

            // ----- DESCRIPTION: Yoast metadesc > excerpt > content trim -----
            $yoast_desc = buildio_get_yoast_meta($post->ID, 'metadesc');
            $context['description'] = $yoast_desc
                ? buildio_expand_yoast_placeholders($yoast_desc, $post)
                : buildio_get_excerpt($post);

            // ----- OG OVERRIDES: Yoast OG-specific > general fallback -----
            $context['og_title']       = buildio_expand_yoast_placeholders(buildio_get_yoast_meta($post->ID, 'opengraph-title'), $post);
            $context['og_description'] = buildio_expand_yoast_placeholders(buildio_get_yoast_meta($post->ID, 'opengraph-description'), $post);

            // ----- TWITTER OVERRIDES -----
            $context['twitter_title']       = buildio_expand_yoast_placeholders(buildio_get_yoast_meta($post->ID, 'twitter-title'), $post);
            $context['twitter_description'] = buildio_expand_yoast_placeholders(buildio_get_yoast_meta($post->ID, 'twitter-description'), $post);

            // ----- IMAGE: Yoast OG image > featured image > brand fallback -----
            $yoast_og_image = buildio_get_yoast_meta($post->ID, 'opengraph-image');
            if ($yoast_og_image) {
                $context['image'] = $yoast_og_image;
            } else {
                $featured = get_the_post_thumbnail_url($post->ID, 'large');
                if ($featured) {
                    $context['image'] = $featured;
                }
            }

            // ----- CANONICAL OVERRIDE -----
            $yoast_canonical = buildio_get_yoast_meta($post->ID, 'canonical');
            if ($yoast_canonical) {
                $context['url'] = $yoast_canonical;
            }

            // ----- NOINDEX -----
            $noindex = buildio_get_yoast_meta($post->ID, 'meta-robots-noindex');
            if ($noindex === '1') {
                $context['noindex'] = true;
            }
        }
    }

    if (!$context['url']) {
        $context['url'] = home_url(add_query_arg([], $GLOBALS['wp']->request));
    }

    $cached = $context;
    return $context;
}

/* =========================================================================
 * META DESCRIPTION
 * ====================================================================== */

function buildio_output_meta_description($context) {
    $desc = $context['description'];
    if (!$desc) {
        return;
    }
    echo '<meta name="description" content="' . esc_attr($desc) . '" />' . "\n";
}

/* =========================================================================
 * CANONICAL
 * ====================================================================== */

function buildio_output_canonical($context) {
    if (!$context['url']) {
        return;
    }
    echo '<link rel="canonical" href="' . esc_url($context['url']) . '" />' . "\n";
}

/* =========================================================================
 * OPEN GRAPH (Facebook, LinkedIn share previews)
 * ====================================================================== */

function buildio_output_open_graph($context) {
    $tags = [
        'og:locale'      => str_replace('-', '_', get_locale()) ?: 'en_AU',
        'og:type'        => $context['og_type'],
        'og:title'       => $context['og_title'] !== '' ? $context['og_title'] : $context['title'],
        'og:description' => $context['og_description'] !== '' ? $context['og_description'] : $context['description'],
        'og:url'         => $context['url'],
        'og:site_name'   => BUILDIO_BRAND_NAME,
        'og:image'       => $context['image'],
        'og:image:width' => '1200',
        'og:image:height'=> '630',
    ];

    if ($context['og_type'] === 'article') {
        if ($context['published']) {
            $tags['article:published_time'] = $context['published'];
        }
        if ($context['modified']) {
            $tags['article:modified_time'] = $context['modified'];
        }
        $tags['article:author'] = BUILDIO_BRAND_URL;
        if (BUILDIO_FACEBOOK_URL !== '') {
            $tags['article:publisher'] = BUILDIO_FACEBOOK_URL;
        }
    }

    foreach ($tags as $property => $value) {
        if ($value === '' || $value === null) {
            continue;
        }
        echo '<meta property="' . esc_attr($property) . '" content="' . esc_attr($value) . '" />' . "\n";
    }
}

/* =========================================================================
 * TWITTER CARD (X / Twitter share previews)
 * ====================================================================== */

function buildio_output_twitter_card($context) {
    $tags = [
        'twitter:card'        => 'summary_large_image',
        'twitter:title'       => $context['twitter_title'] !== '' ? $context['twitter_title'] : ($context['og_title'] !== '' ? $context['og_title'] : $context['title']),
        'twitter:description' => $context['twitter_description'] !== '' ? $context['twitter_description'] : ($context['og_description'] !== '' ? $context['og_description'] : $context['description']),
        'twitter:image'       => $context['image'],
    ];

    if (BUILDIO_TWITTER_HANDLE !== '') {
        $tags['twitter:site']    = BUILDIO_TWITTER_HANDLE;
        $tags['twitter:creator'] = BUILDIO_TWITTER_HANDLE;
    }

    foreach ($tags as $name => $value) {
        if ($value === '' || $value === null) {
            continue;
        }
        echo '<meta name="' . esc_attr($name) . '" content="' . esc_attr($value) . '" />' . "\n";
    }
}

/* =========================================================================
 * JSON-LD SCHEMA (the GEO/AEO citation layer)
 * ====================================================================== */

function buildio_output_schema($context) {
    $schemas = [];

    $schemas[] = buildio_organization_schema();

    if ($context['is_home']) {
        $schemas[] = buildio_website_schema();
    } elseif ($context['is_post']) {
        $schemas[] = buildio_blog_posting_schema($context);
    } elseif ($context['is_docs']) {
        $schemas[] = buildio_article_schema($context);
    }

    foreach ($schemas as $schema) {
        if (empty($schema)) {
            continue;
        }
        echo "<script type=\"application/ld+json\">\n";
        echo wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        echo "\n</script>\n";
    }
}

function buildio_organization_schema() {
    // ProfessionalService extends Organization and is more semantically correct
    // for a consultancy. Includes locality + areaServed for local SEO.
    $sameAs = array_filter([
        BUILDIO_LINKEDIN_URL,
        BUILDIO_FACEBOOK_URL,
    ]);

    $schema = [
        '@context' => 'https://schema.org',
        '@type'    => 'ProfessionalService',
        '@id'      => BUILDIO_BRAND_URL . '#organization',
        'name'     => BUILDIO_BRAND_NAME,
        'url'      => BUILDIO_BRAND_URL,
        'description' => BUILDIO_DEFAULT_DESCRIPTION,
        'logo'     => [
            '@type' => 'ImageObject',
            'url'   => BUILDIO_BRAND_LOGO,
        ],
        'address'  => [
            '@type'           => 'PostalAddress',
            'addressLocality' => BUILDIO_LOCALITY,
            'addressRegion'   => BUILDIO_REGION,
            'addressCountry'  => BUILDIO_COUNTRY,
        ],
        'areaServed' => BUILDIO_AREA_SERVED,
    ];

    if (!empty($sameAs)) {
        $schema['sameAs'] = array_values($sameAs);
    }

    return $schema;
}

function buildio_website_schema() {
    return [
        '@context'  => 'https://schema.org',
        '@type'     => 'WebSite',
        '@id'       => BUILDIO_BRAND_URL . '#website',
        'name'      => BUILDIO_BRAND_NAME,
        'url'       => BUILDIO_BRAND_URL,
        'publisher' => [
            '@id' => BUILDIO_BRAND_URL . '#organization',
        ],
        'potentialAction' => [
            '@type'       => 'SearchAction',
            'target'      => [
                '@type'       => 'EntryPoint',
                'urlTemplate' => BUILDIO_BRAND_URL . '/?s={search_term_string}',
            ],
            'query-input' => 'required name=search_term_string',
        ],
    ];
}

function buildio_blog_posting_schema($context) {
    $post = get_post();
    if (!$post) {
        return null;
    }

    return [
        '@context'         => 'https://schema.org',
        '@type'            => 'BlogPosting',
        'headline'         => $context['title'],
        'description'      => $context['description'],
        'image'            => $context['image'],
        'datePublished'    => $context['published'],
        'dateModified'     => $context['modified'],
        'author'           => [
            '@id' => BUILDIO_BRAND_URL . '#organization',
        ],
        'publisher'        => [
            '@id' => BUILDIO_BRAND_URL . '#organization',
        ],
        'mainEntityOfPage' => [
            '@type' => 'WebPage',
            '@id'   => $context['url'],
        ],
    ];
}

function buildio_article_schema($context) {
    $post = get_post();
    if (!$post) {
        return null;
    }

    return [
        '@context'         => 'https://schema.org',
        '@type'            => 'Article',
        'headline'         => $context['title'],
        'description'      => $context['description'],
        'image'            => $context['image'],
        'datePublished'    => $context['published'],
        'dateModified'     => $context['modified'],
        'author'           => [
            '@id' => BUILDIO_BRAND_URL . '#organization',
        ],
        'publisher'        => [
            '@id' => BUILDIO_BRAND_URL . '#organization',
        ],
        'mainEntityOfPage' => [
            '@type' => 'WebPage',
            '@id'   => $context['url'],
        ],
    ];
}

/* =========================================================================
 * SITEMAP — rely on WordPress core's wp-sitemap.xml (built in since WP 5.5).
 * Redirect Yoast's old /sitemap_index.xml to the core sitemap so any
 * Google-cached references continue to resolve.
 * ====================================================================== */

add_action('template_redirect', 'buildio_redirect_yoast_sitemap');

function buildio_redirect_yoast_sitemap() {
    $request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
    $yoast_paths = [
        '/sitemap_index.xml',
        '/sitemap.xml',
        '/post-sitemap.xml',
        '/page-sitemap.xml',
        '/category-sitemap.xml',
    ];
    foreach ($yoast_paths as $path) {
        if (strpos($request_uri, $path) === 0) {
            wp_safe_redirect(home_url('/wp-sitemap.xml'), 301);
            exit;
        }
    }
}

/* =========================================================================
 * ROBOTS META (per-page noindex/follow)
 * ====================================================================== */

function buildio_output_robots($context) {
    $directives = [];
    $directives[] = $context['noindex'] ? 'noindex' : 'index';
    $directives[] = 'follow';
    $directives[] = 'max-image-preview:large';
    $directives[] = 'max-snippet:-1';
    $directives[] = 'max-video-preview:-1';
    echo '<meta name="robots" content="' . esc_attr(implode(', ', $directives)) . '" />' . "\n";
}

/* =========================================================================
 * TITLE COMPUTATION
 * ====================================================================== */

function buildio_compute_title($context) {
    $separator = ' | ';
    $site_name = get_bloginfo('name') ?: BUILDIO_BRAND_NAME;

    if ($context['is_home']) {
        $tagline = get_bloginfo('description');
        if (!empty($context['title']) && stripos($context['title'], $site_name) !== false) {
            return $context['title'];
        }
        if ($tagline) {
            return $site_name . $separator . $tagline;
        }
        return $site_name;
    }

    if ($context['title']) {
        if (stripos($context['title'], $site_name) !== false) {
            return $context['title'];
        }
        return $context['title'] . $separator . $site_name;
    }

    return $site_name;
}

/* =========================================================================
 * HELPERS — YOAST META READERS
 * Read Yoast's stored data so per-post titles, meta descriptions, OG/Twitter
 * overrides, canonicals, and noindex flags survive Yoast deactivation.
 * Yoast meta records persist in wp_postmeta even after the plugin is removed.
 * ====================================================================== */

function buildio_get_yoast_meta($post_id, $key) {
    if (!$post_id) {
        return null;
    }
    $value = get_post_meta($post_id, '_yoast_wpseo_' . $key, true);
    if ($value === '' || $value === null || $value === false) {
        return null;
    }
    return $value;
}

function buildio_get_yoast_home_meta() {
    $titles_option = get_option('wpseo_titles', []);
    if (!is_array($titles_option)) {
        return ['title' => null, 'description' => null];
    }

    $front_id = (int) get_option('page_on_front');

    if ($front_id) {
        $title = isset($titles_option['title-page']) ? $titles_option['title-page'] : null;
        $description = isset($titles_option['metadesc-page']) ? $titles_option['metadesc-page'] : null;
        $page_title = buildio_get_yoast_meta($front_id, 'title');
        $page_desc  = buildio_get_yoast_meta($front_id, 'metadesc');
        if ($page_title) {
            $title = $page_title;
        }
        if ($page_desc) {
            $description = $page_desc;
        }
        $post = get_post($front_id);
    } else {
        $title = isset($titles_option['title-home-wpseo']) ? $titles_option['title-home-wpseo'] : null;
        $description = isset($titles_option['metadesc-home-wpseo']) ? $titles_option['metadesc-home-wpseo'] : null;
        $post = null;
    }

    return [
        'title'       => $title ? buildio_expand_yoast_placeholders($title, $post) : null,
        'description' => $description ? buildio_expand_yoast_placeholders($description, $post) : null,
    ];
}

/**
 * Expand Yoast title/description placeholders to plain text.
 * Covers the most common ones; unrecognised placeholders are stripped.
 */
function buildio_expand_yoast_placeholders($string, $post = null) {
    if (!$string) {
        return '';
    }

    $replacements = [
        '%%sitename%%' => get_bloginfo('name'),
        '%%sitedesc%%' => get_bloginfo('description'),
        '%%sep%%'      => '|',
        '%%page%%'     => '',
        '%%currenttime%%' => '',
        '%%currentdate%%' => '',
        '%%currentyear%%' => date('Y'),
    ];

    if ($post instanceof WP_Post) {
        $replacements['%%title%%']    = get_the_title($post);
        $replacements['%%excerpt%%']  = wp_strip_all_tags(get_the_excerpt($post));
        $replacements['%%date%%']     = get_the_date('', $post);
        $replacements['%%modified%%'] = get_the_modified_date('', $post);
        $replacements['%%id%%']       = $post->ID;
        $replacements['%%name%%']     = get_the_author_meta('display_name', $post->post_author);
    }

    $output = str_replace(array_keys($replacements), array_values($replacements), $string);

    // Strip any remaining unrecognised %%placeholder%% tokens.
    $output = preg_replace('/%%[^%]+%%/', '', $output);

    // Tidy whitespace produced by stripped placeholders.
    $output = preg_replace('/\s+/', ' ', $output);
    $output = trim($output);

    return $output;
}

/* =========================================================================
 * HELPERS — GENERAL
 * ====================================================================== */

function buildio_get_excerpt($post) {
    $excerpt = get_the_excerpt($post);
    if (!$excerpt) {
        $excerpt = wp_trim_words(strip_tags($post->post_content), 30, '...');
    }
    $excerpt = wp_strip_all_tags($excerpt);
    $excerpt = preg_replace('/\s+/', ' ', $excerpt);
    $excerpt = trim($excerpt);
    if (mb_strlen($excerpt) > 300) {
        $excerpt = mb_substr($excerpt, 0, 297) . '...';
    }
    return $excerpt;
}

function buildio_is_docs_page() {
    if (BUILDIO_DOCS_URL_SEGMENT === '') {
        return false;
    }
    $request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
    return strpos($request_uri, BUILDIO_DOCS_URL_SEGMENT) !== false;
}
