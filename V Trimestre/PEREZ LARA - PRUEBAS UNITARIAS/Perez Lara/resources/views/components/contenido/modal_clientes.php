<?php

use core\query;

require_once '../resources/views/components/form_elements/input.php';
require_once '../resources/views/components/form_elements/dropdown/select.php';
require_once '../Core/Query.php';
?>
<form id="new_modal" class="container_form form" aria-labelledby="title_new_client">
       <div class="header_modal">
              <h1 id="title_new_client">Nuevo cliente</h1>
              <img id="close_modal" data-dismiss="modal2" aria-label="Cerrar" src="../resources/icons/buttons/closeDark.svg" alt="">
       </div>
       <div class="body_modal">
              <?php
              input('Nombres') .
              input('Apellidos') .
              select('Tipo de documento',(new Query())->tipo_documento()) .
              input('Número de documento') .
              select('Fecha de nacimiento',(new Query())->tipo_documento()) .
              input('Correo electrónico', 'email') .
              select('Departamento',(new Query())->departamento()) .
              select('Ciudad',(new Query())->ciudad()) .
              input('Direccion') .
              input('Direccion (opcional)', 'text', 'direccion2') .
              input('Telefono', 'tel') .
              input('Telefono (opcional)', 'tel', 'telefono2');
              ?>
       </div>
       <div class="footer_modal">
              <button id="clean_form" type="reset" class="primary_button">Limpiar formulario</button>
              <button id="send_form" type="submit" class="primary_button">Registrar cliente</button>
       </div>
       <span id="alert_request" class="alert_request"></span>
</form>

