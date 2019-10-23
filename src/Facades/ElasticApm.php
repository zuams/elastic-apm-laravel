<?php

namespace Zuams\ElasticApmLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class ElasticApm extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'elastic-apm';
    }
}
