<?php

namespace Controllers;

use Models\Cobertura;

class CoberturaController
{
    function index() :bool|array{
        return (new Cobertura()) -> index();
    }

    function create(Cobertura $cobertura) :void{
        $cobertura -> create();
    }

    function show(Cobertura $cobertura) :bool|array{
        return $cobertura -> show();
    }

    function update(Cobertura $cobertura) :void{
        $cobertura -> update();
    }

    function delete(Cobertura $cobertura) :void{
        $cobertura -> delete();
    }
}