<form action="<?php echo htmlentities( $_SERVER['PHP_SELF'] ); ?>" method="POST">
	<h2>Entrar como usuario</h2>
	<table>
		<tr>
			<th colspan="2">LOGIN</th>
		</tr>
		<tr>
			<td><label for="login">Usuario</label></td>
			<td><input class="text" name="login" placeholder="Nick o correo" <?= recordar("login"); ?> >
			<span class="errorform"><?php echo $errores["login"]; ?> </span>  </td>
		</tr>
		<tr>
			<td><label for="contrasenya">Contraseña</label></td>
			<td><input class="password" name="contrasenya" placeholder="Escriba su contraseña" value="">
			<span class="errorform"><?php echo $errores["contrasenya"]; ?> </span>   </td>
		</tr>
		<tr>
			<td><input type="submit" name="logear" value="Entrar"></td>
			<td><input type="reset" value="Borrar"></td>
		</tr>
	</table>
</form>

<p style="text-align:center;"><a href="index.php">Volver a Portada</a></p>