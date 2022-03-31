const log_in = document.getElementById('log_in');
log_in.addEventListener('click',request);
const username = document.getElementById('username');
const password = document.getElementById('key');
const error_message = document.getElementById('error_message');
const footer_group = document.getElementById('footer_group');
const loader = document.getElementById('loader');
const text = document.getElementById('text');

function request(){
    const info = "username="+ username.value + "&key=" + password.value + "&log_in=" + log_in.value;
    jQuery.ajax({
        url: '../php_file/action.php',
        type: 'POST',
        dataType: 'json',
        data: info,
        beforeSend: function(){
            loading();
        }
    }).done(function (res){
        setTimeout(function (){
            if(!res.error){
                switch(res.rol){
                    case 1:
                        location.href = "../admin.php";
                        break;
                    case 2:
                        location.href = "../user.php";
                        break;
                }
            }else{
                error();
                log_in.innerHTML = "Iniciar sesión";
            }
        },1000);
    })
}

function loading(){
    loader.style.visibility = "visible";
    loader.style.width = "16px";
    loader.style.height = "16px";
    loader.style.borderRadius = "50%";
    loader.style.border = "3.5px solid white";
    loader.style.borderLeftColor = "transparent";
    loader.style.marginRight = "10px";
    loader.style.animation = "loader 1.2s linear infinite";
    text.innerHTML = "Cargando...";
}

function error(){
    username.style.border = "1px solid #ED1C24";
    password.style.border = "1px solid #ED1C24";
    error_message.style.marginBottom = "20px";
    error_message.innerHTML = '<span>Usuario y/o contraseña son incorrectos</span>';
    footer_group.style.marginBottom = "10px";
}
