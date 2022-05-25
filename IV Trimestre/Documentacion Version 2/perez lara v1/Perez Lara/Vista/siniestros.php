<?php include "plantilla.php";?>

<!DOCTYPE html>
<html lang="es">
<head>
  <link rel="icon" href="../icons/icono.svg">
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/estilos_plantilla.css">
  <meta charset="UTF-8">
  <title>Siniestros</title>
</head>
<body>
    <div class="container">
        <?php navbar_header(); body_container('Siniestros'); ?>
    </div>
    <script src="../js/plantilla.js"></script>
    <script>position_marker('sinister')</script>
</body>
</html>