<?php
//obstart es para activar una especie de buffering y al refrescar usar las variables refrescadas
ob_start();
include "includes/cabecera.php";

?>

<h2>Perfil de <?=ucwords(strtolower($usuario["nombre"])); ?></h2>

<ul>
	<li><?=ucfirst(strtolower($usuario["nombre"])); ?></li>
	<li><?=ucwords(strtolower($usuario["apellidos"])); ?></li>
	<li><?=ucfirst(strtolower($usuario["correo"])); ?></li>
	<li><?=ucfirst(strtolower($usuario["cp"])); ?></li>
	<li><?=ucfirst(strtolower($usuario["nick"])); ?></li>
	<li><input type="button" name="editar" value="Editar Perfil"></li>
	<li><input type="button" name="borrar" value="Eliminar cuenta"></li>
	<li><input type="button" name="cambiar_pass" value="Cambiar Contraseña"></li>
</ul>

<p> Seleccionar tema</p>
<form style="margin:0 auto;" action="<?=$_SERVER["PHP_SELF"];?>" method="POST">
	<select name="cambiartema" id="cambiartema">
		<option value="luminoso">Luminoso</option>
		<option value="oscuro">Oscuro</option>
	</select>
	<input type="submit" name="tema" value="Aceptar">
</form> 

<?php

//header redirije a la misma página actual, request uri, se necesita ob_start() para actualizar con los datos nuevos
if(isset($_POST["tema"])){
	if($_POST["cambiartema"] == "oscuro"){
		$_SESSION["tema"] = "oscuro";
		setCookie("css", $_SESSION["tema"], time() + 5184000);
		header('Location: '.$_SERVER['REQUEST_URI']);
	}elseif($_POST["cambiartema"] == "luminoso"){
		$_SESSION["tema"] = "luminoso";
		setCookie("css", $_SESSION["tema"], time() + 5184000);
		header('Location: '.$_SERVER['REQUEST_URI']);
	}
}


include "includes/pie.php";