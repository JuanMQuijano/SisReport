<?php

namespace Controllers;

use Model\Tecnico;
use MVC\Router;

class AuthController
{

    public static function index(Router $router)
    {
        $router->render('login');
    }

    public static function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $tecnico = Tecnico::where('identificacion', $_POST['identificacion']);

            if ($tecnico) {

                $_SESSION['login'] = true;
                $_SESSION['nombre'] = $tecnico->nombre;
                $_SESSION['id'] = $tecnico->id;

                echo json_encode(true);
            } else {
                echo json_encode(false);
            }
        }
    }

    public static function logout()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $_SESSION = [];

            header('Location: /');
        }
    }
}
