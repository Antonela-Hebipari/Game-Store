<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,
Access-Control-Allow-Methods, Authorization, X-Requested-With'); 

include_once '../config/database.php';
include_once '../models/logoutmd.php';

//instantiate db and connect
$database= new database();
$db= $database->connect();

$logout= new logout($db);
if($logout->logoutUser()){
    header("location: ../forms/Body.php?message=Success");
}