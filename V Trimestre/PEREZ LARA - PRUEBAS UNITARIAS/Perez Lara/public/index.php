<?php
use Controllers\PolizaController;
use Models\Poliza;

require_once '../Controllers/PolizaController.php';
if(isset($_GET['action']) && isset($_POST)){
    $action = $_GET['action'];
    $array = [];
    foreach ($_POST as $datum){
        $array[]= $datum;
    }
    call_user_func_array(array($new = new Poliza(),'__construct'),$array);
    call_user_func_array(array(new PolizaController(),$action),array($new));
}else{
    require_once '../resources/views/Polizas.php';
}