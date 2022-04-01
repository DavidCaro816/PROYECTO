const container = document.querySelector('.container_login-register');
const register_form_container = document.querySelector('.register_form_container');
const login_form_container = document.querySelector('.login_form_container');
const register_form = document.querySelector('.register_form');
const login_form = document.querySelector('.login_form');
const lid_container = document.querySelector('.lid_container');
let message =  document.getElementById('message');
let button_open_forms = document.getElementById('button_open_forms');
let contador = null;


button_open_forms.addEventListener('click',()=> {
    contador++;
    if(contador === 1){
        register();
    }else{
        contador = 0;
        login();
    }
});

function register(){
    container.style.padding = '0';
    container.style.transition = 'all 800ms';
    login_form_container.style.transform = 'scale(0.9)';
    login_form_container.style.transition = 'all 500ms';
    login_form.style.opacity = '0';
    login_form.style.transform = 'scale(0.9)';
    login_form.style.transition = 'all 500ms';
    register_form_container.style.transform = 'scale(1)';
    register_form_container.style.transition = 'all 900ms';
    register_form.style.opacity = '1';
    register_form.style.transform = 'scale(1)';
    register_form.style.transition = 'all 800ms';
    lid_container.style.transform= 'translateX(99.9%)';
    lid_container.style.transition = 'all 800ms';
    message.innerHTML = '¿Ya tienes una cuenta?';
    button_open_forms.innerHTML = 'Inicia sesión';
}

function login(){
    container.style.padding = '0 120px';
    container.style.transition = 'all 400ms';
    register_form_container.style.transform = 'scale(0.9)';
    register_form_container.style.transition = 'all 900ms';
    register_form.style.opacity = '0';
    register_form.style.transform = 'scale(0.9)';
    register_form.style.transition = 'all 900ms';
    login_form_container.style.transform = 'scale(1)';
    login_form_container.style.transition = 'all 800ms';
    login_form.style.opacity = '1';
    login_form.style.transform = 'scale(1)';
    login_form.style.transition = 'all 900ms';
    lid_container.style.transform= 'translateX(0.1%)';
    lid_container.style.transition = 'all 800ms';
    message.innerHTML = '¿No tienes una cuenta?';
    button_open_forms.innerHTML = 'Registrate';
}