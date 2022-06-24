<?php
function table($data): void{
    echo'<div id="table_container" class="table_container">    
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
                        echo '<tr></tr>';
              echo'</tbody>
                </table>
            </div>
         </div>';
}
