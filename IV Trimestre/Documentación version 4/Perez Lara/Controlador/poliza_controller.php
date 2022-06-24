<?php
use Modelo\Poliza;
require_once '../Modelo/Poliza.php';
require_once '../Vista/template/plantilla_tabla.php';

function index():bool|PDOStatement
{
    return (new Poliza())->index();
}