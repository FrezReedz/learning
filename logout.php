<?php
include "includes/cabecera.php";

if(session_destroy()){

	echo "<h2>Esperamos volver a verle pronto!<br>Pase un buen dia hijo de perra</h2>";
	?>
	<h2><a href="index.php">Inicio</a></h2>
	<?php


}else{

	echo "<h2>Fallo al deslogear</h2>";
	?>
	<h2><a href="index.php">Inicio</a></h2>
	<?php

}

include "includes/pie.php";