<?php
//obstart es para activar una especie de buffering y al refrescar usar las variables refrescadas
ob_start();
include "includes/cabecera.php";

?>
<article>
<h2>Perfil de <?=ucwords(strtolower($usuario["nombre"])); ?></h2>

<ul class="perfil">
	<li><?=ucfirst(strtolower($usuario["nombre"])); ?></li>
	<li><?=ucwords(strtolower($usuario["apellidos"])); ?></li>
	<li><?=ucfirst(strtolower($usuario["correo"])); ?></li>
	<li><?=ucfirst(strtolower($usuario["cp"])); ?></li>
	<li><?=ucfirst(strtolower($usuario["nick"])); ?></li>
	<li><a class="perfil" href="informe.php">Crear resumen (txt y email)</a>
		<a class="perfil" href="editar_usuario.php">Editar perfil</a>
		<a class="perfil" href="borrar_usuario.php">Eliminar cuenta</a>
	</li>
</ul>

<?php 
	if(isset($_GET["errores"])){
		$error = $_GET["errores"];
	}

	$errores = [];
	include "includes/formulario_foto.php"; 
?>	

</article>
<br>
<hr>
<form class="tema" action="<?=$_SERVER["PHP_SELF"];?>" method="POST">
	<table>
		<tr><td colspan="3">Seleccionar tema</td></tr>
		<tr>
		<td><input type="radio" name="cambiartema" value="luminoso">Luminoso</td>
		<td><input type="radio" name="cambiartema" value="oscuro">Oscuro</td>
		<td><input type="submit" name="tema" value="Aceptar"></td>
		</tr>
	</table>
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

if(isset($_POST["fotoperfil"])){
	var_dump($_FILES["foto"]);
	
	include "includes/validar_foto.php";
	if (!$errores) {
		echo "<br>No hay errores en la foto";
	}else{
		
		//include "includes/error_foto.php";
		header('Location: perfil.php?errores=' . $errores["subida"]);
	}
}
 

include "includes/pie.php";
ob_end_flush();