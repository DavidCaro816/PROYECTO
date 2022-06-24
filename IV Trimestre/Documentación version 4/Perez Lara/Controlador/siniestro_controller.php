<?php
use Modelo\Siniestro;
require_once '../Modelo/Siniestro.php';
require_once '../Vista/template/plantilla_tabla.php';

function index():bool|PDOStatement
{
    return (new Siniestro())->index();
}