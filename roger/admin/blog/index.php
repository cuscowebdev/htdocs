<div id="contenido">	
	<section>
		<?php
			include "../../datos/conexion.php";
			//crear el objeto conexion
			$obj = new conexion();
			//conectar la base de datos
			$con = $obj->conectar();
			//crear la consulta
			$consulta = "SELECT * FROM blog";
			mysqli_set_charset($con,"utf-8");	
			//ejecutar la consulta
			$registros = mysqli_query($con, $consulta);
		?>
		<table border="1">
			<tr>
				<td>title</td>
				<td>date_pub</td>
				<td>image</td>
				<td>content</td>
				<td>author</td>
				<td colspan="2">Operaciones</td>
			</tr>
		
		<?php

			if (mysqli_num_rows($registros)>0){
				// recorrer la tabla registro por registro
				while ($fila = mysqli_fetch_assoc($registros)){
					echo "<tr>";
						echo "<td>" . $fila['title'] . "</td>";
						echo "<td>" . $fila['date_pub'] . "</td>";
						echo "<td><img src='../../vista/images/blog/".$fila['image']."' width='100'></td>";
						echo "<td>" . $fila['content'] . "</td>";
						echo "<td>" . $fila['author'] . "</td>";
						echo "<td><a href='eliminar.php?id={$fila['id_blog']}'>Eliminar</a></td>";
						echo "<td><a href='editar.php?id=". $fila['id_blog'] ."'>Editar</a></td>";
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
            <td><input type="text" name="date_pub" placeholder="fecha actual x default" disabled></td>
            <td><input type="file" name="image"></td>
            <td><input type="text" name="content"></td>
            <td><input type="text" name="author"></td>
            <td colspan="2"><input type="submit" value="Insertar"></td>
         </tr>
         </form>
		</table>
	</section>
	<aside>

	</aside>
</div>