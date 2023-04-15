<?php
 require_once '../../modelo/crud/docentecrud.php';
$dao=new DocenteDao();
if(isset($_POST['boton'])){

    if($_POST['boton']=='guardar'){
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

            $mensaje=$dao->insertarUsuario($clave,$nombre,$apellido,$email,$telefono,$blog,$profesional,$escalafon,$idioma,$experiencia,$areaTrabajo); 
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

require_once '../../view/docente/vistaguardar.php';
 