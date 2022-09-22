<?php

namespace Models;

use PDO;
use PDOStatement;
use Traits\TModels;

require_once '../Core/Connection.php';
require_once 'TModels.php';

class Reporteeeeeeeee
{
    use TModels;

    private PDO $connection;

    public function index() :bool|PDOStatement{
        return $this -> connection -> query('select * from view_reporte');
    }

    public function create() :void{

    }

    public function show() :void{

    }

    public function update() :void{

    }

    public function delete() :void{

    }
}