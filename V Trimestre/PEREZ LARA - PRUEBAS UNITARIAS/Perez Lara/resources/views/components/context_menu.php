<ul id="context_menu" class="context_menu">
    <li id="edit" class="action" data-toggle="modal2" data-target="backdrop">
        <div class="container_icon_action">
            <img src="../resources/icons/buttons/edit.svg" alt="">
        </div>
        Editar
    </li>
    <li id="delete" class="action" data-toggle="modal2" data-target="backdrop1">
        <div class="container_icon_action">
            <img src="../resources/icons/buttons/trash.svg" alt="">
        </div>
        Eliminar
    </li>
    <li id="download" class="action">
        <div class="container_icon_action">
            <img src="../resources/icons/buttons/download.svg" alt="">
        </div>
        Descargar
    </li>
    <li id="share" class="action">
        <div class="container_icon_action">
            <img src="../resources/icons/buttons/share.svg" alt="">
        </div>
        Compartir
    </li>
</ul>
<div id="backdrop1" class="backdrop" data-target="modal_confirm">
    <div id="modal_confirm" class="modal modal_confirm" aria-labelledby="title_modal_confirm">
        <div class="header_modal">
            <h1 id="title_modal_confirm">¿Desea eliminar el cliente?</h1>
            <img id="close_modal" data-dismiss="modal2" aria-label="Cerrar" src="../resources/icons/buttons/closeDark.svg" alt="">
        </div>
        <img id="warning_modal" src="../resources/icons/buttons/warning.svg" alt="">
        <div class="footer_modal">
            <button id="false_confirm" data-dismiss="modal2" type="submit" class="primary_button">Cancelar</button>
            <button id="true_confirm" data-dismiss="modal2" type="reset" class="primary_button">Eliminar</button>
        </div>
    </div>
</div>
