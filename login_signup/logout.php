<?php 

include_once '../config/database.php';
include_once '../models/logoutmd.php';

//instantiate db and connect
$database= new database();
$db= $database->connect();

$logout= new logout($db);
if($logout->logoutUser()!==false){
    header("location: ../forms/Body.php?message=Error");
} else {
    header("location: ../forms/Body.php?message=Success");
}