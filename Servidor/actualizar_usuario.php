<?php

include 'conexion.php';

$cedula = $_POST["cedula"];
$cactualizar = $_POST["cactualizar"];
$dnuevo = $_POST["dnuevo"];

//para datos string 
//update repuestos SET nombre='casco' where id = 18;
$sql="UPDATE usuarios_registrados SET $cactualizar='$dnuevo' WHERE cedula = $cedula;";


$resultado=$db ->query($sql);

if($resultado>0){
   // header("Location:../Vista/vuelos.html");
//alerta de que se agrego el registro
//echo '<script type ="text/JavaScript">';  
//echo 'alert("REGISTRO AGEGADO")';  
//echo '</script>';  
echo '<script>window.location="../Cliente/templates/gestion_usuario.php"</script>';

//exit();

}else{
    echo 'EROOR AL ACTUALIZAR REPUESTO';
}
?>

