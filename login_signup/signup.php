<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,
Access-Control-Allow-Methods, Authorization, X-Requested-With'); 

include_once '../config/database.php';
include_once '../models/signupmd.php';

//instantiate db and connect
$database= new database();
$db= $database->connect(); 

$signup=new signUp($db);

// //user accessed the page the right way
// if(isset($_POST['submit'])){
//     code goes here
// } else{
//     header('location: ../post/read.php');
// }

//get raw posted data
$data=json_decode(file_get_contents("php://input"));

$signup->username= $data->username;
$signup->email=$data->email;
$signup->age=$data->age;
$signup->address=$data->address;
$signup->password=$data->password;
$signup->confirmpassword=$data->confirmpassword;

//check if what i get is anything besides false
if($signup->emptyInputSignup()!==false){
    echo json_encode(array(
        'message'=>'Fill in all the fields!'
    ));
    exit();
}

if($signup->invalidEmail()!==false){
    echo json_encode(array(
        'message'=>'The email is not valid, try again.'
    ));
    exit();
}

if($signup->emailExists()!==false){
    echo json_encode(array(
        'message'=>'Email already exists, try again.'
    ));
    exit();
}

if($signup->passwordMatch()!==false){
    echo json_encode(array(
        'message'=>'The password and confirm password dont match, try again.'
    ));
    exit();
}

if($signup->passwordLength()!==false){
    echo json_encode(array(
        'message'=>'The password needs to be at least 8 characters long!'
    ));
    exit();
}

if($signup->ageCheck()!==false){
    echo json_encode(array(
        'message'=>'You need to be 16+ years old..'
    ));
    exit();
}

//if i am here that means that the user made no misttakes, so i sign up the user
if($signup->createUser()){
    echo json_encode(array(
        'message'=>'User signed up successfully.'
    ));
} else{
    echo json_encode(array(
        'message'=>'An error occured, user not signed up.'
    ));
}
