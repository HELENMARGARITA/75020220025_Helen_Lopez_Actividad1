<?php

   require_once '../../modelo/crud/usuariocrud.php';
   $dao=new UsuarioDao();
   $usuarios=$dao->listausuarios();
   $tam=sizeof($usuarios);
   require_once '../../view/usuario/vistausuarios.php';

   