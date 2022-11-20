<?php

/*
$localhost = 'localhost';
$usuario = 'danny';
$password = 'danny';
$bd =  'sistema_nuevo';
*/


$MYSQLHOST = $_ENV["$MYSQLHOST"];
$MYSQLUSER = $_ENV["$MYSQLUSER"];
$MYSQLPASSWORD = $_ENV["$MYSQLPASSWORD"];
$MYSQLDATABASE = $_ENV["$MYSQLDATABASE"];
$MYSQLPORT = $_ENV["$MYSQLPORT"];

//archivo mysqli configurado
$mysqli = new mysqli("$MYSQLHOST", "$MYSQLUSER", "$MYSQLPASSWORD", "$MYSQLDATABASE", "$MYSQLPORT");

if(!$mysqli) {
        echo "ERROR AL CONECTAR A LA BASE DE DATOS";
}
else{
       // echo "CONECTADO A LA BASE DE DATOS";
}
