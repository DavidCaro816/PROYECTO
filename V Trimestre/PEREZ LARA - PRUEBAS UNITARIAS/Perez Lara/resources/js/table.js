window.addEventListener('load', index);
function index(){
    $.ajax({
       url: '?action=index',
       dataType: 'json'
    })
    .done( function (data){
        table(data);
    });
}

function table(data){
    thead.innerHTML = null;
    tbody.innerHTML = null;
    const keys = Object.keys(data[0]);
    data.forEach((e,index)=>{
        const tr = tbody.insertRow();
        for(let j = keys.length/2; j < keys.length; j++){
            if(keys[j] !== 'Cuadro comparativo' && keys[j] !== 'Archivo'){
                if(index === 0){
                    if(j === keys.length/2){
                        thead.insertRow();
                    }
                    thead.rows[0].innerHTML += '<th>'+keys[j]+'</th>';
                }
                const td = tr.insertCell();
                if(keys[j] === 'Aseguradora'){
                    td.classList.add('container_img');
                    e[keys[j]].split(',').forEach(e=> {
                        const img = document.createElement('img');
                        img.src = e;
                        td.appendChild(img);
                    });
                }else{
                    td.appendChild(document.createTextNode(e[keys[j]]));
                }
            }
        }
    });
    tbody.insertRow();
}