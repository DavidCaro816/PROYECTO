<?php

namespace Controllers;

use Models\Usuario;
use PDOStatement;

include '../Models/Usuario.php';

class UsuarioController
{
    function index() :bool|PDOStatement{
        return (new Usuario()) -> index();
    }

    function create(Usuario $usuario) :void{
        $usuario -> create();
    }

    function show(Usuario $usuario) :bool|array{
        return $usuario -> show();
    }

    function update(Usuario $usuario, string $documento) :void{
        $usuario -> update($documento);
    }

    function delete(Usuario $usuario) :void{
        $usuario -> delete();
    }
}
