<?php

   require_once '../../modelo/crud/docentecrud.php';
   $dao=new DocenteDao();
   $docentes=$dao->listadocentes();
   $tam=sizeof($docentes);
   require_once '../../view/docente/vistadocente.php';

   