<?php
$id = $_POST['id_blog'];
$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['author'];
$name = '';

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
   $consulta = "UPDATE blog 
               SET 
                  title = '$title',
                  date_pub = '".date("Y")."-".date("m")."-".date("d")."',
                  image = '{$name}',
                  content = '{$content}',
                  author = '{$author}'
               WHERE id_blog = '{$id}'";
            
   $registros = mysqli_query($con, $consulta);
   
   if($registros){
   echo 'se actualizó;<br>';
   header("Location: ./"); 
   }

}

?>