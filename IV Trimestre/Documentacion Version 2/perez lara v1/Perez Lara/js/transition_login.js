const container__login_register = document.getElementById('container__login_register');
const register_form_container = document.getElementById('register_form_container');
const register_form = document.getElementById('register_form');
const login_form_container = document.getElementById('login_form_container');
const login_form = document.getElementById('login_form');
const cover_container = document.getElementById('cover_container');
const message = document.getElementById('message');
const button_open_forms = document.getElementById('button_open_forms');
button_open_forms.addEventListener('click',action);


let contador_clicks = 0;
function action(){
   contador_clicks++;
   if(contador_clicks === 1){
       register();
   }else{
       contador_clicks = 0;
       login();
   }

}

function register(){
    container__login_register.style.width = '1320px';
    container__login_register.style.transition = 'all 800ms';
    register_form_container.style.transform = 'scale(1)';
    register_form_container.style.transition = 'all 900ms';
    register_form.style.opacity = '1';
    register_form.style.transform = 'scale(1)';
    register_form.style.transition = 'all 800ms';
    login_form_container.style.transform = 'scale(0.9)';
    login_form_container.style.transition = 'all 500ms';
    login_form.style.opacity = '0';
    login_form.style.transform = 'scale(0.9)';
    login_form.style.transition = 'all 500ms';
    cover_container.style.transform = 'translateX(100%)';
    cover_container.style.transition = 'all 800ms';
    message.innerHTML = '¿Ya tienes una cuenta?';
    button_open_forms.innerHTML = 'Inicia sesión';
}

function login(){
    container__login_register.style.width = '1080px';
    container__login_register.style.transition = 'all 400ms';
    login_form_container.style.transform = 'scale(1)';
    login_form_container.style.transition = 'all 800ms';
    login_form.style.opacity = '1';
    login_form.style.transform = 'scale(1)';
    login_form.style.transition = 'all 900ms';
    register_form_container.style.transform = 'scale(0.9)';
    register_form_container.style.transition = 'all 900ms';
    register_form.style.opacity = '0';
    register_form.style.transform = 'scale(0.9)';
    register_form.style.transition = 'all 900ms';
    cover_container.style.transform = 'translateX(0)';
    cover_container.style.transition = 'all 800ms';
    message.innerHTML = '¿No tienes una cuenta?';
    button_open_forms.innerHTML = 'Registrate';
}