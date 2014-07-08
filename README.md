Laravel 4 Environment Flag
==========================

This Laravel 4 package provides a way to flag your environments to avoid unwanted changes.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `pabloezequiel/lrvl-pkg-environment`.

    "require": {
        "pabloezequiel/lrvl-pkg-environment": "1.*"
    }

Next, update Composer from the Terminal:

    composer update

Once this operation completes, the final step is to add the service provider. Open `app/config/app.php`, and add a new item to the providers array.

    'Pabloezequiel\Environment\EnvironmentServiceProvider'

That's it! You're all set to go.

## Configuration

You have to add a list of environments you want to see the flag. To do it you have to publish the config file with this command.

    php artisan config:publish pabloezequiel/lrvl-pkg-environment

In the config file you can add a group of environments under a single name or multiple names. Check out the file and follow the instructions.

See: http://laravel.com/docs/packages#package-configuration

### Template

To override the template, publish the package template into your app with this command.

    php artisan view:publish pabloezequiel/lrvl-pkg-environment


Now go to your `app/views/packages` and made all changes there.

See: http://laravel.com/docs/packages#package-views
