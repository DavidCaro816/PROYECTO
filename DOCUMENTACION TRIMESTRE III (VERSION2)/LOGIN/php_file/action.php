<?php
include "../php_class/user.php";
if(isset($_POST['log_in'])){
    $username = $_POST['username'];
    $key = $_POST['key'];
    (new user($username,$key))->log_in();
}elseif(isset($_POST['create_account'])){
    $names = $_POST['names'];
    $surnames = $_POST['surnames'];
    $document_type = $_POST['document_type'];
    $document_number = $_POST['document_number'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $user = $_POST['user'];
    $password = $_POST['password'];
    (new user($names,$surnames,$document_type,$document_number,$email,$phone,$user,$password))->create();
}