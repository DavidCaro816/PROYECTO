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
    <link rel="stylesheet" href="../css/template/estilos_plantilla_encabezado_contenido.css">
    <link rel="stylesheet" href="../css/template/estilos_plantilla_contenido.css">
    <link rel="stylesheet" href="../css/estilos_reportes.css">

    <title>Reportes</title>
</head>
<body>
    <div class="container">
        <?php template();?>
        <main>
            <?php
                $info_reportes = 0;
                header_content_template('Reportes');
                content_template(0,['Fecha'],true,$info_reportes);
            ?>
        </main>
    </div>
    <script src="../js/modal.js"></script>
    <script src="../js/action_template.js"></script>
</body>
</html>