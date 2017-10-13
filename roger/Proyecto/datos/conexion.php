<?php
class conexion{
	private $servidor = "localhost";
	private $usuario = "admin";
	private $password = "123456";
	private $bd = "bdproyecto";

	public function conectar(){
		return mysqli_connect($this->servidor,$this->usuario,$this->password,$this->bd);
	}
}

//probar conexion
$objcon = new conexion();
$con = $objcon->conectar();
if ($con){
	echo "conectado";
}else{
	echo "no conectado";
}


?>