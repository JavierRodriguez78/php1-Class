<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 20/06/18
 * Time: 13:48
 */
include_once ('AbstractClass.php');
class ClaseHijaAbstracta extends AbstractClass
{

    public function getNombre()
    {
        return $this->nombre;
    }
}