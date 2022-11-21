<?php

include 'conexion.php';
//AQUI HAGO LA PRUEBA DE VALIDADO DE USUARIOS PERO CON EL ULTIMO DEL ARRAY FALTARIA CON TODOS
//AQUI ME HARIA FALTA EL , PASSWORD
$nombre = $_POST["nombre"];
$cedula = $_POST["cedula"];
$cargo = $_POST["cargo"];
$fechafinalcontrato = $_POST["fechafinalcontrato"];
$supervisor = $_POST["supervisor"];
$email = $_POST["email"];
$administrador = $_POST["administrador"];

$sql="INSERT INTO usuarios_registrados (nombre,cedula,cargo,fechafinalcontrato,supervisor,email,rol,password) VALUES('$nombre',$cedula,'$cargo','$fechafinalcontrato','$supervisor','$email','$administrador',cedula)";
$resultado=$mysqli ->query($sql);

/*
LUEGO DE HACER REGISTRO DEBE ELIMINARLOS DEL STANDBY

*/

//CODIGO PARA ELIMINARLO DEL STANDBY



//$resultado=$mysqli ->query($sql);

//





if($resultado>0){
   // header("Location:../Vista/vuelos.html");


   //ELIMINARLO DEL STANDBY 
   $sql2="DELETE FROM solicitud_usuario WHERE cedula = $cedula;";
   $resultado=$mysqli ->query($sql2);
    //ELIMINARLO DEL STANDBY


    header("Location:../Cliente/templates/validar_usuarios.php");
//echo '<script type ="text/JavaScript">';  
//echo 'alert("REGISTRO AGEGADO")';  
//echo '</script>';  


//exit();

}else{
    echo 'EROOR AL AGREGAR REGISTRO';
}
?>