<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Menu del Sistema</title>
</head>
<body>
    <div class="container mt-5 text-center">
        <div class="jumbotron">
            
            <h3 class="text-center mb-5">Modulos del Sistema</h3>
            <a class="btn btn-primary" href="../controlador/docente/listar.php">Modulo Docente</a>
            <a class="btn btn-success" href="../controlador/usuario/listar.php">Modulo Usuario</a>
            <a class="btn btn-danger" href="../index.php">Salir</a>
            <img src="../imagenes/udc.png" alt="udc">
        </div>
    </div>
    </body>
</html>


