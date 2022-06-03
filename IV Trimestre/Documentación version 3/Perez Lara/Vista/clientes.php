<?php
require_once 'template/plantilla.php';
require_once 'template/plantilla_encabezado_contenido.php';
require_once 'template/plantilla_contenido.php';
require_once 'modals/modal_clientes.php';
require_once '../Modelo/Cliente.php';
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
    <link rel="stylesheet" href="../css/estilos_clientes.css">
    <title>Clientes</title>
</head>
<body>
    <div class="container">
        <?php template();?>
        <main>
            <?php
                header_content_template('Clientes',modal());
                content_template(0,['Departamento','Ciudad'],false,(new Cliente())->getInfoCliente());
            ?>
        </main>
    </div>
    <script src="../js/modal.js"></script>
    <script src="../js/action_template.js"></script>
</body>
</html>