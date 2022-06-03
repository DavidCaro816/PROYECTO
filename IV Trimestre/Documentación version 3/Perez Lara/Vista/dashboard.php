<?php
require_once "template/plantilla.php";
require_once "template/plantilla_busqueda.php";
require_once "template/plantilla_filtros.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../icons/icono.svg">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/template/estilos_plantilla.css">
    <link rel="stylesheet" href="../css/estilos_dashboard.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <?php template(search());?>
        <main>

        </main>
    </div>
    <script src="../js/action_template.js"></script>
</body>
</html>
