<!DOCTYPE html>
<html>
<head>
	<title>Login de Usuario - Taller de Programacion Web</title>
	<meta charset="utf-8">
	<meta mane="description" content="Registro de  usuario al sitio web  taller  de Programacion web">
	<meta name="Keywords" content="login, login user, usuario registro, taller de Programacion web">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="../js/jquery.js"></script>
	<script src="../js/script.js"></script>	
</head>
<body>
	<?php 
	include"includes/header1.php";
	include"includes/nav.php";
	 ?>
	 <div id="contenido">
	 	<section id="campos">
	 		<form action="login.php" method="POST">
		 		<p>Usuario:
		 			<input class="boton1" type="text" id="txtusuario" autofocus required>
		 		</p>
		 		<p>Contraseña:
		 			<input class="boton2" type="password" id="txtpassword"  required>
		 		</p>
		 		<p>Confirmar contraseña:
		 			<input  class="boton3" type="password" id="txtconfirmar" autofocus required>
		 		</p>
		 		<p id="mensaje"></p>
		 		<input class="boton4" type="button" id="btnregistrar" value="Registar">
		 		<p id="resultado"></p>
	 		</form>
	 		
	 	</section>
	 	<aside>
	 		
	 	</aside>
	 </div>
	 <?php 
	 include"includes/footer.php";
	  ?>
</body>
</html>