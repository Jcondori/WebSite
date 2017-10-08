<?php
require 'config/functions.php';
require 'config/datos.php';

$conexion = conexion($database);
if (!$conexion) {
    header('Location: error.php');
}

$sliders = obtener_slider($conexion);
$members = obtener_member($conexion);

require 'views/index.view.php';
