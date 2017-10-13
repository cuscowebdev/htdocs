<?php 
include "../datos/conexion.php";
$obj = new conexion();
$con = $obj->conectar();
session_start();
$suma = 0;
if (isset($_GET['p'])) {
	$_SESSION['producto'][$_SESSION['contador']] = $_GET['p'];
	$_SESSION['contador']++;
}

echo "<table border='2px'>";
echo "<tr>";
echo "<th>nombre del producto</th><th>precio</th>";
echo "</tr>";
for ($i=0; $i < $_SESSION['contador']; $i++) { 
	$consulta = "select * from productos where idproducto= '".$_SESSION['producto'][$i]."'";
	$resultado= mysqli_query($con,$consulta);
	while ($fila = mysqli_fetch_array($resultado)) {
		echo "<tr>";
		echo "<td>".$fila['titulo']."</td>";
        echo "<td>".$fila['precio']."</td>";
        echo "</tr>";
        $suma = $suma + $fila['precio'];

	}
}

        echo "<tr>";
		echo "<td>costo total :</td>";
        echo "<td>".number_format($suma,2)."</td>";
        echo "</tr>";
        echo "</table>";
        


 ?>
