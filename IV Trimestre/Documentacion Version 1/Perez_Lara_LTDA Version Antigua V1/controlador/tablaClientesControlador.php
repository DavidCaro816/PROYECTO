<?php
//Llamada al modelo
include_once('../modelo/tablaClientes.php');

$per=new tablaClientes();
$datos=$per->get_personas();


?>
