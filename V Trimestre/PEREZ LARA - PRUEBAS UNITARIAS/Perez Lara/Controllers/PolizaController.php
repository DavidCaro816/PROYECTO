<?php

namespace Controllers;

use Models\Poliza;
use PDOStatement;

require_once '../Models/Poliza.php';

class PolizaController
{
    function index() :void{
        $array = [];
        foreach ((new Poliza()) -> index() as $datum) {
            $array[] = $datum;
        }
        echo json_encode($array);
    }

    function create(Poliza $poliza) :void{
        $poliza -> create();
        $this -> index();
        echo $poliza;
    }

    function show(Poliza $poliza) :void{
        $array = [];
        foreach ($poliza -> show() as $datum) {
            $array[] = $datum;
        }
        echo json_encode($array[0]);
    }

    function update(Poliza $poliza, string $codigo) :void{
        $poliza -> update($codigo);
        $this -> index();
    }

    function delete(Poliza $poliza) :void{
        $poliza -> delete();
        $this -> index();
    }
}