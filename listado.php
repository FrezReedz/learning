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
            <td><?=ucwords(strtolower($fila["nombre"]))?></td>
            <td><?=ucwords(strtolower($fila["apellidos"]))?></td>
            <td><?=ucwords(strtolower($fila["correo"]))?></td>
            <td><?=ucwords(strtolower($fila["cp"]))?></td>
            <td><?=ucwords(strtolower($fila["nick"]))?></td>
        </tr>
        <?php
    }
?>


</table>

<p style="text-align:center;"><a href="index.php">Volver a Portada</a></p>

<?php


cerrar_conex($conex);

include "includes/pie.php";