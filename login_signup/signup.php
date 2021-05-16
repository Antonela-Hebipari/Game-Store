<?php

include_once '../config/database.php';
include_once '../models/signupmd.php';

//instantiate db and connect
$database= new database();
$db= $database->connect(); 

$signup=new signUp($db);

if(isset($_POST['submit'])){ 
    
    $signup->username= $_POST['username'];
    $signup->email=$_POST['email'];
    $signup->age=$_POST['age'];
    $signup->address=$_POST['address'];
    $signup->password=$_POST['password'];
    $signup->confirmpassword=$_POST['confirmpassword'];
    
    //check if what i get is anything besides false
    if($signup->emptyInputSignup()!==false){
        header("location: ../forms/Signupform.php?message=Fill%20Fields");
        exit();
    }
    
    if($signup->invalidEmail()!==false){
        header("location: ../forms/Signupform.php?message=Invalid%20Email");
        exit();
    }
    
    if($signup->emailExists()!==false){
        header("location: ../forms/Signupform.php?message=Email%20Exists");
        exit();
    }
    
    if($signup->passwordMatch()!==false){
        header("location: ../forms/Signupform.php?message=Passwords%20dont%20match");
        exit();
    }
    
    if($signup->passwordLength()!==false){
        header("location: ../forms/Signupform.php?message=Password%20too%20short");
        exit();
    }
    
    if($signup->ageCheck()!==false){
        header("location: ../forms/Signupform.php?message=16%20or%20older");
        exit();
    }
    
    //if i am here that means that the user made no misttakes, so i sign up the user
    if($signup->createUser()!==false){
        header("location: ../forms/Signupform.php?message=NOPE");
    } else{
        header("location: ../forms/Signupform.php?message=Success");
    }
}