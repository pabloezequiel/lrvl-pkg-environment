<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Default Flag Template
	|--------------------------------------------------------------------------
	|
	| The package will use the template specified here to show the environment
	| flag.
	|
	*/

	'template' => 'environment::flag',

	/*
	|--------------------------------------------------------------------------
	| Environments
	|--------------------------------------------------------------------------
	|
	| Add all evironment where you want to show the flag.
	| Into the environments key you have to add groups of environments.
	| The first key into the environments will be the name of the environment.
	| Values into the second array must match with your environment name.
	|
	*/

	'environments' => array(

		'local' => array(

			'local'

		)

	)

);
