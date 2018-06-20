<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 20/06/18
 * Time: 13:32
 */

class staticClass
{
    public static $nombre;
    public $apellido;

    public static function setNombre (string $nombre){
      self::$nombre = $nombre;
    }

    public static function getNombre (){
        return self::$nombre;
    }

}