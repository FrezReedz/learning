<form action="<?php echo htmlentities( $_SERVER['PHP_SELF'] );?>" method="POST">
	<h2>Resgistro nuevo usuario</h2>
	<table class="login">
		<tr>
			<th colspan="2">
				Formulario para estudiar
			</th>
		</tr>
		<tr>
			<td><label for="nombre">Nombre</label></td>
			<td><input type="text" name="nombre" <?php recordar("nombre") ?> >
				<span class="errorform"><?php mostrar_errores('nombre'); ?></span></td>
		</tr>
		<tr>
			<td><label for="apellidos">Apellidos</label></td>
			<td><input type="text" name="apellidos" <?php recordar("apellidos"); ?> >
				<span class="errorform"><?php mostrar_errores('apellidos'); ?></span></td>
		</tr>
		<tr><td colspan="2" style="text-align:center;">--</td></tr>
		<tr>
			<td><label for="correo">Correo electrónico</label></td>
			<td><input type="email" name="correo" <?php recordar("correo"); ?> >
			<span class="errorform"><?php mostrar_errores('correo'); ?></span></td>
		</tr>
		<tr>
			<td><label for="correo2">Repita el correo</label></td>
			<td><input type="email" name="correo2" >
				<span class="errorform"><?php mostrar_errores('correo2'); ?></td>
		</tr>
		<tr>
			<td><label for="codpost">Código Postal</label></td>
			<td><input type="text" name="codpost" <?php recordar("codpost"); ?> >
				<span class="errorform"><?php mostrar_errores('codpost'); ?></span></td>
		</tr>
		<tr><td colspan="2" style="text-align:center;">--</td></tr>
		<tr>
			<td><label for="pass">Escriba su contraseña</label></td>
			<td><input type="password" name="pass1" value="">
				<span class="errorform"><?php mostrar_errores('pass1'); ?></td>
		</tr>
		<tr>
			<td><label for="pass2">Repita su contraseña</label></td>
			<td><input type="password" name="pass2" value=""></td>
		</tr>
		<tr><td colspan="2" style="text-align:center;">--</td></tr>
		<tr>
			<td><label for="nick">Nick</label></td>
			<td><input type="text" name="nick" <?php recordar("nick"); ?> >
				<span class="errorform"><?php mostrar_errores('nick'); ?></td>
		</tr>
		<tr>
			<td><input type="submit" name="registrar" value="Registrar"></td>
			<td><input type="reset" value="Borrar"></td>
		</tr>
	</table>
</form>

	<p style="text-align:center;"><a href="index.php">Volver a Portada</a></p>