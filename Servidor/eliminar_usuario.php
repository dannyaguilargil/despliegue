<?php

include 'conexion.php';


$cedula = $_POST["cedula"];
//DELETE FROM repuestos WHERE id = 26; 

$sql="DELETE FROM usuarios_registrados WHERE cedula = $cedula;";

$resultado=$db ->query($sql);

if($resultado>0){
   // header("Location:../Vista/vuelos.html");
//alerta de que se agrego el registro

echo '<script>window.location="../Cliente/templates/gestion_usuario.php"</script>';
echo '<script type ="text/JavaScript">';  
echo 'alert("REGISTRO ELIMINADO")';  
echo '</script>';  
//exit();

}else{
    echo 'EROOR AL ELIMINAR REPUESTO';
}
?>
