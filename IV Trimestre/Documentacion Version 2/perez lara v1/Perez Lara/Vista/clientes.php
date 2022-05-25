<?php 
  include "plantilla.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <link rel="icon" href="../icons/icono.svg">
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/estilos_plantilla.css">
  <link rel="stylesheet" href="../css/estilosRegistro.css">
  <meta charset="UTF-8">
  <title>Clientes</title>
</head>
<body>
    <div class="container">
        <?php navbar_header(); body_container('Clientes',false,false);
         ?>
    </div>
    <div class="contenedorPadre" id="modal">
        <div class="formularioRegistro" action="../controlador/insertar.php" method="POST">
            <div class="titulo">
                <a>Nuevo Cliente</a>
            </div>
            <div>
                <button id="cerrar"> x </button>
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
                <input type="text" name="segundoApellido" placeholder="Segundo apellido" >
            </div>

            <div class="campoTipoDocumento">
                <select name="tipoDocumento" id="tipoDoc" required>

                    <option hidden selected>Tipo de documento</option>
                </select>
            </div>

            <div class="campoNumeroDocumento">
                <input type="text" name="numeroDocumento" placeholder="No. Documento(*)" required>
            </div>

            <div class="campoFechaNacimiento">
                <input type="date" name="fechaNacimiento" required>
            </div>

            <div class="campoDepartamento">
                <select name="departamento" id="departamentos" required>

                    <option hidden selected>Departamento</option>
                </select>
            </div>

            <div class="campoCiudad">
                <select name="ciudad" id="ciudades" required>

                    <option hidden selected>Ciudad</option>
                </select>
            </div>

            <div class="campoDireccion">
                <input type="text" name="direccion1" placeholder="Dirección 1" required>
            </div>
            <div class="campoDireccionTrabajo">
                <input type="text" name="direccion2" placeholder="Dirección 2" >
            </div>

            <div class="campoEmail">
                <input type="email" name="correoElectronico" placeholder="Correo electrónico(*)" required>
            </div>


            <div class="campoNumeroTelefono">
                <input type="text" name="numeroTelefono" placeholder="No. Teléfono(*)" required>
            </div>
            <div class="campoNumeroTelefono2">
                <input type="text" name="numeroTelefono2" placeholder="No. Teléfono 2">
            </div>

            <div class="campoTipoCliente">
                <select name="tipoCliente" required>

                    <option hidden selected>Tipo de cliente</option>
                </select>
            </div>

            <div class="botonGuardar">
                <input type="submit" name="botonGuardado" value="Guardar">
            </div>
        </div>
    </div>


    <script src="../js/buscar.js"></script>
    <script src="../js/nuevoCliente.js"> </script>
    <script src="../js/plantilla.js"></script>
    <script>position_marker('clients')</script>

</body>
</html>