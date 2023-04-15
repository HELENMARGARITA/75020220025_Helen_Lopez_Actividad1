<?php
 require_once '../../modelo/crud/usuariocrud.php';
$dao=new UsuarioDao();
if(isset($_POST['boton'])){

    if($_POST['boton']=='guardar'){
        $user = htmlspecialchars($_POST['user']);
        $pass=htmlspecialchars($_POST['pass']);
        $nombre=htmlspecialchars($_POST['nombre']);
        $apellido=htmlspecialchars($_POST['apellido']);
        $genero=htmlspecialchars($_POST['genero']);
        $email=htmlspecialchars($_POST['email']);


        if(empty($user) | empty($pass) | empty($nombre) | empty($apellido) | empty($email) | empty($genero)){
            $mensaje="Campo Vacio";
        } 
        else{

            $mensaje=$dao->insertarUsuario($user,$pass,$nombre,$apellido,$genero,$email); 
        }

    }  
    else if($_POST['boton']=='limpiar'){

        $user = "";
        $pass = "";
        $nombre = "";
        $apellido = "";
        $genero = "";
        $email = "";
    }  

    }      

require_once '../../view/usuario/vistaguardar.php';
 