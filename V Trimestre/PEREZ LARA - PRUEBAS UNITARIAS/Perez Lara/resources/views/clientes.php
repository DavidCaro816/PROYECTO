<?php

use core\Query;

$title = 'Clientes';
$css = '<link rel="stylesheet" href="../resources/css/clientes.css">';
$js = '<script src="../resources/js/cliente.js"></script>';
$modal = 'modal_clientes.php';
$filters = [];
require_once "components/base/base.php";
require_once '../Core/Query.php';
require_once '../Controllers/ClienteController.php';