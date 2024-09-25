<?php
$host = 'localhost'; // Cambia si es necesario
$db = 'crud_db';
$user = 'root'; // Cambia si es necesario
$pass = ''; // Cambia si es necesario

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
