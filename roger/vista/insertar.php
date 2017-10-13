<?php
	//incluir la clase usuarios
	include "../datos/conexion.php";
	include "../entidades/usuarios.php";	
	//Consultar si existe un usuario y una contraseña
	if (isset($_GET['usuario']) || isset($_GET['pass'])){
		//crear (instanciar) un objeto de la clase usuarios
		$usuarioclase = new usuarios();
		//insertar el usuario y la contraseña
		$usu = $_GET['usuario'];
		$pas = $_GET['pass'];
		if (!$usuarioclase->existeusuario($usu)){
			if ($usuarioclase->insertar($usu,$pas,"lector")){
				echo "Inserto el elemento";
			}
			else{
				echo "No inserto el elemento";
			}
		}else{
			echo "Ya existe el usuario";
		}	
	}else{
		echo "No hay usuario ni contraseña";
	}
?>