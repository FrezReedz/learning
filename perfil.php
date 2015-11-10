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
	<li><input class="inline" type="button" name="editar" value="Editar Perfil">
	<input class="inline" type="button" name="borrar" value="Eliminar cuenta">
	<input class="inline" type="button" name="cambiar_pass" value="Cambiar Contraseña"></li>
</ul>
<form action="<?=$_SERVER["PHP_SELF"];?>" method="POST">
<ul class="fotoperfil">

	<img id="fotoperfil" src="includes/img/avatar.png" alt="Ávatar">
	
	<li>Foto de perfil</li>
	<li><input type="file" name="foto"></li>
	<li><input type="submit" name="fotoperfil" value="Subir Foto"></li>
</ul>
</form>
	

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


include "includes/pie.php";