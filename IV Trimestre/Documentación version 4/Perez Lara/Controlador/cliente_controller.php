<?php
use Modelo\Cliente;
require_once '../Modelo/Cliente.php';
require_once '../Vista/template/plantilla_tabla.php';

function index(): bool|PDOStatement
{
    return (new Cliente())->index();
}