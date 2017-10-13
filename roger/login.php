<?php
	//incluir la clase usuarios
	include "datos/conexion.php"; 
	include "entidades/usuarios.php";
	//verificar si existen los datos
	if (isset($_GET['txtusuario']) || isset($_GET['txtpassword'])){
		//crear (instanciar) un objeto de la clase usuarios
		$usuarioclase = new usuarios();
		//insertar el usuario y la contraseña
		$usu = $_GET['txtusuario'];
		$pas = $_GET['txtpassword'];
		//comparacion
		if ($usuarioclase->comparar($usu,$pas)){
			//iniciar la sesión
			session_start();
			$_SESSION['usuario'] = $usu;
			header("Location:index.php");			
		}else{
			if (!$usuarioclase->compararUsuario($usu)){
				header("Location:index.php?error=usu");
			}else{
				header("Location:index.php?error=pas");
			}

		}
	}else{
		echo "No hay datos";
	}
?>