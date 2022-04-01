<?php
//Llamada al modelo
include_once('../modelo/modeloPoliza.php');

$poli=new modeloPoliza();
$datos=$poli->getPoliza();

//Llamada a la vista
include_once('../vista/poliza.php');
?>