<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 20/06/18
 * Time: 13:19
 */
include_once ('firstClass.php');
class CustomerClass extends FirstClass
{

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

}