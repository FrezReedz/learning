<?php
include "includes/funciones.php";
include "includes/cabecera.php";


if(isset($_SESSION["login_user"])){
	echo "<h2>Usted ya se encuentra logeado</h2>";
	?>
	<h2><a href="logout.php">Log-out</a></h2>
	<?php
}else{
	if(!isset($_POST["logear"])){
		include "includes/form_login.php";
	}else{
		$errores = [];

		include "includes/validar.php";
		if(!$errores){
			$_SESSION["login_user"] = trim($_POST["login"]);
			include "includes/login_correcto.php";
		}else{
			include "includes/form_login.php";
		}
	}
}




include "includes/pie.php";