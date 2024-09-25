<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, edad) VALUES (?, ?)");
    $stmt->execute([$nombre, $edad]);

    header("Location: index.php");
    exit();
}
?>
