<?php

require 'config/functions.php';
require 'config/datos.php';

$conexion = conexion($database);
if (!$conexion) {
//    header('Location: error.php');
}

//$articulos = 

require 'views/index.view.php';