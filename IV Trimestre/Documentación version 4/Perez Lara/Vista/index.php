<?php
require_once '../Controlador/usuario_controller.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../icons/window/icono.svg">
    <link rel="stylesheet" href="../css/estilos_login.css">
    <title>Pérez Lara Cia Ltda - Asesores de Seguros en Bogotá</title>
</head>
<body>
    <div class="container">
        <main>
            <section class="forms">
                <section id="register" class="register">
                    <form id="register_form" class="register_form">
                        <div class="inputs_register">
                            <div class="group_input">
                                <div class="inputs">
                                    <label id="label_nombres" for="nombres" class="label">Nombres</label>
                                    <input id="nombres" class="input" type="text">
                                    <img id="icon_alert_nombres" class="icon_alert" src="../icons/buttons/warning.svg" alt="">
                                </div>
                                <span class="alert"></span>
                            </div>
                            <div class="group_input">
                                <div class="inputs">
                                    <label id="label_apellidos" for="apellidos" class="label">Apellidos</label>
                                    <input id="apellidos" class="input" type="text">
                                    <img id="icon_alert_apellidos" class="icon_alert" src="../icons/buttons/warning.svg" alt="">
                                </div>
                                <span class="alert"></span>
                            </div>
                            <div class="group_input">
                                <div id="tipoDocumento" class="input select icon_modal" tabindex="0">
                                    <span id="label_tipoDocumento" class="label">Tipo de documento</span>
                                    <span id="selected_tipoDocumento" class="label_selected"></span>
                                    <img id="icon_alert_tipoDocumento" class="icon_alert" src="../icons/buttons/warning.svg" alt="">
                                    <img src="../icons/buttons/icon_select.svg" alt="">
                                </div>
                                <div id="tipoDocumento_modal" class="data_option modal">
                                    <div class="content scrollbar">
                                        <?php
                                        foreach (index_tipo_documento() as $tipoDoc){
                                            echo '<p id="'.$tipoDoc['id_tipo_documento'].'" class="option">'.$tipoDoc['descripcion_documento'].'</p>';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <span class="alert"></span>
                            </div>
                            <div class="group_input">
                                <div class="inputs">
                                    <label id="label_numeroDocumento" for="numeroDocumento" class="label">Número de documento</label>
                                    <input id="numeroDocumento" class="input" type="text">
                                    <img id="icon_alert_numeroDocumento" class="icon_alert" src="../icons/buttons/warning.svg" alt="">
                                </div>
                                <span class="alert"></span>
                            </div>
                            <div class="group_input">
                                <div class="inputs">
                                    <label id="label_email" for="email" class="label">Correo electrónico</label>
                                    <input id="email" class="input" type="email">
                                    <img id="icon_alert_email" class="icon_alert" src="../icons/buttons/warning.svg" alt="">
                                </div>
                                <span class="alert"></span>
                            </div>
                            <div class="group_input">
                                <div class="inputs">
                                    <label id="label_celular" for="celular" class="label">Celular</label>
                                    <input id="celular" class="input" type="tel">
                                    <img id="icon_alert_celular" class="icon_alert" src="../icons/buttons/warning.svg" alt="">
                                </div>
                                <span class="alert"></span>
                            </div>
                            <div id="group-contraseña" class="group_input">
                                <div class="inputs">
                                    <label id="label_contraseña" for="contraseña" class="label">Contraseña</label>
                                    <input id="contraseña" class="input" type="password">
                                    <img id="icon_alert_password" class="icon_alert" src="../icons/buttons/warning.svg" alt="">
                                </div>
                                <span class="alert"></span>
                            </div>
                        </div>
                        <div class="button_container container_button_register">
                            <button type="submit" class="button quaternary_button">Crear cuenta</button>
                        </div>
                    </form>
                </section>
                <section id="login" class="login">
                    <div id="container_login" class="container_login">
                        <div class="profile">
                            <img src="../icons/buttons/profile.svg" alt="">
                        </div>
                        <form id="login_form" class="login_form">
                            <div class="login_form_body">
                                <div class="inputs_login">
                                    <div class="group_input">
                                        <div class="inputs">
                                            <label id="label_username" for="username" class="label">Usuario</label>
                                            <input id="username" class="input" type="text">
                                            <img id="icon_alert_username" class="icon_alert" src="../icons/buttons/warning.svg" alt="">
                                        </div>
                                        <span class="alert"></span>
                                    </div>
                                    <div class="group_input">
                                        <div class="inputs">
                                            <label id="label_password" for="password" class="label">Contraseña</label>
                                            <input id="password" class="input" type="password">
                                            <img id="icon_alert_password" class="icon_alert" src="../icons/buttons/warning.svg" alt="">
                                        </div>
                                        <span class="alert"></span>
                                    </div>
                                    <span class="alert"></span>
                                </div>
                                <div class="options">
                                    <input id="remember_me" class="checkbox" type="checkbox">
                                    <label class="label_checkbox" for="remember_me">Recordarme</label>
                                    <a href="">¿Olvidaste tu contraseña?</a>
                                </div>
                            </div>
                            <div class="button_container container_button_login">
                                <button type="submit" class="button quaternary_button">Iniciar sesión</button>
                            </div>
                        </form>
                    </div>
                </section>
            </section>
            <section id="cover" class="cover">
                <img src="../icons/login/logo.svg" alt="">
                <p id="message" class="button button2 tertiary_button">¿No tienes una cuenta?</p>
                <button type="button" id="button_open_forms" class="button tertiary_button">Registrate</button>
            </section>
        </main>
    </div>
    <script src="../js/open_forms_login.js"></script>
    <script src="../js/modal.js"></script>
    <script src="../js/input.js"></script>
</body>
</html>