<?php
namespace App;
trait Singleton
{
    protected static $istance;
    protected function _construct()
    {
        
    }
    public static function instance()
    {
        if (null === static::$istance){
            static::$istance=new static;
        }
        return static::$istance;
    }
}