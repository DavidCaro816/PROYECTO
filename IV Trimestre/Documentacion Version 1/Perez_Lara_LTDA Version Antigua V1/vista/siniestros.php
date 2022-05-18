
<?php
$conexion= mysqli_connect("localhost", "root", "", "perez_lara_cia_ltda");
$conexion->query("SET NAMES 'utf8'");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SINIESTROS</title>
    <link rel="stylesheet" href="../css/estilosSiniestros.css">

</head>
<body>

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
                    <img src="icons/quotes.svg" alt="">
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
        <div class="titulo"><h1 style="font-size: 70px" id="titulo">Siniestros</h1></div>

        <div class="btNuevoSiniestro">
            <a id="nuevo" href="vistaRegistroSiniestro.php">
                <button type="button"> <span id="mas"><img src="icons/anadir.png"><span> <span id="new">Nuevo Siniestro </span> </button>
            </a>
        </div>


        <div class="search">
            <span>Buscar</span>
            <img src="icons/search.svg">
        </div>

    </div>
        <div class="contenedorSiniestro">

            <div class="filtro">

                <form action="" method="POST">

                        <select class="fecha" id="fecha" name="fecha">
                            <option name="Fecha" disabled selected hidden>Fecha</option>
                        </select>
                        <select id="aseguradora">
                            <option name="aseguradora" disabled selected hidden>Aseguradora</option>
                        </select>
                        <select id="estado">
                            <option name="estado" disabled selected hidden>Estado</option>
                        </select>

                        <input type="button" id="filtro" value="Filtrar" />
                        <input type="button" id="limpiar" value="Limpiar" />
                </form>

                <table border="1" class="clientes">
                    <tr>

                        <th> N° REFERENCIA </th>
                        <th>CLIENTE</th>
                        <th>CODIGO PÓLIZA</th>
                        <th>SEGURO</th>
                        <th>ASEGURADORA</th>
                        <th>FECHA</th>
                        <th>TITULO</th>
                        <th>ESTADO</th>
                        <th id="obs">OBSERVACIONES</th>
                    </tr>

                </table>
            </div>

        </div>




</body>
</html>