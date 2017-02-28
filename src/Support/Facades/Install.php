<?php

namespace Packages\Install\Support\Facades;

use Illuminate\Support\Facades\Facade;

class Install extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Packages\Install\Services\Install::class;
    }
}
