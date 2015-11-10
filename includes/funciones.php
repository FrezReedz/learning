<?php 

//recordar campo en formulario con trim
function recordar($campo){
	if(isset($_POST[$campo])) {
		echo 'value = "' . trim($_POST[$campo]) . '"' ;
	}
}


function mostrar_errores($campo){
	if(isset($errores[$campo])) {
		echo 'value = "' . trim($errores[$campo]) . '"' ;
	}
}


function conexion(){
	
	$conex = mysqli_connect("localhost", "root", "", "webprueba");

	if (!$conex) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}
	
	return $conex;
}


function cerrar_conex($conex) {

	mysqli_close($conex);
}


function insertar($nombre, $apellidos, $correo, $codpos, $pass1, $nick){

	$conex = conexion();

	$nombre = strtoupper(mysqli_real_escape_string($conex, $nombre));
	$apellidos = strtoupper(mysqli_real_escape_string($conex, $apellidos));
	$correo = strtoupper(mysqli_real_escape_string($conex, $correo));
	$codpos = mysqli_real_escape_string($conex, $codpos);
	$pass1 = sha1($pass1);
	$nick = strtoupper(mysqli_real_escape_string($conex, $nick));

	$ssql = "insert into usuario(nombre, apellidos, 
			correo, cp, pass, nick) values ('".$nombre."','
			".$apellidos."','".$correo."','".$codpos."',
			'".$pass1."','".$nick."')";
	
	if (mysqli_query($conex, $ssql)) {
		include "includes/registrado_correctamente.php";

	}else{
		include "includes/error.php";
	}
	cerrar_conex($conex);

}


function buscar_campo($campo, $valor){

	$conex = conexion();
	//comprobar que el nick no está cogido ya por otro usuario
	$valor = strtoupper(mysqli_real_escape_string($conex, $valor));
	$campo_existente = "SELECT ".$campo." from usuario where ".$campo." = '".$valor."'";
	$sql = mysqli_query($conex, $campo_existente);

	//para comprobar que efectivamente se encuentra registrado en la base de datos
	if((mysqli_num_rows($sql) == 1)){

		mysqli_free_result($sql);
		cerrar_conex($conex);
		return 1;
			
	}else{

		mysqli_free_result($sql);
		cerrar_conex($conex);
		return 0;
	}
}



function recuperar_usuario($login){

	$conex = conexion();

	if(filter_var($login, FILTER_VALIDATE_EMAIL)){
		$campo = "correo";
		$valor = strtoupper(mysqli_real_escape_string($conex, $login));
		$campo_existente = "SELECT id, nombre, apellidos, correo, cp, nick from usuario where ".$campo." = '".$valor."'";
		$sql = mysqli_query($conex, $campo_existente);
		$res = mysqli_fetch_array($sql);

		cerrar_conex($conex);
		return $res;

	}elseif(preg_match("/^([a-zA-Z0-9áéíóúÁÉÍÓÚüÜñÑ]){3,29}$/i ", $login)){
		$campo = "nick";
		$valor = strtoupper(mysqli_real_escape_string($conex, $login));
		$campo_existente = "SELECT id, nombre, apellidos, correo, cp, nick from usuario where ".$campo." = '".$valor."'";
		$sql = mysqli_query($conex, $campo_existente);
		$res = mysqli_fetch_array($sql);

		cerrar_conex($conex);
		return $res;
	}


}


function cargar_estilo(){

	if(isset($_COOKIE["css"])){
		if($_COOKIE["css"] == "oscuro"){
			?>
				<link rel="stylesheet" type="text/css" href="includes/style/estilo_dark.css">
			<?php	
		}else{
			?>
				<link rel="stylesheet" type="text/css" href="includes/style/estilo.css">
			<?php 
		}
	}else{
		if (!$_SESSION["tema"] || ($_SESSION["tema"] == "luminoso")) {
			?>
				<link rel="stylesheet" type="text/css" href="includes/style/estilo.css">
			<?php 
		}elseif ($_SESSION["tema"] == "oscuro"){
			?>
				<link rel="stylesheet" type="text/css" href="includes/style/estilo_dark.css">
			<?php
		}
	}	
}


function cargar_topbar(){

			if (!isset($_SESSION["nick"]) || $_SESSION["nick"] == "") {
		?>
				<a class="cabecera" href="registro.php">Register</a>
				<a class="cabecera" href="login.php">Login</a>
		<?php
			}else{
		?>		
				<a class="cabecera" href="perfil.php"> <?=ucfirst(strtolower($usuario["nick"])); ?></a>
				<a class="cabecera" href="logout.php">Log-out</a>
		<?php
			}
		
}

//actualmente sin usar 
/*
function contador_visitas(){

	$contador = (int) 1;

	if (!isset($_COOKIE["contador"])) {
	    setcookie("contador", $contador, time() +10000000);
	}else{
		$contador = (int)$_COOKIE["contador"];
		setcookie("contador", $contador+1, time() +10000000);
	}

}
*/