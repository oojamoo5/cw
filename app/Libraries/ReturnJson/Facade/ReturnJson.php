<?php

namespace App\Libraries\ReturnJson\Facade;

use Illuminate\Support\Facades\Facade;

class ReturnJson extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'responsejson';
    }
}