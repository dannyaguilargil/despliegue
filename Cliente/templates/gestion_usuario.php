<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/gestion_usuarios.css">
    <link rel="icon" href="imgs/logoimsaludrecortado.ico">
    <title>Gestion de usuarios</title>
</head>

<body>

<header class="">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!-- navbar navbar-dark bg-dark -->
            <div class="container-fluid">
              <a class="navbar-brand " href="gestion_usuario.php">Usuarios</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="sistemas_admin_pendientes.php">Sistemas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pazysalvo_admin.php" disabled>Paz y salvo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="perfil_admin.php" disabled>Mi perfil</a>
                  </li>
                </ul>
              
              </div>
          


<a href="validar_usuarios.php" type="button" class="fas fa-user-check btn btn-secondary"></a>
  <!--GESTION PARA AGREGAR USUARIO -->
<!-- modales-->
<button type="button" class="fas fa-user-plus modals btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@mdo"></button> 
<button type="button" class="fas fa-user-edit modals btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@fat"></button>
<button type="button" class="fas fa-user-times modals btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal3" data-bs-whatever="@getbootstrap"></button> 


<!-- FIN DE MODALES --> 
<!--Modal de inserccion -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel"><b>Agregar un usuario</b></h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
       <form  action="../../Servidor/registrar_usuario.php" method="POST" enctype="multipart/form-data" >

        <!--
         <div class="mb-1">
           <label for="id" class="col-form-label">Id</label> <br> 
           <input type="text" class="form-control-sm" id="id"  name="id" disabled> 
         </div> -->
         <div class="mb-1">
           <label for="nombre" class="emerge col-form-label">Nombre completo:</label> 
           <input type="text" class="emerge form-control-sm" id="nombre" name="nombre" required> 
         </div>
         <div class="mb-1">
           <label for="cargo" class="emerge col-form-label">Cargo:</label> 
           <input type="text" class="emerge form-control-sm" id="cargo" name="cargo" required>
         </div>
         <div class="mb-1">
           <label for="fechafinalcontrato" class="emerge col-form-label">Fecha final de contrato:</label>
           <input type="date" class="emerge form-control-sm" id="fechafinalcontrato" name="fechafinalcontrato" required>
         </div>
        
         <div class="mb-1">
         <label for="cedula" class="emerge col-form-label">Cedula:</label> 
           <input type="number" class="emerge" id="cedula" name="cedula" required class="form-control-sm"> 
         </div>
         <div class="mb-1">
           <label for="supervisor" class="emerge col-form-label">Supervisor:</label>
           <input type="text"  id="supervisor" name="supervisor"  class="emerge form-control-sm" required> 
         </div>

         <div class="mb-1">
         <label for="email" class="emerge col-form-label">Email</label>
         <input type="email" class="emerge col-form-label" id="email" name="email" class="form-control-sm"  required>
         </div>

         <div class="form-check form-switch">
                <label class="form-check-label" for="administrador">Administrador</label>
                <input class="form-check-input" type="checkbox" role="switch" name="administrador" id="administrador" value="ADMINISTRADOR">  
        </div>


        <div class="form-check form-switch">
                <label class="form-check-label" for="administrador">Supervisor</label>
                <input class="form-check-input" type="checkbox" role="switch" name="administrador" id="administrador" value="SUPERVISOR">  
        </div>


     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       <button type="submit" class="btn btn-success">Insertar</button>
       
     </div>
     </form>
     
   </div>
  
 </div>
 

</div>
<!-- ACTUALIZACION MODAL -->
<!-- Modal de actualizacion -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel"><b>Actualizacion de datos</b></h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
       <form action="../../Servidor/actualizar_usuario.php" method="POST">
         
         <div class="mb-1">
           <label for="cedula" class="emerge">Cedula:</label>
           <input type="number" class="emerge form-control-sm" id="recipient-id" name="cedula" id="cedula">
         </div>
          <!--
         <div class="mb-1">
           <label for="recipient-id" class="col-form-label">Id</label>
           <input type="text" class="form-control-sm" id="recipient-id" disabled>
         </div>
          -->
         <div class="mb-1">
           <label for="cactualizar" class="emerge col-form-label">Campo que desea actualizar:</label>
           <input type="text" class="emerge form-control-sm" id="cactualizar" name="cactualizar">
         </div>
         <div class="mb-1">
           <label for="dnuevo" class="emerge col-form-label">Campo nuevo:</label>
           <input type="text" class="emerge dnuevo" id="dnuevo" name="dnuevo">
         </div>
         <br>
        <label for=""><i>Si desea cambiar la contraseña el campo es: password</i></label>
      
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       <button type="submit" class="btn btn-primary">Actualizar</button>
     </div>
     </form>
   </div>
 </div>
</div>
<!-- Modal de eliminar -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel"><b>Eliminar usuario</b></h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
     <form action="../../Servidor/eliminar_usuario.php" method="POST">
         
       <div class="mb-1">
           <label for="id" class="col-form-label">Cedula</label>
           <input type="number" class="form-control-sm" id="cedula" name="cedula" required>
      </div>

       
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       <button type="submit" class="btn btn-danger">Eliminar</button>
     </div>
     </form>
   </div>
 </div>
</div>

</div>



<!--
              <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckChecked">Modo oscuro</label>
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                
            </div>

-->
            
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
                    <table class="table table-success table-striped">
                        <thead>
                            <th>NOMBRE</th>
                            <th>CEDULA</th>
                            <th>CARGO</th>
                            <th>FECHAFINALCONTRATO</th>
                            <th>SUPERVISOR</th>
                            <th>EMAIL</th>
                            <th>ROL</th>
                           
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
            let url = "../../Servidor/load.php"
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
