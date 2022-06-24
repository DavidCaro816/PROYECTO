<?php
require_once 'plantilla_filtros.php';
require_once 'plantilla_tabla.php';
function content_template($filters_template,$filters,$view,$data) :void{
    echo'<div class="data_container">
            <div class="back_container"></div>';
            filters($filters_template,$filters,$view);
            table($data);
    echo'</div>';
}
