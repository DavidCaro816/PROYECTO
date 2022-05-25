const open_menu = document.getElementById('open_menu');
const settings = document.getElementById('settings');
const modal_settings = document.getElementById('modal_settings');
const icon_navbar =  document.getElementsByClassName('icon_navbar');
open_menu.addEventListener('click',action);
settings.addEventListener('click',open_modal_settings);
let contador_navbar = 0;
let contador__modal_settings = 0;

function action(){
    contador_navbar++;
    if(contador_navbar === 1){
        open_navbar();
    }else{
        contador_navbar = 0;
        close_navbar();
    }
}

function open_navbar(){
    document.getElementById('navbar').style.width = '190px';
    for(let i = 0; i < icon_navbar.length;i++){
        icon_navbar[i].style.width = '100%';
        icon_navbar[i].style.boxSizing = 'border-box';
    }
    if(contador__modal_settings === 1){
        open_modal_settings();
    }
}

function close_navbar(){
    document.getElementById('navbar').style.width = '56px';
    for(let i = 0; i < icon_navbar.length;i++){
        icon_navbar[i].style.width = '24px';
        icon_navbar[i].style.boxSizing = 'content-box';
    }
    if(contador__modal_settings === 1){
        modal_settings.style.left = '70px';
    }
}

function position_marker(view){
    document.getElementById(view).style.backgroundColor = '#231F20';
}

function open_modal_settings() {
    modal_settings.style.visibility = 'visible';
    modal_settings.style.opacity = '1';
    settings.style.backgroundColor = '#231F20';
    if(contador_navbar === 1){
        modal_settings.style.left = '210px';
        modal_settings.style.transition = 'all 400ms';
    }
    contador__modal_settings=1;
}

function close_modal_settings(){
    modal_settings.style.visibility = 'hidden';
    modal_settings.style.opacity = '0';
    settings.style.background = 'none';
}