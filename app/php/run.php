<?php
/**
 * Required constants to initialize AGL.
 */
define('AGL_PATH', '/data/Sites/Alexis/agl_git/agl/');
define('AGL_CACHE_ENABLED', false);
define('AGL_DEBUG_MODE', false);

/**
 * Require the boot file.
 */
require(AGL_PATH . 'Bootstrap.php');
