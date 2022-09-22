<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../resources/icons/window/icono.svg">
    <link rel="stylesheet" href="../resources/css/components/base/base.css">
    <?php
    if (isset($filters)){
        echo '<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>';
    }
    if (!isset($css_template)){
        echo '<link rel="stylesheet" href="../resources/css/components/base/encabezado_contenido.css">';
        echo '<link rel="stylesheet" href="../resources/css/components/base/contenido.css">';
    }
    if (isset($css)){
        echo $css;
    }
    ?>
    <title>
        Perez Lara Cia Ltda -
        <?php
        if (isset($title)){
            echo $title;
        }
        ?>
    </title>
</head>
<body>
<div class="container">
    <header class="header">
        <div class="group">
            <div id="menu" class="menu">
                <img src="../resources/icons/buttons/menu.svg" alt="Menú">
            </div>
            <?php
                if(isset($group)){
                    require_once '../resources/views/components/'.$group;
                }
            ?>
        </div>
        <div class="group">
            <section class="notifications">
                <button id="container_icon_notifications" class="container_icon" data-toggle="modal"
                        data-target="notifications_modal">
                    <img src="../resources/icons/buttons/campana.svg" alt="Notificaciones">
                </button>
                <div id="notifications_modal" class="modal notifications_modal"
                     aria-labelledby="title_notifications_modal">
                    <h1 id="title_notifications_modal">Notificaciones</h1>
                    <div class="container_message scrollbar">
                        <a class="link_modal message_notification">
                            <div class="message">
                                <span>Pedro Sanchez</span>
                                <span>Póliza proxima a vencer (20 días)</span>
                            </div>
                            <div class="indicator"></div>
                        </a>
                    </div>
                </div>
            </section>
            <section class="profile">
                <button class="container_icon" data-toggle="modal" data-target="profile_modal">
                    <img id="icon_profile" src="../resources/icons/buttons/profile.svg" alt="Perfil">
                </button>
                <div id="profile_modal" class="modal profile_modal" aria-label="Perfil">
                    <a class="link_modal">
                        <img id="profile1" class="container_icon" src="../resources/icons/buttons/profile.svg" alt="Perfil">
                        <div class="info">
                            <span>Daniela Perez</span>
                            <span>Ver tu perfil</span>
                        </div>
                    </a>
                    <hr>
                    <a class="link_modal">
                        <div class="container_modal_icon">
                            <img src="../resources/icons/sidebar/settings.svg" alt="">
                        </div>
                        Configuración
                    </a>
                    <a class="link_modal">
                        <div class="container_modal_icon">
                            <img src="../resources/icons/sidebar/log-out.svg" alt="">
                        </div>
                        Cerrar sesión
                    </a>
                </div>
            </section>
        </div>
    </header>
    <nav id="sidebar" class="sidebar">
        <ul class="sidebar_group">
            <li>
                <a class="logo" href="dashboard.php">
                    <img src="../resources/icons/sidebar/logo.svg" alt="Logo">
                </a>
            </li>
            <li>
                <a class="icon_sidebar" id="dashboard" href="dashboard.php">
                    <img src="../resources/icons/sidebar/home.svg" alt="">Inicio
                </a>
                <span id="dashboard_title" class="title_page">Inicio</span>
            </li>
            <li>
                <a class="icon_sidebar" id="clients" href="clientes.php">
                    <img src="../resources/icons/sidebar/clients.svg" alt="">Clientes
                </a>
                <span id="clients_title" class="title_page">Clientes</span>
            </li>
            <li>
                <a class="icon_sidebar" id="quotes" href="cotizaciones.php">
                    <img src="../resources/icons/sidebar/quotes.svg" alt="">Cotizaciones
                </a>
                <span id="quotes_title" class="title_page">Cotizaciones</span>
            </li>
            <li>
                <a class="icon_sidebar" id="policies" href="polizas.php">
                    <img src="../resources/icons/sidebar/policies.svg" alt="">Pólizas
                </a>
                <span id="policies_title" class="title_page">Pólizas</span>
            </li>
            <li>
                <a class="icon_sidebar" id="sinisters" href="siniestros.php">
                    <img src="../resources/icons/sidebar/sinister.svg" alt="">Siniestros
                </a>
                <span id="sinisters_title" class="title_page">Siniestros</span>
            </li>
            <li>
                <a class="icon_sidebar" id="reports" href="reportes.php">
                    <img src="../resources/icons/sidebar/reports.svg" alt="">Reportes
                </a>
                <span id="reports_title" class="title_page">Reportes</span>
            </li>
            <li>
                <a class="icon_sidebar" id="templates" href="plantillas.php">
                    <img src="../resources/icons/sidebar/plantilla.svg" alt="">Plantillas
                </a>
                <span id="templates_title" class="title_page">Plantillas</span>
            </li>
        </ul>
        <ul class="sidebar_group">
            <li>
                <button class="icon_sidebar" data-toggle="modal" data-target="settings_modal">
                    <img id="icon_settings" src="../resources/icons/sidebar/settings.svg" alt="">Configuración
                </button>
                <div id="settings_modal" class="modal settings_modal" aria-labelledby="title_settings_modal">
                    <h1 id="title_settings_modal">Configuración</h1>
                    <a class="link_modal" href="">
                        <div class="container_modal_icon">
                            <img src="../resources/icons/sidebar/settings.svg" alt="">
                        </div>
                        Administrar accesos
                    </a>
                    <a class="link_modal" href="index.php">
                        <div class="container_modal_icon">
                            <img src="../resources/icons/sidebar/time.svg" alt="">
                        </div>
                        Tiempos
                    </a>
                    <a class="link_modal">
                        <div class="container_modal_icon">
                            <img src="../resources/icons/sidebar/manual_usuario.svg" alt="">
                        </div>
                        Manual de usuario
                    </a>
                </div>
                <span class="title_page">Configuración</span>
            </li>
            <li>
                <a class="icon_sidebar" href="index.php">
                    <img src="../resources/icons/sidebar/log-out.svg" alt="">Cerrar sesión
                </a>
                <span class="title_page">Cerrar sesión</span>
            </li>
        </ul>
    </nav>
    <main>
        <?php
        if (!isset($content)){
            require_once '../resources/views/components/base/encabezado_contenido.php';
            require_once '../resources/views/components/base/contenido.php';
        }else {
            require_once '../resources/views/components/contenido/'.$content;
        }
        ?>
    </main>
</div>
<script src="../resources/js/sidebar.js"></script>
<script src="../resources/js/modal.js"></script>
<?php
if (isset($js)){
    echo $js;
}
if (!isset($content)){
    echo '<script src="../resources/js/input.js"></script>
          <script src="../resources/js/modal_static.js"></script>
          <script src="../resources/js/table.js"></script>
          <script src="../resources/js/context_menu.js"></script>';
}
if (isset($filters)){
    echo '<script src="../resources/js/search.js"></script>';
}
?>
</body>
</html>