<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

use Laravel\Lumen\Application;

class Controller extends BaseController
{
    public function __construct(Application $app)
    {
        $this->app = $app;
    }
}
