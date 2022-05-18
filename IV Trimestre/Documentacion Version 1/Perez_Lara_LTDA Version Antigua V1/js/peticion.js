$(obtener_registros());

function obtener_registros(cliente){
    $.ajax({
        url: 'consulta.php',
        type: 'POST',
        dataType: 'html',
        data: { cliente : cliente},
    })
        .done(function (resultado){
            $("#tabla_resultado").html(resultado);
        })
}
$(document).on('keyup', '#busqueda', function (){

        let valorBusqueda=$(this).val();
        if (valorBusqueda!=""){
            obtener_registros(valorBusqueda);
        }else{
            obtener_registros();
        }
});