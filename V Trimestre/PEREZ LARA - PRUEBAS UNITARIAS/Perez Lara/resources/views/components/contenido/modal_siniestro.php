<?php

use core\query;

require_once '../resources/views/components/form_elements/input.php';
require_once '../resources/views/components/form_elements/dropdown/select.php';
require_once '../Core/Query.php';
?>
    <div id="container_form" class="container_form large">
        <form id="new_modal" class="form scrollbar" aria-labelledby="title_new">
            <div class="header_form">
                <h1 id="title_new">Nueva Siniestro</h1>
                <img id="close_modal" data-dismiss="modal2" aria-label="Cerrar" src="../resources/icons/buttons/closeDark.svg" alt="">
            </div>
            <div class="body_form">
                <?php
                input('Codigo Póliza') .
                input('Cliente', 'text', null, null, 'disabled') .
                select('Seguro',(new Query())->seguro()) .
                select('Aseguradora',(new Query())->aseguradora()) .
                input('Monto').
                input('Descripcion')
                ?>


            </div>
            <div class="footer_modal" id="footer_modal">
                <div class="container_file">
                    <?php input_file(); ?>
                </div>
                <div class="buttons_footer">
                    <button id="clean_form" type="reset" class="primary_button">Limpiar formulario</button>
                    <button id="send_form" type="submit" class="primary_button">Registrar siniestro</button>
                </div>

            </div>
            <span id="alert_request" class="alert_request"></span>
        </form>
    </div>


<?php

