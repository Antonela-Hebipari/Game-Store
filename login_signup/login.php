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

// //user accessed the page the right way
// if(isset($_POST['submit'])){
//     code goes here
// } else{
//     header('location: ../post/read.php');
// }

//get raw posted data
$data=json_decode(file_get_contents("php://input"));

$login->email= $data->email;
$login->password=$data->password;

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