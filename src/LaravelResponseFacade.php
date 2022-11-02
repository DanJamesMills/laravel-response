<?php

namespace DanJamesMills\LaravelResponse;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DanJamesMills\LaravelResponse\Skeleton\SkeletonClass
 */
class LaravelResponseFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-response';
    }
}
