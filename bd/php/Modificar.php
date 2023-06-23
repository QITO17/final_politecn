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

$id=$_POST['ID'];
$name=$_POST['nombre'];
$descrip=$_POST['descripcion'];
$pre_ven=$_POST['pre_ven'];


$fileinfo=pathinfo($_FILES["image"]["name"]);
$newfilename=$fileinfo['filename']."_".time().".".$fileinfo['extension'];
move_uploaded_file($_FILES["image"]["tmp_name"],"../Upload/".$newfilename);
$location="Upload/".$newfilename;

$sql="UPDATE producto set Nombre='$name', Descripcion='$descrip',Precio=$pre_ven, Imagen='$location' where ID=".$id;

if ($conn->query($sql) === TRUE) {
    echo "Actualizacion Exitosa";
    } else {
    echo "Error".$conn->error;
    }

    $conn->close();
