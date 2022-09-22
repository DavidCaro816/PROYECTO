const button_open_forms = document.getElementById('button_open_forms'), main = document.querySelector('main'),
    cover = document.getElementById('cover'), register_section = document.getElementById('register'),
    login_section = document.getElementById('login'), login_form_container = document.getElementById('container_login'),
    register_form = document.getElementById('register_form'), message = document.getElementById('message');

button_open_forms.addEventListener('click', action);
message.addEventListener('click', action_shake);

/* Mostrar formulario -> Login - Register */
function action(){
    main.classList.toggle('main_register');
    cover.classList.toggle('cover_register');
    register_section.classList.toggle('register_active');
    login_section.classList.toggle('login_inactive');
    register_form.classList.toggle('register_form_active');
    login_form_container.classList.toggle('container_login_inactive');
    if (main.classList.contains('main_register')){
        message.innerHTML = '¿Ya tienes una cuenta?';
        button_open_forms.innerHTML = 'Inicia sesión';
    } else {
        message.innerHTML = '¿No tienes una cuenta?';
        button_open_forms.innerHTML = 'Registrate';
    }
}

/* Sacudir boton para abrir formulario*/
function action_shake(){
    button_open_forms.classList.add('shake');
    setTimeout(() => {
        button_open_forms.classList.remove('shake');
    }, 600)
}