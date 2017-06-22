<?php

namespace Skyrpex\Starpack;

use Illuminate\Support\Arr;
use Illuminate\Contracts\Routing\Registrar as Router;

class Starpack
{
    /**
     * The router instance.
     *
     * @var Router
     */
    protected $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function routes()
    {
        $this->router->middleware('web')
            ->get('{uri}', Http\Controllers\PageController::class)
            ->where('uri', '.*');
    }

    /**
     * Get the paths to Starpack files.
     *
     * @param  string  $path
     * @param  mixed  $default
     * @return mixed
     */
    public function assets($path = null, $default = [])
    {
        static $manifest = null;

        if (is_null($manifest)) {
            $manifest = (new Support\Manifest)->get();
        }

        return is_null($path) ? $manifest : Arr::get($manifest, $path, $default);
    }
};
