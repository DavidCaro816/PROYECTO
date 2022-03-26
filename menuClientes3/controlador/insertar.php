<?php

include('../modelo/conexion.php');
$conexion= mysqli_connect("localhost", "root", "", "perez_lara_cia_ltda");
$conexion->query("SET NAMES 'utf8'");

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



$insertarCliente = "INSERT INTO  cliente (documento,primerNombre,segundoNombre,primerApellido,segundoApellido,email,idTipoDocumento,fechaNacimiento,idTipoCliente,idCiudad,telefono1,telefono2
,direccionCasa,direccionTrabajo)
VALUES ('$numeroDocumento','$primerNombre','$segundoNombre', '$primerApellido', '$segundoApellido','$correoElectronico','$tipoDocumento','$fechaNacimiento', '$tipoCliente','$ciudad','$numeroTelefono','$numeroTelefono2','$direccion','$direccionTrabajo')";


$resulCliente=mysqli_query($conexion,$insertarCliente);


if( !$resulCliente){
    echo "Usuario no registrado";
}
else{
    echo '<script type="text/javascript">
    alert("Usuario registrado exitosamente");
    window.location.href="../vista/indexMenuClientes.php" ;
</script>';
}


?>
