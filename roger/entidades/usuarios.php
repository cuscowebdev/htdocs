<?php 
//incluir el archivo conexion
//include "../datos/conexion.php"; 
class usuarios{
	//atributos
	protected $idusuario;
	protected $nickname;
	protected $password;
	protected $tipousuario;
	// metodos getters y setters
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
        //trasladar los adatos ingresados a los atributos
        $this->nickname = $usuario;
        $encriptado = sha1(md5($contrasena));
        $this->password = $encriptado;
        $this->tipousuario = $tipo;
        //crear la consulta de insercion
        $sql = "insert into usuarios values ('','".$this->nickname."','".$this->password."','".$this->tipousuario."')";
        //ejecutar la consulta
        if (mysqli_query($con,$sql)){
        	return true;
        }else{
        	return false;
        }
        //cerrar la actualizacion
        mysqli_close($con);
	}

	//metodo de actualizacion de datos
	public function actualizar($id,$contrasena,$tipo){
		//creo la cadena de conexion
		$objeto = new conexion();
		$con = $objeto->conectar();
		//actualizar los datos
		$this->set_idusuario($id);
		$encriptado =sha1(md5($contrasena));
		$this->set_password($encriptado);
		$this->set_tipousuario($tipo);
		//cadena de actualizacion
		$sql ="update usuarios 
		       set password='".$this->password."',
		           tipousuario = '".$this->tipousuario."'
		        where idusuario='".$this->idusuario."'";
		        //ejecutar la conexion
		if (mysqli_query($con,$sql)) {
			return true;
		}else{
			return false;
		}
		//cerrar la actualizacion
        mysqli_close($con);

	}

	//metodoo de eliminacion de datos
	public function eliminar($id){
		//creo la cadena de conexion
		$objeto = new conexion();
		$con = $objeto->conectar();
		//actualizar los datos
		$this->set_idusuario($id);
		$sql = "delete from usuarios 
		        where idusuario ='".$this->idusuario."'";

		if (mysqli_query($con,$sql)) {
			return true;
		}else{
			return false;
		}
		//cerrar la actualizacion
        mysqli_close($con);
	}

	//metodoo de si existe el usuario para no suplicar el usuario
	public function existeusuario($nombre){
		//creo la cadena de conexion
		$objeto = new conexion();
		$con = $objeto->conectar();
		//debo fabricar la consulta
		$consulta = "select * from usuarios 
		        where nickname ='$nombre'";
        
        //ejecutar loa consulta
		$registros = mysqli_query($con,$consulta);
		//verificar si esta consulta devuelve datos
		if (mysqli_num_rows($registros)>0){
			return true;
		}else{
			return false;
		}
		//cerrar la actualizacion
        mysqli_close($con);
	}
	
	public function comparar($usuario,$contrasena){
		//creo la cadena de conexion
		$objeto = new conexion();
		$con = $objeto->conectar();
		//crear una variable que vamos a transformar
		$nuevacontrasena = sha1(md5($contrasena));
		//debo fabricar la consulta
		$consulta = "select * from usuarios
					where nickname = '$usuario' and
					      password = '$nuevacontrasena'";
		//Verificar si hay datos o no en la consulta
		//ejecutar loa consulta
		$registros = mysqli_query($con,$consulta);
		//verificar si esta consulta devuelve datos
		if (mysqli_num_rows($registros)>0){
			return true;
		}else{
			return false;
		}
		//cerrar la actualizacion
        mysqli_close($con);			      
	}
	public function compararUsuario($usuario){
		//creo la cadena de conexion
		$objeto = new conexion();
		$con = $objeto->conectar();
		//debo fabricar la consulta
		$consulta = "select * from usuarios
					where nickname = '$usuario'";
		//Verificar si hay datos o no en la consulta
		//ejecutar loa consulta					
		$registros = mysqli_query($con,$consulta);
		//verificar si esta consulta devuelve datos
		if (mysqli_num_rows($registros)>0){
			return true;
		}else{
			return false;
		}
		//cerrar la actualizacion
        mysqli_close($con);				
	}
	public function compararPassword($contrasena){
		//creo la cadena de conexion
		$objeto = new conexion();
		$con = $objeto->conectar();
		//crear una variable que vamos a transformar
		$nuevacontrasena = sha1(md5($contrasena));
		//debo fabricar la consulta
		$consulta = "select * from usuarios
					where password = '$nuevacontrasena'";					
		//Verificar si hay datos o no en la consulta
		//ejecutar loa consulta
		$registros = mysqli_query($con,$consulta);
		//verificar si esta consulta devuelve datos
		if (mysqli_num_rows($registros)>0){
			return true;
		}else{
			return false;
		}
		//cerrar la actualizacion
        mysqli_close($con);				
	}		
}
/*$user = new usuarios();
$comparar = $user->compararPassword("123456sdfasfsa");
if ($comparar){
	echo "Verdad";
}else{
	echo "Maldad";
}
//probar la funcion comparar
/*$user = new usuarios();
$comparar = $user->comparar("Ivan","123456");
if ($comparar) {
	echo "Ingreso";
}else{
	echo "Datos incorrectos";
}*/

//instanciar a un objeto usuario
/*$user = new usuarios();
//enviar  doatos  ala clase
$user->set_idusuario("1");
$user->set_nickname("Hilda");
$user->set_password("123456");
$user->set_tipousuario("Administrador");
//mostrar esoso datos
echo "IdUsuario: ".$user->get_idusuario();
echo "Nickname: ".$user->get_nickname();
echo "Password: ".$user->get_password();
echo "Tipo usuario: ".$user->get_tipousuario();*/

//crear un objeto usuario insertar 
/*$user = new usuarios();
$inserto = $user->insertar("Ollanta","123456","Lector");
if ($inserto) {
	echo "Se inserto el usuario";
}else{
	echo "No se inserto el usuario";
}

//instanciar un objeto de usuario actualizar
/*$user = new usuarios();
$actualizo = $user->actualizar("1","hola","Administrador");
if ($actualizo) {
	echo "Se actualizo los datos";
}else{
	echo "No se actualizo ";
}*/

//instanciar un objeto de usuario eliminar
/*$user = new usuarios();
$elimino = $user->eliminar("1");
if ($elimino) {
	echo "Se eliminó los datos";
}else{
	echo "No se eliminó ";
}*/

//instanciar un objeto de usuario nickname para que no hayga el duplicado
/*$user = new usuarios();
$existe = $user->existeusuario("Ollanta");
if ($existe) {
	echo "Si existe en la base datos ";
}else{
	echo "No existe en la base datos ";
}*/
?>