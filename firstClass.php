<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 20/06/18
 * Time: 12:59
 */

class FirstClass
{
    protected $nombre;
    private $apellidos;

    public function __construct(string $nombre , string $apellido)
    {
        $this->nombre=$nombre;
        $this->apellidos=$apellido;
    }


     public function getNombre():string
    {
        return $this->nombre;
    }

     public function getApellidos():string
    {
        return $this->apellidos;
    }
}