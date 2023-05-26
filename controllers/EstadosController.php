<?php

namespace Controllers;

use Model\Reporte;
use MVC\Router;

class EstadosController
{

    public static function index(Router $router)
    {
        $router->render('estados');
    }

    public static function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $estadoReporte = Reporte::where('cc_est', $_POST['cc_est']);

            echo json_encode($estadoReporte->estado);
        }
    }
}
