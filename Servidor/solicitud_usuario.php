<?php

include 'conexion.php';


$nombre = $_POST["nombre"];
$cargo = $_POST["cargo"];
$fechafinalcontrato = $_POST["fechafinalcontrato"]; 
$cedula = $_POST["cedula"];
$supervisor = $_POST["supervisor"];
$email = $_POST["email"];
$rol = $_POST["rol"];

$sql="INSERT INTO solicitud_usuario VALUES('$nombre','$cargo','$fechafinalcontrato','$cedula','$supervisor','$email','$rol',cedula)";

$resultado=$db ->query($sql);

if($resultado>0){
   // header("Location:../Vista/vuelos.html");

  // echo '<script type ="text/JavaScript">';  
  // echo 'alert("SE ENVIO LA SOLICITUD DE USUARIO")';  
  // echo '</script>';  
 // $aux=1;
  // if ($aux>0){
  //  header("Location:../Cliente/templates/gestion_usuarios.php");
  // }
   //echo '<script>window.location.href='../Cliente/templates/gestion_usuarios.php'; </script>';
   //exit();

   //////////SI LO DEJO SOLO SIENDO USER GENERA ERROR EN EL CHECKBOX VALIDAR ESO
   header("Location:../Cliente/templates/login_acceso.php");
   //// OTRA FORMA ENVIANDO LA ALERTA DESDE AQUI

}else{
    echo 'EROOR AL AGREGAR REGISTRO';
}
