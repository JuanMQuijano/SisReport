<?php

namespace Controllers;

use Model\Reporte;
use MVC\Router;

class DashboardController
{

    public static function index(Router $router)
    {
        if (!isset($_SESSION['login'])) {
            header('Location: /login');
        }

        $reportes_format = [];

        $reportes = Reporte::all();

        foreach ($reportes as $reporte) {
            if ($reporte->estado === "0") {
                $reportes_format['no-solucionado'][] = $reporte;
            } else {
                $reportes_format['solucionado'][] = $reporte;
            }
        }

        $router->render('dashboard', [
            'reportes' => $reportes_format
        ]);
    }

    public static function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $reporte = Reporte::find($_POST['reporte_id']);
            $reporte->estado = 1;
            $reporte->tecnico_id = $_POST['tecnico_id'];
            $reporte->fecha_fin = date("Y-m-d H:i:s");

            $reporte->guardar();

            header("Location: /dashboard");
        }
    }
}
