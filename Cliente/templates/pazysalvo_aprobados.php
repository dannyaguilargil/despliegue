<?php


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/pazysalvo_aprobados.css">
    <title>Datos de Usuario</title>
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
            <li><a class="dropdown-item" href="#" style="">Sistemas aprobados</a></li>
            <li><a class="dropdown-item" href="sistemas_admin_pendientes.php">Sistemas pendientes</a></li>
            <li><a class="dropdown-item" href="#">Revisar permisos</a></li>
            <li><a class="dropdown-item" href="#">Notificar sistema aprobado</a></li>
            <li><a class="dropdown-item" href="sistemas_supervisor_admin.php">Opcion de supervisor</a></li>
          </ul>
      <!--  </li> -->



              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="perfil.php">Mi perfil</a>
                  </li>
                 

                  <li class="nav-item">
                    <a class="nav-link" href="validar_usuarios.php" disabled>Accesos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="gestion_usuario.php" disabled>Gestion de usuarios</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pazysalvo_admin.php" disabled>Generar Paz y salvo</a>
                  </li>
                </ul>
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
    <img  src="../imgs/logocompleto.png"  alt="" style="width: 150px; text-align: center;height: 50px">
    </div>


    <main>
        <div class="container py-4 text-center">

            <div class="row justify-content-md-center">
                <div class="col-md-4">
                    <form action="" method="post">
                        <label for="campo">Buscar: </label>
                        <input type="text" name="campo" id="campo">
                    </form>
                </div>
            </div>
            <div class="row py-4">
                <div class="col">
                    <table class="table table-light table-striped">
                        <thead>
                            <th>NOMBRE</th>
                            <th>CEDULA</th>
                            <th>RFID</th>
                            <th>EQUIPOS</th>
                            <th>PERMISOS</th>
                         <!--   <th>PAZ Y SALVO GENERADO</th> -->
                         <!-- AQUI DEBE IR EL PDF DEL PAZ Y SALVO GENERADOS-->
                        </thead>

                        <!-- El id del cuerpo de la tabla. -->
                        <tbody id="content">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <script>
        /* Llamando a la función getData() */
        getData()

        /* Escuchar un evento keyup en el campo de entrada y luego llamar a la función getData. */
        document.getElementById("campo").addEventListener("keyup", getData)

        /* Peticion AJAX */
        function getData() {
            let input = document.getElementById("campo").value
            let content = document.getElementById("content")
            let url = "../../Servidor/load_pazysalvo.php"
            let formaData = new FormData()
            formaData.append('campo', input)

            fetch(url, {
                    method: "POST",
                    body: formaData
                }).then(response => response.json())
                .then(data => {
                    content.innerHTML = data
                }).catch(err => console.log(err))
        }
    </script>

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>