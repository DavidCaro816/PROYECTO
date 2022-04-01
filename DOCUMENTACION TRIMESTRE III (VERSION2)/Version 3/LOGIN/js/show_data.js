function show(div){
    $.ajax({
        url: '../LOGIN/php_file/show_data.php',
        type: 'POST',
        data: 'count='+div,
    }).done( function(data){
        document.getElementById(div).innerHTML += data;
    })
}
show('data_left');
show('data_right');
show('insurance_group');
show('recents_data');


function filter(filter,div){
    $.ajax({
        url: '../LOGIN/php_file/show_data.php',
        type: 'POST',
        data: 'filter='+filter+'&div='+div,
    }).done( function(data){
        console.log(data);
    })
}

