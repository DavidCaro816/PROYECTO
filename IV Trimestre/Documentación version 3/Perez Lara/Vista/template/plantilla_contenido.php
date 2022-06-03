<?php

require_once 'plantilla_filtros.php';
function content_template($filters_template,$filters,$view,$data) :void{
    echo'<div class="data_container">
            <div class="back_container"></div>
            <div class="filter_group_container">';
                filters($filters_template,$filters,$view);
                echo'<div class="filter_button_container">
                        <button id="button_filter" class="secondary_button" type="button">Filtrar</button>
                        <button id="button_clean" class="secondary_button" type="button">Limpiar</button>
                    </div>
            </div>
            <div class="table_container">    
                <div class="data scrollbar">
                    <table class="table">
                        <thead>
                            <tr>';
                                for($i = 0; $i < $data->columnCount(); $i++){
                                    echo '<th>'.$data->getColumnMeta($i)['name'].'</th>';
                                }
                        echo'</tr>
                            </thead>
                        <tbody>';
                                foreach ($data as $datum) {
                                    echo '<tr>';
                                    for($i = 0; $i < $data->columnCount(); $i++){
                                        echo '<td>'.$datum[$i].'</td>';
                                    }
                                    echo'</tr>';
                                }
                   echo'</tbody>
                    </table>
                </div>
            </div>
          </div>';
}
