<?php

include ('conexionBD.php');
$consultaTipoDoc = mysqli_query($conexion,"SELECT * FROM tipodocumento");
$consultaDepartamentos = mysqli_query($conexion,"SELECT * FROM departamento");
$consultaCiudad = mysqli_query($conexion,"SELECT * FROM ciudad");
$consultaTipoTelefono = mysqli_query($conexion,"SELECT * FROM tipocontacto");
$consultaTipoCliente = mysqli_query($conexion,"SELECT * FROM tipocliente");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedorPadre">
        <form class="formularioRegistro" action="insertarDatos.php" method="POST">
        <div class="titulo">
                <a>Nuevo Cliente</a>
            </div>
            <div class="campoPrimerNombre">
                <input type="text" name="primerNombre" placeholder="Primer nombre(*)" required>
            </div>

            <div class="campoSegundoNombre">
                <input type="text" name="segundoNombre" placeholder="Segundo nombre">
            </div>

            <div class="campoPrimerApellido">
                <input type="text" name="primerApellido" placeholder="Primer apellido(*)" required>
            </div>

            <div class="campoSegundoApellido">
                <input type="text" name="segundoApellido" placeholder="Segundo apellido" required>
            </div>

            <div class="campoTipoDocumento">
                <select name="tipoDocumento" id="tipoDoc" required>
                <?php
                    while($datosDocumentos = mysqli_fetch_array($consultaTipoDoc)){
                ?>
                <option value="<?php echo $datosDocumentos['idTipoDocumento']?>"> <?php echo $datosDocumentos['decripcionDocumento']; ?> </option>
                <?php
                }
                ?>
                    <option hidden selected>Tipo de documento</option>
                </select>
            </div>

            <div class="campoNumeroDocumento">
                <input type="text" name="numeroDocumento" placeholder="No. Documento" required>
            </div>

            <div class="campoFechaNacimiento">
                <input type="date" name="fechaNacimiento" required>
            </div>

            <div class="campoDepartamento">
                <select name="departamento" required>
                    <?php
                    while($datosDepartamentos = mysqli_fetch_array($consultaDepartamentos)){
                    ?>
                    <option value="<?php echo $datosDepartamentos['idDepartamento']?>"><?php echo $datosDepartamentos['Departamento']?></option>
                    <?php
                    }
                    ?>
                    <option hidden selected>Departamento</option>
                </select>
            </div>

            <div class="campoCiudad">
                <select name="ciudad" required>
                    <?php 
                    while($datosCiudad = mysqli_fetch_array($consultaCiudad)){
                    ?>
                    <option value="<?php echo $datosCiudad['idCiudad']?>"><?php echo $datosCiudad['ciudad']?></option>
                    <?php
                    }
                    ?>
                    <option hidden selected>Ciudad</option>
                </select>
            </div>

            <div class="campoDireccion">
                <input type="text" name="direccion" placeholder="Dirección" required>
            </div>

            <div class="campoEmail">
                <input type="email" name="correoElectronico" placeholder="Correo Electrónico" required>
            </div>

            <div class="campoTipoTelefono">
                <select name="tipoTelefono" required>
                    <?php
                    while($datosTipoTelefono = mysqli_fetch_array($consultaTipoTelefono)){
                    ?>
                    <option value="<?php echo $datosTipoTelefono['idTipoContacto']?>"><?php echo $datosTipoTelefono['tipoContacto'];?></option>
                    <?php
                    }
                    ?>
                    <option hidden selected>Tipo de teléfono</option>
                </select>
            </div>

            <div class="campoNumeroTelefono">
                <input type="text" name="numeroTelefono" placeholder="No. Teléfono" required>
            </div>

            <div class="campoTipoCliente">
                <select name="tipoCliente" required>
                    <?php
                    while($datosTipoCliente = mysqli_fetch_array($consultaTipoCliente)){
                        ?>
                        <option value="<?php echo $datosTipoCliente['idTipoCliente'] ?>"><?php echo $datosTipoCliente['tipoCliente'];?></option>
                        <?php
                    }
                    ?>
                    <option hidden selected>Tipo de cliente</option>
                </select>
            </div>

            <div class="botonGuardar">
                <input type="submit" name="botonGuardado" value="Guardar">
            </div>

        </form>

    </div>
</body>
</html>