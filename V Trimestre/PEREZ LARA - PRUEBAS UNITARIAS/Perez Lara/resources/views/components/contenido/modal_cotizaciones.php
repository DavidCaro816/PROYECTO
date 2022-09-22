<?php

use core\query;

require_once '../resources/views/components/form_elements/input.php';
require_once '../resources/views/components/form_elements/dropdown/select.php';
require_once '../Core/Query.php';
?>
<div id="container_form" class="container_form">
    <form id="new_modal" class="form scrollbar" aria-labelledby="title_new_client">
        <div class="header_modal">
            <h1 id="title_new_client">Nueva cotización</h1>
            <img id="close_modal" data-dismiss="modal2" aria-label="Cerrar" src="../resources/icons/buttons/closeDark.svg" alt="">
        </div>
        <fieldset class="body_modal">
            <legend>Información cliente</legend>
            <?php
            input('Número de documento');
            input('Cliente','text',null,null,'disabled');
            ?>
        </fieldset>
        <fieldset class="body_modal">
            <legend>Información cotización</legend>
            <?php
            select('Seguro',(new Query())->seguro());
            select('Aseguradora',(new Query())->aseguradora(),true);
            select('Coberturas',(new Query())->cobertura(),true);
            ?>
        </fieldset>
        <span id="message_empty_table" class="message_empty_table">Seleccione opciones para crear cotización</span>
        <table class="table_form">
            <thead id="thead_cotizacion">
            </thead>
            <tbody id="tbody_cotizacion">
            </tbody>
        </table>
        <div class="footer_modal">
            <button id="clean_form" type="reset" class="primary_button">Limpiar formulario</button>
            <button id="send_form" type="submit" class="primary_button">Registrar cotización</button>
        </div>
        <span id="alert_request" class="alert_request"></span>
    </form>
</div>