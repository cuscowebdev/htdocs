<?php
//incluir el archivo conexion
include "../datos/conexion.php";
class usuarios{
	//atributos
	protected $idusuario;
	protected $nickname;
	protected $password;
	protected $tipousuario;

	//metodos getter setter
	public function get_idusuario(){
		return $this->idusuario;
	}
	public function set_idusuario($idusuario){
		$this->idusuario = $idusuario;
	}

	public function get_nickname(){
		return $this->nickname;
	}
	public function set_nickname($nickname){
		$this->nickname = $nickname;
	}

	public function get_password(){
		return $this->password;
	}
	public function set_password($password){
		$this->password = $password;
	}

	public function get_tipousuario(){
		return $this->tipousuario;
	}
	public function set_tipousuario($tipousuario){
		$this->tipousuario = $tipousuario;
	}
	//metodo de insercion de datos
	public function insertar($usuario,$contrasena,$tipo){
	//generar la conexion
		$objeto = new conexion();
		$con = $objeto->conectar();
	//trasladar los datos ingresados a los atributos
		$this->nickname = $usuario;
		$encriptado = sha1(md5($contrasena));
		$this->password = $encriptado;
		$this->tipousuario = $tipo;

	// Crear la consulta de insercion
		$sql = "insert into usuarios values ('','".$this->nickname."','".$this->password."','".$this->tipousuario."')";
	//Ejecutar la consulta

		if (mysqli_query($con,$sql)) {
			return true;
		}else{
			return false;
		}
		//cerrar la conexion
		mysql_close($con);

	}
}
/*// Instanciar a un objeto Usuario
$user = new usuarios();
//Enviar datos a la clase
$user->set_idusuario("1");
$user->set_nickname("Karen");
$user->set_password("123456");
$user->set_tipousuario("Administrador");

// MOstrar esos Datos

echo "IdUsuario: ".$user->get_idusuario();
echo "Nickname: ".$user->get_nickname();
echo "Password: ".$user->get_password();
echo "Tipo Usuario: ".$user->get_tipousuario();*/
$user = new usuarios();
$inserto = $user->insertar("Ollanta","123456","Lector");

if ($inserto) {
	echo "Se inserto el Usuario";
}else{
	echo "No se inserto el Usuario";
}




?>