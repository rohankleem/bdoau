# App Knowledge — Buildio.au

> How this WordPress site is built. Stack, architecture, dev setup, conventions, and app-specific facts. Theme internals (SCSS chain, JS, nav, blog styling) are split out into `buildio2-theme.md`.

## Architecture

A standard WordPress install with a single custom theme (`buildio2`). The site files live at the repo root under `public_html/`. Composer is used **only** to load `vlucas/phpdotenv` so credentials sit in `.env` instead of `wp-config.php`.

```
bdoau/                                  ← Git root (= C:\xampp\htdocs\bdoau, despite the path name)
├── public_html/                        ← Web root
│   ├── wp-config.php                   ← Loads vendor autoload + .env, then standard WP bootstrap
│   ├── wp-content/
│   │   └── themes/
│   │       └── buildio2/               ← The only custom theme. Active development.
│   └── .htaccess                       ← WP rewrite rules + iThemes Security + custom redirects
├── _deploy/                            ← rsync deploy scripts (LIVE / TEST)
├── _rsync/.rsync_all                   ← rsync include/exclude filter
├── _tools/                             ← WP-CLI phar (gitignored) + bootstrap
├── vendor/                             ← Composer deps (committed — only phpdotenv + transitive)
├── .claude/                            ← Operating manual + knowledge
├── .env                                ← DB credentials, salts. Gitignored.
├── wp-cli.yml                          ← WP-CLI config (path + bootstrap require)
├── wp / wp.bat                         ← WP-CLI wrappers — auto-discover Laragon PHP/MySQL
└── CLAUDE.md
```

**Request flow (web):** Laragon Apache vhost → `public_html/index.php` → `wp-config.php` (loads `.env`) → WP core → active theme `buildio2`.

**Request flow (CLI):** `./wp <cmd>` → wrapper prepends Laragon PHP+MySQL to PATH → `php _tools/wp-cli.phar` → wp-cli.yml's `require:` fires `_tools/wp-cli-bootstrap.php` (loads autoload + .env with absolute paths) → WP-CLI loads `wp-config.php`, dotenv block is skipped because env is already populated → command runs.

## Tech Stack

| Layer | Technology | Notes |
|---|---|---|
| OS | Windows 11 | Dev machine |
| Local stack | **Laragon** | Auto-vhost via `bdoau.local.site`. Apache + PHP + MySQL all bundled. |
| Web server | Apache 2.4.66 | Laragon-managed |
| PHP (web) | 8.3.30 | `C:\laragon\bin\php\php-8.3.30-Win32-vs16-x64\` |
| PHP (CLI) | Same 8.3.30 | The `wp` wrappers force this; XAMPP's bundled PHP is 8.2.12 and unused |
| Database (local) | MySQL 8.4.3 | `C:\laragon\bin\mysql\mysql-8.4.3-winx64\`. Uses `caching_sha2_password` auth. |
| Database (production) | **MariaDB 10.6.25** | InterServer-managed. Different fork from local — see "Local vs production DB" below. |
| WordPress | 6.9.4 | Tracked in git, not via `wp core update` |
| CMS theme | `buildio2` | Custom theme — Bootstrap 5 + Webpack build (see `buildio2-theme.md`) |
| Composer | Used only for `vlucas/phpdotenv` | `vendor/` is committed |
| WP-CLI | 2.12.0 (via `_tools/wp-cli.phar`) | Wrapped by `./wp` / `wp.bat` for ergonomics |
| Hosting (production) | InterServer | DirectAdmin panel |
| Production server | `vda4300.is.cc` | SSH user: `buildiod` |
| Production path | `domains/buildio.au` | Per `_deploy/deploy_all_LIVE.sh` |
| Deploy | rsync from WSL/Ubuntu | Manual — `bash _deploy/deploy_all_LIVE.sh` |
| Repo | https://github.com/rohankleem/bdoau | Private. Branch: `master` only. |

## Important: XAMPP path is misleading

The project lives at `C:\xampp\htdocs\bdoau\` for historical reasons, but **XAMPP is not the runtime**. Laragon serves the site, Laragon's MySQL holds the data. The XAMPP install on disk is unused — and its `mysql.exe` is broken (missing `caching_sha2_password.dll`), so don't fall back to it.

If a CLI command starts erroring with mysql plugin errors, check that `PATH` is pointing at Laragon's binaries, not XAMPP's. The `./wp` wrapper does this automatically.

## Dev Setup

### Local URL
`https://bdoau.local.site` (Laragon auto-generates the vhost from the directory name `bdoau` + the `.local.site` TLD convention).

