
<?php 

$host = "sql209.infinityfree.com";
$user = "if0_34488165";
$pass = "RldVWUF4issTC";
$db = "if0_34488165_productos_offcorss";
$conn=mysqli_connect($host,$user,$pass,$db);
if (!$conn) {
	die("Error al conectar".mysqli_connect_error());
}else{
	echo "Conexion Exitosa ♥";
}


$id=$_POST['id'];

$sql="DELETE from producto where ID=".$id;

if (mysqli_query($conn,$sql)) {
	echo "Eliminacion Exitosa ♥";
}else{
	echo "Error".$sql.mysqli_error($conn);
}
?>
