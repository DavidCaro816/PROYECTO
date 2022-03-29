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
    <title>menu Cliente</title>
    <link rel="stylesheet" href="estiloCliente.css">

</head>
<body>
<table class="menuArriba">
    <tr>
        <td> <a HREF=""><img id="campana"src="imagenes/campana.png"></a> </td>
        <td> <a HREF=""><img id="logo" src="imagenes/logo.png"></a></td>
    </tr>
</table>
<table>
    <tr>
        <td><h1 id="titulo">Clientes</h1></td>
        <td>
            <a href="vistaRegistroCliente.php">
                <div class="contenedor">

                    <table>

                        <tr>

                            <td><h2 id="logoA"> + </h2></td>
                            <td><br>       </td>
                            <td><p>    Nuevo Cliente</p></td>

                        </tr>

                    </table>

                </div>
            </a>
        <td>
    <tr>
        <div class="buscar">
            <ul>
                <li><input type="text" name="Buscador" placeholder="Buscar"></li>
            </ul>
        </div>

    </tr>

</table>
<div class="contenedorCliente">
</div>
<div class="contenedorCliente2">
    <div class="filtros">


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

    </div>
    <table border="1" class="clientes">
        <tr>
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

        include('../controlador/personasControlador.php');
        ?>
<?php $i=0?>
        <?php foreach ($datos as $dato) {;?>
        <?php
        
        $i++; ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $dato['abreviacion'] .' '.' '.$dato['documento'] ?></td>
            <td><?php echo $dato['primerNombre'] .' '. $dato['segundoNombre'].' '. $dato['primerApellido'] .' '.$dato['segundoApellido']  ?> </td>
            <td><?php echo $dato['Departamento']?> </td>
            <td><?php echo $dato['ciudad']?> </td>
            <td><?php echo $dato['direccionCasa']?> </td>
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





</body>
</html>
