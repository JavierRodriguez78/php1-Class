<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 20/06/18
 * Time: 13:44
 */

abstract class AbstractClass
{
    public $nombre;
    abstract public function getNombre();

    public function setNombre(string $nombre){
        $this->nombre= $nombre;
    }

}