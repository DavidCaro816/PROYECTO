<?php
//Llamada al modelo
include_once('../modelo/clientes.php');

$per=new clientes();
$datos=$per->get_personas();

//Llamada a la vista
include_once('../vista/indexMenuClientes.php');
?>
