<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?> - Detalle</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/style.css">
</head>
<body>
    <header class="navbar">
        <h2>Detalle de Estación</h2>
        <a href="<?= BASE_URL ?>panel" class="btn-nav">Volver al Panel</a>
    </header>

    <main class="main-container">
        <div class="card-detalle">
            <h1 id="det-apodo">Cargando estación...</h1>
            <p id="det-ubicacion" class="ubicacion-texto"></p>
            <p class="chipid-texto">Chip ID: <code><?= htmlspecialchars($chipid ?? '') ?></code></p>
        </div>
    </main>

    <script>
        const CHIPID = "<?= $chipid ?>";
        const API_URL = "<?= API_URL ?>";

        async function cargarDetalle() {
            if (!CHIPID) return;
            try {
                const resp = await fetch(`${API_URL}estaciones/${CHIPID}`);
                if (resp.ok) {
                    const data = await resp.json();
                    document.getElementById('det-apodo').textContent = data.apodo || 'Estación sin nombre';
                    document.getElementById('det-ubicacion').textContent = `📍 Ubicación: ${data.ubicacion || 'No especificada'}`;
                } else {
                    document.getElementById('det-apodo').textContent = 'Estación ' + CHIPID;
                    document.getElementById('det-ubicacion').textContent = '📍 Información de ubicación no disponible.';
                }
            } catch (err) {
                console.error('Error al cargar detalle:', err);
            }
        }

        cargarDetalle();
    </script>
</body>
</html>