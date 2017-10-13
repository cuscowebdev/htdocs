<?php
$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['author'];
$name = '';
$consulta = '';

if (isset($_FILES['image']['tmp_name'])) {
   $name = $_FILES['image']['name'];
   $temp = $_FILES['image']['tmp_name'];
   $direccion = 'C:/xampp/htdocs/roger/vista/images/blog/'.$name;
   echo $name;
   echo $temp;
   
   move_uploaded_file($temp, $direccion);
   echo 'Es una imagen png';
   include '../../datos/conexion.php';
   $obj = new conexion();
   $con = $obj->conectar();
   $consulta = "INSERT INTO blog VALUES('','$title','".date("Y")."-".date("m")."-".date("d")."','{$name}','{$content}','{$author}')";
   $registros = mysqli_query($con, $consulta);
   
   if($registros){
   echo 'se insertó<br>';
   }
   echo $consulta;
   header("Location: ./");

}
?>