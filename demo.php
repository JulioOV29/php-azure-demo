<?php
// Habilita errores (útil en desarrollo)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Contador de visitas
$counterFile = 'visitas.txt';
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, 0);
}
$visitas = (int)file_get_contents($counterFile);
$visitas++;
file_put_contents($counterFile, $visitas);

// Datos dinámicos
$nombre = "Mundo 😎";
$hora = date("h:i A");
$fecha = date("d/m/Y");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi App PHP en Azure</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #3f87a6, #ebf8e1, #f69d3c);
            color: #333;
            text-align: center;
            padding-top: 100px;
        }
        h1 {
            font-size: 3rem;
            color: #1f1f1f;
        }
        p {
            font-size: 1.3rem;
        }
        .card {
            background: white;
            padding: 30px;
            margin: 0 auto;
            width: 400px;
            border-radius: 16px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        footer {
            margin-top: 50px;
            font-size: 0.9rem;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>👋 ¡Hola, <?php echo $nombre; ?>!</h1>
        <p>Hoy es <strong><?php echo $fecha; ?></strong></p>
        <p>La hora actual es <strong><?php echo $hora; ?></strong></p>
        <p>🔢 Has visitado esta página <strong><?php echo $visitas; ?></strong> veces.</p>
    </div>
    <footer>
        <p>Desarrollado con 💙 en PHP y Azure App Service</p>
    </footer>
</body>
</html>
