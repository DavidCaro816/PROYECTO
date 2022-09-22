<div class="filter_group_container">
    <?php
    if(isset($filters)){
        foreach ($filters as $filter){
            echo $filter;
        }
    }
    if (!isset($view)){
        echo '<div class="filter_button_container">
                          <button id="button_filter" class="secondary_button" type="button">Filtrar</button>
                          <button id="button_clean" class="secondary_button" type="button">Limpiar</button>
                      </div>';
    }
    ?>
</div>
