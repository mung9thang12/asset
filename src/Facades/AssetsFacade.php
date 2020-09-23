<?php

namespace Mung9thang12\Asset\Facades;

use Mung9thang12\Asset\Asset;
use Illuminate\Support\Facades\Facade;

/**
 * Class AssetFacade.
 *
 * @since 22/07/2015 11:25 PM
 */
class AssetFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Asset::class;
    }
}
