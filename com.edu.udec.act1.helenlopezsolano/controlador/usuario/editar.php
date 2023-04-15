<?php

// peticion get para traer información del crud

if($_SERVER['REQUEST_METHOD']=='GET'){

    $usuario= unserialize($_GET['usuario']);
    $id=$usuario["id"];
    $user=$usuario["user"];
    $nombre=$usuario["nombre"];
    $apellido=$usuario["apellido"];
    $genero=$usuario["genero"];
    $email=$usuario["email"];
}

else if($_SERVER['REQUEST_METHOD']=='POST'){


require_once '../../modelo/crud/usuariocrud.php';
$dao=new UsuarioDao();
if(isset($_POST['boton'])){

    if($_POST['boton']=='guardar'){

        $id = htmlspecialchars($_POST['id']);
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

            $mensaje=$dao->actualizarUsuario($id,$user,$pass,$nombre,$apellido,$genero,$email); 
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
    
    
}// metodo post

// peticion post para actualizar el registro


  require_once '../../view/usuario/vistaactualizar.php';



  




 
  