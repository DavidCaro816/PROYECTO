const checkbox = document.getElementsByClassName('checkbox'),
    message_empty_table = document.getElementById('message_empty_table'),
    thead_form = document.getElementById('thead_cotizacion'),
    tbody_form = document.getElementById('tbody_cotizacion');

Array.from(checkbox).forEach((e) => {
    e.addEventListener('change', check);
})

function inputs(tr){
    tr.innerHTML += '<td><input class="input_title"></td><td><input class="input_title"></td>';
}

function titles(td){
    td.innerHTML += '<th>Valor</th><th>Deducible</th>';
}

function check(e){
    if (e.target.checked){
        hide_message();
        if (thead_form.getElementsByTagName('tr').length === 0){
            thead_form.innerHTML += '<tr><th rowspan="2">Cobertura</th></tr>';
        }
        if (e.target.closest('#aseguradora_select')){
            thead_form.rows[0].innerHTML +=
                '<th id="aseguradora' + e.target.dataset.id + '" colspan="2">' + e.target.labels.item(0).innerHTML +
                '</th>';
            if (tbody_form.rows.length > 0){
                if (thead_form.rows[0].getElementsByTagName('th').length === 2){
                    thead_form.insertRow();
                }
                titles(thead_form.rows[1]);
            }
            for (let i = 0; i < tbody_form.childElementCount; i++) {
                inputs(tbody_form.rows[i]);
            }
        } else {
            if (thead_form.getElementsByTagName('th').length > 1 && tbody_form.childElementCount === 0){
                const tr = thead_form.insertRow();
                for (let i = 0; i < thead_form.rows[0].childElementCount - 1; i++) {
                    titles(tr);
                }
            }
            const td = tbody_form.insertRow();
            td.id = 'cobertura' + e.target.dataset.id;
            td.insertCell().appendChild(document.createTextNode(e.target.labels.item(0).innerHTML));
            for (let i = 0; i < thead_form.rows[0].childElementCount - 1; i++) {
                inputs(td);
            }
        }
    } else {
        if (e.target.closest('.modal').id === 'coberturas_select'){
            document.getElementById('cobertura' + e.target.dataset.id).remove();
            if (tbody_form.childElementCount === 0){
                if (thead_form.rows[0].childElementCount > 1){
                    thead_form.rows[1].remove()
                } else {
                    show_message();
                    thead_form.rows[0].remove();
                }
            }
        } else {
            const eliminar = Array.from(thead_form.rows[0].children)
                                  .findIndex(x => x.id === 'aseguradora' + e.target.dataset.id);
            Array.from(thead_form.children).forEach((e, index) => {
                Array.from(e.children).forEach((x, index1) => {
                    if (eliminar - 1 === index1 && index === 1 || eliminar === index1){
                        x.remove();
                    }
                })
            });
            Array.from(tbody_form.children).forEach((e) => {
                Array.from(e.children).forEach((x, index) => {
                    if (eliminar * 2 - 1 === index || eliminar * 2 === index){
                        x.remove();
                    }
                })
            });
            if (thead_form.childElementCount === 1){
                if (thead_form.rows[0].childElementCount === 1){
                    show_message();
                    thead_form.rows[0].remove();
                }
            } else if (thead_form.rows[1].childElementCount === 0){
                thead_form.rows[1].remove();
            }
        }
    }
}

function hide_message(){
    message_empty_table.classList.add('message_empty_table_inactive');
}

function show_message(){
    message_empty_table.classList.remove('message_empty_table_inactive');
}

function create(){

}

function editar(){

}

function eliminar(){

}