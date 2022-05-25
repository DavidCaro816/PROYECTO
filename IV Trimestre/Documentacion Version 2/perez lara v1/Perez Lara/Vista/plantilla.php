<?php
function navbar_header($home = false){
    echo '<div id="navbar" class="navbar">
                <div class="navbar_group">
                    <div class="navbar_header">
                        <div class="logo">
                            <a href="inicio.php">
                                <img src="../icons/navbar/logo.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="navbar_body">
                        <div id="home" class="icon_navbar">
                            <a href="inicio.php">
                                <img src="../icons/navbar/home.svg" alt="">
                                <span>Inicio</span>
                            </a>
                        </div>
                        <div id="clients" class="icon_navbar">
                            <a href="clientes.php">
                                <img src="../icons/navbar/clients.svg" alt="">
                                <span>Clientes</span>
                            </a>
                        </div>
                        <div id="quotes" class="icon_navbar">
                            <a href="cotizaciones.php">
                                <img src="../icons/navbar/quotes.svg" alt="">
                                <span>Cotizaciones</span>
                            </a>
                        </div>
                        <div id="policies" class="icon_navbar">
                            <a href="polizas.php">
                                <img src="../icons/navbar/policies.svg" alt="">
                                <span>Pólizas</span>
                            </a>
                        </div>
                        <div id="sinister" class="icon_navbar">
                            <a href="siniestros.php">
                                <img src="../icons/navbar/sinister.svg" alt="">
                                <span>Siniestros</span>
                            </a>
                        </div>
                        <div id="reports" class="icon_navbar">
                            <a href="informes.php">
                                <img src="../icons/navbar/reports.svg" alt="">
                                <span>Informes</span>
                            </a>
                        </div>
                        <div id="user_manual" class="icon_navbar">
                            <a href="manual_de_usuario.php">
                                <img src="../icons/navbar/plantilla.svg" alt="">
                                <span>Plantillas</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="navbar_footer">
                    <div id="settings" class="icon_navbar">
                        <div class="settings">
                            <a>
                                <img src="../icons/navbar/settings.svg" alt="">
                                <span>Configuración</span>
                            </a>
                        </div>
                         <div id="modal_settings" class="modal_settings">
                            <div class="title_settings">
                                <h3>Configuración</h3>
                            </div>
                            <div class="container_buttons__modal_settings">
                                <div class="buttons__modal_settings">
                                    <a>
                                        <div class="icon_modal_settings">
                                            <img src="../icons/navbar/settings.svg" alt="">
                                        </div>
                                        <span>Administrar accesos</span>
                                    </a>
                                </div>
                               <div class="buttons__modal_settings">
                                    <a>
                                        <div class="icon_modal_settings">
                                            <img src="../icons/navbar/icon__manual_usuario.svg" alt="">
                                        </div>
                                        <span>Manual de usuario</span>
                                    </a>
                                </div>        
                            </div>
                        </div>
                    </div>
                    <div class="icon_navbar">
                        <div class="sign_out">
                            <a>
                                <img src="../icons/navbar/sign_out.svg" alt="">
                                <span>Cerrar sesión</span>
                            </a>
                        </div>
                    </div>
                </div>
          </div>
          <div class="header_container">
            <div class="opciones">
                <div id="open_menu" class="open_menu">
                    <img src="../icons/buttons/menu.svg" alt="">
                </div>';
                if($home === true){
                    echo '<div>
        <form class="form-inline justify-content-end">
            <label class="mr-3" for="">Buscar:</label><input class="form-control mr-sm-2" type="search" id="busqueda" name="busqueda" aria-label="Search">
        </form>
    </div>';
                }
      echo '</div>
            <div class="header_group">
                <div class="icon_notification_bell">
                    <img src="../icons/buttons/campana.svg" alt="">
                </div>
                <div class="icon_profile">
                    <img src="../icons/buttons/profile.svg" alt="">
                </div>
            </div>
          </div>';
}

function filters(){
    echo'<div class="filtro_fecha">
            <div class="filtro">
                    <span>Fecha</span>
                <img src="../icons/buttons/icon_select.svg" alt="">
            </div>
         </div>
        <div class="filtro_cliente">
            <div class="filtro">
                <span>Cliente</span>
                <img src="../icons/buttons/icon_select.svg" alt="">
            </div>
        </div>
        <div class="filtro_seguro">
            <div class="filtro">
                    <span>Seguro</span>
                <img src="../icons/buttons/icon_select.svg" alt="">
            </div>
         </div>
        <div class="filtro_aseguradora">
            <div class="filtro">
                <span>Aseguradora</span>
                <img src="../icons/buttons/icon_select.svg" alt="">
            </div>
        </div>';
}

function filters_clients(){
    echo '<div class="filtro_departamento">
            <div class="filtro">
                <span>Departamento</span>
                <img src="../icons/buttons/icon_select.svg" alt="">
            </div>
         </div>
        <div class="filtro_ciudad">
            <div class="filtro">
                <span>Ciudad</span>
                <img src="../icons/buttons/icon_select.svg" alt="">
            </div>
        </div>';
}

