<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 20/06/18
 * Time: 13:47
 */
include_once ('ClaseHijaAbstracta.php');

$clase = new ClaseHijaAbstracta();
$clase->setNombre("Xavi");
echo $clase->getNombre();

