<h1>Mantenimiento de Productos</h1>
<p>En esta seccion podremos agregar, actualizar, eliminar productos de nuestra tienda online</p>

<div id="contenido">	
	<section>
		<?php
			include "../../datos/conexion.php";
			//crear el objeto conexion
			$obj = new conexion();
			//conectar la base de datos
			$con = $obj->conectar();
			//crear la consulta
			$consulta = "select * from Productos";
			mysqli_set_charset($con,"utf-8");	
			//ejecutar la consulta
			$registros = mysqli_query($con, $consulta);
		?>
		<table border="1">
			<tr>
				<td>title</td>
				<td>description small</td>
				<td>description large</td>
				<td>price</td>
				<td>stock</td>
				<td>name image</td>
				<td colspan="2">Operaciones</td>
			</tr>
		
		<?php

			if (mysqli_num_rows($registros)>0){
				// recorrer la tabla registro por registro
				while ($fila = mysqli_fetch_assoc($registros)){
					echo "<tr>";
						echo "<td>" . $fila['titulo'] . "</td>";
						echo "<td>" . $fila['descripcioncorta'] . "</td>";
						echo "<td>" . $fila['descripcionlarga'] . "</td>";
						echo "<td>" . $fila['precio'] . "</td>";
						echo "<td>" . $fila['stock'] . "</td>";
						echo "<td><img src='../../vista/images/productos/".$fila['nombreimagen']."' width='100'></td>";
						echo "<td><a href='eliminar.php?id={$fila['idproducto']}'>Eliminar</a></td>";
						echo "<td><a href='editar.php?idproducto=". $fila['idproducto'] ."'>Editar</a></td>";
					echo "</tr>";
		?>
		<?php
			}
		}
		//cerrar la conexion
		// mysqli_close($con);
		?>
         <form action="./insertar.php" method="post" enctype="multipart/form-data">
         <tr>
            <td><input type="text" name="title"></td>
            <td><input type="text" name="descripcioncorta"></td>
            <td><input type="text" name="descripcionlarga"></td>
            <td><input type="text" name="precio"></td>
            <td><input type="text" name="stock"></td>
            <td><input type="file" name="imagen"></td>
            <td colspan="2"><input type="submit" value="Inseratar"></td>
         </tr>
         </form>
		</table>
	</section>
	<aside>

	</aside>
</div>
   
   <?php
	include "../../vista/includes/footer.php";
	?>
</body>
</html>

