<?php

namespace Nahid\Linkify\Facades;

use Illuminate\Support\Facades\Facade;

class Linkify extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Linkify';
    }
}
