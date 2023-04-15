<?php

include '../../modelo/conexion/conexion.php';

 class DocenteDao extends Conexion{

    public function insertarUsuario($clave,$nombre,$apellido,$email,$telefono,$blog,$profesional,$escalafon,$idioma,$experiencia,$areaTrabajo){
        $mensaje="";
  try {
           $conexion=Conexion::conectar();
          $sql="INSERT INTO docente(id,clave,nombre,apellido,email,telefono,blog,profesional,escalafon,idioma,experiencia,areaTrabajo) VALUES (NULL,:clave,:nombre,:apellido,:email,:telefono,:blog,:profesional,:escalafon,:idioma,:experiencia,:areaTrabajo);";
          
          $stmt = $conexion->prepare($sql);	
              $stmt->bindParam(":clave",$clave);
              $stmt->bindParam(":nombre",$nombre); 
              $stmt->bindParam(":apellido",$apellido); 
              $stmt->bindParam(":email",$email);
              $stmt->bindParam(":telefono",$telefono);
              $stmt->bindParam(":blog",$blog);
              $stmt->bindParam(":profesional",$profesional);
              $stmt->bindParam(":escalafon",$escalafon);
              $stmt->bindParam(":idioma",$idioma);
              $stmt->bindParam(":experiencia",$experiencia);
              $stmt->bindParam(":areaTrabajo",$areaTrabajo);           
              $stmt->execute();
              $fila=$stmt->rowCount();      
              $mensaje="Guardo, Docente con Exito!!";        
              
  } catch(PDOException $e) {
    echo $e;
          
          if ($e->errorInfo[1] == 1062) {
           $mensaje="Docente Existe!!";
            // duplicate entry, do something else
         } else {
            // an error other than duplicate entry occurred
          echo $e->errorInfo[1];
         }
     
  } 
      return $mensaje;
      }

      public function listadocentes(){
        $conexion=Conexion::conectar();         
        $sql="SELECT * FROM docente order by id asc;";      
        $stmt = $conexion->prepare($sql); 
        $stmt->execute();
        $array=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt=null;  
        return $array;     
       }

       public function listausuario($numid){
        $conexion=Conexion::conectar();         
        $sql="SELECT * FROM usuario where numid=:numid order by numid asc;";      
        $stmt = $conexion->prepare($sql); 
        $stmt->bindParam(":numid", $numid);
        $stmt->execute();
        $array=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt=null;  
        return $array;     
       }

       public function actualizarDocente($clave,$nombre,$apellido,$email,$telefono,$blog,$profesional,$escalafon,$idioma,$experiencia,$areaTrabajo){

        $mensaje="";
        try{
          
          $conexion=Conexion::conectar();
          $sql="update docente set clave=:clave,nombre=:nombre,apellido=:apellido,email=:email,telefono=:telefono,blog=:blog,profesional=:profesional,escalafon=:escalafon,idioma=:idioma,experiencia=:experiencia,areaTrabajo=:areaTrabajo where id=:id";
          $stmt=$conexion->prepare($sql);
          $stmt->bindParam(":clave",$clave);
          $stmt->bindParam(":nombre",$nombre); 
          $stmt->bindParam(":apellido",$apellido); 
          $stmt->bindParam(":email",$email);
          $stmt->bindParam(":telefono",$telefono);
          $stmt->bindParam(":blog",$blog);
          $stmt->bindParam(":profesional",$profesional);
          $stmt->bindParam(":escalafon",$escalafon);
          $stmt->bindParam(":idioma",$idioma);
          $stmt->bindParam(":experiencia",$experiencia);
          $stmt->bindParam(":areaTrabajo",$areaTrabajo);         
          $stmt->bindParam(":id",$id);
          $stmt->execute();
          $mensaje="Actualizo Docente con Exito!!";

        }// fin de try

        catch(PDOException $e){
          echo $e;

          $mensaje="Problemas al Actualizar Consulte con el Administrador del Sistema!!";

        }// fin del catch

        return $mensaje;

       }// fin del metodo       


      public function eliminarUsuario($id){
        $mensaje="";
          try{

            $conexion=Conexion::conectar();
            $sql="delete from docente where id=:id";
            $stmt=$conexion->prepare($sql);
            $stmt->bindParam(":id",$id);
            $stmt->execute();
            $mensaje="Eliminó, Usuario con Exito";            

          }// fin del try

          catch(PDOException $e){
            $mensaje="Problemas al Eliminar consulte con el administrador";

          }// fin del catch

          return $mensaje;
      }// fin del metodo eliminarUsuario


      public function eliminarUsuarios(){
        $mensaje="";
          try{

            $conexion=Conexion::conectar();
            $sql="delete from usuario";
            $stmt=$conexion->prepare($sql);
            $stmt->execute();
            $mensaje="Eliminó, Usuarios con Exito";            

          }// fin del try

          catch(PDOException $e){
            $mensaje="Problemas al Eliminar consulte con el administrador";

          }// fin del catch

          return $mensaje;
      }// fin del metodo eliminarUsuario



 }// fn de clase