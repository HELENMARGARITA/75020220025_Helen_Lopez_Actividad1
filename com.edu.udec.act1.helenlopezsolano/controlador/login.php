<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include("../modelo/validarlogin.php");
class validacion{

    function validando(){

        $cod=$_REQUEST["usuario"];
        $cla=$_REQUEST["password"];
	

		$vali=new ValidarEntrada();
		$vali->validar($cod,$cla);
		
    }

}
$val=new validacion();
$val->validando();
?>
