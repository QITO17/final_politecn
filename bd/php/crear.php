
<?php
$host = "sql209.infinityfree.com";
$user = "if0_34488165";
$pass = "RldVWUF4issTC";
$db = "if0_34488165_productos_offcorss";
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
	die("Error al conectar" . mysqli_connect_error());
} else {
	echo "Conexion Exitosa ♥";
}

$name = $_POST['nombre'];
$descrip = $_POST['descripcion'];
$pre_ven = $_POST['pre_ven'];
$fileinfo = PATHINFO($_FILES["image"]["name"]);
$newfilename = $fileinfo['filename'] . "_" . time() . "." . $fileinfo['extension'];
move_uploaded_file($_FILES["image"]["tmp_name"], "../Upload/" . $newfilename);
$location = "Upload/" . $newfilename;


$sql = "INSERT INTO producto(Nombre, Descripcion, Precio, Imagen) 
VALUES ('$name','$descrip',$pre_ven,'$location')";


if (mysqli_query($conn, $sql)) {
	echo "Muy Bien ♥";
} else {
	echo "Error" . $sql . mysqli_error($conn);
}
?>
