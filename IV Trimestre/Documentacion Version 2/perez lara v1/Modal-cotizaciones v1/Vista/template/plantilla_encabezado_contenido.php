<?php
require_once "plantilla_busqueda.php";
function header_content_template($title,$modal = null) :void{
    echo '<header class="header_main">
            <h1 id="title">'.$title.'</h1>
            <section class="new_action">
                <button id="new_button" type="button">
                    <img src="../icons/buttons/new_button.svg" alt="Nuevo">Nuevo
                </button>
                <div class="new">
                    '.$modal.'
                </div>
            </section>
            '.search().'
          </header>';
}