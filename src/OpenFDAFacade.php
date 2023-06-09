<?php
namespace MeisamMulla\OpenFDA;

use Illuminate\Support\Facades\Facade;

class OpenFDAFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'openfda';
    }
}