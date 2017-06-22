<?php

use Skyrpex\Starpack\Starpack;

if (! function_exists('starpack')) {
    /**
     * Get the paths to Starpack files.
     *
     * @param  string  $path
     * @param  mixed  $default
     * @return mixed
     */
    function starpack($path = null, $default = [])
    {
        return app(Starpack::class)->assets($path, $default);
    }
}
