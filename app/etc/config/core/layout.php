<?php
return array(

	/**
     * Configuration of error pages.
     */
	'errors' => array(

		/**
		* 404 error page path.
		*
		* This page is dynamic, use the "module/view" syntax.
		*
		* "errors/404" refers to
		* "app/template/default/views/errors/404.phtml"
		*/
		'404' => 'errors/404',

		/**
	     * Static error page.
	     *
	     * This page is static and is used when a fatal error occurs.
	     *
	     * The page must be a static .phtml file and must be located into the
	     * "/public" directory, so it can be accessed even if something is
	     * broken.
	     */
		'static' => 'public/error_static.phtml'

	),

	/**
	 * Default template to render views.
	 * Can be overrided in specific module, view or action configuration.
	 */
	'template' => array(

		/**
		 * Templat's type.
		 *
		 * Correct values are:
		 * - html
		 * - json
		 */
		'type' => 'html',

		/**
		 * Template's file name, without extension.
		 * Extension depends of the template type previously defined:
		 * - html: .phtml
		 * - json: .php
		 *
		 * The file must be located into "app/template/{theme}/"
		 */
		'file' => 'default',

		/**
		 * Array of CSS file names, relative to "public/skin/{theme}/css/"
		 *
		 * For external files, you can use the HTTP protocol
		 * ("http://", "https://") or the relative protocol ("//").
		 *
		 * Those files will be automatically added to every views using this
		 * template, with the order defined in this array.
		 */
		'css' => array(
			'normalize.css',
			'preset.css',
			'main.css'
		),

		/**
		 * Array of JS file names, relative to "public/skin/{theme}/js/".
		 *
		 * For external files, you can use the HTTP protocol
		 * ("http://", "https://") or the relative protocol ("//").
		 *
		 *
		 * Those files will be automatically added to every views using this
		 * template, with the order defined in this array.
		 */
		'js' => array(
			'//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js',
			'vendor/modernizr-2.6.2.min.js',
			'plugins.js',
			'main.js'
		)
	),

	/**
	 * Modules configuration.
	 *
	 * In this section, you can configure templates, CSS, JS and ACL for:
	 * - a specific module
	 * - a specific view
	 * - a specific action
	 */
	'modules' => array(

		/*

		====================
		SAMPLE
		====================

		// For the "home" module.
		'home' => array(

			// We add a CSS file to every view and actions of this module.
			'css' => array(
				'home.css'
			),

			// We add a JS file to every view and actions of this module.
			'js' => array(
				'home.js'
			),

			'views' => array(

				// For the view "index" ("home/index").
				'index' => array(

					// We add a CSS file to this view.
					'css' => array(
						'home-index.css'
					)

				),

				// For the view "api" ("home/api").
				'api' => array(

					// We set a specific template for this view.
					'template' => array(

						// Template type will be JSON.
						'type' => 'json',

						// Template file will be "api.php" in
						// "app/template/{theme}/".
						'file' => 'api'

					),

					// For specific actions of this view.
					'actions' => array(

						// For the "post" action ("home/api/action/post").
						'post' => array(

							// We set ACL: only users with the "update"
							// resource will be allowed to access this action.
							'acl' => array(
								'update'
							)

						)

					)

				)

			)

		)

		*/

    ),

	/**
	 * Blocks configuration.
	 *
	 * In this section, you can configure CSS, JS and ACL for a specific block.
	 */
	'blocks' => array(

		/*

		====================
		SAMPLE
		====================

		// For the "product" group.
		'product' => array(

			// For the "bestsellers" block ("product/bestsellers").
			'bestsellers' => array(

				// We add a CSS file to the view.
				'css' => array(
					'bestsellers.css'
				),

				// We add a JS file to the view.
				'js' => array(
					'slideshow.js'
				),

				// We set ACL: only users with the "stats" resource will see
				// the block.
				'acl' => array(
					'stats'
				)

			)

		)

		*/

    )

);
