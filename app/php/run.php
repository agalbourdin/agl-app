<?php
/**
 * Enable AGL Cache. Views and Blocks will be cached if configured.
 * Cache can be saved to memory (with APC or APCu), or to file system.
 */
define('AGL_CACHE_ENABLED', false);

/**
 * Enable AGL Debug mode (display all errors).
 */
define('AGL_DEBUG_MODE', false);

/**
 * Your Composer base folder, with trailing slash (default value is "vendor/").
 */
define('COMPOSER_DIR', 'vendor/');

/**
 * You shouldn't have to edit following lines.
 */
if (! is_dir(COMPOSER_DIR)) {
	echo "Composer dependencies are not installed.";
	exit;
}

define('AGL_PATH', COMPOSER_DIR . 'agl/core/src/');

if (file_exists(COMPOSER_DIR . 'autoload.php')) {
    require(COMPOSER_DIR . 'autoload.php');
}

require(AGL_PATH . 'Bootstrap.php');
