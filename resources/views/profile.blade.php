<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirigir si no está autenticado
    exit();
}

// Aquí puedes obtener los datos del usuario desde tu base de datos
// Este es solo un ejemplo
$user_name = "Juan Pérez"; // Reemplaza con datos de la base de datos
$user_email = "juan@example.com"; // Reemplaza con datos de la base de datos
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil | CSG Contratistas Generales</title>
</head>
<body>

    <div class="container">
        <h1>Mi Perfil</h1>
        <p>Bienvenido, <?php echo htmlspecialchars($user_name); ?>!</p>
        <p>Email: <?php echo htmlspecialchars($user_email); ?></p>
    </div>

</body>
</html>
