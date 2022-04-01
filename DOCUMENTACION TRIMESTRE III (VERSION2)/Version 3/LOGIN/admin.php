<?php
include "php_file/authenticate.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../LOGIN/css/home_screen.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Home - Pérez Lara Cia Ltda - Asesores de Seguros en Bogotá</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="navbar_group">
                <div class="navbar_header">
                    <div class="logo">
                        <img src="../LOGIN/icons/logo.svg" alt="" width="33px">
                    </div>
                </div>
                <div class="navbar_body">
                    <div class="home">
                        <a href=""><img src="../LOGIN/icons/home.svg" alt=""></a>
                    </div>
                    <div class="clients">
                        <a href="LOGIN/vista/indexMenuClientes.php"><img src="../LOGIN/icons/clients.svg" alt=""></a>
                    </div>
                    <div class="quotes">
                        <a href="LOGIN/vista/vistaNuevaCotizacion.php"><img src="../LOGIN/icons/quotes.svg" alt=""></a>
                    </div>
                    <div class="policies">
                        <a href="LOGIN/vista/poliza.php"><img src="../LOGIN/icons/policies.svg" alt=""></a>
                    </div>
                    <div class="sinister">
                        <a href="LOGIN/vista/siniestros.php"><img src="../LOGIN/icons/sinister.svg" alt=""></a>
                    </div>
                    <div class="reports">
                        <a href=""><img src="../LOGIN/icons/reports.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="navbar_footer">
                <div id="settings" class="settings">
                    <img src="../LOGIN/icons/settings.svg" alt="">
                    <div id="activate_settings" class="activate_settings">
                        <div class="settings_header">
                            <h1>Configuración</h1>
                        </div>
                        <div class="access">
                            <img src="../LOGIN/icons/settings.svg" alt="">
                            <h3>Administrar accesos</h3>
                        </div>
                        <div class="templates">
                            <img src="../LOGIN/icons/settings.svg" alt="">
                            <h3>Plantillas</h3>
                        </div>
                    </div>
                </div>
                <div class="sign_out">
                    <a href="../LOGIN/php_file/logout.php"><img src="../LOGIN/icons/sign_out.svg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="container_boxes">
            <div class="header_container">
                <div class="search">
                    <label for="search">
                        <input id="search" type="text" placeholder="Buscar">
                    </label>
                </div>
                <div class="buttons">
                    <div id="notification_bell" class="notification_bell">
                        <img src="../LOGIN/icons/notification_bell.svg" alt="">
                        <div id="activate_notification" class="activate_notification">
                            <div class="notification_header">
                                <h1>Notificaciones</h1>
                            </div>
                            <div class="data_notification">

                            </div>
                        </div>
                    </div>
                    <div id="profile" class="profile">
                        <img src="../LOGIN/icons/profile.svg" alt="">
                        <div id="activate_profile" class="activate_profile">
                            <div class="profile_header">
                                <div class="picture">
                                    <img src="../LOGIN/icons/profile.svg" alt="">
                                </div>
                                <div class="info">
                                    <h2>Daniela Perez</h2>
                                    <a>Ver tu perfil</a>
                                </div>
                            </div>
                            <div class="horizontal_separator"></div>
                            <div class="option_group">
                                <div class="configuration_option">
                                    <img src="../LOGIN/icons/settings.svg" alt="">
                                    <h3>Configuración</h3>
                                </div>
                                <div class="log_out">
                                    <img src="../LOGIN/icons/settings.svg" alt="">
                                    <h3>Cerrar sesión</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recents">
                <div class="header_recents">
                    <div class="title">
                        <h1>Recientes</h1>
                    </div>
                    <div class="filters">
                        <label for="insurance">
                            <select id="insurances" onclick="filter(this.value,'insurers')">
                                <option label="Seguro">Seguro</option>
                            </select>
                        </label>
                        <label for="insurers">
                            <select id="insurers">
                                <option label="Aseguradora" onclick="filter(this.value,'insurances')">Aseguradora</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="body_recents">
                    <div class="recents_header_titles">
                        <h3>N° Cotización</h3>
                        <h3>Cliente</h3>
                        <h3>Seguro</h3>
                        <h3>Aseguradora</h3>
                    </div>
                    <div id="recents_data" class="recents_data"></div>
                </div>
            </div>
            <div class="policies_data">
                <div class="back">
                    <div class="title_header">
                        <h3>Pólizas</h3>
                    </div>
                </div>
                <div class="data">
                    <div class="data_left" id="data_left"></div>
                    <div class="vertical_separator"></div>
                    <div class="data_right" id="data_right"></div>
                </div>
            </div>
            <div class="best_selling_insurances">
                <div class="insurance_graphic">
                    <img src="../LOGIN/Captura%20de%20pantalla%202022-03-28%20110631.png" width="180" alt="">
                </div>
                <div class="lid">
                    <div class="lid_title">
                        <h4>Seguros mas vendidos</h4>
                    </div>
                    <div id="insurance_group" class="insurance_group"></div>
                </div>
            </div>
            <div class="insurers_graphics">
                <div id="insurer1" class="insurer_box">

                </div>
                <div id="insurer2" class="insurer_box">

                </div>
                <div id="insurer3" class="insurer_box">

                </div>
            </div>
        </div>
    </div>
    <script src="../LOGIN/js/show_data.js"></script>
    <script src="../LOGIN/js/show_modals.js"></script>
</body>
</html>