<?php

require('../modelo/conexion.php');

$conexion= mysqli_connect("localhost", "root", "", "perez_lara_cia_ltda");
$conexion->query("SET NAMES 'utf8'");
$consultaCiud=mysqli_query($conexion, "SELECT * FROM ciudad");
$consultaEsta=mysqli_query($conexion, "SELECT * FROM tipoCliente");
$consultaDepa=mysqli_query($conexion, "SELECT * FROM departamento");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CLIENTES</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/estilosClientes.css">
    <link rel="stylesheet" href="../css/estilosRegistro2.css">


</head>
<body id="body">

<div class="contenedorGlobal">
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
            <div class="settings">
                <img src="icons/settings.svg" alt="">
            </div>
            <div class="sign_out">
                <img src="icons/sign_out.svg" alt="">
            </div>
        </div>
    </div>
                <div class="contenedorBotones">
                        <div class="campana">
                            <a HREF=""> <img id="campana" src="imagenes/campana.png"></a>
                        </div>
                        <div class="logo">
                            <a HREF="perfilUser.html"> <img id="logo" src="imagenes/logo.png"></a>
                        </div>
                </div>

            <div class="contenedor">
                    <div class="titulo"><h1 style="font-size: 70px" id="titulo">Clientes</h1></div>

                    <div class="btNuevoCliente">
                        <button type="button" id="abrir"> <span id="mas"><img src="icons/anadir.png"><span> <span id="new">Nuevo Cliente</span> </button>
                    </div>

                    <a href="vistaRegistroCliente.php">
                            <div class="btNuevoCliente">

                            <button type="button" id="abrir"> <span id="mas"><img src="icons/anadir.png"><span> <span id="new">Nuevo Cliente</span> </button>
                            </div>
                    </a>

                    <div class="search">
                        <input type="search" name="busqueda" id="busqueda" placeholder="Buscar"  >
                        <img src="icons/search.svg">
                    </div>

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
        <div class="contenedorCliente">

                    <div class="filtros">
                        <form action="" method="POST">
                            <select id="filtroDepa" name="departamentp" value="Deparamento" />
                            <?php
                            while($filas=mysqli_fetch_array($consultaDepa))
                            {
                                ?>
                                echo "<option hidden selected>Departamento</option>";
                                echo"<option value="<?php echo $filas['idDepartamento']?>"> <?php echo $filas['Departamento'] ?></option>";
                                <?php
                            }
                            ?>
                            </select>


                            <select id="filtroCiud" name="ciudad" value="Ciudad" />
                            <?php
                            while($filas=mysqli_fetch_array($consultaCiud))
                            {
                                ?>
                                echo "<option hidden selected>Ciudad</option>";
                                echo"<option value="<?php echo $filas['idCiudad']?>"> <?php echo $filas['ciudad'] ?></option>";
                                <?php
                            }
                            ?>
                            </select>

                            <select id="filtroEsta" name="estado" value="Estado" />
                            <?php
                            while($filas=mysqli_fetch_array($consultaEsta))
                            {
                                ?>
                                echo "<option hidden selected>Estado</option>";
                               echo"<option value="<?php echo $filas['idTipoCliente']?>"> <?php echo $filas['tipoCliente'] ?></option>";
                                <?php
                            }
                            ?>
                            </select>

                            <input type="button" id="filtro" value="Filtrar" />
                            <input type="button" id="limpiar" value="Limpiar" />
                        </form>

                        <table class="tablaClientes">
                            <tr id="1">
                                <th id="id">#</th>
                                <th> N° DOCUMENTO </th>
                                <th>CLIENTE</th>
                                <th>DEPARTAMENTO</th>
                                <th>CIUDAD</th>
                                <th>DIRECCIÓN</th>
                                <th>FECHA NACIMIENTO</th>
                                <th>EMAIL</th>
                                <th>TELEFONO</th>
                                <th>ESTADO</th>



                            </tr>
                            <?php

                            include('../controlador/tablaClientesControlador.php');
                            ?>
                            <?php $i=0?>
                            <?php foreach ($datos as $dato) {;?>
                                <?php

                                $i++; ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $dato['abreviacion'] .' '.' '.$dato['documento'] ?></td>
                                    <td><?php echo $dato['primerNombre'] .' '. $dato['segundoNombre'].' '. $dato['primerApellido'] .' '.$dato['segundoApellido']  ?> </td>
                                    <td><?php echo $dato['departamento']?> </td>
                                    <td><?php echo $dato['ciudad']?> </td>
                                    <td><?php echo $dato['direccion1']?> </td>
                                    <td><?php echo $dato['fechaNacimiento']?> </td>
                                    <td><?php echo $dato['email']?> </td>
                                    <td><?php echo $dato['telefono1']?> </td>
                                    <td><?php echo $dato['tipoCliente']?> </td>
                                    <td><a href='editarClientes.php?documento=<?php echo $dato['documento'];?> '> <input type='button' class='btEditar' value='Editar'/> </a> </td>
                                    <td><a href='../controlador/controladorEliminar.php?documento=<?php  echo $dato['documento'];?> '><input type='button' class='btEliminar' value='Eliminar' />  </td>
                                </tr>
                            <?php }?>


                        </table>

                    </div>
        </div>
<script src="../js/modal.js" > </script>

</body>
</html>