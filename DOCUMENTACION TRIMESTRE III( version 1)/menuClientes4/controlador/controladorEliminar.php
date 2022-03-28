<?php

$conexion= mysqli_connect("localhost", "root", "", "perez_lara_cia_ltda");
$conexion->query("SET NAMES 'utf8'");
$id= $_GET['documento'];

$delete= "DELETE FROM cliente WHERE documento = $id";
$resultado=mysqli_query($conexion, $delete);
            if(!$resultado)
            {
            echo"no se ha eliminado";
            }
            else{
            echo'<script type="text/javascript">
                alert("Usuario eliminado");
                window.location.href="../vista/indexMenuClientes.php" ;
            </script>';
            }
            