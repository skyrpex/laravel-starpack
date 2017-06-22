<?php

namespace Skyrpex\Starpack\Support;

use Illuminate\Support\Collection;

class Manifest
{
    /**
     * Get the asset manifest.
     *
     * @return Collection
     */
    public function get()
    {
        // Get asset manifest
        $manifest = $this->loadManifest();

        // Format asset manifest
        return $this->formatManifest($manifest);
    }

    /**
     * Get the manifest contents.
     *
     * @return array
     */
    protected function loadManifest()
    {
        if (!file_exists($path = public_path('assets/manifest.json'))) {
            return [];
        }
        
        return json_decode(file_get_contents($path), true);
    }

    /**
     * Convert the manifest array into a collection.
     *
     * @param array $manifest
     * @return Collection
     */
    protected function formatManifest(array $manifest)
    {
        return array_map(function ($assets) {
            return array_map(function ($files) {
                return array_map(function ($file) {
                    $url = parse_url($file);
                    if (empty($url['host'])) {
                        return asset("assets/{$file}");
                    }
                    return $file;
                }, $files);
            }, $assets);
        }, $manifest);
    }
}
