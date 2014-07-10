<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Default Flag Template
	|--------------------------------------------------------------------------
	|
	| The package will use the template specified here to show the environment
	| flag. Feel free to change the template.
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
	| The first key into the environments array will be the group environment name.
	| It's values must match with your environment name.
	|
	| e.x.: 
	| 
	| 'environments' => array(
	| 
	| 	'production' => array('production', 'production-2', 'production-n')
	| 
	| )
	|
	*/

	'environments' => array()

);
