<?php

namespace core;

use PDO;
use PDOStatement;

require_once 'Connection.php';

class Query
{
    private PDO $connection;

    public function __construct(){
        $this -> connection = (new Connection()) -> connect();
    }

    public function tipo_documento() :bool|PDOStatement{
        return $this -> connection -> query("select id_tipo_documento, descripcion_documento from tipo_documento");
    }

    public function departamento() :bool|PDOStatement{
        return $this -> connection -> query("select * from departamento order by departamento");
    }

    public function ciudad() :bool|PDOStatement{
        return $this -> connection -> query("select id_ciudad,ciudad from ciudad order by ciudad");
    }

    public function aseguradora() :bool|PDOStatement{
        return $this -> connection -> query("select id_aseguradora, aseguradora from aseguradora");
    }

    public function seguro() :bool|PDOStatement{
        return $this -> connection -> query("select id_seguro, seguro from seguro");
    }

    public function cobertura() :bool|PDOStatement{
        return $this -> connection -> query('select * from cobertura');
    }

    public function estado_cliente() :bool|PDOStatement{
        return $this -> connection -> query("select * from estado");
    }

    public function estado_cotizacion() :bool|PDOStatement{
        return $this -> connection -> query("select * from estado");
    }

    public function estado_poliza() :bool|PDOStatement{
        return $this -> connection -> query("select * from estado");
    }

    public function estado_siniestro() :bool|PDOStatement{
        return $this -> connection -> query("select * from estado");
    }
}