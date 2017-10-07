<?php

function conexion($data) {
    try {
        $conexion = new PDO('mysql:host=localhost;dbname='.$data['basedatos'],$data['usuario'],$data['pass']);
        return $conexion;
    } catch (PDOException $e) {
        print_r($e);
        return false;
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

function obtener_member($conexion) {
    $sentencia = $conexion->prepare("Select * from miembros LIMIT 3");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

?>