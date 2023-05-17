<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\ReporteController;
use MVC\Router;
$router = new Router();

$router->get('/', [ReporteController::class, 'index']);
$router->post('/', [ReporteController::class, 'index']);



// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();