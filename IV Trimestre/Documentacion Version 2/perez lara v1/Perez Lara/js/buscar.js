document.addEventListener('DOMContentLoaded',function(){

    total_datos();

});
document.addEventListener('keyup',function(){
    var datoBusqueda = document.querySelector('#search').value;
    if(datoBusqueda != ""){
        buscar_datos(datoBusqueda);
    } else {
        total_datos();
    }
})

function buscar_datos(consulta) {

    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    var ajaxUrl = '../modelo/buscar.php';
    var data = 'consulta='+consulta;
    request.open('POST',ajaxUrl,true);
    request.setRequestHeader('Content-type','Application/x-www-form-urlencoded');
    request.send(data);
    request.onreadystatechange = function() {
        if(request.readyState == 4 && request.status == 200) {
            console.log(request.responseText)
            document.querySelector('#datos').innerHTML = request.responseText;
        }
    }
}

function total_datos() {

    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    var ajaxUrl = '../modelo/total.php';
    request.open('POST',ajaxUrl,true);
    request.send();
    request.onreadystatechange = function() {
        if(request.readyState == 4 && request.status == 200) {
            document.querySelector('#datos').innerHTML = request.responseText;
        }
    }
}