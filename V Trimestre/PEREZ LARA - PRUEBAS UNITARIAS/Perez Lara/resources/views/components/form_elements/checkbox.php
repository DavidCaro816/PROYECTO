<?php
require_once '../resources/views/components/component_help/transform.php';

/* Función para componente input tipo checkbox*/
/**
 * @param string $checkbox
 * @param string|null $id_
 * @return string
 */
function checkbox(string $checkbox, string $id_ = null): string{
    $id = separate($checkbox);
    return '<input id="'.$id.'" class="checkbox" data-id="'.$id_.'" type="checkbox">
            <label class="label_checkbox" for='.$id.'>'.$checkbox.'</label>';
}