<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?> - Inicio</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/style.css">
</head>
<body>
    <main class="hero-container">
        <div class="hero-card">
            <h1><?= APP_NAME ?></h1>
            <p>Bienvenido a la aplicación de monitoreo meteorológico en tiempo real. Explorá las diferentes estaciones registradas, consultá sus métricas y mantenete informado con datos precisos.</p>
            <a href="<?= BASE_URL ?>panel" class="btn">Ver Panel de Estaciones</a>
        </div>
    </main>
</body>
</html>