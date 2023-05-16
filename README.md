# Free Tailwind & Laravel admin dashboard template

![Mosaic TailwindCSS template preview](https://user-images.githubusercontent.com/2683512/179986293-36b45ba3-97cc-426e-b42e-fca244d4b86c.png)

**Mosaic Lite Laravel** is a responsive admin dashboard template built on top of Tailwind CSS and fully coded in Laravel Jetstream. This template is a great starting point for anyone who wants to create a user interface for SaaS products, administrator dashboards, modern web apps, and more.
Use it for whatever you want, and be sure to reach us out on [Twitter](https://twitter.com/Cruip_com) if you build anything cool/useful with it.

Created and maintained with ❤️ by [Cruip.com](https://cruip.com/).

## Live demo

Check a live demo here 👉️ [https://mosaic.cruip.com/](https://mosaic.cruip.com/?template=laravel)

## Mosaic Pro

[![Mosaic Pro](https://user-images.githubusercontent.com/2683512/151177961-2ff5b838-3745-48dc-80c8-80b043971483.png)](https://cruip.com/mosaic/)

## Design files

If you need the design files, you can download them from Figma's Community 👉 https://bit.ly/3sigqHe

## Table of contents

* [Usage](#usage)
  * [Must Install](#must-install)
  * [Setup your .env config file](#setup-your-env-config-file)
  * [Install Laravel dependencies](#install-laravel-dependencies)
  * [Migrate the tables](#migrate-the-tables)
  * [Generate some test data](#generate-some-test-data)
  * [Compile the front-end](#compile-the-front-end)
  * [Launch the Laravel backend](#launch-the-Laravel-backend)        
* [Credits](#credits)
* [Terms and License](#terms-and-license)
* [About Us](#about-us)
* [Stay in the loop](#stay-in-the-loop)

## Usage

This project was built with [Laravel Jetstream](https://jetstream.laravel.com/) and [Livewire + Blade](https://jetstream.laravel.com/2.x/introduction.html#livewire-blade) as Stack.

### Must Install
- [XAMPP](https://getcomposer.org/Composer-Setup.exe) and open the ``php.ini`` file in ``C:\xampp\php``, then remove the ``;`` sign in ``extension=pdo_pgsql`` and ``extension=pgsql``.
- [Composer](https://getcomposer.org/Composer-Setup.exe) and run ``composer self-update 2.3.10``
- [PostgreSQL](https://www.enterprisedb.com/downloads/postgres-postgresql-downloads)

### Setup your .env config file
Make sure to add the database configuration in your .env file such as database name, username, password and port.
```bash
  DB_CONNECTION=pgsql
  DB_HOST=127.0.0.1
  DB_PORT=5432
  DB_DATABASE=artivity-system
  DB_USERNAME=postgres
  DB_PASSWORD=yourpassword
```
Next in the ``database.php`` file, change the default database to pgsql: ``'default' => env('DB_CONNECTION', 'pgsql'),``
then change the pgsql list value like in the ``.env`` file.

### Install Laravel dependencies
In the root of your Laravel application, run the ``composer install`` command to install all of the framework's dependencies.
After that there should be 2 errors, first on MapDateTime, change the code to be like this:
```bash
class MapDateTime
{
    public function __construct(
        public $format = null

    ) {
    }
}
```
second, in the Requirement, change the code to something like this:
```bash
class Requirement
{
    public const ASCII_SLUG = '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*'; // symfony/string AsciiSlugger default implementation
    public const CATCH_ALL = '.+';
    public const DATE_YMD = '[0-9]{4}-(?:0[1-9]|1[012])-(?:0[1-9]|[12][0-9]|(?<!02-)3[01])'; // YYYY-MM-DD
    public const DIGITS = '[0-9]+';
    public const UID_BASE32 = '[0-9A-HJKMNP-TV-Z]{26}';
    public const UID_BASE58 = '[1-9A-HJ-NP-Za-km-z]{22}';
    public const UID_RFC4122 = '[0-9a-f]{8}(?:-[0-9a-f]{4}){3}-[0-9a-f]{12}';
    public const ULID = '[0-7][0-9A-HJKMNP-TV-Z]{25}';
    public const UUID = '[0-9a-f]{8}-[0-9a-f]{4}-[1-6][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}';
    public const UUID_V1 = '[0-9a-f]{8}-[0-9a-f]{4}-1[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}';
    public const UUID_V3 = '[0-9a-f]{8}-[0-9a-f]{4}-3[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}';
    public const UUID_V4 = '[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}';
    public const UUID_V5 = '[0-9a-f]{8}-[0-9a-f]{4}-5[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}';
    public const UUID_V6 = '[0-9a-f]{8}-[0-9a-f]{4}-6[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}';
}
```


### Migrate the tables

In order to migrate the tables and setup the bare minimum structure for this app
to display some data you shoud open your terminal, locate and enter this project
directory and run the following command

``php artisan migrate``

### Generate some test data

Once you have all your database tables setup you can then generate some test data
which will come from our pre-made database table seeders.
In order to do so, in your terminal run the following command

``php artisan db:seed``

N.B. If you run this command twice, all the test data will be duplicated and added to the existing table data, if you want to avoid having duplicate test data please
make sure to ``truncate`` the following ``datafeeds`` table in your database.

### Compile the front-end

In order to compile all the CSS and JS assets for the front-end of this site you need to install NPM dependencies. To do that, open the terminal, type npm install and press the ``Enter`` key.

Then run ``npm run dev`` in the terminal to run a development server to re-compile static assets when making changes to the template.

When you have done with changes, run ``npm run build`` for compiling and minify for production.

### Launch the Laravel backend

In order to make this Laravel installation work properly on your local machine you
can run the following command in your terminal window.

``php artisan serve``

You should receive a message similar to this
``Starting Laravel development server: http://127.0.0.1:8000`` simply copy the URL
in your browser and you'll be ready to test out your new mosaic laravel app.


## Credits

- [Nucleo](https://nucleoapp.com/)

## Terms and License

- License 👉 [https://cruip.com/terms/](https://cruip.com/terms/).
- Copyright 2022 [Cruip](https://cruip.com/).
- Use it for personal and commercial projects, but please don’t republish, redistribute, or resell the template.
- Attribution is not required, although it is really appreciated.

## About Us

We're an Italian developer/designer duo creating high-quality design/code resources for developers, makers, and startups.

## Stay in the loop

If you would like to know when we release new resources, you can follow us on [Twitter](https://twitter.com/Cruip_com), or you can subscribe to our monthly [newsletter](https://cruip.com/#subscribe).
