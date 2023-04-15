<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
    <title>Entrada de Datos de Usuario</title>
    <style>
#tabla{

  text-align:center;

}
#tabla > thead > tr > th:nth-child(5){
   width:20%;
   
}

.dataTables_wrapper .dataTables_paginate .paginate_button {
background-color:#007bff;
color:white !important;
}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
background-color:#007bff !important;
color:white !important;

} 

.dataTables_wrapper .dataTables_paginate .paginate_button:active {
  background-color:#007bff !important;
color:white !important;

}

.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    color: white !important;
    border: 1px solid #111;
    background-color: #585858;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #007bff), color-stop(100%, #111));
    background: -webkit-linear-gradient(top, #007bff 0%, #007bff 0%);
    background: -moz-linear-gradient(top, #007bff 0%, #007bff 100%);
    background: -ms-linear-gradient(top, #007bff 0%, #007bff 100%);
    background: -o-linear-gradient(top, #007bff 0%, #007bff 100%);
    background: linear-gradient(to bottom, #007bff 0%, #007bff 100%);
}

.dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
  color: white !important;
    border: 1px solid #111;
    background-color: #585858;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #007bff), color-stop(100%, #111));
    background: -webkit-linear-gradient(top, #007bff 0%, #007bff 0%);
    background: -moz-linear-gradient(top, #007bff 0%, #007bff 100%);
    background: -ms-linear-gradient(top, #007bff 0%, #007bff 100%);
    background: -o-linear-gradient(top, #007bff 0%, #007bff 100%);
    background: linear-gradient(to bottom, #007bff 0%, #007bff 100%);
}




    </style>

</head>
<body>
 
    <div class="container">    
          <center><h2>Mostrar Docentes</h2></center>
          <br>
          <a class="btn btn-primary" href="guardardocente.php">Nuevo Docente</a>
          <a class="btn btn-success" href="../../view/index.php">Inicio</a>
          <br>

        <?php

          if($tam==0){
              echo "<br><p><strong>No se encontro Registro de Usuario!!</strong></p>";
          }  
          else{

        ?>


          <br>
         <table class="table table-striped" id="tabla">
            <thead>
                
                <th>Id</th>
                <th>Clave</th>    
                <th>Nombre</th>
                <th>Apellido</th>  
                <th>Email</th>  
                <th>Telefono</th>  
                <th>Blog</th>
                <th>Profesional</th>
                <th>Escalafon</th>
                <th>Idioma</th>
                <th>Años Experiencia</th>
                <th>Area Trabajo</th>                             
                <th>Accion</th>           
            </thead>
            <tbody>
            <?php
                $cont=1;

                foreach($docentes as $docente){
                  echo "<tr>".
                      "<td>".$docente["id"]."</td>".
                      "<td>".$docente["clave"]."</td>".                     
                      "<td>".$docente["nombre"]."</td>".
                      "<td>".$docente["apellido"]."</td>".
                      "<td>".$docente["email"]."</td>".
                      "<td>".$docente["telefono"]."</td>".
                      "<td>".$docente["blog"]."</td>".
                      "<td>".$docente["profesional"]."</td>".
                      "<td>".$docente["escalafon"]."</td>".
                      "<td>".$docente["idioma"]."</td>".
                      "<td>".$docente["experiencia"]."</td>".
                      "<td>".$docente["areaTrabajo"]."</td>".
                        "<td><a href=../../controlador/docente/editar.php?id=".$docente["clave"].
                        "&clave=".$docente["clave"].
                        "&nombre=".$docente["nombre"].
                        "&apellido=".$docente["apellido"].
                        "&email=".$docente["email"].
                        "&telefono=".$docente["telefono"].
                        "&blog=".$docente["blog"].
                        "&escalafon=".$docente["escalafon"].
                        "&idioma=".$docente["idioma"].
                        "&experiencia=".$docente["experiencia"].
                        "&areaTrabajo=".$docente["areaTrabajo"].
                        "&profesional=".$docente["profesional"].
                      "' class='btn btn-warning'>Actualizar</a>   &nbsp;&nbsp;".
                      "<a href='eliminar.php?id=".$docente["id"].
                      "' class='btn btn-danger'  onclick='javascript:return asegurar();'>Eliminar</a></td>".
                      "</tr>";
                  $cont++;     
                }     

            ?>                

            </tbody>        

         <table>      
         <?php
          }
         ?>
    </div>
    <script>
  function asegurar ()
  {
      rc = confirm("¿Seguro que desea Eliminar?");
      return rc;
  }


  $(document).ready(function () {
            $('#tabla').dataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },
                dom: 'Bfrtip',
                "pageLength": 5
            });
        });

  </script>
</body>
</html>