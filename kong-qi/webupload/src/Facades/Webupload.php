<?php 
namespace KongQi\Webupload\Facades;

use Illuminate\Support\Facades\Facade;

class Webupload extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'webupload';
    }
}