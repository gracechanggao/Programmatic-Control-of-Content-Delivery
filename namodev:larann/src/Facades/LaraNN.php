<?php namespace NamoDev\LaraNN\Facades;
use Illuminate\Support\Facades\Facade;
class LaraNN extends Facade
{
    /**
     * Get facade accessor
     *
     * @return \NamoDev\LaraNN\LaraNN
     */
    protected static function getFacadeAccessor()
    {
        return 'NamoDev\LaraNN\LaraNN';
    }
}
