const nombres = document.getElementById('nombres'),
    apellidos = document.getElementById('apellidos'),
    tipo_documento = document.getElementById('selected_tipo_documento_select'),
    documento = document.getElementById('numero_documento'),
    email = document.getElementById('correo_electronico'),
    telefono = document.getElementById('celular'),
    clave = document.getElementById('password'),
    usuario = document.getElementById('usuario'),
    clave_usuario = document.getElementById('clave_usuario'),
    formulario_registro = document.getElementById('register_form'),
    formulario_login = document.getElementById('login_form');


function data(){
    const data = new FormData();
    data.append('documento',documento.value);
    data.append ('primer_nombre', first_word (nombres.value));
    data.append ('segundo_nombre', following_words (nombres.value));
    data.append ('primer_apellido', first_word (apellidos.value));
    data.append ('segundo_apellido', following_words (apellidos.value));
    data.append('telefono',telefono.value);
    data.append('email',email.value);
    data.append('clave',clave.value);
    data.append('tipo_documento',tipo_documento.dataset.selected);
    data.append('tipo','1');
    data.append('estado','2');
    return data;
}

function create(e){
    e.preventDefault();

    $.ajax({
        url: '?action=create',
        method: 'POST',
        data: Object.fromEntries(data())
    })
        .done(() => {
            formulario_registro.reset();
        })
}

function getCredentials(e){
    e.preventDefault();
    const data = new FormData(formulario_login);

    $.ajax({
        url: '?action=getCredentials',
        method: 'POST',
        data: Object.fromEntries(data)
    })
        .done((res) => {
            const credentials = (res === 'false') ? false : true;
            (credentials) ? alert("true") : alert("false");
        })
}

formulario_registro.addEventListener('submit', create);
formulario_login.addEventListener('submit', getCredentials);