<?php
include "../php_class/database.php";

if( $_POST['count'] == 'data_left'){
    $data = (new database)->data_left();
    echo '
    <div id="number_clients" class="item">
        <img src="../LOGIN/icons/icon-black_clients.svg" alt="">
        <p>'.$data[0].'</p>
    </div>
    <div id="number_quotes" class="item">
        <img src="../LOGIN/icons/icon-black_quotes.svg" alt="">
        <p>'.$data[1].'</p>
    </div>
    <div id="number_policies" class="item">
        <img id="img1" src="../LOGIN/icons/icon-black_policies.svg" alt="">
        <p>'.$data[2].'</p>
    </div>';
} elseif($_POST['count'] == 'data_right'){
    $data = (new database)->data_right();
    echo '<div id="soon_expire" class="target">
            <p>Próximas a vencer</p>
            <img src="../LOGIN/icons/check.svg" alt="">
            <p class="number">'.$data[0].'</p>
          </div>
          <div id="in_expedition" class="target">
            <p>En expedición</p>
            <img src="../LOGIN/icons/documents.svg" alt="">
            <p class="number">'.$data[1].'</p>
            </div>
          <div id="expired" class="target">
            <p>Vencidas</p>
            <img src="../LOGIN/icons/x.svg" alt="">
            <p class="number">'.$data[2].'</p>
          </div>';
}elseif($_POST['count'] =='insurance_group'){
    $data = (new database)->best_selling_insurances();
    echo'<div id="insurance1" class="insurance_box">
            <img src="'.$data[0].'" alt="" width="35px">
         </div>
         <div id="insurance2" class="insurance_box">
            <img src="'.$data[1].'" alt="" width="35px">
         </div>
         <div id="insurance3" class="insurance_box">
            <img src="'.$data[2].'" alt="" width="35px">
         </div>';
}


