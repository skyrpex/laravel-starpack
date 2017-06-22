# Laravel Starpack

This package provides a minimal scaffolding to develop SPA's with Laravel.

Uses [poi](https://github.com/egoist/poi) along with [vue](https://github.com/vuejs/vue) and [vue-router](https://github.com/vuejs/vue-router). 

## Installation

You can install this package via composer:

```bash
composer require skyrpex/laravel-starpack
```

You must install the service provider:

```php
<?php
// config/app.php
'providers' => [
    // ...
    Skyrpex\Starpack\StarpackServiceProvider::class,
],
```

Next, add the following line to your `RouteServiceProvider` (it will provide the fallback route for the SPA to work):

```php
<?php
// ...
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->app->make(Starpack::class)->routes();
    }
// ...
```

Finally, you need to publish the assets. I recommend erasing your current `resources/assets` folder first. 

```bash
# Publish vendor assets
php artisan vendor:publish --provider="Skyrpex\Starpack\StarpackServiceProvider" --tag=assets
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

Now, your `public/assets` directory will contain the minified bundles, ready for producton!
