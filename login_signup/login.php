<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,
Access-Control-Allow-Methods, Authorization, X-Requested-With'); 

include_once '../config/database.php';
include_once '../models/loginmd.php';

//instantiate db and connect
$database= new database();
$db= $database->connect();

$login=new login($db);

if(isset($_POST['email']) && isset($_POST['password'])){ 
    
    $login->email= $_POST['email'];
    $login->password=$_POST['password'];

if($login->emptyInputLogin()!==false){
    echo json_encode(array(
        'message'=>'Fill in all the fields!'
    ));
    exit();
}

//if i am here that means that the user made no misttakes, so i log in the user
if($login->loginUser()){
    echo json_encode(array(
        'message'=>'User logged in successfully.'
    ));
} else{
    echo json_encode(array(
        'message'=>'An error occured, user not logged in.'
    ));
}
}