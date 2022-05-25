const input_register = document.getElementsByClassName('input_register');
const input_login = document.getElementsByClassName('input_login');

for(let i = 0; i < input_register.length; i++){
    document.getElementById(input_register[i].id).addEventListener('focus',focus);
    document.getElementById(input_register[i].id).addEventListener('blur',blur);
}

for(let i = 0; i < input_login.length; i++){
    document.getElementById(input_login[i].id).addEventListener('focus',focus);
    document.getElementById(input_login[i].id).addEventListener('blur',blur);

}

function focus(evt){
    let elemento = "label_"+(evt.target.id);
    document.getElementById(elemento).style.transform = 'translateY(-27px)';
    document.getElementById(elemento).style.transition = 'all 300ms';
    document.getElementById(elemento).style.backgroundColor = 'white';
    if(evt.target.id === 'document_type'){
        if(!document.getElementById('option')){
            document.getElementById(elemento).style.visibility = 'visible';
            const option = document.createElement('option');
            option.id = 'option';
            option.setAttribute('hidden','true');
            option.setAttribute('disabled','true');
            option.setAttribute('selected','true');
            document.getElementById(evt.target.id).appendChild(option);
        }
    }
}

function blur(evt){
    let elemento = "label_"+(evt.target.id);
    if((document.getElementById(evt.target.id).value.length === 0)) {
        document.getElementById(elemento).style.transform = 'translateY(0)';
        document.getElementById(elemento).style.transition = 'all 270ms';
        document.getElementById(elemento).style.backgroundColor = 'transparent';
        if (evt.target.id === 'document_type') {
            document.getElementById(elemento).style.visibility = 'hidden';
            setTimeout(remove, 300);
        }
    }
}

function remove(){
    document.getElementById('option').remove();
}