<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Entrada de Datos de Docente</title>
</head>
<body>

    <div class="container">    
         <div class="jumbotron">
         <center><h2>Nuevo Docente</h2></center>
        <?php
            if(empty($mensaje)==false){
        
            echo "<div class='alert alert-warning alert-dismissible fade show'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>Mensaje</strong> ".$mensaje."</div>";
            }
        ?>


           <form action="guardardocente.php" method="post">
           
                 <label>Nombre</label>
                <input type="text" name="nombre" class="form-control"
                value="<?php if(isset($nombre)){echo $nombre;}?>">
                <label>Apellido</label>
                <input type="text" name="apellido" class="form-control"
                value="<?php if(isset($apellido)){echo $apellido;}?>">
                <label>Clave</label>
                <input type="password" name="clave" class="form-control"
                 value="<?php if(isset($clave)){echo $clave;} ?>">                
                 <label>Mail</label>
                 <input type="email" name="email" class="form-control"
                value="<?php if(isset($email)){echo $email;}?>">
                <label>Telefono</label>
                <input type="text" name="telefono" class="form-control"
                 value="<?php if(isset($telefono)){echo $telefono;} ?>">
                 <label>Blog</label>
                 <input type="text" name="blog" class="form-control"
                 value="<?php if(isset($blog)){echo $blog;} ?>">
                 <label>Profesional</label>
                 <input type="text" name="profesional" class="form-control"
                 value="<?php if(isset($profesional)){echo $profesional;} ?>">
                 <label>Escalafon</label>
                 <input type="text" name="escalafon" class="form-control"
                 value="<?php if(isset($escalafon)){echo $escalafon;} ?>">
                 <label>Idioma</label>
                 <input type="text" name="idioma" class="form-control"
                 value="<?php if(isset($idioma)){echo $idioma;} ?>">
                 <label>Experiencia</label>
                 <input type="text" name="experiencia" class="form-control"
                 value="<?php if(isset($experiencia)){echo $experiencia;} ?>">
                 <label>Area de Trabajo</label>
                 <input type="text" name="areaTrabajo" class="form-control"
                 value="<?php if(isset($areaTrabajo)){echo $areaTrabajo;} ?>">
                 
                
                 <br>
                 <center>
                    <button type="submit" name="boton" value="guardar" class="btn btn-primary" >
                    Guardar
                    </button>
                    <button type="submit" name="boton" value="limpiar" class="btn btn-warning" >
                    Limpiar
                    </button>
                </center>             
           </form>       
          </div>    
          <center><a href="../../controlador/docente/listar.php">Mostrar Docente</a></center> 
    </div>

</body>
</html>