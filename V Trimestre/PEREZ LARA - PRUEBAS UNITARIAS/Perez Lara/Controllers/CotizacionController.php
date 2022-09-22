<?php

namespace Controllers;

use Models\Cotizacion;
use PDOStatement;

require_once '../Models/Cotizacion.php';

class CotizacionController
{
    function index() :void{
        $array = [];
        foreach ((new Cotizacion()) -> index() as $datum) {
            $array[] = $datum;
        }
        echo json_encode($array);
    }

    function recent() :bool|PDOStatement{
        return (new Cotizacion()) -> recent();
    }

    function create(Cotizacion $cotizacion) :void{
        $cotizacion -> create();
    }

    function show(Cotizacion $cotizacion) :bool|array{
        return $cotizacion -> show();
    }

    function update(Cotizacion $cotizacion) :void{
        $cotizacion -> update();
    }

    function delete(Cotizacion $cotizacion) :void{
        $cotizacion -> delete();
    }
}

