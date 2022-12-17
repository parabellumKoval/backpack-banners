# Backpack-banners

[![Build Status](https://travis-ci.org/parabellumKoval/backpack-banners.svg?branch=master)](https://travis-ci.org/parabellumKoval/backpack-banners)
[![Coverage Status](https://coveralls.io/repos/github/parabellumKoval/backpack-banners/badge.svg?branch=master)](https://coveralls.io/github/parabellumKoval/backpack-banners?branch=master)

[![Packagist](https://img.shields.io/packagist/v/parabellumKoval/backpack-banners.svg)](https://packagist.org/packages/parabellumKoval/backpack-banners)
[![Packagist](https://poser.pugx.org/parabellumKoval/backpack-banners/d/total.svg)](https://packagist.org/packages/parabellumKoval/backpack-banners)
[![Packagist](https://img.shields.io/packagist/l/parabellumKoval/backpack-banners.svg)](https://packagist.org/packages/parabellumKoval/backpack-banners)

This package provides a quick starter kit for implementing reviews for Laravel Backpack. Provides a database, CRUD interface, API routes and more.

## Installation

Install via composer
```bash
composer require parabellumKoval/backpack-banners
```

Migrate
```bash
php artisan migrate
```

### Publish

#### Configuration File
```bash
php artisan vendor:publish --provider="Backpack\Banners\ServiceProvider" --tag="config"
```

#### Views File
```bash
php artisan vendor:publish --provider="Backpack\Banners\ServiceProvider" --tag="views"
```

#### Migrations File
```bash
php artisan vendor:publish --provider="Backpack\Banners\ServiceProvider" --tag="migrations"
```

#### Routes File
```bash
php artisan vendor:publish --provider="Backpack\Banners\ServiceProvider" --tag="routes"
```

## Usage

### Seeders
```bash
php artisan db:seed --class="Backpack\Banners\database\seeders\BannersSeeder"
```

## Security

If you discover any security related issues, please email 
instead of using the issue tracker.

## Credits

- [](https://github.com/parabellumKoval/backpack-banners)
- [All contributors](https://github.com/parabellumKoval/backpack-banners/graphs/contributors)
