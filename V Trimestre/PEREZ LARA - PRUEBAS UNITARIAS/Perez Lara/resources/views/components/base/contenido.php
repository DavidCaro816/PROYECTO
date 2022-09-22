<?php
    require_once '../resources/views/components/form_elements/dropdown/filter.php';
?>
<div id="data_container" class="data_container">
    <div class="back_container"></div>
    <?php
        require_once '../resources/views/components/filters.php';
    ?>
    <div id="table_container" class="table_container">
        <div class="data scrollbar">
            <table id="table" class="table">
                <thead id="thead">
                </thead>
                <tbody id="tbody"></tbody>
            </table>
        </div>
    </div>
</div>
<?php
require_once '../resources/views/components/context_menu.php';