<?php
    include "../../datos/conexion.php";
    $id = $_GET['id'];
    //crear el objeto conexion
    $obj = new conexion();
    //conectar la base de datos
    $con = $obj->conectar();
    //crear la consulta
    $consulta = "SELECT * FROM blog WHERE id_blog = $id ";

    mysqli_set_charset($con,"utf-8");	
    //ejecutar la consulta
    $registros = mysqli_query($con, $consulta);

    if (mysqli_num_rows($registros) > 0){
        // recorrer la tabla registro por registro
        while ($fila = mysqli_fetch_assoc($registros)){
            echo '<form action="./actualizar.php" method="post" enctype="multipart/form-data">';
            echo "<tr>";

                  echo "<div><label for='id_blog'>ID: </label><input type='text' value='" . $fila['id_blog'] . "' name='id_blog'></div>";

                  echo "<div><label for='title'>Titulo: </label><input type='text' value='" . $fila['title'] . "' name='title'></div>";

                  echo "<div><label for='date_pub'>Fecha: </label><input type='text' value='" . $fila['date_pub'] . "' name='date_pub' placeholder='fecha actual x default' disabled></div>";

                  echo "<div><label for='imagen'>Imagen: </label><input type='file' value='" . $fila['image'] . "' name='image' required></div>";

                  echo "<div><label for='content'>Content: </label><input type='text' value='" . $fila['content'] . "' name='content'></div>";

                  echo "<div><label for='author'>Autor: </label><input type='text' value='" . $fila['author'] . "' name='author'></div>";

                  echo "<div><input type='submit' value='Actualizar'></div>";

            echo "</tr>";
            echo '</form>';
        }
    }


?>