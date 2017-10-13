<?php  
//crear la clase
class conexion{
	//atributos
	private $servidor = "localhost";
	private $usuario = "root";
	private $password = "";
	private $bd = "bdproyecto";
    //metodos
	public function conectar(){
		return mysqli_connect($this->servidor,$this->usuario,$this->password,$this->bd);
	}
}
//crear el objeto conexion
/*$objeto = new conexion();
$con = $objeto->conectar();
if ($con){
	echo "conectado";
}else{
	echo "no conectado";
}*/

?>