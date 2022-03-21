<?php

include('conexionBD.php');

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
$tipoTelefono = $_POST['tipoTelefono'];
$numeroTelefono = $_POST['numeroTelefono'];
$tipoCliente = $_POST['tipoCliente'];

$insertarPersona = "INSERT INTO persona (documento	
primerNombre,segundoNombre,primerApellido,segundoApellido,email,idTipoDocumento	);

VALUES ('$numeroDocumento','$primerNombre','$segundoNombre','$primerNombre','$segundoApellido','$correoElectronico','$tipoDocumento')";

$resulPersona=mysqli_query($conexion,$insertarPersona);

$insertarCliente = "INSERT INTO cliente (FechaNacimineto,documento,idTipoCliente,idCiudad)
VALUES ('$fechaNacimiento','$numeroDocumento','$tipoCliente','$ciudad')";

$resulCliente=mysqli_query($conexion,$insertarCliente);



if(!$resul){
    echo '<script type="text/javascript">
    alert("Usuario existente");
    window.location.href="vistaRegistroCliente.php" ;
</script>';
}
else{
    echo '<script type="text/javascript">
    alert("Usuario registrado exitosamente");
    window.location.href="vistaRegistroCliente.php" ;
</script>';
}


?>