<?php

$localhost = $_ENV['localhost'];
$usuario = $_ENV['danny'];
$password = $_ENV['danny'];
$bd =  $_ENV['sistema_nuevo'];

/* Creando una nueva conexión a la base de datos. */
$conn = new mysqli("$localhost", "$usuario", "$password", "$bd");

/* Comprobando si hay un error de conexión. */
if ($conn->connect_error) {
    die('Error de conexion ' . $conn->connect_error);
}
