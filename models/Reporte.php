<?php

namespace Model;

class Reporte extends ActiveRecord
{
    protected static $tabla = "reportes";
    protected static $columnasDB = ["id", "cc_est", "sede", "salon", "numero_computador", "descripcion", "estado", "tecnico_id", "fecha"];

    public $id, $cc_est, $sede, $salon, $numero_computador, $descripcion, $estado, $tecnico_id, $fecha;

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
    }

    public function validar()
    {
        if (empty($this->cc_est)) {
            self::$alertas['error'][] = "Debes ingresar tu numero de identificación";
        }
        if (empty($this->sede)) {
            self::$alertas['error'][] = "Debes Seleccionar una Sede";
        }
        if (empty($this->salon)) {
            self::$alertas['error'][] = "Debes Seleccionar un Salón";
        }
        if (empty($this->numero_computador)) {
            self::$alertas['error'][] = "Debes ingresar el número del Computador";
        }
        if (empty($this->descripcion)) {
            self::$alertas['error'][] = "Debes Agregar una descripción";
        }

        return self::$alertas;
    }
}
