<?php
include "includes/funciones.php";
include "includes/cabecera.php";

if(!$_POST) {
	include "includes/formulario.php";

} else {


	$errores = [];

	include "includes/validar.php";


	if(!$errores){

		echo "<br><br>va bien";
		insertar($nombre, $apellidos, $correo, $codpos, $pass1, $nick);


	}else{
		include "includes/formulario.php";
	}


}

include "includes/pie.php";