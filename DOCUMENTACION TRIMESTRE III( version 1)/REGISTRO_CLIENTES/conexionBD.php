<?php

$conexion = new mysqli("localhost", "root", "", "perez_lara_cia_ltda");

if ($conexion->connect_error){
    die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
} 

?>