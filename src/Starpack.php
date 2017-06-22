<?php

namespace Skyrpex\Starpack;

use Illuminate\Support\Arr;
use Illuminate\Contracts\Routing\Registrar as Router;
use Illuminate\Contracts\Routing\UrlGenerator as URL;

class Starpack
{
    /**
     * The router instance.
     *
     * @var Router
     */
    protected $router;

    /**
     * The URL generator instance.
     *
     * @var URL
     */
    protected $url;

    public function __construct(Router $router, URL $url)
    {
        $this->router = $router;
        $this->url = $url;
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

    public function addScriptGlobals(array $values)
    {
        $json = json_encode($values);
        return implode('', [
            '<script>window.STARPACK = window.STARPACK || [];</script>',
            "<script>STARPACK.push($json);</script>",
        ]);
    }

    public function addMandatoryScriptGlobals()
    {
        return $this->addScriptGlobals([
            'BASE_URL' => $this->url->to('/'),
            'WEBPACK_PUBLIC_PATH' => $this->url->to('assets'),
        ]);
    }
};
