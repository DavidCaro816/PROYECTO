<?php
use Modelo\Cotizacion;
require_once '../Modelo/Cotizacion.php';
require_once '../Vista/template/plantilla_tabla.php';

function index():bool|PDOStatement
{
    return (new Cotizacion())->index();
}

function recent():bool|PDOStatement
{
    return (new Cotizacion())->recent();
}
