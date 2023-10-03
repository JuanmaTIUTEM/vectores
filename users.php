<?php
$servername = "localhost";
$username = "adminLogin";
$password = "A(bq_B0eOW[/CxQt";
$database = "dbLogin";

// Crear una conexión a la base de datos
$users = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($users->connect_error) {
    die("Error de conexión: " . $users->connect_error);
}

// Establecer el juego de caracteres a UTF-8 (opcional)
$users->set_charset("utf8");

function getAllUsers($con){
    $query = "SELECT * FROM vwallusersdata";
    $result = $con->query($query);
    $data = [];
    while($row = $result->fetch_assoc()){
        $data[] =  $row;
    }
    return $data;
}


?>