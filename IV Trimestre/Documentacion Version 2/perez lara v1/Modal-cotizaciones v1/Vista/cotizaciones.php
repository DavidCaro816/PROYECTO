<?php
require_once "template/plantilla.php";
require_once "template/plantilla_encabezado_contenido.php";
require_once "template/plantilla_contenido.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../icons/icono.svg">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/template/estilos_plantilla.css">
    <link rel="stylesheet" href="../css/template/estilos_plantilla_encabezado_contenido1.css">
    <link rel="stylesheet" href="../css/template/estilos_plantilla_contenido.css">
    <link rel="stylesheet" href="../css/estilos_cotizaciones.css">
    <link rel="stylesheet" type="text/css" href="../css/css_modals/cotizaciones.css">
    <title>Cotizaciones</title>
</head>
<body>
    <div class="container">
        <?php template();?>
        <main>
            <?php
                $datum = ['ejemplo'];

                $modal = '
                <div id="pantalla" class="pantalla">

                    <form action="#" class="formulario" id="formulario">
          

                        <div class="titulo">
                            <a>REGISTRAR NUEVO CLIENTE</a>
                            <img class="cerrarModal" id="cerrarModal" src="icons/close.svg" alt="">
                        </div>

                        <div class="formulario__grupo">
                            <input type="text" id="numeroDocumento" name="numeroDocumento" class="grupo__input" placeholder=" " >
                            <label for="fecha" class="grupo__label">No. Documento</label>
                            <a class="mensaje__input-error">Mensaje de validación</a>
                        </div>

                        <div class="formulario__grupo">
                            
                            <input class="fecha_cotizacion" type="date" name="fecha_cotizacion">
                            <a class="mensaje__input-error">Mensaje de validación</a>
                        </div>

                        <div class="formulario__grupo">
                            <select name="tipoDocumento" id="tipoDocumento" class="grupo__input">
                                <option hidden selected>Seguro</option>
                            </select>
                            <a class="mensaje__input-error">Mensaje de validación</a>
                        </div>

                        <div class="formulario__grupo">
                            <select name="tipoDocumento" id="tipoDocumento" class="grupo__input">
                                <option hidden selected>Estado</option>
                            </select>
                            <a class="mensaje__input-error">Mensaje de validación</a>
                        </div>

                        <div class="boton-cuadro">

                            <input type="submit" class="boton_cerrar" value="Cuadro Comparativo">
                         
                        </div>

                        <div class="botones">
                            <input type="submit" id="boton_cerrar" class="boton_cerrar" value="Cerrar">
                         
                        </div>
            
                     </form>
                </div>';

                header_content_template('Cotizaciones',$modal);
                content_template(2,[],false,$datum)

            ?>

        </main>


    </div>
    <script type="text/javascript" src="../js/modal_cotizaciones.js"></script>
</body>
</html>