<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>menu Cliente2</title>
    <link rel="stylesheet" href="estilos.css">

</head>
<body>

                <div class="campana">
                    <a HREF=""> <img id="campana" src="imagenes/campana.png"></a>
                </div>
                <div class="logo">
                    <a HREF=""> <img id="logo" src="imagenes/logo.png"></a>
                </div>


            <div class="contenedor">
                    <div><h1 id="titulo">Clientes</h1></div>

                    <div class="btNuevoCliente">
                        <a HREF="#">
                        <h2 id="logoA"> + </h2>
                        <p> Nuevo Cliente</p>
                        </a>
                    </div>

                    <div class="buscar">
                            <ul>
                                <li><input type="text" name="Buscador" placeholder="Buscar"></li>
                            </ul>
                    </div>

            </div>
                <div class="contenedorfiltro">
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



</body>
</html>