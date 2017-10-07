<?php

function conexion($data) {
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=' . $data['basedatos'], $data['usuario'], $data['pass']);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}

function limpiarDatos($dato) {
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}

?>