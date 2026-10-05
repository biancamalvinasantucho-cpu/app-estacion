<?php
// Incluir variables de entorno
require_once __DIR__ . '/env.php';

// Función para renderizar plantillas MVC
function renderView($viewName, $data = []) {
    extract($data);
    $file = __DIR__ . "/app/views/{$viewName}.tpl.php";
    if (file_exists($file)) {
        require_once $file;
    } else {
        http_response_code(404);
        echo "Error 404: Vista no encontrada.";
    }
}

// Obtener ruta de la URL
$request = $_GET['url'] ?? 'landing';
$urlParts = explode('/', trim($request, '/'));

$route = $urlParts[0] ?? 'landing';
$chipid = $urlParts[1] ?? null;

// Enrutador principal
switch ($route) {
    case 'landing':
        renderView('landing');
        break;

    case 'panel':
        renderView('panel');
        break;

    case 'detalle':
        renderView('detalle', ['chipid' => $chipid]);
        break;

    default:
        renderView('landing');
        break;
}