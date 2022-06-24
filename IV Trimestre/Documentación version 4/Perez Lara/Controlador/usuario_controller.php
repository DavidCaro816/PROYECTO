<?php
use Modelo\Usuario;
require_once '../Modelo/Usuario.php';

function index_tipo_documento(): bool|PDOStatement
{
    return (new Usuario())->index_tipo_documento();
}
