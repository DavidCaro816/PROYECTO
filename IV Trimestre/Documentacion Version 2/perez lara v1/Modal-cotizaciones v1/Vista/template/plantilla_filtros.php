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
    foreach ($filters as $filter){
        $src = '../icons/buttons/icon_select.svg';
        if($filter === 'Fecha'){
            $src = '../icons/buttons/calendar.svg';
        }
        echo'<div class="filter_container">
                <div id="filtro_'.$filter.'" class="filter">
                    <span>'.$filter.'</span>
                    <img src="'.$src.'" alt="">
                </div>
             </div>';
    }
}