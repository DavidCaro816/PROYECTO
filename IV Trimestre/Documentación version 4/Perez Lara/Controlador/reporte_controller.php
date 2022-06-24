<?php
use Modelo\Reporte;
require_once '../Modelo/Reporte.php';
require_once '../Vista/template/plantilla_tabla.php';

function index():bool|PDOStatement
{
    return (new Reporte())->index();
}