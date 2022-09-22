<?php
require_once '../resources/views/components/component_help/transform.php';

/**
 * @param string $input
 * @param string $type
 * @param string|null $id_
 * @param string|null $id_group
 * @param null $disabled
 * @return void
 */
function input(string $input, string $type = 'text', string $id_ = null, string $id_group = null,$disabled=null) :void{
    $id = $id_ !== null ? $id_ : separate($input);
    $name = $id !== 'nombres' && $id !== 'apellidos' ? 'name='.$id : null;

    if ($id_group !== null) {
        $id_group = 'id='.$id_group;
    }
    echo '<div '.$id_group.' class=group_input>
                <div class="inputs">
                    <input id='.$id.' '.$name.' class=input type='.$type.' '.$disabled.'>
                    <label id=label_'.$id.' for='.$id.' class=label>'.$input.'</label>
                </div>
                <span role=alert class=alert></span>
            </div>';
}

function input_file() :void{
    echo '<label class="label_file" for="file">
                Cargar archivo
                <input id="file" type="file" class="file">
          </label>';
}


