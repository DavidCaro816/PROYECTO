<?php
require_once '../resources/views/components/component_help/transform.php';
require_once '../resources/views/components/form_elements/checkbox.php';

function filter(string $filter, array|object $data): void{
    $id = separate($filter);
    $filter === 'Fecha' ? $src = '../icons/buttons/calendar.svg' : $src = '../icons/buttons/icon_select.svg';
    echo '<div  class="group_input">
            <div class="filter" data-toggle="modal" data-target="' . $id . '_filter" tabindex="0">
                <span id="label_' . $id . '_filter">' . $filter . '</span>
                <img src="' . $src . '" alt="">
            </div>
            <div id="' . $id . '_filter" class="data_option modal" aria-labelledby="label_' . $id . '_filter">
                <ul role="combobox" class="content scrollbar">';
                    foreach ($data as $datum) {
                        echo '<li role="option">'.checkbox($datum[1], $datum[0]).'</li>';
                    }
          echo '</ul>    
            </div>
          </div>';
}
