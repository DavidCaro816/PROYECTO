<?php
require_once "template/plantilla.php";
require_once "template/plantilla_busqueda.php";
require_once "template/plantilla_filtros.php";
require_once "template/plantilla_tabla.php";
require_once "../Controlador/cotizacion_controller.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../icons/window/icono.svg">
    <link rel="stylesheet" href="../css/template/estilos_plantilla.css">
    <link rel="stylesheet" href="../css/template/estilos_tabla.css">
    <link rel="stylesheet" href="../css/estilos_dashboard.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <?php template(search());?>
        <main>
            <section class="recent">
                <header>
                    <h1>Recientes</h1>
                    <?php filters(1,[],true);?>
                </header>
                <?php table(recent()); ?>
            </section>
            <section class="totals">
                <section class="summary">
                    <div class="item_data_summary">
                        <img src="../icons/policies_data/data_left/icon-black_clients.svg" alt="Clientes">
                        <span class="total_left">1234<?php ?></span>
                    </div>
                    <div class="item_data_summary">
                        <img src="../icons/policies_data/data_left/icon-black_quotes.svg" alt="Cotizaciones">
                        <span class="total_left">1234<?php ?></span>
                    </div>
                    <div class="item_data_summary">
                        <img src="../icons/policies_data/data_left/icon-black_policies.svg" alt="Pólizas">
                        <span class="total_left">1234<?php ?></span>
                    </div>
                </section>
                <div class="vertical_separator"></div>
                <section class="policies">
                    <header>
                        <h1>Pólizas</h1>
                    </header>
                    <div class="item_data_policies">
                        <span class="title_item_data_right">Proximas a vencer</span>
                        <img src="../icons/sidebar/time.svg" alt="">
                        <span class="total_right">1234<?php ?></span>
                    </div>
                    <div class="item_data_policies">
                        <span class="title_item_data_right">Vigentes</span>
                        <img src="../icons/buttons/check.svg" alt="">
                        <span class="total_right">1234<?php ?></span>
                    </div>
                    <div class="item_data_policies">
                        <span class="title_item_data_right">Vencidas</span>
                        <img src="../icons/buttons/close.svg" alt="">
                        <span class="total_right">1234<?php ?></span>
                    </div>
                </section>
            </section>
            <section class="statistics">
                <section class="insurance">
                    <header>
                        <h3>Seguros mas vendidos</h3>
                        <div class="icons_insurance">
                            <div class="icon_insurance"><img src="../icons/seguros/autos.svg" alt=""></div>
                            <div class="icon_insurance"><img src="../icons/seguros/autos.svg" alt=""></div>
                            <div class="icon_insurance"><img src="../icons/seguros/autos.svg" alt=""></div>
                        </div>
                    </header>
                </section>
                <section class="insurers">
                    <div class="insurer_graphic">
                        <div class="icon_insurer">
                            <img src="" alt="">
                        </div>
                    </div>
                    <div class="insurer_graphic">
                        <div class="icon_insurer">
                            <img src="" alt="">
                        </div>
                    </div>
                    <div class="insurer_graphic">
                        <div class="icon_insurer">
                            <img src="" alt="">
                        </div>
                    </div>
                </section>
            </section>
        </main>
    </div>
    <script src="../js/sidebar.js"></script>
    <script src="../js/modal.js"></script>
</body>
</html>
