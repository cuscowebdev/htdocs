<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge, chrome=1">
   <link rel="stylesheet" type="text/css" href="./css/mis/reset.css">
	<link rel="stylesheet" type="text/css" href="./css/mis/grid.css">
	<link rel="stylesheet" type="text/css" href="./css/mis/layout.css">
	<link rel="stylesheet" type="text/css" href="./css/mis/estilos.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" href="css/blog.css">
   <title></title>
   <meta name="description" content="">
</head>
<body>
   <?php 
      include "vista/includes/header.php";
      echo "<main class='index-container'>";
		include "vista/includes/nav.php";
   ?>
   <h1>BLOG</h1>
   <div class="blog-container">
      <?php
      include "datos/conexion.php";
      //crear el objeto conexion
      $obj = new conexion();
      //conectar la base de datos
      $con = $obj->conectar();
      //crear la consulta
      $consulta = "SELECT * FROM blog";
      mysqli_set_charset($con,"utf-8");	
      //ejecutar la consulta
      $registros = mysqli_query($con, $consulta);
      if (mysqli_num_rows($registros)>0){
         // recorrer la tabla registro por registro
         while ($fila = mysqli_fetch_assoc($registros)){
      ?>
      <a href="./lectura.php?id=<?php echo $fila['id_blog']; ?>" class="blog-item">
         <div class="blog-content">
            <h1 class="blog-title"> <?php echo $fila['title']; ?> </h1>
            <hr class="title-separador">
            <span class="blog-date"> <?php echo $fila['date_pub']; ?> </span><br>
            <p class="blog-content-text"> <?php echo $fila['content']; ?> </p><br>
            <div class="author" style="text-align: right;">Por: <?php echo $fila['author']; ?> </div><br>
            <button class="ver-mas d-b" href="./lectura.php?id=<?php echo $fila['fila']; ?>">Ver Más</button>
         </div>
         <div>
            <div class="blog-image">
               <img src="./vista/images/blog/<?php echo $fila['image']; ?>" alt="">
            </div>
         </div>
      </a>
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