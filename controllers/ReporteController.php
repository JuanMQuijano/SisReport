<?php

namespace Controllers;

use Model\Reporte;
use MVC\Router;

class ReporteController
{

    public static function index(Router $router)
    {
        $router->render(
            'reporte'
        );
    }

    public static function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $reporte = new Reporte($_POST);
         
            if ($reporte->guardar()) {
                echo json_encode(true);
            }
        }
    }
}
