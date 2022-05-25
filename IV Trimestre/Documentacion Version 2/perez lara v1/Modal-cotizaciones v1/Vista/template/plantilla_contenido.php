<?php
require_once "plantilla_filtros.php";
function content_template($filters_template,$filters,$view,$datum) :void{
    echo'<div class="data_container">
            <div class="back_container"></div>
            <div class="filter_group_container">';
                filters($filters_template,$filters,$view);
                echo'<div class="filter_button_container">
                        <button id="button_filter" class="filters_button" type="button">Filtrar</button>
                        <button id="button_clean" class="filters_button" type="button">Limpiar</button>
                    </div>
            </div>
            <div class="table_container">    
                <div class="data scrollbar">
                    <table class="table">
                        <thead>
                            <tr>';
                           

                        echo'</tr>
                            </thead>
                        <tbody>';

                                   // ACA SE PONE LA INFO 

                                    echo '
                <td><a href="../vista/editarClientes.php"></a> <input type="button" class="btEditar" value="Editar" >
                <td><a href="../controlador/controladorEliminar.php"><input type="button" class="btEliminar" value="Eliminar" />
                </tr>';


                        echo'</tbody>
                    </table>
                </div>
            </div>
          </div>';
}