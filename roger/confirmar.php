<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Confirmando la compra - Taller de Programción Web</title>
	<meta mane="description" content="Desarollaremosuna galeria de imagenes  para el sitio web">
	<meta name="Keywords" content="galeria imagenes,galeria,imagenes">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<?php
		include "vista/includes/header.php";
		include "vista/includes/nav.php";

		echo "<div id='contenido'>";
		echo "<section>";

		if (isset($_SESSION['usuario'])){
			//en caso haya iniciado sesión
			$contador = 0;
			//establecer la conexion con la base de datos
			include "datos/conexion.php";
			//crear conexion
			$obj = new conexion();
			$con = $obj->conectar();
			//crear una consulta para recuperar al usuario y la contraseña
			$consulta = "select * from usuarios where 
						nickname = '".$_SESSION['usuario']."'";
			//ejecutar la consulta
			$resultado = mysqli_query($con,$consulta);	
			//recuperar los datos en variables
			while ($fila = mysqli_fetch_array($resultado)){
				$contador++;
				$_SESSION['idusuario'] = $fila['idusuario'];
			}
			//preguntar si el contador es mayor a 0
			if ($contador > 0){
				//insertar a pedidos el registro
				$insertar = "insert into pedidos values 
('','".$_SESSION['idusuario']."','".date("Y")."-".date("m")."-".date("d")."','0')";
				//ejecutar la consulta anterior
				mysqli_query($con,$insertar);
				//capturar el idpedido que genere en la inserción anterior
				$sql = "select * from pedidos 
						where idcliente = '".$_SESSION['idusuario']."'
						order by fechapedido desc limit 1";
				//ejecutar la consulta
				$resultado = mysqli_query($con,$sql);
				//recuperar el idpedido
				while ($fila = mysqli_fetch_array($resultado)){
					$_SESSION['idpedido'] = $fila['idpedido'];
				}
				//guardar en la tabla detallepedido todos los productos del pedido
				for ($i=0; $i < $_SESSION['contador']; $i++) { 
					//consulta de inserción por producto
					$insertarproducto = "insert into detallepedido values 
						('','".$_SESSION['idpedido']."',
						'".$_SESSION['producto'][$i]."','1')";
					//ejecutar la consulta de insercion
					mysqli_query($con,$insertarproducto);
					//actualizar el stock
					//recuperar el idproducto
					$peticion = "select * from productos
				where idproducto = '".$_SESSION['producto'][$i]."'";
					//ejecutar dicha peticion
					$resultado = mysqli_query($con,$peticion);	
					//actualizacion del stock del producto
					while ($fila = mysqli_fetch_array($resultado)){
						$cantidad = $fila['stock'];
						//actualizar la cantidad de productos
						$actualizar = "update productos
									   set stock = '".($cantidad-1)."'
									   where idproducto = '".$_SESSION['producto'][$i]."'";
						//ejecutar la actualizacion
						mysqli_query($con,$actualizar);
					}

				}
				//enviar el mensaje de exito
				echo "<p>Tu pedido se ha realizado satisfactoriamente.</p>";
				echo "<p>Redigiriendo a la página principal en 20 segundos</p>";
				echo "<meta http-equiv='refresh' content='20' url='index.php'>";
			}else{
				echo "<p>el usuario no existe</p>";
				echo "<p>Redigiriendo a la página principal en 20 segundos</p>";
				echo "<meta http-equiv='refresh' content='20' url='index.php'>";
			}

			//debes cerrar la conexion
			mysqli_close($con);					

		}else{
			echo "<p>Debes loguearte para poder realizar la compra</p>";
		}
		

		echo "</section>";
		echo "<aside>";
		echo "</aside>";
		echo "</div>";

		include "vista/includes/footer.php";
	?>





