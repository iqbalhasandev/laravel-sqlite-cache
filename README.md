# Laravel Sqlite Cache - The Missing Sqlite Cache Driver Package

Made with ❤️ by [Iqbal Hasan](https://www.facebook.com/iqbalhasan.dev/)

- **Laravel**: 5.6/5.7/5.8/6.0/7.0/8.0
- **Author**: IQBAL HASAN
- **Website & Documentation:**: https://iqbalhasandev.github.io/laravel-sqlite-cache/

<p align="center">
<a href="https://github.com/iqbalhasandev/laravel-sqlite-cache/issues"><img src="https://img.shields.io/github/issues/iqbalhasandev/laravel-sqlite-cache" alt="issues"></a>
<a href="https://github.com/iqbalhasandev/laravel-sqlite-cache/network/members"><img src="https://img.shields.io/github/forks/iqbalhasandev/laravel-sqlite-cache" alt="forks"></a>
<a href="https://github.com/iqbalhasandev/laravel-sqlite-cache/stargazers"><img src="https://img.shields.io/github/stars/iqbalhasandev/laravel-sqlite-cache" alt="stars "></a>
<a href="https://packagist.org/packages/iqbalhasandev/sqlite-cache"><img src="https://poser.pugx.org/iqbalhasandev/sqlite-cache/v" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/iqbalhasandev/sqlite-cache"><img src="https://poser.pugx.org/iqbalhasandev/sqlite-cache/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/iqbalhasandev/sqlite-cache"><img src="https://poser.pugx.org/iqbalhasandev/sqlite-cache/v/unstable" alt="Latest Unstable Version"></a>
<a href="http://opensource.org/licenses/MIT"><img src="https://img.shields.io/github/license/iqbalhasandev/laravel-sqlite-cache" alt="license"></a>

</p>
<hr>

Integrate Cache Driver into your project easily with laravel-sqlite-cache package.

## Installation Steps

### 1. Require the Package

After creating your new Laravel application you can include the Sqlite Cache Driver Package with the following command:

```bash
composer require iqbalhasandev/sqlite-cache
```

### 2. If you're using Laravel 5.5, this is all there is to do.

Should you still be on version 5.4 of Laravel, the final steps for you are to add the service provider of the package and alias the package. To do this open your `config/app.php` file.

Add a new line to the `providers` array:

    Iqbal\SqliteCache\SqliteCacheProvider::class

### 3. Then run the command in the terminal "php artisan sqlite-cache:install; php artisan sqlite-cache:table;"

```bash

// * To install & publish all config files of sqlite-cache package
php artisan sqlite-cache:install

//Then Run

// * To Create Cache Table
php artisan sqlite-cache:table

```

### 4. Change the Cache Driver " open .env file then change CACHE_DRIVER=sqlite"

```env

CACHE_DRIVER=sqlite

```

## Overview

Look at one of the following topics to learn more about laravel-bulksmsbd

- [Usage](#usage)
- [Configuration](#configuration)

## Usage

Below is an example of Cache Data

```php
//Route web.php


use Illuminate\Support\Facades\Cache;

Route::get('/laravel-sqlite-cache', function () {
    Cache::put('testing', 'laravel sqlite cache is Awesome');
    return Cache::get('testing');
});
```

To know more about the use of laravel cache, visit <a href="https://laravel.com/docs/7.x/cache#cache-usage"> laravel Official Webpage</a>

### Configuration

You can change Cache Database Name to change name follow these step:

## Add `CACHE_DATABASE` to **.env** file.

```bash
// optional Defalt Cache Database Name 'cache.sqlite'
CACHE_DATABASE={databasename} //E.g. 'cache.sqlite'

```

## Then run the command in the terminal "php artisan sqlite-cache:install; php artisan sqlite-cache:table;"

```bash

// * To install & publish all config files of sqlite-cache package
php artisan sqlite-cache:install

//Then Run

// * To Create Cache Table
php artisan sqlite-cache:table

```

## Credits

- IQBAL HASAN (the author of sqlite-cach package)
- [Contributors](https://github.com/iqbalhasandev/laravel-sqlite-cache/graphs/contributors)

## Support

Hey dude! Don't forget to mail me if you have any problem with the package.

- **Author E-mail**: iqbalhasan.dev@gmail.com
- **Author Facebook**: https://www.facebook.com/iqbalhasan.dev/
- **Author linkedin**: https://www.linkedin.com/in/iqbalhasandev
- **Author github**: https://github.com/iqbalhasandev
- **Author twitter**: https://twitter.com/iqbalhasandev

## License

This package inherits the licensing of its parent framework, Laravel, and as such is open-sourced
software licensed under the [MIT license](http://opensource.org/licenses/MIT)

## Extra

If you want to contribute, you can

Thank you for using this package😘
If you like it, don't forget to give a star⭐⭐⭐⭐⭐
