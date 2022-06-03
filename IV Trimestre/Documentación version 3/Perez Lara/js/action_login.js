const button_open_forms = document.getElementById('button_open_forms')
      main = document.querySelector('main')
      cover = document.getElementById('cover')
      message = document.getElementById('message');

button_open_forms.addEventListener('click', action_forms);

function action_forms(){
    main.classList.contains('main-register') ? login_form() : register_form();
    cover.style.transition = 'all 800ms';
}

function register_form(){
    main.classList.add('main-register');
    cover.classList.add('cover-register');
    message.innerHTML = '¿Ya tienes una cuenta?';
    button_open_forms.innerHTML = 'Inicia sesión';
}

function login_form(){
    main.classList.remove('main-register');
    cover.classList.remove('cover-register');
    message.innerHTML = '¿No tienes una cuenta?';
    button_open_forms.innerHTML = 'Registrate';
}
