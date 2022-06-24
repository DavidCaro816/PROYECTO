<?php
function filters($filters_template,$filters,$view) :void{
    if($filters_template === 1 || $filters_template === 2){
        array_unshift($filters,'Seguro','Aseguradora');
        if($filters_template === 2){
            array_unshift($filters,'Fecha','Cliente');
        }
    }
    if($view === false){
        $filters[] = 'Estado';
    }
    echo '<div class="filter_group_container">';
    foreach ($filters as $filter){
        $src = '../icons/buttons/icon_select.svg';
        if($filter === 'Fecha'){
            $src = '../icons/buttons/calendar.svg';
        }
        echo'<div id="filtro_'.strtolower($filter).'" class="filter">
                <span>'.$filter.'</span>
                <img src="'.$src.'" alt="">
             </div>';
    }
    if($view === false){
        echo '<div class="filter_button_container">
                <button id="button_filter" class="secondary_button" type="button">Filtrar</button>
                <button id="button_clean" class="secondary_button" type="button">Limpiar</button>
              </div>';
    }
    echo '</div>';
}