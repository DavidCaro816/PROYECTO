<?php
function modal():string{
    return '<div id="new_modal" class="form">
                <div class="header_form">
                    <h1>Nuevo cliente</h1>
                    <img id="close_modal" src="../../icons/buttons/closeDark.svg" alt="">
                </div>
                <div class="body_form">
                    <div class="group_input">
                        <div class="inputs">
                            <label id="label_nombres" class="label" for="nombres">Nombres</label>
                            <input id="nombres" class="input" type="text">
                            <img id="icon_alert_nombres" class="icon_alert" src="../../icons/buttons/warning.svg" alt="">
                        </div>
                        <span class="alert"></span>
                    </div>
                    <div class="group_input">
                        <div class="inputs">
                            <label id="label_apellidos" class="label" for="apellidos">Apellidos</label>
                            <input id="apellidos" class="input" type="text">
                            <img id="icon_alert_apellidos" class="icon_alert" src="../../icons/buttons/warning.svg" alt="">
                        </div>
                        <span class="alert"></span>
                    </div>
                    <div class="group_input">
                        <div id="tipoDocumento" class="tipoDocumento input select icon_modal" tabindex="0">
                            <span id="label_tipoDocumento" class="label">Tipo de documento</span>
                            <span id="selected_tipoDocumento" class="label_selected"></span>
                            <img src="../../icons/buttons/icon_select.svg" alt="">
                            <img id="icon_alert_tipoDocumento" class="icon_alert" src="../../icons/buttons/warning.svg" alt="">
                        </div>
                        <div id="tipoDocumento_modal" class="data_option modal">
                            <div class="content scrollbar">
                               
                            </div>
                        </div>
                        <span class="alert"></span>
                    </div>
                    <div class="group_input">
                        <div class="inputs">
                            <label id="label_numeroDocumento" class="label" for="numeroDocumento">Número de documento</label>
                            <input id="numeroDocumento" class="input" type="text">
                            <img id="icon_alert_numeroDocumento" class="icon_alert" src="../../icons/buttons/warning.svg" alt="">
                        </div>
                        <span class="alert"></span>
                    </div>
                    <div class="group_input">
                        <div id="fechaNacimiento" class="fechaNacimiento input select icon_modal" tabindex="0">
                            <span id="label_fechaNacimiento" class="label">Fecha de nacimiento</span>
                            <span id="selected_fechaNacimiento" class="label_selected"></span>
                            <img src="../../icons/buttons/icon_select.svg" alt="">
                            <img id="icon_alert_fechaNacimiento" class="icon_alert" src="../../icons/buttons/warning.svg" alt="">
                        </div>
                        <div id="fechaNacimiento_modal" class="data_option modal">
                            <div class="content scrollbar">
                        
                            </div>
                        </div>
                        <span class="alert"></span>
                    </div>
                    <div class="group_input">
                        <div class="inputs"> 
                            <label id="label_email" for="email" class="label">Correo electrónico</label>
                            <input id="email" class="input" type="email">
                            <img id="icon_alert_email" class="icon_alert" src="../../icons/buttons/warning.svg" alt="">
                        </div>
                        <span class="alert"></span>  
                    </div>
                    <div class="group_input">        
                        <div id="departamento" class="departamento input select icon_modal" tabindex="0">
                            <span id="label_departamento" class="label">Departamento</span>
                            <span id="selected_departamento" class="label_selected"></span>
                            <img src="../../icons/buttons/icon_select.svg" alt="">
                            <img id="icon_alert_departamento" class="icon_alert" src="../../icons/buttons/warning.svg" alt="">
                        </div>
                        <div id="departamento_modal" class="data_option modal">
                            <div class="content scrollbar">
                        
                            </div>
                        </div>
                        <span class="alert"></span>
                    </div>
                    <div class="group_input">    
                        <div id="ciudad" class="ciudad input select icon_modal" tabindex="0">
                            <span id="label_ciudad" class="label">Ciudad</span>
                            <span id="selected_ciudad" class="label_selected"></span>
                            <img src="../../icons/buttons/icon_select.svg" alt="">
                            <img id="icon_alert_ciudad" class="icon_alert" src="../../icons/buttons/warning.svg" alt="">
                        </div>
                        <div id="ciudad_modal" class="data_option modal">
                            <div class="content scrollbar">
                        
                            </div>
                        </div>
                        <span class="alert"></span>
                    </div>
                    <div class="group_input">
                        <div class="inputs"> 
                            <label id="label_direccion1" for="direccion1" class="label">Direccion</label>
                            <input id="direccion1" class="input" type="text">
                            <img id="icon_alert_direccion1" class="icon_alert" src="../../icons/buttons/warning.svg" alt="">
                        </div>
                        <span class="alert"></span>  
                    </div>
                    <div class="group_input">
                        <div class="inputs">
                            <label id="label_direccion2" for="direccion2" class="label">Direccion (opcional)</label>
                            <input id="direccion2" class="input" type="text">
                            <img id="icon_alert_direccion2" class="icon_alert" src="../../icons/buttons/warning.svg" alt="">
                        </div>
                        <span class="alert"></span>
                    </div>
                    <div class="group_input">
                        <div class="inputs">
                            <label id="label_telefono1" for="telefono1" class="label">Telefono</label>
                            <input id="telefono1" class="input" type="tel">
                            <img id="icon_alert_telefono1" class="icon_alert" src="../../icons/buttons/warning.svg" alt="">
                        </div>
                        <span class="alert"></span>    
                    </div>
                    <div class="group_input">
                        <div class="inputs">    
                            <label id="label_telefono2" for="telefono2" class="label">Telefono(opcional)</label>
                            <input id="telefono2" class="input" type="tel">
                            <img id="icon_alert_telefono2" class="icon_alert" src="../../icons/buttons/warning.svg" alt="">
                        </div>
                        <span class="alert"></span>
                    </div>
                </div>
                <div class="footer_form">
                    <button id="clean_form" class="primary_button">Limpiar formulario</button>
                    <button id="send_form" class="primary_button">Registrar cliente</button>
                </div>  
            </div>';
}
