<?php
return array(

	// When the "agl_init_after" event is fired.
	'agl_init_after' => array(

		// Call userObserverHelper::cleanState().
        'helper/user/observer' => array(
            'cleanState'
        )

    ),

	// When the "agl_router_route_before" event is fired.
	'agl_router_route_before' => array(

		// Call FacebookInitHelper::login() and FacebookInitHelper::setLang().
        'helper/facebook/init' => array(
            'login',
            'setLang'
        ),

		// Call userObserverHelper::getPreferedRoute().
        'helper/user/observer' => array(
            'getPreferedRoute'
        )
    )

);
