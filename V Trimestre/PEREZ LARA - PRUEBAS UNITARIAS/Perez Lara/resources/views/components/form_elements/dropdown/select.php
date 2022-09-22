<?php
require_once '../resources/views/components/component_help/transform.php';
require_once '../resources/views/components/form_elements/checkbox.php';

function select(string $select, array|object $data, $multiple = false) :void{
    $id = separate($select);
    $multiple === true ? $data_multiple = 'data-multiple=true' : $data_multiple = null;
    str_contains($select,
                 'Fecha') ? $src = '../resources/icons/buttons/calendar.svg' : $src = '../resources/icons/buttons/icon_select.svg';
    echo '<div class="group_input">
                <div class="input select" data-toggle="modal" data-target="' . $id . '_select" ' . $data_multiple . ' tabindex="0">
                    <span id="label_' . $id . '_select" class="label">' . $select . '</span>
                    <span id="selected_' . $id . '_select" class="label" data-selected=""></span>
                    <img src="' . $src . '" alt="">
                </div>
                <div id="' . $id . '_select" class="data_option modal" aria-labelledby="label_' . $id . '_select">
                 <ul role="combobox" class="content scrollbar">';
    if ($multiple === false){
        foreach ($data as $datum) {
            echo '<li role="option" class="option" data-id="' . $datum[0] . '">' . $datum[1] . '</li>';
        }
    }else {
        foreach ($data as $datum) {
            echo '<li role="option">' . checkbox($datum[1], $datum[0]) . '</li>';
        }
    }
    echo '</ul>
                </div>
                <span role="alert" class="alert"></span>
            </div>';
}