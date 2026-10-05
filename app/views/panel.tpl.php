<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?> - Panel</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/style.css">
</head>
<body>
    <header class="navbar">
        <h2>Panel de Estaciones</h2>
        <a href="<?= BASE_URL ?>landing" class="btn-nav">Volver al Inicio</a>
    </header>

    <main class="main-container">
        <div id="estaciones-list" class="grid-container">
            <!-- Los botones se generarán dinámicamente -->
        </div>
    </main>

    <!-- Template HTML para clonar mediante JavaScript -->
    <template id="template-estacion">
        <button class="btn-estacion">
            <h3 class="estacion-apodo"></h3>
            <p class="estacion-ubicacion"></p>
            <span class="estacion-visitas"></span>
        </button>
    </template>

    <script>
        const BASE_URL = "<?= BASE_URL ?>";
        const API_URL = "<?= API_URL ?>";
    </script>
    <script src="<?= BASE_URL ?>public/js/panel.js"></script>
</body>
</html>