<!DOCTYPE html>
<html lang="es">
<head>
	<title>Productos - Taller de Programacion WEB</title>
	<meta charset="utf-8">
	<meta mane="description" content="Lista de prodcutos tienda online">
	<meta name="Keywords" content="productos, compram, online carrito de compras">
	<link rel="stylesheet" type="text/css" href="./css/mis/reset.css">
	<link rel="stylesheet" type="text/css" href="./css/mis/grid.css">
	<link rel="stylesheet" type="text/css" href="./css/mis/layout.css">
	<link rel="stylesheet" type="text/css" href="./css/mis/estilos.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<?php 
		include "vista/includes/header.php";
      echo "<main class='index-container'>";
      include "vista/includes/nav.php";
   ?>
<div id="contenido">	
	<section>	

         <section class="productos-main d-f jc-sb">
         <section class="product-container d-f fxw-w">
         <?php
         include "datos/conexion.php";
         //crear el objeto conexion
         $obj = new conexion();
         //conectar la base de datos
         $con = $obj->conectar();
         //crear la consulta
         $consulta = "select * from Productos";
         mysqli_set_charset($con,"utf-8");	
         //ejecutar la consulta
         $registros = mysqli_query($con, $consulta);
         if (mysqli_num_rows($registros)>0){
            // recorrer la tabla registro por registro
            while ($fila = mysqli_fetch_assoc($registros)){
         ?>
            <article class="product-item">
            <a href="" class="product-image">
               <?php echo "<img src='vista/images/productos/".$fila['nombreimagen']."'>"; ?>
            </a>
            <div class="product-info">
               <p class="product-name"><a href="product-detail.html"><?php echo $fila['titulo']; ?></a></p>
               <p class="product-description"><a href="" class="fz_75"><?php echo $fila['descripcioncorta']; ?></a></p>
               <p class="product-price"><a href=""><?php echo $fila['precio']; ?></a></p>
               <?php
						echo "<button value='".$fila['idproducto']."' class='botoncompra'>Agregar al carrito</button>"
					?>
            </div>
         </article>

         <?php
            }
         }
         ?>
         </section>

         <aside class="product-car">
            <div class="car-image">
            <img src="vista/images/productos/carritos.png">
            </div>
            <div id="carrito">
            </div>
            <a href="carrito/destruir.php"><button>vaciar carrito</button></a>
            <a href="confirmar.php"><button>confirmar compras</button></a>
         </aside>
      </section>
         <?php
			//cerrar la conexion
			mysqli_close($con);
			?>		
         
   </section>
   
   <!-- <section class="productos-main d-f ">
      <section class="product-container d-f fxw-w">
         <article class="product-item">
            <a href="" class="product-image">
               <img src="vista/images/productos/chocosoda.png" alt="">   
            </a>
            <div class="product-info">
               <p class="product-name"><a href="product-detail.html">LENOVO ideapad 500</a></p>
               <p class="product-description"><a href="" class="fz_75">Procesador Intel(R) Core(TM) i5-6200U CPU @ 2.30GHz 2.40GHz...</a></p>
               <p class="product-price"><a href="">500.00$</a></p>
               <button value='".$fila['idproducto']."' class='botoncompra'>Agregar al carrito</button>
            </div>
         </article>
         <article class="product-item">
            <a href="" class="product-image">
               <img src="vista/images/productos/chocosoda.png" alt="">   
            </a>
            <div class="product-info">
               <p class="product-name"><a href="product-detail.html">LENOVO ideapad 500</a></p>
               <p class="product-description"><a href="" class="fz_75">Procesador Intel(R) Core(TM) i5-6200U CPU @ 2.30GHz 2.40GHz...</a></p>
               <p class="product-price"><a href="">500.00$</a></p>
               <button value='".$fila['idproducto']."' class='botoncompra'>Agregar al carrito</button>
            </div>
         </article>
         <article class="product-item">
            <a href="" class="product-image">
               <img src="vista/images/productos/chocosoda.png" alt="">   
            </a>
            <div class="product-info">
               <p class="product-name"><a href="product-detail.html">LENOVO ideapad 500</a></p>
               <p class="product-description"><a href="" class="fz_75">Procesador Intel(R) Core(TM) i5-6200U CPU @ 2.30GHz 2.40GHz...</a></p>
               <p class="product-price"><a href="">500.00$</a></p>
               <button value='".$fila['idproducto']."' class='botoncompra'>Agregar al carrito</button>
            </div>
         </article>
         <article class="product-item">
            <a href="" class="product-image">
               <img src="vista/images/productos/chocosoda.png" alt="">   
            </a>
            <div class="product-info">
               <p class="product-name"><a href="product-detail.html">LENOVO ideapad 500</a></p>
               <p class="product-description"><a href="" class="fz_75">Procesador Intel(R) Core(TM) i5-6200U CPU @ 2.30GHz 2.40GHz...</a></p>
               <p class="product-price"><a href="">500.00$</a></p>
               <button value='".$fila['idproducto']."' class='botoncompra'>Agregar al carrito</button>
            </div>
         </article>
         <article class="product-item">
            <a href="" class="product-image">
               <img src="vista/images/productos/chocosoda.png" alt="">   
            </a>
            <div class="product-info">
               <p class="product-name"><a href="product-detail.html">LENOVO ideapad 500</a></p>
               <p class="product-description"><a href="" class="fz_75">Procesador Intel(R) Core(TM) i5-6200U CPU @ 2.30GHz 2.40GHz...</a></p>
               <p class="product-price"><a href="">500.00$</a></p>
               <button value='".$fila['idproducto']."' class='botoncompra'>Agregar al carrito</button>
            </div>
         </article>
         <article class="product-item">
            <a href="" class="product-image">
               <img src="vista/images/productos/chocosoda.png" alt="">   
            </a>
            <div class="product-info">
               <p class="product-name"><a href="product-detail.html">LENOVO ideapad 500</a></p>
               <p class="product-description"><a href="" class="fz_75">Procesador Intel(R) Core(TM) i5-6200U CPU @ 2.30GHz 2.40GHz...</a></p>
               <p class="product-price"><a href="">500.00$</a></p>
               <button value='".$fila['idproducto']."' class='botoncompra'>Agregar al carrito</button>
            </div>
         </article>
         <article class="product-item">
            <a href="" class="product-image">
               <img src="vista/images/productos/chocosoda.png" alt="">   
            </a>
            <div class="product-info">
               <p class="product-name"><a href="product-detail.html">LENOVO ideapad 500</a></p>
               <p class="product-description"><a href="" class="fz_75">Procesador Intel(R) Core(TM) i5-6200U CPU @ 2.30GHz 2.40GHz...</a></p>
               <p class="product-price"><a href="">500.00$</a></p>
               <button value='".$fila['idproducto']."' class='botoncompra'>Agregar al carrito</button>
            </div>
         </article>
      </section>

      <aside class="product-car">
      <img src="vista/images/productos/carritos.png">
         <div id="carrito">
         </div>
         <a href="carrito/destruir.php"><button>vaciar carrito</button></a>
         <a href="confirmar.php"><button>confirmar compras</button></a>
      </aside>
   </section> -->

</div>
      <?php
      echo "</main>";
		include "vista/includes/footer.php";
		?>
</body>
</html>