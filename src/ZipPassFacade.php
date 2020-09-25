<?php

namespace YourPersonalInformation\ZipPass;

use Illuminate\Support\Facades\Facade;

/**
 * @see \YourPersonalInformation\ZipPass\Skeleton\SkeletonClass
 */
class ZipPassFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'zippass';
    }
}
