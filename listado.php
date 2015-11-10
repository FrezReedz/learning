<?php
include "includes/cabecera.php";
?>
<h2>LISTADO</h2>
<table>
	<tr><th colspan="5">USUARIOS REGISTRADOS</th></tr>
	<tr>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Email</th>
		<th>CP</th>
		<th>Nick</th>
	</tr>

<?php
$conex = conexion();

$consulta = "SELECT * FROM usuario";
$res = mysqli_query($conex, $consulta);


while($fila = mysqli_fetch_array($res)){
 ?>
        <tr>
            <td><?=$fila["nombre"]?></td>
            <td><?=$fila["apellidos"]?></td>
            <td><?=$fila["correo"]?></td>
            <td><?=$fila["cp"]?></td>
            <td><?=$fila["nick"]?></td>
        </tr>
        <?php
    }
?>


</table>

<p style="text-align:center;"><a href="index.php">Volver a Portada</a></p>

<?php

cerrar_conex($conex);

include "includes/pie.php";