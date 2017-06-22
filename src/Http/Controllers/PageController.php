<?php

namespace Skyrpex\Starpack\Http\Controllers;

use Illuminate\Contracts\Routing\ResponseFactory;

class PageController
{
    /**
     * The response factory implementation.
     *
     * @var ResponseFactory
     */
    protected $response;

    /**
     * Create a new controller instance.
     *
     * @param  ResponseFactory  $response
     * @return void
     */
    public function __construct(ResponseFactory $response)
    {
        $this->response = $response;
    }
    
    public function __invoke()
    {
        return $this->response->view('starpack::page');
    }
};
