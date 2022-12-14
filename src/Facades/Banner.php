<?php

namespace Backpack\Banners\Facades;

use Illuminate\Support\Facades\Facade;

class Banner extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'banner';
    }
}
