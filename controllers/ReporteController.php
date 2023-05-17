<?php

namespace Controllers;

use Model\Reporte;
use MVC\Router;

class ReporteController
{

    public static function index(Router $router)
    {

        $alertas = [];
        $reporte = new Reporte;

        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $reporte->sincronizar($_POST);
            
            $reporte->guardar();
        }

        $router->render('reporte');
    }
}