### Starting the stack
- **Laragon:** Open `C:\laragon\laragon.exe`, click Start All. Apache + MySQL come up.
- **WordPress:** loads automatically once Laragon is up.
- **Theme dev (buildio2 build):** see `buildio2-theme.md` for `npm run dev` / `npm run watch` / `npm run prod`.

### Cloning fresh
```bash
git clone https://github.com/rohankleem/bdoau.git C:/xampp/htdocs/bdoau
cd C:/xampp/htdocs/bdoau
composer install                                      # vendor/ is committed but composer.lock auto-generates if missing
cp .env.example .env                                  # then fill DB creds + salts
# Import a DB dump into a `bdoau` database via phpMyAdmin or wp db import
```

Then start Laragon and visit `https://bdoau.local.site`.

## WP-CLI

Use the wrapper, not the phar directly. From the project root:

```bash
./wp option get siteurl              # → https://bdoau.local.site
./wp post list --post_type=page
./wp db query "SELECT COUNT(*) FROM wx4gk_posts"
./wp db search-replace 'old' 'new' --dry-run
./wp db export _ignore/backup-$(date +%F).sql
./wp eval 'echo wp_count_posts()->publish;'
```

From PowerShell or cmd: `wp.bat <args>` (or just `wp` if you `Set-Alias wp .\wp.bat`).

The wrappers:
- Auto-discover the newest Laragon PHP and MySQL under `C:\laragon\bin`
- Prepend them to PATH for the duration of the call
- Then exec `php _tools/wp-cli.phar`

If you upgrade Laragon and the wrappers can't find PHP or MySQL, they error out clearly. They don't silently fall back to a system-PATH binary.

## Database Conventions

- **Database name:** `bdoau` (per `.env`)
- **Table prefix:** `wx4gk_` (non-default — set in `.env` via `TABLE_PREFIX`)
- **Auth (local):** `root` / no password (Laragon default)
- **Charset:** `utf8mb4`

When writing raw SQL, use `wx4gk_` not `wp_`.

### Local vs production DB

The two environments run **different database engines**, not just different versions:

| | Local | Production |
|---|---|---|
| Engine | MySQL 8.4.3 | MariaDB 10.6.25 |
| Auth plugin | `caching_sha2_password` | `mysql_native_password` |
| Reached EOL | — | July 2026 |

**Implications:**

- **Most SQL ports cleanly.** `SELECT`, `INSERT`, `UPDATE`, `DELETE`, JOINs, basic functions, WP's `$wpdb` queries, `wp db search-replace` — all work on both.
- **Edge cases differ:** JSON path syntax, certain window function details, some `INFORMATION_SCHEMA` columns, GIS functions, recent MySQL 8.x-only features (e.g. `INTERSECT`/`EXCEPT` set ops added in 8.x are also in MariaDB 11.x but not 10.6). If you write anything beyond standard CRUD, test on both.
- **Auth surprise:** server's `mysql` client "just works" with no plugin DLL drama because MariaDB uses native auth. Don't generalise from server to local — local needs Laragon's mysql client, not XAMPP's.
- **Version skew direction:** local is *newer* than production, which is the harder direction to detect (a query that works locally may fail in prod). Reverse direction (prod-newer) would have given a build-time error.
- **MariaDB 10.6 EOL July 2026** — roughly 2 months from today (2026-05-07). Worth scheduling a bump to 10.11 or 11.x via the InterServer panel before that date.

