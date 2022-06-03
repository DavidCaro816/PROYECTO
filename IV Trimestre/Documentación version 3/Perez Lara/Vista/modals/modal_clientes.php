<?php
function modal():string{
    return '<form id="new_modal" class="form">
                <div class="header_form">
                    <h1>Nuevo cliente</h1>
                    <img id="close_modal" src="../../icons/buttons/close.svg" alt="">
                </div>
                <div class="body_form">
                    <div class="group-input">
                        <div class="inputs">
                            <input id="nombres" class="input" type="text" >
                            <label for="nombres">Nombres</label>
                        </div>
                        <span class="alert"></span>
                    </div>
                    <div class="group-input">
                        <div class="inputs">
                            <input id="apellidos" class="input" type="text" >
                            <label for="apellidos">Apellidos</label>
                        </div>
                        <span class="alert"></span>
                    </div>
                    <div class="group-input">
                        <div class="tipoDocumento input select">
                            <span>Tipo de documento</span>
                            <img src="../../icons/buttons/icon_select.svg" alt="">
                        </div>
                        <div class="content">
                            <p>Cédula de Ciudadanía</p>
                        </div>
                        <span class="alert"></span>
                    </div>
                    <div class="group-input">
                        <div class="inputs">
                            <input id="numeroDocumento" class="input" type="text" >
                            <label for="numeroDocumento">Número de documento</label>
                        </div>
                        <span class="alert"></span>
                    </div>
                    <div class="group-input">
                        <div class="fechaNacimiento input select">
                            <span>Fecha de nacimiento</span>
                            <img src="../../icons/buttons/icon_select.svg" alt="">
                        </div>
                        <div class="content">
                            <p>Cédula de Ciudadanía</p>
                        </div>
                        <span class="alert"></span>
                    </div>
                    <div class="group-input">
                        <div class="inputs"> 
                            <input id="email" class="input" type="email" > 
                            <label for="email">Correo electrónico</label>
                        </div>
                        <span class="alert"></span>  
                    </div>
                    <div class="group-input">        
                        <div class="departamento input select">
                            <span>Departamento</span>
                            <img src="../../icons/buttons/icon_select.svg" alt="">
                        </div>
                        <div class="content">
                            <p>Cédula de Ciudadanía</p>
                        </div>
                        <span class="alert"></span>
                    </div>
                    <div class="group-input">    
                        <div class="ciudad input select">
                            <span>Ciudad</span>
                            <img src="../../icons/buttons/icon_select.svg" alt="">
                        </div>
                        <div class="content">
                            <p>Cédula de Ciudadanía</p>
                        </div>
                        <span class="alert"></span>
                    </div>
                    <div class="group-input">
                        <div class="inputs"> 
                            <input id="direccion1" class="input" type="text" >
                            <label for="direccion1">Direccion</label>
                        </div>
                        <span class="alert"></span>  
                    </div>
                    <div class="group-input">
                        <div class="inputs">
                            <input id="direccion2" class="input" type="text" >
                            <label for="direccion2">Direccion (opcional)</label>
                        </div>
                        <span class="alert"></span>
                    </div>
                    <div class="group-input">
                        <div class="inputs">
                            <input id="telefono1" class="input" type="tel" >
                            <label for="telefono1">Telefono</label>
                        </div>
                        <span class="alert"></span>    
                    </div>
                    <div class="group-input">
                        <div class="inputs">    
                            <input id="telefono2" class="input" type="tel" >
                            <label for="telefono2">Telefono(opcional)</label>
                        </div>
                        <span class="alert"></span>
                    </div>
                </div>
                <div class="footer_form">
                    <button type="reset" id="clean_form" class="primary_button">Limpiar formulario</button>
                    <button type="submit" id="send_form" class="primary_button">Registrar cliente</button>
                </div>  
            </form>';
}
