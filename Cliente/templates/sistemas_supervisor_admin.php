<?php
session_start();
//POR AHORA ME INTERESA ACEPTARLO, REGISTRARLO Y ENVIARLO AL ADMINISTRADOR, LUEGO QUE ELIMINE ESA SOLICITUD

?>


<!DOCTYPE html>
<!--SOLICITUD_USUARIO A LA BASE DE DATOS-->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/solicitud_usuario.css">
    <link rel="icon" href="imgs/logoimsaludrecortado.ico">
    <title>Solicitar sistema supervisor</title>
</head>
<body>
  
<header class="">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <div class="container-fluid">

           <!-- <li class="nav-item dropdown"> -->
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color=green;background:white;">
            Sistemas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="sistemas_admin_aprobados.php" style="">Sistemas aprobados</a></li>
            <li><a class="dropdown-item" href="sistemas_admin_pendientes.php">Sistemas pendientes</a></li>
            <li><a class="dropdown-item" href="permisos.php">Revisar permisos</a></li>
            <li><a class="dropdown-item" href="notificar_sistema.php">Notificar sistema aprobado</a></li>
            <li><a class="dropdown-item" href="sistemas_supervisor_admin.php">Opcion de supervisor</a></li>
          </ul>
      <!--  </li> -->





              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="perfil.php">Mi perfil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pazysalvo.php" disabled>Paz y salvo</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="validar_usuarios.php" disabled>Accesos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="gestion_usuario.php" disabled>Gestion de usuarios</a>
                  </li>
                </ul>
              </div>
            

            


              <div class="user" style="color: white">
              Supervisor ADMIN! <?php echo $_SESSION['nombre']; ?>
             <?php $tomador=$_SESSION['nombre'] ?>
              </div>

          
              <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckChecked" style="color: white;">Modo oscuro</label>
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"> 
               </div>
            
               <a class="btn btn-light fas fa-sign-out-alt" href="../../Servidor/logout.php"></a>
            </div>
          
          </nav>
         
                    
    </header>

    <div class="imagen">
    <img  src="../imgs/logocompleto.png"  alt="" style="width: 130px; text-align: center;height: 50px">
    </div>







    <!-- AQUI INICIA EL DIV-->
    <?php include '../../Servidor/conexion.php'; 
    
    //CONSULTA DE LA SOLICITUD DEL SUPERVISOR
    $nombrer = '';
    $cedular = 0;
    $cargor = '';
    $tiposolicitudr = '';
    $aplicativor = '';
    $observacionesr = '';
  
   
   $consulta="SELECT * from solicitud_sistema WHERE supervisor = '$tomador';";
   $resultado=mysqli_query($mysqli,$consulta);
       if($resultado){ while($row = $resultado->fetch_array()){
          $nombrer = $row['nombre'];
          $cedular = $row['cedula'];
          $cargor = $row['cargo'];
          $tiposolicitudr = $row['tiposolicitud'];
          $aplicativor = $row['aplicativo'];
          $observacionesr = $row['observaciones'];
          }
    
        } 
       
    //SEGUN EL APLICATIVO QUE HAY VOY A REGISTRARLO HACIENDO CONDICIONAL A LA BASE DE DATOS
    ?>



   <!-- SEGUNDA CONSULTA DE PHP SOLO PARA TRERME LA FECHA FINAL DE CONTRATO DEL USUARIO SOLICITANTE-->
  <?php
  include '../../Servidor/conexion.php';
  $fechafinalcontrator = ''; 
  
  
  
  $consulta2="SELECT fechafinalcontrato from usuarios_registrados WHERE cedula = $cedular;";
  $resultado2=mysqli_query($mysqli,$consulta2);
      if($resultado2){ while($row = $resultado2->fetch_array()){
         $fechafinalcontrator = $row['fechafinalcontrato'];
         }
   
       } 
  
  
  
  
  
  
  ?>

        
  






    <div class="centrar">
        <div class="centrar1 col-sm-10 col-md-10 col-lg-10 col-xl-10">


            <?php if($nombrer==''){
            ?><center style="color: grey;"> <b> <?php echo "No hay solicitudes actuales"; }?> </b>
            
            </center> 
            <div class="container form-control form-control" >
            <h5 class="centrar">Solicitud de sistemas</h5>
            <form action="../../Servidor/registrar_solicitud_supervisor.php" method="POST">

                <fieldset><b>Informacion general del colaborador</b></fieldset> 
                <div class="row">
                <div class="col">
                <label for="nombre" class="emerge">Nombre completo:</label> <br>
                <input type="text" name="nombre" id="nombre" class="emerge" value="<?php echo $nombrer?>">
                </div>


                <div class="col">
                <label for="cedula" class="emerge">Cedula:</label> <br>
                <input type="number" name="cedula" id="cedula" class="emerge" value="<?php echo $cedular ?>"> 
                </div>
              

                <div class="col">
                <label for="cargo" class="emerge">Cargo:</label> <br>
                <input type="text" name="cargo" id="cargo" class="emerge" value="<?php echo $cargor?>">  
                </div>
                </div>


                <br> 
                <h6><b>Sistema de informacion requerido</b></h6> 
                <div class="row">
                <div class="col">
                <label for="tiposolicitud" class="emerge">Tipo de solicitud</label> <br>
                <input type="text" name="tiposolicitud"  id="tiposolicitud"  value="<?php echo $tiposolicitudr ?>">
                </div>
                

                <div class="col">
                <label for="">Aplicativo</label> <br>
                <input type="text" name="aplicativo" id="aplicativo"  value="<?php echo $aplicativor ?>">
                 </div>
               
                <div class="col">
                <label for="observaciones" class="emerge">Explicacion de los permisos del solicitante</label> <br>
                <input type="text" name="observaciones" id="observaciones" class="obs emerge" value="<?php echo $observacionesr?>">  <br> <br>

                <textarea name="observaciones_supervisor" id="observaciones_supervisor" cols="2" rows="2" class="obs emerge" style="color: green;" placeholder="Explique los permisos del sistema" required></textarea>
                </div>
                </div>

                <div class="row">
                <div class="col">
                <label for="">Permisos hasta:</label> <br>
                <input type="text" value="<?php echo $fechafinalcontrator ?>">
                </div>


                <div class="col">
                <label for="">Supervisor:</label> <br>
                <input type="text" value="<?php echo $tomador ?>">
                </div>


                <div class="col">
                <label for=""></label> <br>
            
                </div>
                </div>

<br>
                <div class="row">
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked required>
                    <label class="form-check-label" for="flexCheckChecked">
                      Acepto tratamiento de datos
                    </label>
                  </div>
                </div>

                <div class="col">
                <button class="btn btn-success" onclick="envio();">Validarlo</button>
                </div>

                <div class="col">
                <button class="btn btn-danger" onclick="envio();">Rechazarlo</button>
                </div>


              </div>


              <!-- AQUI DEBE IR LA CONSULTA DEPENDIENDO DEL TIPO DE SUPERVISOR -->

            </form>

          </div>
          </div>
        </div>
</div>


<!--
<footer>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
      </footer>
-->
<script>
      function envio(){
        alert("ENVIO EXITOSO");
      }
     </script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>