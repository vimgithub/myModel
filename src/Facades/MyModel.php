<?php

namespace Zev\MyModel\Facades;

use Illuminate\Support\Facades\Facade;

class MyModel extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'myModel';
    }
}
