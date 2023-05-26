<?php

namespace Model;

class Tecnico extends ActiveRecord
{
    protected static $tabla = "tecnicos";
    protected static $columnasDB = ["id", "nombre", "identificacion", "password"];

    public $id, $nombre, $identificacion, $password;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->identificacion = $args['identificacion'] ?? '';
        $this->password = $args['password'] ?? '';
    }
}
