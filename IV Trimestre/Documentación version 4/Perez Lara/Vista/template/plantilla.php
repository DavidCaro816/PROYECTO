<?php
function template($extend1 = null,$extend2 = null) :void{
    echo '<header class="header">
            <div class="group1">
                <div id="menu" class="menu">
                    <img id="icon_action_sidebar" src="../icons/buttons/menu.svg" alt="Menú">
                </div>
                '.$extend1.'
            </div>
            <div class="group2">
                '.$extend2. '
                <section class="notifications">
                    <div id="notifications" class="icon_modal">
                        <img id="icon_notifications" src="../icons/buttons/campana.svg" alt="Notificaciones">
                    </div>
                    <div id="notifications_modal" class="modal notifications_modal">
                        <h1>Notificaciones</h1>
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
                    <div id="profile" class="icon_modal">
                        <img id="icon_profile" src="../icons/buttons/profile.svg" alt="Perfil">
                    </div>
                    <div id="profile_modal" class="modal profile_modal">
                        <a class="link_modal">
                            <img id="profile1" src="../icons/buttons/profile.svg" alt="Perfil">
                            <div class="info">
                                <span>Daniela Perez</span>
                                <span>Ver tu perfil</span>
                            </div>
                        </a>
                        <hr>
                        <a class="link_modal">
                            <div class="container_modal_icon">
                                <img src="../icons/sidebar/settings.svg" alt="">
                            </div>
                            Configuración
                        </a>
                        <a class="link_modal">
                            <div class="container_modal_icon">
                                <img src="../icons/sidebar/log-out.svg" alt="">
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
                        <img src="../icons/sidebar/logo.svg" alt="Logo">
                    </a>
                </li>
                <li>
                    <a class="icon_sidebar" id="dashboard" href="dashboard.php">
                        <img src="../icons/sidebar/home.svg" alt="">Inicio
                    </a>
                    <span id="dashboard_title" class="title_page">Inicio</span>
                </li>
                <li>
                    <a class="icon_sidebar" id="clients" href="clientes.php">
                        <img src="../icons/sidebar/clients.svg" alt="">Clientes
                    </a>
                    <span id="clients_title" class="title_page">Clientes</span>
                </li>
                <li>
                    <a class="icon_sidebar" id="quotes" href="cotizaciones.php">
                        <img src="../icons/sidebar/quotes.svg" alt="">Cotizaciones
                    </a>
                    <span id="quotes_title" class="title_page">Cotizaciones</span>
                </li>
                <li>
                    <a class="icon_sidebar" id="policies" href="polizas.php">
                        <img src="../icons/sidebar/policies.svg" alt="">Pólizas
                    </a>
                    <span id="policies_title" class="title_page">Pólizas</span>
                </li>
                <li>
                    <a class="icon_sidebar" id="sinisters" href="siniestros.php">
                        <img src="../icons/sidebar/sinister.svg" alt="">Siniestros
                    </a>
                    <span id="sinisters_title" class="title_page">Siniestros</span>
                </li>
                <li>
                    <a class="icon_sidebar" id="reports" href="reportes.php">
                        <img src="../icons/sidebar/reports.svg" alt="">Reportes
                    </a>
                    <span id="reports_title" class="title_page">Reportes</span>
                </li>
                <li>
                    <a class="icon_sidebar" id="templates" href="plantillas.php">
                        <img src="../icons/sidebar/plantilla.svg" alt="">Plantillas
                    </a>
                    <span id="templates_title" class="title_page">Plantillas</span>
                </li>
            </ul>
            <ul class="sidebar_footer">
                <li>
                    <div id="settings" class="icon_sidebar icon_modal">
                        <img id="icon_settings" src="../icons/sidebar/settings.svg" alt="">Configuración
                    </div>
                    <div id="settings_modal" class="modal settings_modal">
                        <div class="header_settings_modal">
                            <h1>Configuración</h1>
                            <img src="../icons/buttons/light.svg" alt="">
                        </div>
                        <a class="link_modal" href="">
                            <div class="container_modal_icon">
                                <img src="../icons/sidebar/settings.svg" alt="">
                            </div>
                            Administrar accesos
                        </a>
                        <a class="link_modal" href="index.php">
                            <div class="container_modal_icon">
                                <img src="../icons/sidebar/time.svg" alt="">
                            </div>
                            Tiempos
                        </a>
                        <a class="link_modal">
                            <div class="container_modal_icon">
                                <img src="../icons/sidebar/manual_usuario.svg" alt="">
                            </div>
                            Manual de usuario
                        </a>
                    </div>
                    <span id="settings_title" class="title_page">Configuración</span>
                </li>
                <li>
                    <a id="log_out" class="icon_sidebar" href="index.php">
                        <img src="../icons/sidebar/log-out.svg" alt="">Cerrar sesión
                    </a>
                    <span id="log_out_title" class="title_page">Cerrar sesión</span>
                </li>
            </ul>
          </nav>';
}
