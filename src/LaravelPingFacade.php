<?php

namespace Airranged\LaravelPing;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Airranged\LaravelPing\Skeleton\SkeletonClass
 */
class LaravelPingFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'airranged.ping';
    }
}
