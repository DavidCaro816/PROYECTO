<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva cotización</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/da61c7ec45.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="navbar">
            <div class="navbar_group">
                <div class="navbar_header">
                    <div class="logo">
                        <img src="icons/logo.svg" alt="">
                    </div>
                </div>
                <div class="navbar_body">
                    <div class="home">
                        <a href="../admin.php">
                            <img src="icons/home.svg" alt="">
                        </a>
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
    <a HREF=""><img id="logo" src="imagenes/logo.png"></a>


    <div class="tituloCotizaciones">
        <a>Cotizaciones</a>
    </div>
    <div class="nuevaCotizacion">
        <button id="botonNuevo" type="button"><i class="fas fa-home"></i> Nueva cotización</button>
    </div>
    <div class="barraBuscar">
        <input type="search" placeholder="Buscar">
    </div>

    <div class="contenedorAtras"></div>

    <div class="contenedorPadre">
        <div class="selectFecha">
            <input type="date" name="fecha">
        </div>
        <div class="selectCliente">
            <select>
                <option hidden selected>Cliente</option>
            </select>
        </div>
        <div class="selectSeguro">
            <select>
                <option hidden selected>Seguro</option>
            </select>
        </div>
        <div class="selectAseguradora">
            <select>
                <option hidden selected>Aseguradora</option>
            </select>
        </div>
        <div class="selectEstado">
            <select>
                <option hidden selected>Estado</option>
            </select>
        </div>
        <div class="botonFiltrar">
            <input type="submit" id="filtrar" value="Filtrar">
        </div>
        <div class="botonLimpiar">
            <input type="submit" id="limpiar" value="Limpiar">
        </div>
        
        <div class="cajaTabla">
        <table class="listaCotizaciones">
        <tr id="titulos">
            <td>FECHA</td>
            <td>No. COTIZACIÓN</td>
            <td>CLIENTE</td>
            <td>SEGURO</td>
            <td>ASEGURADORA</td>
            <td>ESTADO</td>
        </tr>
        <tr>
            <td>17/07/2001</td>
            <td>3312</td>
            <td>Daniel Urrea</td>
            <td>Todo riesgo</td>
            <td>Colpatria</td>
            <td>Activo</td>
        </tr>
        <tr>
            <td>28/06/2000</td>
            <td>2343</td>
            <td>Kevin Sanchez</td>
            <td>Medio :v</td>
            <td>Allianz</td>
            <td>Activo</td>
        </tr>
        </div>
        </table>
    </div>

</body>
</html>