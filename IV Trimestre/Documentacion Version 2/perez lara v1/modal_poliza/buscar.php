<?php
require 'conexion.php';
$salida = "";

if(!empty($_POST['consulta'])) {
    $consulta = $_POST['consulta'];
    $sql = "SELECT * FROM cliente WHERE id LIKE '%".$consulta."%' OR primerNombre '%".$consulta."%' OR SegundoNombre '%".$consulta."%' OR primerApellido '%".$consulta."%' OR segundoApellido '%".$consulta."%'";
    $query = $pdo->prepare($sql);
    $query->execute();
}

