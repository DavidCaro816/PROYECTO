<?php

namespace Controllers;

use Models\Reporteeeeeeeee;
use PDOStatement;

require_once '../Models/Reporteeeeeeeee.php';

class ReporteController
{
    function index() :bool|PDOStatement{
        return (new Reporteeeeeeeee()) -> index();
    }

    function create() :void{

    }

    function update() :void{

    }

    function delete() :void{

    }
}