function body_container($title,$reports = false, $filters = true){
    echo ' <div class="body_container">
                <div class="body__header_container">
                    <div class="title">
                        <h2>'.$title.'</h2>
                    </div>
                    <div class="buttons">
                        <div class="new_button">
                            <button id="id" ><img id="icon_new_button" src="../icons/buttons/new_button.svg" alt="">Nuevo</button>
                        </div>
                        <div class="search">
                            <input id="search" type="text" placeholder="Buscar">
                            <label for="search" id="label_search">
                                <img id="icon_search" src="../icons/buttons/search.svg" alt="">
                            </label>
                        </div>
                    </div>
                </div>';
               if($reports === false){
                   echo '<div class="container_data">
                            <div class="back_container">
                                <div class="forward_container">
                                    <div class="filters">';
                                        if($filters === true){
                                            filters();
                                        }else{
                                            filters_clients();
                                        }
                                    echo'<div class="filtro_estado">
                                            <div class="filtro">
                                                <span>Estado</span>
                                                <img src="../icons/buttons/icon_select.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="botones_filtro">
                                            <div class="boton_filtrar">
                                                <button class="filters_button">Filtrar</button>
                                            </div>
                                            <div class="boton_limpiar">
                                                <button class="filters_button">Limpiar</button>
                                            </div>
                                        </div>    
                                    </div>
                                    <div id="titles" class="titles"></div>
                                    <div class="data"><p>
                                    <div class="row">
                                            <div class="col-md-12">
                                                <div id="datos">
                                                </div>
                                            </div>
                                        </div>
                                    </p></div>
                                    
                                </div>
                            </div>
                        </div>';
               }
           echo'</div>';
}
function modal()
{
    echo '<div id="pantalla" class="pantalla">
                <form action="#" class="formulario" id="formulario">
                    <div class="titulo">
                        <a>REGISTRAR NUEVO CLIENTE</a>
                        <img class="cerrarModal" id="cerrarModal" src="../icons/buttons/close.svg" alt="">
                    </div>
                    <div class="formulario__grupo">
                        <select name="tipoDocumento" id="tipoDocumento" class="grupo__input">
                            <option hidden selected>Tipo de documento</option>
                        </select>
                        <a class="mensaje__input-error">Mensaje de validación</a>
                    </div>
        
                    <div class="formulario__grupo">
                        <input type="text" id="numeroDocumento" name="numeroDocumento" class="grupo__input" placeholder=" " required>
                        <label for="numeroDocumento" class="grupo__label">No. Documento</label>
                        <a class="mensaje__input-error">Mensaje de validación</a>
                    </div>
        
                    <div class="formulario__grupo">
                        <input type="text" id="primerNombre" name="primerNombre" class="grupo__input" placeholder=" ">
                        <label for="primerNombre" class="grupo__label">Primer nombre</label>
                        <a class="mensaje__input-error">Mensaje de validación</a>
                    </div>
        
                    <div class="formulario__grupo">
                        <input type="text" id="segundoNombre" name="segundoNombre" class="grupo__input" placeholder=" ">
                        <label for="segundoNombre" class="grupo__label">Segundo nombre</label>
                        <a class="mensaje__input-error">Mensaje de validación</a>
                    </div>
        
                    <div class="formulario__grupo">
                        <input type="text" id="primerApellido" name="primerApellido" class="grupo__input" placeholder=" ">
                        <label for="primerApellido" class="grupo__label">Primer apellido</label>
                        <a class="mensaje__input-error">Mensaje de validación</a>
                    </div>
        
                    <div class="formulario__grupo">
                        <input type="text" id="segundoApellido" name="segundoApellido" class="grupo__input" placeholder=" ">
                        <label for="segundoApellido" class="grupo__label">Segundo apellido</label>
                        <a class="mensaje__input-error">Mensaje de validación</a>
                    </div>
        
                    <div class="formulario__grupo">
                        <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="grupo__input grupo__input-date" placeholder=" ">
                        <a class="mensaje__input-error">Mensaje de validación</a>
                    </div>
        
                    <div class="formulario__grupo">
                        <select name="departamento" id="departamento" class="grupo__input">
                            <option hidden selected>Departamento</option>
                        </select>
                        <a class="mensaje__input-error">Mensaje de validación</a>
                    </div>
        
                    <div class="formulario__grupo">
                        <select name="ciudad" id="ciudad" class="grupo__input">
                            <option hidden selected>Ciudad</option>
                        </select>
                        <a class="mensaje__input-error">Mensaje de validación</a>
                    </div>
        
                    <div class="formulario__grupo">
                        <input type="text" id="direccionTrabajo" name="direccionTrabajo" class="grupo__input" placeholder=" ">
                        <label for="direccionTrabajo" class="grupo__label">Dirección trabajo</label>
                        <a class="mensaje__input-error">Mensaje de validación</a>
                    </div>
        
                    <div class="formulario__grupo">
                        <input type="text" id="direccionHogar" name="direccionHogar" class="grupo__input" placeholder=" ">
                        <label for="direccionHogar" class="grupo__label">Dirección hogar</label>
                        <a class="mensaje__input-error">Mensaje de validación</a>
                    </div>
        
                    <div class="formulario__grupo">
                        <input type="text" id="telefono1" name="telefono1" class="grupo__input" placeholder=" ">
                        <label for="telefono1" class="grupo__label">Teléfono 1</label>
                        <a class="mensaje__input-error">Mensaje de validación</a>
                    </div>
        
                    <div class="formulario__grupo">
                        <input type="text" id="telefono2" name="telefono2" class="grupo__input" placeholder=" ">
                        <label for="telefono2" class="grupo__label">Teléfono 2</label>
                        <a class="mensaje__input-error">Mensaje de validación</a>
                    </div>
        
                    <div class="formulario__grupo">
                        <input type="email" id="correo" name="correo" class="grupo__input" placeholder=" ">
                        <label for="correo" class="grupo__label">Correo electrónico</label>
                        <a class="mensaje__input-error">Mensaje de validación</a>
                    </div>
        
                    <div class="botones">
                        <input type="submit" class="boton_limpiar" value="LIMPIAR FORMULARIO">
                        <input type="submit" class="boton_registrar" value="REGISTRAR CLIENTE">
                    </div>
                  </form>
            </div>';
}