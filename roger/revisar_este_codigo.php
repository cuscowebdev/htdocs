Este es el código:
if($_FILES['imagen']['size'] > 0){
$filename = basename( $_FILES['imagen']['name']);
$explode = explode(".",$filename);
$ext = $explode[sizeof($explode) - 1];
if(in_array($ext, $allowedExt)){
    $target_path = $targerDir . $filename;
    if(move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path)) {
            $insert = "INSERT INTO imagenes(location) VALUES('$filename');";
            mysql_query($insert) or die(mysql_error());
        }
    }
}