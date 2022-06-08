<?php

$host="localhost";
$user="root";
$db="perezlaracialtda";
$pass="";

try{
    $pdo=new PDO("mysql:host=".$host.";dbname=".$db.";charset-uft8",$user,$pass);
    $pdo->set_attribute(PDO::ATTR_ERRMODE,PDO::ATTR_EXEPTON);
}
catch (Exception $e){
    'ERROR: '.$e->getMessage();
}