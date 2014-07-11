Laravel 4 Flag
==============

[![Latest Stable Version](https://poser.pugx.org/pabloleone/environment/v/stable.svg)](https://packagist.org/packages/pabloleone/environment) [![Total Downloads](https://poser.pugx.org/pabloleone/environment/downloads.svg)](https://packagist.org/packages/pabloleone/environment) [![Latest Unstable Version](https://poser.pugx.org/pabloleone/environment/v/unstable.svg)](https://packagist.org/packages/pabloleone/environment) [![License](https://poser.pugx.org/pabloleone/environment/license.svg)](https://packagist.org/packages/pabloleone/environment)

This Laravel 4 package provides a way to flag your flags to avoid unwanted changes.

![Flag Demo](http://pabloleone.com/resources/environment_flag.png)

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `pabloleone/flag`.

    "require": {
        "pabloleone/flag": "1.0.5"
    }

Next, update Composer from the Terminal:

    composer update

Once this operation completes, the final step is to add the service provider. Open `app/config/app.php`, and add a new item to the providers array.

    'Pabloleone\Flag\FlagServiceProvider'

That's it! You're all set to go.

## Configuration 

You have to add a list of flags you want to see the flag. To do it you have to publish the config file with this command.

    php artisan config:publish pabloleone/flag

In the config file you can add a group of flags under a single name or multiple names. Check out the file and follow the instructions.
 
See: http://laravel.com/docs/packages#package-configuration

## Template

To override the template, publish the package template into your app with this command.

    php artisan view:publish pabloleone/flag


Now go to your `app/views/packages` and made all changes there.

See: http://laravel.com/docs/packages#package-views
