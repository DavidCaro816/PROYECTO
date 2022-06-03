<?php
function template($extension1 = null,$extension2 = null) :void{
    echo '<header class="header">
            <div class="group-1">
                <div id="menu" class="menu">
                    <img id="icon_action_sidebar" src="../../icons/buttons/menu.svg" alt="Menú">
                </div>
                '.$extension1.'
            </div>
            <div class="group-2">
                '.$extension2. '
                <section class="notifications">
                    <div id="notifications" class="icon_notifications icon_modal">
                        <img src="../../icons/buttons/campana.svg" alt="Notificaciones">
                    </div>
                    <div id="notifications_modal" class="modal notifications_modal">
                        <h1>Notificaciones</h1>
                        <div class="container_message scrollbar">
                            <a class="message_notification">
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
                    <img id="profile" class="icon_profile icon_modal" src="../../icons/buttons/profile.svg" alt="Perfil">
                    <div id="profile_modal" class="modal profile_modal">
                        <a>
                            <img id="profile1" class="icon_profile" src="../../icons/buttons/profile.svg" alt="Perfil">
                            <div class="info">
                                <span>Daniela Perez</span>
                                <span>Ver tu perfil</span>
                            </div>
                        </a>
                        <hr>
                        <a>
                            <div class="container_modal_icon">
                                <img src="../../icons/sidebar/settings.svg" alt="">
                            </div>
                            Configuración
                        </a>
                        <a>
                            <div class="container_modal_icon">
                                <img src="../../icons/sidebar/log-out.svg" alt="">
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
                        <img src="../../icons/sidebar/logo.svg" alt="Logo">
                    </a>
                </li>
                <li>
                    <a class="icon_sidebar" id="dashboard" href="dashboard.php">
                        <img src="../../icons/sidebar/home.svg" alt="Inicio">Inicio
                    </a>
                </li>
                <li>
                    <a class="icon_sidebar" id="clients" href="clientes.php">
                        <img src="../../icons/sidebar/clients.svg" alt="Clientes">Clientes
                    </a>
                </li>
                <li>
                    <a class="icon_sidebar" id="quotes" href="cotizaciones.php">
                        <img src="../../icons/sidebar/quotes.svg" alt="Cotizaciones">Cotizaciones
                    </a>
                </li>
                <li>
                    <a class="icon_sidebar" id="policies" href="polizas.php">
                        <img src="../../icons/sidebar/policies.svg" alt="Pólizas">Pólizas
                    </a>
                </li>
                <li>
                    <a class="icon_sidebar" id="sinisters" href="siniestros.php">
                        <img src="../../icons/sidebar/sinister.svg" alt="Siniestros">Siniestros
                    </a>
                </li>
                <li>
                    <a class="icon_sidebar" id="reports" href="reportes.php">
                        <img src="../../icons/sidebar/reports.svg" alt="Informes">Informes
                    </a>
                </li>
                <li>
                    <a class="icon_sidebar" id="templates" href="plantillas.php">
                        <img src="../../icons/sidebar/plantilla.svg" alt="Plantillas">Plantillas
                    </a>
                </li>
            </ul>
            <ul class="sidebar_footer">
                <li>
                    <div id="settings" class="icon_sidebar icon_modal">
                        <img src="../../icons/sidebar/settings.svg" alt="Informes">Configuración
                    </div>
                    <div id="settings_modal" class="modal settings_modal">
                        <h1>Configuración</h1>
                        <a>
                            <div class="container_modal_icon">
                                <img src="../../icons/sidebar/settings.svg" alt="">
                            </div>
                            Administrar accesos
                        </a>
                        <a>
                            <div class="container_modal_icon">
                                <img src="../../icons/sidebar/time.svg" alt="">
                            </div>
                            Tiempos
                        </a>
                        <a>
                            <div class="container_modal_icon">
                                <img src="../../icons/sidebar/manual_usuario.svg" alt="">
                            </div>
                            Manual de usuario
                        </a>
                    </div>
                </li>
                <li>
                    <a class="icon_sidebar" href="index.html">
                        <img src="../../icons/sidebar/log-out.svg" alt="Cerrar sesión">Cerrar sesión
                    </a>
                </li>
            </ul>
          </nav>';
}