**Quick reference for prod DB ops** (run from local terminal — server WP-CLI talks to MariaDB transparently):

```bash
ssh buildiod@vda4300.is.cc "cd domains/buildio.au/public_html && wp db export ~/backups/prod-$(date +%F).sql"
ssh buildiod@vda4300.is.cc "cd domains/buildio.au/public_html && wp db search-replace 'old' 'new' --dry-run"
```

## Conventions

### Coding style
- WordPress code follows WordPress coding standards where it touches WP core (functions.php, template parts).
- Custom theme code (buildio2): follows the project conventions captured in `buildio2-theme.md`.
- **`_user.scss` rule:** plain CSS syntax inside this file, no SCSS-specific features (nesting, mixins, @extend) unless there's a clear advantage. Bootstrap utility classes are preferred over custom CSS for spacing and responsive behaviour.

### Commit messages
Real messages describing what and why:
- `Fix offcanvas dropdown clipping on lg+ breakpoints`
- `Switch deploy target from buildio.dev to buildio.au`
- `Remove unused default WP themes`

Bad: `update`, `fix`, `stuff`, `changes`.

### File naming
- WordPress templates: WP convention (`single.php`, `page-{slug}.php`, etc.)
- Theme partials in `inc/`: dash-cased (`nav-header.php`, `home/approaches-1.php`)
- SCSS partials: underscore prefix per Sass convention (`_variables.scss`)

## App Facts

Things worth knowing that aren't obvious from reading the code.

- **Composer's only role is dotenv.** `vendor/` exists because `wp-config.php` does `require_once __DIR__ . '/../vendor/autoload.php'` to load `vlucas/phpdotenv`. That's the entire reason `composer.json` is in this repo.
- **`wp-config.php` has guarded dotenv loading.** The autoload + dotenv block is wrapped in `if (!class_exists('Dotenv\\Dotenv'))` and `if (empty($_ENV['DB_NAME']))` so it's safe in both web context and WP-CLI context (where the bootstrap pre-loads the env).
- **Local Claude settings are gitignored.** `.claude/settings.local.json` and `.claude/worktrees/` are excluded. Other `.claude/*` files are committed and shared.
- **Default WP themes are NOT in the repo.** `twentytwentyone` through `twentytwentyfive` and the legacy `buildio` theme were deleted from git on 2026-05-07. Only `buildio2` is tracked.
- **iThemes Security is active.** It owns the top of `.htaccess` (between `BEGIN iThemes Security` markers) and the constant `DISALLOW_FILE_EDIT` in `wp-config.php`. Don't edit between its markers.
- **Custom redirect block in .htaccess.** `/unipixel/` 301s to `https://unipixelhq.com/`. Lives in a `# BEGIN Custom Redirects` block — keep custom rules in there, not scattered.

## Active Plugins

To get the live list: `./wp plugin list --status=active`. Don't hardcode it here — it goes stale.

Plugins of note that affect the stack (not just content):
- **iThemes Security (now Solid Security)** — owns parts of `.htaccess` and `wp-config.php`. See above.
- **Yoast SEO** — sitemap at `/sitemap_index.xml`. Configuration captured in `buildio2-theme.md`'s SEO section.
- **better-search-replace** — currently untracked in git. Used for serialised find/replace at the DB level (an alternative to `wp db search-replace`). Decide whether to commit when the plugin set is next reviewed.

## Data Flow & Integrations

- **REST API:** WordPress core REST API exposed at `/wp-json/`.
- **Custom endpoint:** `/wp-json/custom/v1/monday-webhook` — defined in theme `functions.php`. Receives webhooks from Monday.com (purpose to be documented in `domain-knowledge.md` once captured).
- **SMTP:** theme `functions.php` configures SMTP via env vars. Credentials live in `.env`.
