<?php

/*
$localhost = 'localhost';
$usuario = 'danny';
$password = 'danny';
$bd =  'sistema_nuevo';
*/


$localhost = $_ENV["$localhost"];
$usuario = $_ENV["$usuario"];
$password = $_ENV["$password"];
$bd =  $_ENV["$bd"];
$port =  $_ENV["$port"];

//archivo mysqli configurado
$mysqli = new mysqli("$localhost", "$usuario", "$password", "$bd", "$port");

if(!$mysqli) {
        echo "ERROR AL CONECTAR A LA BASE DE DATOS";
}
else{
       // echo "CONECTADO A LA BASE DE DATOS";
}
