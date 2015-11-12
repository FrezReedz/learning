<?php

//var_dump($_POST);

//comprobar que se ha enviado post VALIDACIONES PARA REGISTRO
if(isset($_POST["registrar"])){

	//validar nombre, regex para nombre y para mostrar error de nombre corto
	if($_POST["nombre"] != ""){
		$nombre = trim($_POST["nombre"]);
		if(strlen($nombre) < 3) {
			$errores['nombre'] = "El nombre es demasiado corto";
		}else if(!preg_match("/^([a-zA-ZáéíóúÁÉÍÓÚüÜñÑ ]){3,29}$/i ", $nombre)){
			$errores['nombre'] = "El nombre contiene carácteres no permitidos";
		}
	}else{
		$errores["nombre"] = "No has introducido nombre";
	}


	//como nombre
	if($_POST["apellidos"] != ""){
		$apellidos = trim($_POST["apellidos"]);
			if(strlen($apellidos) < 3) {
				$errores['apellidos'] = "Los apellidos demasiado cortos";
			}else if(!preg_match("/^([a-zA-ZáéíóúÁÉÍÓÚüÜñÑ ]){3,29}$/i ", $nombre)){
				$errores['apellidos'] = "Los apellidos contienen carácteres no permitidos";
			}
	}else{
		$errores["apellidos"] = "No has introducito ningún apellido.";
	}

	if(($_POST["correo"] != "" ) && ($_POST["correo2"] != "" )){

		if($_POST["correo"] = $_POST["correo2"]){
			$correo = trim($_POST["correo"]);
			if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
				$errores['correo'] = "La dirección de correo no es válida.";
			}elseif(buscar_campo("correo", $correo) != 0){
			$errores['correo'] = "El correo ya está siendo usado";
			}
		}else{
			$errores["correo"] = "Los correos no coinciden.";
		}
	}else{
		$errores["correo"] = "No has introducido ambos correos.";
	}



	if($_POST["codpost"] != ""){
		$codpos = trim($_POST["codpost"]);
		if(!preg_match("/^(0[1-9]|[1-4][0-9]|5[0-2])[0-9]{3}$/i ", $codpos)){
			$errores["codpost"] = "El código postal no es válido";
		}
	}else{
		$errores["codpost"] = "No has introducido código postal.";
	}



	if(($_POST["pass1"]!= "") && ($_POST["pass2"] != "")){

		if($_POST["pass1"] == $_POST["pass2"]){
			$pass1 = trim($_POST["pass1"]);
		    if (mb_strlen($pass1) < 6) {
		        $errores["pass1"] = "Contraseña muy corta! (mínimo 6 caracteres)<br>";
		    }

		    if (!preg_match("#[0-9]+#", $pass1)) {
		        $errores["pass1"] = "La contraseña debe contener al menos un número!<br>";
		    }

		    if (!preg_match("#[a-zA-Z]+#", $pass1)) {
		        $errores["pass1"] = "La contraseña debe contener al menos una letra!";
		    }     
		}else{
			$errores["pass1"] = "Las contraseñas no coinciden.";
		}
	}else{
		$errores["pass1"] = "No has introducido ambas contraseñas.";
	}

	if($_POST["nick"] != ""){
		$nick = trim($_POST["nick"]);
		
		if(mb_strlen($nick) < 3) {
			$errores['nick'] = "El Nick es demasiado corto";
		}else if(!preg_match("/^([a-zA-Z0-9áéíóúÁÉÍÓÚüÜñÑ\-\_]){3,29}$/i ", $nick)){
			$errores['nick'] = "El Nick contiene carácteres no permitidos";
		}else if(buscar_campo("nick", $nick) != 0){
			$errores['nick'] = "El Nick ya está siendo usado";
		}
	}else{
		$errores["nick"] = "No has introducido Nick";
	}
}


	/*
	$conex = conexion();

	//comprobar que el nick no está cogido ya por otro usuario
	$nick = mysqli_real_escape_string($conex, $nick);
	$nick_existente = "SELECT nick from usuario where nick = '".$nick."'";
	$resultado = mysqli_query($conex, $nick_existente);
	
	if(mysqli_num_rows($resultado) > 0){
		$errores["nick"] = "El nombre de usuario ya está registrado.";
		//echo "<br>" . mysqli_num_rows($resultado);
		mysqli_free_result($resultado);
	}
	
	//comprobar que el correo no está cogido ya por otro usuario
	$correo = mysqli_real_escape_string($conex, $correo);
	$correo_existente = "SELECT correo from usuario where correo = '".$correo."'";
	$resultado = mysqli_query($conex, $correo_existente);
	
	if(mysqli_num_rows($resultado) > 0){
		$errores["correo"] = "El correo electrónico ya está registrado.";
		//echo "<br>" . mysqli_num_rows($resultado);
		mysqli_free_result($resultado);
	}

	cerrar_conex($conex);  

	*/



//VALIDACIONES PARA LOGIN
if(isset($_POST["logear"])){

	if((buscar_campo("nick", $_POST["login"]) == 0 ) && (buscar_campo("correo", $_POST["login"]) == 0)){

		$errores["login"] = "Usuario no encontrado en la base de datos.";

	}

	if(buscar_campo("pass", sha1($_POST["contrasenya"])) == 0 ){

		$errores["contrasenya"] = "La contraseña es incorrecta.";

	}
}


