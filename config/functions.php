<?php

function conexion($data) {
    try {
        $conexion = new PDO('mysql:host=localhost ; dbname=' . $data['basedatos'], $data['usuario'], $data['pass']);
        return $conexion;
    } catch (PDOException $e) {
        return $e;
    }
}

function limpiarDatos($dato) {
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}

function obtener_slider($conexion) {
    $sentencia = $conexion->prepare("Select * from slider");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

?>