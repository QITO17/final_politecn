<?php
// Datos de conexión a la base de datos
$servername = "sql209.infinityfree.com";
$username = "if0_34488165";
$password = "RldVWUF4issTC";
$dbname = "if0_34488165_login";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Obtener los valores enviados desde el formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta para verificar las credenciales
$sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

// Verificar si se encontró un registro coincidente
if ($result->num_rows > 0) {
    header('Location: offcorss.php');
    exit();
} else {
    echo 'Credenciales inválidas';
}


// Cerrar la conexión
$conn->close();
