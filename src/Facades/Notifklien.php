<?php

namespace n0izestr3am\notifklien\Facades;

use Illuminate\Support\Facades\Facade;

class Notifklien extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \n0izestr3am\notifklien\Func\License::class;
    }
}
