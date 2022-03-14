<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>menu Cliente</title>
    <link rel="stylesheet" href="estilos.css">

</head>
<body>
<table class="menuArriba">
    <tr>
        <td> <a HREF=""><img id="campana"src="imagenes/campana.png"></a> </td>
        <td> <a HREF=""><img id="logo"src="imagenes/logo.png"></a></td>
    </tr>
</table>
<table>
    <tr>
        <td><h1 id="titulo">Clientes</h1></td>
        <td>
            <a href="#">
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
    <div class="filtros">
        <form action="" method="POST">


        <select id="filtroDepa" name="departamento" value="Departamento" />
        <option>Departamento</option>
        <option>Cundinamarca</option> </select>

        <select id="filtroCiud" name="ciudad" value="Ciudad" />
        <option>Ciudad</option>
        <option>Bogotá</option> </select>
        <select id="filtroEsta" name="estado" value="Estado" />
        <option>Estado</option>
        <option>Potencial</option> </select>

        <input type="button" id="filtro" value="Filtrar" />
        <input type="button" id="limpiar" value="Limpiar" />
        </form>
    </div>

    <select id="filtroDepar" name="departamento" />
    <?php

    include('../controlador/controladorFiltro.php')

    ?>
    </select>






</div>


</body>
</html>