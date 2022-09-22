<?php

use core\Query;

require_once '../resources/views/components/form_elements/input.php';
require_once '../resources/views/components/form_elements/dropdown/select.php';
require_once '../resources/views/components/form_elements/checkbox.php';
require_once '../Core/Query.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../resources/icons/window/icono.svg">
    <link rel="stylesheet" href="../resources/css/index.css">
    <title>Pérez Lara Cia Ltda - Asesores de Seguros en Bogotá</title>
</head>
<body>
<div class="container">
    <main>
        <section class="forms">
            <section id="register" class="register">
                <form id="register_form" class="register_form">
                    <div class="inputs_register">
                        <?php
                        input('Nombres');
                        input('Apellidos');
                        select('Tipo de documento', (new Query()) -> tipo_documento());
                        input('Número de documento');
                        input('Correo electrónico', 'email');
                        input('Celular', 'tel');
                        input('Contraseña', 'password', null, 'group_contraseña');
                        ?>
                    </div>

                    <div class="button_container container_button_register">
                        <button type="submit" class="button quaternary_button">Crear cuenta</button>
                    </div>
                </form>
            </section>
            <section id="login" class="login">
                <div id="container_login" class="container_login">
                    <div class="profile">
                        <img src="../resources/icons/buttons/profile.svg" alt="">
                    </div>
                    <form id="login_form" class="login_form">
                        <div class="login_form_body">
                            <div class="inputs_login">
                                <?php
                                input('Usuario');
                                input('Contraseña', 'password', 'clave');
                                ?>
                                <span role="alert" class="alert"></span>
                            </div>
                            <div class="options">
                                <?php
                                echo checkbox('Recordarme');
                                ?>
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
            <img src="../resources/icons/login/logo.svg" alt="">
            <button id="message" class="button button2 tertiary_button">¿No tienes una cuenta?</button>
            <button type="button" id="button_open_forms" class="button tertiary_button">Registrate</button>
        </section>
    </main>
</div>

<script src="../resources/js/open_forms_login.js"></script>
<script src="../resources/js/modal.js"></script>
<script src="../resources/js/input.js"></script>
<script src="../resources/js/actions/usuario.js"></script>
<script src="../resources/js/helper/helper_word.js"></script>

</body>
</html>