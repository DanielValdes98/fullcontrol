<?php

$servername = "localhost:3306";
$username = "root";
$password = "admin";
$dbname = "dbfullcontrolprueba";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn) {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    
    $sql = "INSERT INTO usuarios (nombre, clave) VALUES ('$usuario', '$clave')";
    if ($conn->query($sql) === TRUE) {
        header('location: index.php');
      } else {
        echo "Error al insertar registro: " . $conn->error;
      }
  
} else if($conn->connect_error){
    die("Conexión fallida: " . $conn->connect_error);
}

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}




?>

