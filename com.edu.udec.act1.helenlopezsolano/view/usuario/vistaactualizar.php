<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Entrada de Datos de Usuario</title>
</head>
<body>

    <div class="container">    
         <div class="jumbotron">
         <center><h2>Actualizar Usuario</h2></center>
        <?php
            if(empty($mensaje)==false){
        
            echo "<div class='alert alert-warning alert-dismissible fade show'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>Mensaje</strong> ".$mensaje."</div>";
            }
        ?>


           <form action="editar.php" method="post">
           
                <label>Id</label>
                <input type="text" name="id" class="form-control"
                 value="<?php if(isset($id)){echo $id;} ?>" readonly>
                <label>Usuario</label>
                <input type="text" name="user" class="form-control"
                 value="<?php if(isset($user)){echo $user;} ?>">
                <label>Password</label>
                <input type="password" name="pass" class="form-control"
                 value="<?php if(isset($pass)){echo $pass;} ?>">                
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control"
                value="<?php if(isset($nombre)){echo $nombre;}?>">
                <label>Apellido</label>
                <input type="text" name="apellido" class="form-control"
                value="<?php if(isset($apellido)){echo $apellido;}?>">
                <label>Genero</label>
                <input type="text" name="genero" class="form-control"
                value="<?php if(isset($genero)){echo $genero;}?>">
                <label>Mail</label>
                <input type="email" name="email" class="form-control"
                value="<?php if(isset($email)){echo $email;}?>">
                <br>
                <center>
                    <button type="submit" name="boton" value="guardar" class="btn btn-primary" 
                    onclick="javascript:return asegurar();">
                    Guardar
                    </button>
                    <button type="submit" name="boton" value="limpiar" class="btn btn-warning" >
                    Limpiar
                    </button>
                </center>             
           </form>       
          </div> 

          <center><a href="../../controlador/docente/listar.php">Mostrar Usuarios</a></center>   
    </div>
    <script>
  function asegurar ()
  {
      rc = confirm("¿Seguro que desea Actualizar?");
      return rc;
  }
  </script>

</body>
</html>