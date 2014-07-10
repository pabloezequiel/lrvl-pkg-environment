<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Default Flag Template
    |--------------------------------------------------------------------------
    |
    | The package will use the template specified here to show the flag
    | flag. Feel free to change the template.
    |
    */

    'template' => 'flag::flag',

    /*
    |--------------------------------------------------------------------------
    | Flags
    |--------------------------------------------------------------------------
    |
    | Add all evironment where you want to show the flag.
    | Into the flags key you have to add groups of flags.
    | The first key into the flags array will be the group flag name.
    | It's values must match with your flag name.
    |
    | e.x.: 
    | 
    | 'flags' => array(
    | 
    |   'production' => array('production', 'production-2', 'production-n')
    | 
    | )
    |
    */

    'environments' => array()

);
