<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../modelo/conexion/conexion.php';

class ValidarEntrada extends Conexion{
private $conexion;	
public function validar($cod, $cla){
    //echo $cod; die();
  $this->conexion = Conexion::conectar();
  $ConsultaSQL = $this->conexion->prepare("
	  SELECT *
	FROM
		usuario
	WHERE
	pass = :pass
	AND user = :id");
  $ConsultaSQL ->bindParam(':id', $cod);
  $ConsultaSQL ->bindParam(':pass', $cla);
  //$ConsultaSQL ->bindParam(':tipo', $tipo_usu);
  $ConsultaSQL ->execute();
  //$row = $ConsultaSQL ->fetch(PDO::FETCH_ASSOC);
  //print_r($row); die();
   while ($row = $ConsultaSQL ->fetch(PDO::FETCH_ASSOC)) {
                  $id=$row['id'];
	          $usuario=$row['user'];
                  $nombres=$row['nombre'];
                  $apellidos=$row['apellido'];
		  $genero=$row['genero'];
		  $email=$row['email'];
		  
                }
		if($usuario == $cod){
                    session_start();
                    $_SESSION['num'] = $id;
                    $_SESSION['nombre'] = $nombres;
                    $_SESSION['apellido'] = $apellidos;
                    $_SESSION['email'] = $email;
                    $_SESSION['genero'] = $genero;
						echo '<script language="javascript">window.location=" ../view/index.php"</script>';
		}		
		else{
			$errmsg_arr[] = "<img src='../estilos/img/error.png'>".' Usuario y Contraseña no encontrados';
			$errflag = true;
		}
		if($errflag) {
			$_SESSION['suceso_r'] = $errmsg_arr;
			$_SESSION["evento_r"] = "error"; 
			//header("location: ../vista/index_reg.php");
			echo '<script language="javascript">window.location=" ../index.php"</script>';
			exit();
			}
    }
}
?>

