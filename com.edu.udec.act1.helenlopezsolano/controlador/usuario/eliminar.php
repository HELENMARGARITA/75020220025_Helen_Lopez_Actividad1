<?php

if($_SERVER['REQUEST_METHOD']=='GET'){

    $id=$_GET['id'];
    require_once '../../modelo/crud/usuariocrud.php';
    $dao=new UsuarioDao();
    $dao->eliminarUsuario($id);    
    header("location:../../controlador/usuario/listar.php");

}
  