<?php

include_once '../config/database.php';
include_once '../models/loginmd.php';

//instantiate db and connect
$database= new database();
$db= $database->connect();

$login=new login($db);

if(isset($_POST['submit'])){ 
    
    $login->email= $_POST['email'];
    $login->password=$_POST['password'];
    
    if($login->emptyInputLogin()!==false){
        header("location: ../forms/LogInform.php?message2=Fill%20Fields");
        exit();
    }
    
    //if i am here that means that the user made no misttakes, so i log in the user
    if($login->loginUser()!==false){
        header("location: ../forms/LogInform.php?message2=NOPE");
    } else{
        header("location: ../forms/LogInform.php?message2=Success");
    }
}