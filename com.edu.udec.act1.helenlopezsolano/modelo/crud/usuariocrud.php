<?php

include '../../modelo/conexion/conexion.php';

 class UsuarioDao extends Conexion{

    public function insertarUsuario($user,$pass,$nombre,$apellido,$genero,$email){
        $mensaje="";
  try {
           $conexion=Conexion::conectar();
          $sql="INSERT INTO usuario(id,user,pass,nombre,apellido,genero,email) VALUES (NULL,:user,:pass,:nombre,:apellido,:genero,:email);";
          
          $stmt = $conexion->prepare($sql);	
              $stmt->bindParam(":user",$user);
              $stmt->bindParam(":pass",$pass); 
              $stmt->bindParam(":nombre",$nombre); 
              $stmt->bindParam(":apellido",$apellido); 
              $stmt->bindParam(":genero",$genero);
              $stmt->bindParam(":email",$email);
              $stmt->execute();
              $fila=$stmt->rowCount();      
              $mensaje="Guardo, Usuario con Exito!!";        
              
  } catch(PDOException $e) {
          if ($e->errorInfo[1] == 1062) {
           $mensaje="Usuario Existe!!";
            // duplicate entry, do something else
         } else {
            // an error other than duplicate entry occurred
          echo $e->errorInfo[1];
         }
     
  } 
      return $mensaje;
      }

      public function listausuarios(){
        $conexion=Conexion::conectar();         
        $sql="SELECT * FROM usuario order by id asc;";      
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

       public function actualizarUsuario($id,$user,$pass,$nombre,$apellido,$genero,$email){

        $mensaje="";
        try{
          
          $conexion=Conexion::conectar();
          $sql="update usuario set user=:user,pass=:pass,nombre=:nombre,apellido=:apellido,genero=:genero,email=:email where id=:id";
          $stmt=$conexion->prepare($sql);
          $stmt->bindParam(":user",$user);
          $stmt->bindParam(":pass",$pass); 
          $stmt->bindParam(":nombre",$nombre); 
          $stmt->bindParam(":apellido",$apellido); 
          $stmt->bindParam(":genero",$genero);
          $stmt->bindParam(":email",$email);
          $stmt->bindParam(":id",$id);
          $stmt->execute();
          $mensaje="Actualizo Usuario con Exito!!";

        }// fin de try

        catch(PDOException $e){

          $mensaje="Problemas al Actualizar Consulte con el Administrador del Sistema!!";

        }// fin del catch

        return $mensaje;

       }// fin del metodo       


      public function eliminarUsuario($id){
        $mensaje="";
          try{

            $conexion=Conexion::conectar();
            $sql="delete from usuario where id=:id";
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