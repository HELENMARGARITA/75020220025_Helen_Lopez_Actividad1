<?php

//controlador edit

// peticion get para traer información del crud

if($_SERVER['REQUEST_METHOD']=='GET'){
$docente=(@$_REQUEST['docente']);
    $id=(@$_REQUEST["id"]);
    $nombre=@$_REQUEST["nombre"];
    $clave=@$_REQUEST["clave"];
    $apellido=@$_REQUEST["apellido"];
    $email = @$_REQUEST["email"];
    $telefono = @$_REQUEST["telefono"];
    $blog= @$_REQUEST["blog"];
    $profesional=@$_REQUEST["profesional"];
    $escalafon=@$_REQUEST["escalafon"];
    $idioma=@$_REQUEST["idioma"];
    $experiencia=@$_REQUEST["experiencia"];
    $areaTrabajo=@$_REQUEST["areaTrabajo"];
    
}

else if($_SERVER['REQUEST_METHOD']=='POST'){


require_once '../../modelo/crud/docentecrud.php';
$dao=new DocenteDao();
if(isset($_POST['boton'])){

    if($_POST['boton']=='guardar'){
        $id=htmlspecialchars($_POST['id']);
        $clave = htmlspecialchars($_POST['clave']);
        $nombre=htmlspecialchars($_POST['nombre']);
        $apellido=htmlspecialchars($_POST['apellido']);
        $email=htmlspecialchars($_POST['email']);
        $telefono=htmlspecialchars($_POST['telefono']);
        $blog=htmlspecialchars($_POST['blog']);
        $profesional=htmlspecialchars($_POST['profesional']);
        $escalafon=htmlspecialchars($_POST['escalafon']);
        $idioma=htmlspecialchars($_POST['idioma']);
        $experiencia=htmlspecialchars($_POST['experiencia']);
        $areaTrabajo=htmlspecialchars($_POST['areaTrabajo']);
         if(empty($clave) | empty($telefono) | empty($nombre) | empty($apellido) | empty($email) | empty($blog)
          | empty($profesional) | empty($escalafon) | empty($idioma) | empty($experiencia) | empty($areaTrabajo)){
            $mensaje="Campo Vacio";
        } 
        else{

            $mensaje=$dao->actualizarDocente($id,$clave,$nombre,$apellido,$email,$telefono,$blog,$profesional,$escalafon,$idioma,$experiencia,$areaTrabajo); 
        }
        

    }  
    else if($_POST['boton']=='limpiar'){
        $clave = "";
        $nombre="";
        $apellido="";
        $email="";
        $telefono="";
        $blog="";
        $profesional="";
        $escalafon="";
        $idioma="";
        $experiencia="";
        $areaTrabajo="";
    }  

    }      
    
    
}// metodo post

// peticion post para actualizar el registro


  require_once '../../view/docente/vistaactualizar.php';



  




 
  