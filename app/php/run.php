<?php
/**
 * Composer base folder.
 */
define('COMPOSER_DIR', 'vendor/');

/**
 * Required constants to initialize AGL.
 *
 * AGL_PATH (string): absolute or relative path to your AGL installation
 * (Agl/Core directory).
 *
 * AGL_CACHE_ENABLED (bool): enable the Cache. Configuration files will
 * automatically be cached. Views and Blocks will be cached if configured.
 * Cache is saved to memory if APC is available, or to file system
 * (in app/var/cache, app/var must be writable).
 *
 * AGL_DEBUG_MODE (bool): enable the Debug mode. PHP errors and exceptions will
 * be displayed. Debug informations will be displayed at the bottom of the
 * pages.
 */
define('AGL_PATH', COMPOSER_DIR . '/agl/core/src/Agl/Core/');
define('AGL_CACHE_ENABLED', false);
define('AGL_DEBUG_MODE', false);

/**
 * Require Composer Autoloader.
 */
require(COMPOSER_DIR . 'autoload.php');

/**
 * Require AGL boot file.
 */
require(AGL_PATH . 'Bootstrap.php');
