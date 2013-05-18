<?php
return array(

	// For the "guest" role (default user's role).
	'guest' => array(

		// Users with "guest" role will have access to the "stats" resource.
		'resources' => array(
			'stats'
		)

	),

	// For the "admin" role.
	'admin' => array(

		// Users with "admin" role will have access to the "update" resource.
		'resources' => array(
			'update'
		),

		// Users with "admin" role will also have access to all the resources
		// defined for the "guest" role. So in this case, the "admin" role
		// have access to the following resources: "update", "stats".
		'inherit' => array(
			'guest'
		)

	)

);
