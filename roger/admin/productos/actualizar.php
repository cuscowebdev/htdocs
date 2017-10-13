<?php
$id = $_POST['idproducto'];
$titulo = $_POST['title'];
$descripcioncorta = $_POST['descripcioncorta'];
$descripcionlarga = $_POST['descripcionlarga'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$name = '';
if (isset($_FILES['imagen']['tmp_name'])) {
   $name = $_FILES['imagen']['name'];
   $temp = $_FILES['imagen']['tmp_name'];
   $direccion = 'C:/xampp/htdocs/roger/vista/images/productos/'.$name;
   echo $name;
   echo $temp;
   
   if($_FILES['imagen']['type'] == 'image/png') {
      move_uploaded_file($temp, $direccion);
      echo 'Es una imagen png';
      include '../../datos/conexion.php';
      $obj = new conexion();
      $con = $obj->conectar();
      $consulta = "update productos 
                  set 
                     titulo = '$titulo',
                     descripcioncorta = '{$descripcioncorta}',
                     descripcionlarga = '{$descripcionlarga}',
                     precio = '{$precio}',
                     stock = '{$stock}',
                     nombreimagen = '{$name}'
                  where idproducto = '{$id}'";
               
      $registros = mysqli_query($con, $consulta);
      
      if($registros){
      echo 'se actualizó;<br>';
      header("Location: ./mantenimiento.php"); 
      }
   }else {
      echo 'Imagen png0;';
      header("Location: ./editar.php?idproducto={$id}"); 
   }
}

?>