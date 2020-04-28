<?php

namespace SapneshNaik\LaravelPurchasingPowerParity;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SapneshNaik\LaravelPurchasingPowerParity\Skeleton\SkeletonClass
 */
class LaravelPurchasingPowerParityFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-purchasing-power-parity';
    }
}
