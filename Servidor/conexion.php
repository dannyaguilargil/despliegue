<?php

/*
$localhost = 'localhost';
$usuario = 'danny';
$password = 'danny';
$bd =  'sistema_nuevo';
*/


$MYSQLHOST = $_ENV["$MYSQLHOST"];
$MYSQLUSER = $_ENV["$usuario"];
$MYSQLPASSWORD = $_ENV["$password"];
$MYSQLDATABASE = $_ENV["$bd"];
$MYSQLPORT = $_ENV["$port"];

//archivo mysqli configurado
$mysqli = new mysqli("$MYSQLHOST", "$MYSQLUSER", "$MYSQLPASSWORD", "$MYSQLDATABASE", "$MYSQLPORT");

if(!$mysqli) {
        echo "ERROR AL CONECTAR A LA BASE DE DATOS";
}
else{
       // echo "CONECTADO A LA BASE DE DATOS";
}
