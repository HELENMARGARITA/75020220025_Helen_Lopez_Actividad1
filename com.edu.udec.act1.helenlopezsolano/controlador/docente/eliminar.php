<?php

if($_SERVER['REQUEST_METHOD']=='GET'){

    $id=$_GET['id'];
    require_once '../../modelo/crud/docentecrud.php';
    $dao=new DocenteDao();
    $dao->eliminarUsuario($id);    
    header("location:../../controlador/docente/listar.php");

}
  