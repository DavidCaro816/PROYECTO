const nombres = document.getElementById ('nombres'),
    apellidos = document.getElementById ('apellidos'),
    select_tipo_documento = document.getElementById ('selected_tipo_documento_select'),
    select_fecha_nacimiento = document.getElementById ('selected_fecha_nacimiento_select'),
    select_ciudad = document.getElementById ('selected_ciudad_select'),
    documento = document.getElementById ('numero_documento'),
    email = document.getElementById ('correo_electronico'),
    direccion = document.getElementById ('direccion'),
    direccion2 = document.getElementById ('direccion2'),
    telefono = document.getElementById ('telefono'),
    telefono2 = document.getElementById ('telefono2'),
    label = document.getElementsByClassName ('label')
alert_request = document.getElementById ('alert_request');

const thead = document.getElementById ('thead');

function create(e){
    e.preventDefault ();
    const select = document.querySelectorAll ('[data-selected]:not(#selected_departamento_select)');
    let data = new FormData (form);
    data.append ('primer_nombre', first_word (nombres.value));
    data.append ('segundo_nombre', following_words (nombres.value));
    data.append ('primer_apellido', first_word (apellidos.value));
    data.append ('segundo_apellido', following_words (apellidos.value));
    select.forEach ((e) => {
        data.append (document.getElementById (e.id).parentElement.dataset.target, e.dataset.selected);
    });
    $.ajax ({
                url: '?action=create',
                data: Object.fromEntries (data),
                method: 'post',
            })
     .done (function (res){
         alert_request.innerHTML = 'Cliente registrado';
         alert_request.classList.add ('alert_success');
         setTimeout (() => {
             alert_request.classList.remove ('alert_success');
         }, 900);
         form.reset ();
         Array.from (label).forEach ((e) => {
             e.classList.remove ('label_active');
             if (e.classList.contains ('label_selected_active')){
                 e.classList.remove ('label_selected_active');
                 e.innerHTML = '';
             }
         });
         index (res);
         close_modal2 ();
     });
}

function editar(){
    $.ajax ({
                url: '?action=show',
                data: 'id=' + context_menu.dataset.rel,
                method: 'post',
                dataType: 'json',
            }).done (function (res){
        nombres.value = res.primer_nombre + ' ' + res.segundo_nombre;
        apellidos.value = res.primer_apellido + ' ' + res.segundo_apellido;
        documento.value = res.documento;
        email.value = res.email;
        direccion.value = res.direccion1;
        direccion2.value = res.direccion2;
        telefono.value = res.telefono1;
        telefono2.value = res.telefono2;
        input.forEach (e => {
            if (e.value !== ''){
                document.getElementById ('label_' + e.id).classList.add ('label_active');
            }
        });
        document.querySelectorAll ('.select span:first-child').forEach (e => e.classList.add ('label_active'));
        select_tipo_documento.dataset.selected = res.tipo_documento;
        select_ciudad.dataset.selected = res.ciudad;
        select_fecha_nacimiento.innerHTML = res.fecha_nacimiento;
        document.querySelectorAll ('#tipo_documento_select .option').forEach (e => {
            if (e.dataset.id === (res.tipo_documento).toString ()){
                select_tipo_documento.innerHTML = e.innerHTML;
            }
        });
        document.querySelectorAll ('#ciudad_select .option').forEach (e => {
            if (e.dataset.id === (res.ciudad).toString ()){
                select_ciudad.innerHTML = e.innerHTML;
            }
        });
    });
}

function eliminar(){
    $.ajax ({
                url: '?action=delete',
                data: 'id=' + context_menu.dataset.rel,
                method: 'post',
            })
     .done (function (res){
         index (res);
     });
}