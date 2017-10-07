<?php

define('RUTA','http://localhost:6060/WebSite/');

require 'config/functions.php';
require 'config/datos.php';

$conexion = conexion($database);
//if (!$conexion) {
//    header('Location: error.php');
//}

print_r($conexion);

//$articulos = 

require 'views/index.view.php';