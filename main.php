<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 20/06/18
 * Time: 13:12
 */
include_once ('staticClass.php');

/*
$user = new CustomerClass('Xavi','Rodriguez');
echo $user->getNombre();
$user->setNombre("Pepe");
echo $user->getNombre();
*/

staticClass::setNombre('Pepe');
echo staticClass::getNombre();
