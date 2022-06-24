<?php
require_once "template/plantilla.php";
require_once "template/plantilla_encabezado_contenido.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../icons/window/icono.svg">
    <link rel="stylesheet" href="../css/template/estilos_plantilla.css">
    <link rel="stylesheet" href="../css/template/estilos_plantilla_encabezado_contenido.css">
    <link rel="stylesheet" href="../css/estilos_plantillas.css">
    <title>Plantillas</title>
</head>
<body>
    <div class="container">
        <?php template();?>
        <main>
            <?php
                header_content_template('Plantillas',0);
            ?>
        </main>
    </div>
    <script src="../js/sidebar.js"></script>
    <script src="../js/modal.js"></script>
</body>
</html>