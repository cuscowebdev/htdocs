<?php
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge, chrome=1">
   <title>Blog</title>
   <meta name="description" content="">
   <link rel="stylesheet" href="./css/mis/reset.css">
   <link rel="stylesheet" href="./css/mis/grid.css">
   <link rel="stylesheet" href="./css/mis/layout.css">
   <link rel="stylesheet" href="./css/mis/estilos.css">
   <link rel="stylesheet" type="text/css" href="./css/style.css">
   <link rel="stylesheet" href="./css/blog.css">
</head>

<body>
   <?php
   include "vista/includes/header.php";
   ?>
   <?php
   echo "<main class='index-container'>";
   include "vista/includes/nav.php";
   ?>
   <div class="lectura-container">
      <?php
      include "datos/conexion.php";
      //crear el objeto conexion
      $obj = new conexion();
      //conectar la base de datos
      $con = $obj->conectar();
      //crear la consulta
      $consulta = "SELECT * FROM blog WHERE id_blog = {$id}";
      mysqli_set_charset($con,"utf-8");	
      //ejecutar la consulta
      $registros = mysqli_query($con, $consulta);
      if (mysqli_num_rows($registros)>0){
         // recorrer la tabla registro por registro
         while ($fila = mysqli_fetch_assoc($registros)){
      ?>
      <div class="lectura-item">
         <div class="lectura-image">
            <img src="vista/images/blog/<?php echo $fila['image']; ?>" alt="">
         </div>
         <div class="lectura-content">
            <h1 class="lectura-title"><?php echo $fila['title']; ?></h1>
            <hr>
            <span class="lectura-date"><?php echo $fila['date_pub']; ?></span>
            <p class="lectura-content-text"><?php echo $fila['content'];  ?></p>
            <div class="author" style="text-align: right;">Por: <?php echo $fila['author']; ?></div><br>
         </div>
      </div>
      <?php
         }
      }
      ?>
   </div>
   <?php
   mysqli_close($con);
   echo "</main>";
   include "vista/includes/footer.php";
   ?>
</body>

</html>