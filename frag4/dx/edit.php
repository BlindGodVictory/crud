<?php
include 'db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
$stmt->execute([$id]);
$dato = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    $stmt = $pdo->prepare("UPDATE usuarios SET nombre = ?, edad = ? WHERE id = ?");
    $stmt->execute([$nombre, $edad, $id]);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Editar Registro</h1>
        
        <form action="" method="POST">
            <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $dato['nombre']; ?>" required>
            <input type="number" name="edad" placeholder="Edad" value="<?php echo $dato['edad']; ?>" required>
            <button type="submit" class="button">Actualizar</button>
        </form>

        <a href="index.php" class="button">Volver</a>
    </div>
</body>
</html>
