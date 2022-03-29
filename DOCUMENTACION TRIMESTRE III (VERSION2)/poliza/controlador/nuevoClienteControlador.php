<?php

include '../modelo/estado.php';

$Nombres = $_POST['nombres'];
$Apellidos = $_POST['apellidos'];
$TipoDocumento = $_POST['tipoDocumento'];
$NumeroDocumento = $_POST['noDocumento'];
$date = $_POST['fechaNacimiento'];
$Correo = $_POST['email'];
$departamento = $_POST['selecDep'];
$ciudad = $_POST['selecCiudad'];
$tipoCliente=$_POST['tipoCliente'];



$registro=new estado();
$registro->registrar($NumeroDocumento,$Nombres,$Apellidos,$date,$Correo,$TipoDocumento, $departamento, $ciudad, $tipoCliente);
$registro->insertar();
include_once('../vista/indexMenuClientes.php');

?>
