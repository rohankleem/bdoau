<?php
/**
 * Loaded by wp-cli.yml before WordPress bootstraps.
 * Resolves the autoloader/.env with absolute paths because WP-CLI eval's
 * wp-config.php, which breaks __DIR__ inside that file.
 */

$root = dirname(__DIR__);
require_once $root . '/vendor/autoload.php';
Dotenv\Dotenv::createImmutable($root)->load();
