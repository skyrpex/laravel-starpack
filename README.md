# Laravel Starpack

This package provides a minimal scaffolding to develop SPA's with Laravel.

Uses [Poi](https://github.com/egoist/poi) along with [Vue](https://github.com/vuejs/vue). 

## Installation

You can install this package via composer:

```bash
composer require skyrpex/laravel-starpack
```

Next, you must install the service provider:

```php
<?php
// config/app.php
'providers' => [
    // ...
    Skyrpex\Starpack\StarpackServiceProvider::class,
],
```

Finally, you need to publish the assets. I recommend erasing your current resources/assets folder first. 

```bash
# Publish vendor assets
php artisan vendor:publish --provider="Skyrpex\Starpack\StarpackServiceProvider" --tag=assets
```

The published directories and files are the following:

```
your-app/
|- public/assets/
|- resources/assets/
|- package.json
|- poi.config.js
```

## Usage


### Development with HMR

Run two commands in separate terminals:

```bash
yarn hot # or `npm run hot`
```

```bash
php artisan serve
```

You'll have a HMR server working along with the artisan's server :+1:.

### Building for production

```bash
yarn build
```
