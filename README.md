Eureka
===================

## Windows Dev Environment Setup

### PHP

`PHP >= 5.5.9` is required for `Laravel 5.1`

PHP 5.5.30: http://windows.php.net/downloads/releases/php-5.5.30-nts-Win32-VC11-x64.zip

Extract and add the extracted path to your environmental variable list, eg:

```
PATH=C:\PHP5.5\;
```

Confirm your PHP version:

```
C:\>php --version
PHP 5.5.30 (cli) (built: Sep 30 2015 13:49:51)
Copyright (c) 1997-2015 The PHP Group
Zend Engine v2.5.0, Copyright (c) 1998-2015 Zend Technologies
```

Next, enable the following PHP extensions in `php.ini`:

```
extension=php_mbstring.dll
extension=php_mysql.dll
extension=php_openssl.dll
extension=php_pdo_mysql.dll
```

### Redis

Download and install Redis from: https://github.com/MSOpenTech/redis/releases

### Composer

Download composer installer from: https://getcomposer.org/download/

### Laravel

Install Laravel via Composer.

`composer global require "laravel/installer=~1.1"`

Add the Laravel `vendor/bin` path to your environmental `PATH` variable, eg:

`C:\Users\<username>\AppData\Roaming\Composer\vendor\bin`

## Laravel Setup

Open the `config/app.php` file. Change the `timezone` setting to:

`'timezone' => 'Africa/Johannesburg',`

## Database setup

Create a database using the `utf8-unicode-ci` encoding:

`CREATE DATABASE `eureka_laravel` /*!40100 COLLATE 'utf8_unicode_ci' */`

In the `.env` found in the project root directory, change the following fields to configure for your database setup:

```
DB_HOST=localhost
DB_DATABASE=eureka_laravel
DB_USERNAME=root
DB_PASSWORD=password
```

## Starting the built-in server

Laravel comes with a built-in web server.
Go to the project directory and run:

`php artisan serve`
