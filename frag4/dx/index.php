<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD en PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>CRUD DEL MASH MASH</h1>
        
        <form action="create.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="number" name="edad" placeholder="Edad" required>
            <button type="submit" class="button">Agregar</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'db.php';

                $stmt = $pdo->query("SELECT * FROM usuarios");
                while ($dato = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>
                        <td>{$dato['id']}</td>
                        <td>{$dato['nombre']}</td>
                        <td>{$dato['edad']}</td>
                        <td>
                            <a href='edit.php?id={$dato['id']}' class='button'>Editar</a>
                            <a href='delete.php?id={$dato['id']}' class='button delete'>Eliminar</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>