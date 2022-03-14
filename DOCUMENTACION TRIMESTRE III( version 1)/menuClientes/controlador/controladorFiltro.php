<?php
include_once('../modelo/filtro.php');


$depa=new filtro();

$datos=$depa->get_depa();


include_once('../vista/indexMenuClientes.php');

?>