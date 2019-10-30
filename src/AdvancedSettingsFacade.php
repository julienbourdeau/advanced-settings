<?php

namespace Julienbourdeau\AdvancedSettings;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Julienbourdeau\AdvancedSettings\Skeleton\SkeletonClass
 */
class AdvancedSettingsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'advanced-settings';
    }
}
