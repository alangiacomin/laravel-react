<?php

namespace Alangiacomin\LaravelReact;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alangiacomin\LaravelReact\LaravelReact
 */
class LaravelReactFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-react';
    }
}
