<?php

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AuthController;
use Controllers\EstadosController;
use Controllers\ReporteController;
use Controllers\DashboardController;

$router = new Router();

$router->get('/', [ReporteController::class, 'index']);
$router->post('/', [ReporteController::class, 'store']);

$router->get('/estados', [EstadosController::class, 'index']);
$router->post('/estados', [EstadosController::class, 'store']);

//AUTH
$router->get('/login', [AuthController::class, 'index']);
$router->post('/login', [AuthController::class, 'store']);
$router->post('/logout', [AuthController::class, 'logout']);

$router->get('/dashboard', [DashboardController::class, 'index']);
$router->post('/dashboard', [DashboardController::class, 'store']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
