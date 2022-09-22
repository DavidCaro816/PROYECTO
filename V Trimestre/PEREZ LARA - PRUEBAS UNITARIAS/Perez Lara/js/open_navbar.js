document.getElementById('open_menu').addEventListener('click',action);
const icon_navbar =  document.getElementsByClassName('icon_navbar');
let contador = 0;

function action(){
    contador++;
    if(contador === 1){
        open_navbar();
    }else{
        contador = 0;
        close_navbar();
    }
}

function open_navbar(){
    document.getElementById('navbar').style.width = '190px';
    for(let i = 0; i < icon_navbar.length;i++){
        icon_navbar[i].style.width = '100%';
        icon_navbar[i].style.boxSizing = 'border-box';
    }
}

function close_navbar(){
    document.getElementById('navbar').style.width = '56px';
    for(let i = 0; i < icon_navbar.length;i++){
        icon_navbar[i].style.width = '24px';
        icon_navbar[i].style.boxSizing = 'content-box';
    }
}

function position_marker(view){
    document.getElementById(view).style.backgroundColor = '#231F20';
}