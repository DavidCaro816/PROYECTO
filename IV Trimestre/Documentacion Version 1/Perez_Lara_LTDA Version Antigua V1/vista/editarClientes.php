<?php

require('../modelo/conexion.php');
$conexion= mysqli_connect("localhost", "root", "", "perez_lara_cia_ltda");
$conexion->query("SET NAMES 'utf8'");
$consultaTipoDoc = mysqli_query($conexion,"SELECT * FROM tipodocumento");
$consultaDepartamentos = mysqli_query($conexion,"SELECT * FROM departamento");
$consultaCiudad = mysqli_query($conexion,"SELECT * FROM ciudad");
$consultaTipoCliente = mysqli_query($conexion,"SELECT * FROM tipocliente");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR CLIENTES</title>
    <link rel="stylesheet" href="../css/estilosRegistro.css">
</head>
<body>

    <?php
$conexion= mysqli_connect("localhost", "root", "", "perez_lara_cia_ltda");
$conexion->query("SET NAMES 'utf8'");


$query= "SELECT * FROM cliente WHERE documento=". $_GET['documento'];
$resultado=mysqli_query($conexion, $query);



?>
    <div class="navbar">
        <div class="navbar_group">
            <div class="navbar_header">
                <div class="logo">
                    <img src="icons/logo.svg" alt="">
                </div>
            </div>
            <div class="navbar_body">
                <div class="home">
                    <img src="icons/home.svg" alt="">
                </div>
                <div class="clients">
                    <a href="indexMenuClientes.php">
                        <img src="icons/clients.svg" alt="">
                    </a>
                </div>
                <div class="quotes">
                    <a href="vistaNuevaCotizacion.php">
                    <img src="icons/quotes.svg" alt="">
                    </a>
                </div>
                <div class="policies">
                    <a href="poliza.php">
                        <img src="icons/policies.svg" alt="">
                    </a>
                </div>
                <div class="sinister">
                    <a href="siniestros.php">
                        <img src="icons/sinister.svg" alt="">
                    </a>
                </div>
                <div class="reports">
                    <img src="icons/reports.svg" alt="">
                </div>
            </div>
        </div>
        <div class="navbar_footer">
            <div id="settings" class="settings">
                <img src="icons/settings.svg" alt="">
            </div>
            <div id="signout" class="sign_out">
                <img src="icons/sign_out.svg" alt="">
            </div>
        </div>
    </div>
    <a HREF=""><img id="campana"src="imagenes/campana.png"></a>
    <div class="logo">
        <a HREF="perfilUser.html"> <img id="logo" src="imagenes/logo.png"></a>
    </div>

    <div class="contenedorPadre">
        <form class="formularioRegistro" action="../controlador/editar.php" method="POST">

<?php while($filas = mysqli_fetch_array($resultado)){
    ?>

            <div class="titulo">
                <a>Editar Cliente</a>
            </div>
            <div class="campoPrimerNombre">
                <input type="text" name="primerNombre" placeholder='Primer Nombre (*)' value='<?php echo $filas['primerNombre'];?>'  required>
            </div>

            <div class="campoSegundoNombre">
                <input type="text" name="segundoNombre" placeholder="Segundo nombre" value='<?php echo $filas['segundoNombre'];?>' >
            </div>

            <div class="campoPrimerApellido">
                <input type="text" name="primerApellido" placeholder="Primer apellido(*)" value='<?php echo $filas['primerApellido'];?>' required>
            </div>

            <div class="campoSegundoApellido">
                <input type="text" name="segundoApellido" placeholder="Segundo apellido" value='<?php echo $filas['segundoApellido'];?>' >
            </div>

            <div class="campoTipoDocumento">
                <select name="tipoDocumento" id="tipoDoc" required>
                <?php
                    while($datosDocumentos = mysqli_fetch_array($consultaTipoDoc)){
                ?>
                <option value="<?php echo $datosDocumentos['idTipoDocumento']?>"> <?php echo $datosDocumentos['descripcionDocumento']; ?> </option>
                <?php
                }
                ?>
                    <option hidden selected>Tipo de documento</option>

                </select>
            </div>

            <div class="campoNumeroDocumento">
                <input type="text" name="numeroDocumento" placeholder="No. Documento" value='<?php echo $filas['documento'];?>' required>
            </div>

            <div class="campoFechaNacimiento">
                <input type="date" name="fechaNacimiento" value='<?php echo $filas['fechaNacimiento'];?>'required>
            </div>

            <div class="campoDepartamento">
                <select name="departamento" required>
                    <?php
                    while($datosDepartamentos = mysqli_fetch_array($consultaDepartamentos)){
                    ?>
                    <option value="<?php echo $datosDepartamentos['idDepartamento']?>"><?php echo $datosDepartamentos['departamento']?></option>
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
                <input type="text" name="direccion1" placeholder="Dirección Hogar" value='<?php echo $filas['direccion1'];?>' required>
            </div>
            <div class="campoDireccionTrabajo">
                <input type="text" name="direccion2" placeholder="Dirección trabajo" value='<?php echo $filas['direccion2'];?>' >
            </div>

            <div class="campoEmail">
                <input type="email" name="correoElectronico" placeholder="Correo Electrónico" value='<?php echo $filas['email'];?>'required>
            </div>


            <div class="campoNumeroTelefono">
                <input type="text" name="numeroTelefono" placeholder="No. Teléfono" value='<?php echo $filas['telefono1'];?>'required>
            </div>
            <div class="campoNumeroTelefono2">
                <input type="text" name="numeroTelefono2" placeholder="No. Teléfono 2" value='<?php echo $filas['telefono2'];?>' >
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
                <input type="submit" name="botonGuardado" value="Guardar Cambios">
            </div>
                    <?php } ?>
        </form>

    </div>
</body>
</html>