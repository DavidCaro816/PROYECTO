<?php

namespace Controllers;

use Models\Siniestro;
use PDOStatement;

require_once '../Models/Siniestro.php';

class SiniestroController
{
    function index() :void{
        $data = (new Siniestro()) -> index();
        require_once '../resources/views/siniestros.php';
    }

    function create(Siniestro $siniestro) :void{
        $siniestro -> create();
    }

    function show(Siniestro $siniestro) :bool|array{
        return $siniestro -> show();
    }

    function update(Siniestro $siniestro) :void{
        $siniestro -> update();
    }

    function delete(Siniestro $siniestro) :void{
        $siniestro -> delete();
    }
}