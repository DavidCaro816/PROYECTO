<?php

$conexion= mysqli_connect("localhost", "root", "", "perez_lara_cia_ltda");
$conexion->query("SET NAMES 'utf8'");

$documento=$_POST['documento'];
$primerNombre = $_POST['primerNombre'];
$segundoNombre = $_POST['segundoNombre'];
$primerApellido = $_POST['primerApellido'];
$segundoApellido = $_POST['segundoApellido'];
$tipoDocumento = $_POST['tipoDocumento'];
$numeroDocumento = $_POST['numeroDocumento'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$departamento = $_POST['departamento'];
$ciudad = $_POST['ciudad'];
$direccion = $_POST['direccion'];
$correoElectronico = $_POST['correoElectronico'];
$numeroTelefono = $_POST['numeroTelefono'];
$numeroTelefono2 = $_POST['numeroTelefono2'];
$direccionTrabajo = $_POST['direccionTrabajo'];
$tipoCliente = $_POST['tipoCliente'];


$editar= "UPDATE cliente SET 
documento='$numeroDocumento',
primerNombre='$primerNombre',
segundoNombre='$segundoNombre',
primerApellido='$primerApellido',
segundoApellido='$segundoApellido',
email='$correoElectronico',
idTipoDocumento='$tipoDocumento',
fechaNacimiento='$fechaNacimiento',
idTipoCliente='$tipoCliente',
idCiudad='$ciudad',
telefono1='$numeroTelefono',
telefono2='$numeroTelefono2',
direccionCasa='$direccion',
direccionTrabajo='$direccionTrabajo' WHERE documento='$documento';";

$resultado=mysqli_query($conexion, $editar);
            if(!$resultado)
            {
            echo"no se ha actualizado";
            }
            else{
            echo'<script type="text/javascript">
                alert("Cliente Actualizado");
                window.location.href="../vista/indexMenuClientes.php" ;
            </script>';
            }

