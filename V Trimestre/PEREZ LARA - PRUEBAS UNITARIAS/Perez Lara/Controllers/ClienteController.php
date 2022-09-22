<?php

namespace Controllers;

use Models\Cliente;
use PDOStatement;

require_once '../Models/Cliente.php';

class ClienteController
{
    function index() :void{
        $array = [];
        foreach ((new Cliente()) -> index() as $datum) {
            $array[] = $datum;
        }
        echo json_encode($array);
    }

    function create(Cliente $cliente) :void{
        $cliente -> create();
        $this -> index();
    }

    function show(Cliente $cliente) :void{
        $array = [];
        foreach ($cliente -> show() as $datum) {
            $array[] = $datum;
        }
        echo json_encode($array[0]);
    }

    function update(Cliente $cliente, string $documento) :void{
        $cliente -> update($documento);
        $this -> index();
    }

    function delete(Cliente $cliente) :void{
        $cliente -> delete();
        $this -> index();
    }
}