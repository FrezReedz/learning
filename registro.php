<?php
include "includes/funciones.php";
include "includes/cabecera.php";

$errores = [];

if(!$_POST) {
	include "includes/formulario.php";

} else {

	include "includes/validar.php";

	if(!$errores){
		
		insertar($nombre, $apellidos, $correo, $codpos, $pass1, $nick);


	}else{
		include "includes/formulario.php";
	}


}

include "includes/pie.php";