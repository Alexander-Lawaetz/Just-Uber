## Introduction
This projects purpose is to mimic a proportion of Just Eat's [dk site](just-eat.dk) [login, search, filter, payment]

The project is to be buildt using [Laravel](https://laravel.com/) along with [tailwindcss](https://tailwindcss.com/) framework

ftp will be handled by [mailtrap](https://mailtrap.io/), billing by [Cashier (stripe)](https://laravel.com/docs/8.x/billing) with local mysql 5.7.24 database

## Requirements
Windows? Consider using [laragon](https://laragon.org/)

``php`` [Laravel version 8 requirements](https://laravel.com/docs/8.x/installation#server-requirements)

``composer``

``npm``

## Setup
```
git clone https://github.com/alexander-lawaetz/just-uber
cd just-uber
composer install
npm install && npm run dev
```

copy-paste ``.env.example`` to ``.env``

setup [mailtrap](https://mailtrap.io/) account -> update ``.env`` file for database and mailtrap


php artisan serve

# Licensing

## Code

All code is distributed under the [MIT license](LICENSE.md).  
Copyright held by Alexander Lawaetz.

## Assets

All art assets (files in ``public/storage/``) belongs to [https://www.just-eat.co.uk](https://www.just-eat.co.uk/info/terms-and-conditions) license under their terms and conditions.  
Copyright held by Just Eat 

## Disclaimer

The code is not verified by any card providers, and all payment verified icons are stored in ``public/storage/`` and belongs too Just Eat aswell
