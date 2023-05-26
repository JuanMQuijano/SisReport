<?php

namespace Model;

class Reporte extends ActiveRecord
{
    protected static $tabla = "reportes";
    protected static $columnasDB = ["id", "cc_est", "sede", "salon", "numero_computador", "descripcion", "estado", "tecnico_id", "fecha", "fecha_fin"];

    public $id, $cc_est, $sede, $salon, $numero_computador, $descripcion, $estado, $tecnico_id, $fecha, $fecha_fin;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->cc_est = $args['cc_est'] ?? '';
        $this->sede = $args['sede'] ?? '';
        $this->salon = $args['salon'] ?? '';
        $this->numero_computador = $args['numero_computador'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->estado = 0;
        $this->tecnico_id = $args['tecnico_id'] ?? 0;
        $this->fecha = date("Y-m-d H:i:s");
        $this->fecha_fin = date("Y-m-d H:i:s");
    }
}
