const numero_documento = document.getElementById('numero_documento'),
      codigo = document.getElementById('codigo'),
      cliente = document.getElementById('cliente'),
      seguro = document.getElementById('seguro'),
      aseguradora = document.getElementById('aseguradora')
      valor_aseguradoro = document.getElementById('valor_aseguradoro'),
      valor_prima = document.getElementById('valor_prima'),
      label = document.getElementsByClassName ('label'),
      alert_request = document.getElementById ('alert_request');

const thead = document.getElementById ('thead');

function create(e){
    e.preventDefault();
    const select = document.querySelectorAll ('[data-selected]');
    let data = new FormData (form);

    select.forEach ((e) => {
        data.append (document.getElementById (e.id).parentElement.dataset.target, e.dataset.selected);
    });
    $.ajax ({
                url: '?action=create',
                data: Object.fromEntries (data),
                method: 'post',
            })
     .done (function (res){
         alert_request.innerHTML = 'Póliza registrada';
         alert_request.classList.add ('alert_success');
         setTimeout (() => {
             alert_request.classList.remove ('alert_success');
         }, 900);
         form.reset ();
         Array.from (label).forEach ((e) => {
             e.classList.remove ('label_active');
             if (e.classList.contains ('label_selected_active')){
                 e.classList.remove ('label_selected_active');
                 e.innerHTML = '';
             }
         });
         index (res);
         close_modal2 ();
     });
}


