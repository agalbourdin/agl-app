<?php
return array(

	/**
	 * Global configuration (theme, timezone).
	 */
	'global' => array(

		/**
		 * Name of the theme to use when rendering pages.
		 * A theme is a set of CSS / JS files, images and template files.
		 *
		 * "default" refers to "/public/skin/default/" and
		 * "/app/template/default/"
		 */
		'theme' => 'default',

		/**
		 * Application's timezone.
		 * All dates are stored as UTC in database. This setting is used to
		 * display dates with the correct timezone.
		 *
		 * http://www.php.net/manual/en/timezones.php
		 */
		'timezone' => 'Europe/Paris'
	),

	/**
	 * Main Database configuration.
	 */
	'db' => array(

		/**
		 * Database engine.
		 *
		 * Correct values are:
		 * - mysql
		 */
		'engine' => '',

		/**
		 * Database host.
		 *
		 * For example: "localhost", "127.0.0.1"
		 */
		'host' => '',

		/**
		 * Database name.
		 */
		'name' => '',

		/**
		 * Username to use to connect to the database.
		 */
		'user' => '',

		/**
		 * Password associated to the previously defined username.
		 */
		'password' => '',

		/**
		 * Optional: table prefix.
		 *
		 * For example: "agl_"
		 */
		'prefix' => ''
	),

	/**
	 * Session configuration.
	 */
	'session' => array(

		/**
		 * Set the database storage engine.
		 *
		 * Correct values are:
		 * - file [default]
		 * - db
		 */
		'storage' => 'file'
	)

);
