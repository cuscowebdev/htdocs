<!DOCTYPE html>
<html lang="es">
<head>
	<title>galeria de imagenes - Taller de Programacion WEB</title>
	<meta charset="utf-8">
	<meta mane="description" content="Desarollaremosuna galeria de imagenes  para el sitio web">
	<meta name="Keywords" content="galeria imagenes,galeria,imagenes">
	<link rel="stylesheet" type="text/css" href="./css/mis/reset.css">
	<link rel="stylesheet" type="text/css" href="./css/mis/grid.css">
	<link rel="stylesheet" type="text/css" href="./css/mis/layout.css">
	<link rel="stylesheet" type="text/css" href="./css/mis/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<?php 
      include "vista/includes/header.php";
      echo "<main class='index-container'>";
		include "vista/includes/nav.php";
	 ?>
<div id="contenido">
	<section>
		<h1>galeria de imagenes</h1>
		<div>
			<ul class="galeria">
		<li><a href="#img1"><img src="vista/images/galeria/1.jpg"></a></li>
		<li><a href="#img2"><img src="vista/images/galeria/2.jpg"></a></li>
		<li><a href="#img3"><img src="vista/images/galeria/3.jpg"></a></li>
		<li><a href="#img4"><img src="vista/images/galeria/4.jpg"></a></li>
		

	</ul>

	<div class="modal" id="img1">
		<h3>Paisaje 1</h3>
		<div class="imagen">
			<a href="#img4">&#60;</a>
			<a href="#img2"><img src="vista/images/galeria/1.jpg"></a>
			<a href="#img2">></a>
		</div>
		<a class="cerrar" href="">X</a>
	</div>
	
	<div class="modal" id="img2">
		<h3>Paisaje 2</h3>
		<div class="imagen">
			<a href="#img1">&#60;</a>
			<a href="#img3"><img src="vista/images/galeria/2.jpg"></a>
			<a href="#img3">></a>
		</div>
		<a class="cerrar" href="">X</a>
	</div>
	
	<div class="modal" id="img3">
		<h3>Paisaje 3</h3>
		<div class="imagen">
			<a href="#img2">&#60;</a>
			<a href="#img4"><img src="vista/images/galeria/3.jpg"></a>
			<a  href="#img4">></a>
		</div>
		<a class="cerrar" href="">X</a>
	</div>
	
	<div class="modal" id="img4">
		<h3>Paisaje 4</h3>
		<div class="imagen">
			<a href="#img3">&#60;</a>
			<a href="#img1"><img src="vista/images/galeria/4.jpg"></a>
			<a href="#img1">></a>
		</div>
		<a class="cerrar" href="">X</a>
	</div>

	
		</div>
	</section>
	<aside>
		contenido lateral del sitio web
	</aside>
</div>
<?php
echo "</main>";
include "vista/includes/footer.php";
?>
</body>
</html>