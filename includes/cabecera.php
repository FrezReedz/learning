<?php 
session_start();
include_once "includes/funciones.php";
if(isset($_SESSION["login_user"]) && ($_SESSION["login_user"] != "")){
	$usuario =  recuperar_usuario($_SESSION["login_user"]);
}

if (!isset($_SESSION["tema"])) {
	$_SESSION["tema"] = "";
}

?>

<!DOCUTYPE html>
<html lang="es">
	<head>
		<title>Prácticas PHP</title>
		<?php cargar_estilo(); ?>
		<meta charset="utf8">
		<link href='https://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>
	</head>

	<body>
		<header>
			<div class="topbar">
				<?php cargar_topbar();?>		
			</div>
			<p class="header">
				<a href="index.php" ><img class="logo"src="includes/img/php-logo.png"></a>
				Ejercicios PHP
			</p>
			<div class="nav">
				<a class="nav" href="noticias.php">Noticias</a>
				<a class="nav" href="contacto.php">Contacto</a>
				<a class="nav" href="about.php">About</a>
			</div>
		</header>

		<div class="wrap">
		<aside>
				<ul>
					<li><a href="http://php.net/manual/es/" target="_blank">PHP.net Castellano</a></li>
					<li><a href="http://www.cssmatic.com/box-shadow" target="blank">Box-Shadow Maker</a></li>
					<li><a href="http://paletton.com/" target="blank">Paletton</a></li>
					<li><a href="http://learn.shayhowe.com/html-css/positioning-content/" target="_blank">HTML y CSS tutoriales</a></li>
					<li><a href="http://www.kabytes.com/programacion/organizadores-de-codigo-gratis-php-css-html-javascript-sql/" target="_blank">Formateadores Código</a></li>
					<li><a href="https://www.google.com/fonts" target="_blank">Google Fonts</a></li>
					<li><a href="http://code.tutsplus.com/tutorials/sanitize-and-validate-data-with-php-filters--net-2595" target="_blank">Ejemplos Validaciones y Saneamiento</a></li>
					<li><a href="http://docs.emmet.io/abbreviations/syntax/" target="_blank">Emmet Documentation</a></li>
					<li><a href="https://www.dreamhost.com/blog/2013/05/22/php-security-user-validation-and-sanitization-for-the-beginner/" target="_blank">Validation tutorial</a></li>
					<li><a href="http://www.geekgumbo.com/2014/11/12/php-validation-with-filter_var/" target"_blank">Validation faq</a></li>
					<li><a href="http://www.phptherightway.com/#data_filtering" target="_blank">The Right Way</a></li>
					<li><a href="http://foaa.de/blog/2012/11/27/php-validation-and-sanitization/#how-to-employ" target="_blank">++Sanitization Validation</a></li>
					<li><a href="http://hex.colorrrs.com/" target="_blank">HEX to RGB</a></li>
				</ul>
		</aside>
		
		<section>
	