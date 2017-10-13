<?php
    include "../../datos/conexion.php";
    $idproducto = $_GET['idproducto'];
    //crear el objeto conexion
    $obj = new conexion();
    //conectar la base de datos
    $con = $obj->conectar();
    //crear la consulta
    $consulta = " SELECT * FROM Productos WHERE idproducto= $idproducto ";

   

    
    mysqli_set_charset($con,"utf-8");	
    //ejecutar la consulta
    $registros = mysqli_query($con, $consulta);

    if (mysqli_num_rows($registros)>0){
        // recorrer la tabla registro por registro
        while ($fila = mysqli_fetch_assoc($registros)){
            echo '<form action="./actualizar.php" method="post" enctype="multipart/form-data">';
            echo "<tr>";
                  echo "<div><label for='titulo'>ID</label><input type='text' value='" . $fila['idproducto'] . "' name='idproducto'></div>";
                  echo "<div><label for='titulo'>Titulo</label><input type='text' value='" . $fila['titulo'] . "' name='title'></div>";
                  echo "<div><label for='descripcioncorta'>descripcionCorta</label><input type='text' value='" . $fila['descripcioncorta'] . "' name='descripcioncorta'></div>";
                  echo "<div><label for='descripcionlarga'>descripcionLarga</label><input type='text' value='" . $fila['descripcionlarga'] . "' name='descripcionlarga'></div>";
                  echo "<div><label for='precio'>Precio</label><input type='text' value='" . $fila['precio'] . "' name='precio'></div>";
                  echo "<div><label for='stock'>Stock</label><input type='text' value='" . $fila['stock'] . "' name='stock'></div>";
                  echo "<div><label for='imagen'>NombreImagen</label><input type='file' value='" . $fila['nombreimagen'] . "' name='imagen'></div>";
                  echo "<div><input type='submit' value='Actualizar'></div>";
            echo "</tr>";
            echo '</form>';
        }
    }


?>