<?php
$id = $_GET['id'];
include '../../datos/conexion.php';
$obj = new conexion();
$con = $obj->conectar();
$consulta = "delete from productos where idproducto = {$id}";
$registros = mysqli_query($con, $consulta);

if($registros){
echo 'se eliminó;<br>';
}
echo $consulta;
header("Location: mantenimiento.php");