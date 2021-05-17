<?php 
include_once '../config/database.php';
include_once '../models/signupmd.php';

//instantiate db and connect
$database= new database();
$conn= $database->connect(); 

$signup=new signUp($conn);

if(isset($_POST['submit'])){ 
    
    $signup->email=$_POST['email'];
    $signup->password=$_POST['password'];
    $signup->confirmpassword=$_POST['confirmpassword'];

    $email=$_POST['email'];
    $password=$_POST['password'];
    $pconfirmassword=$_POST['confirmpassword'];

    if(empty($email) || empty($password) || empty($pconfirmassword)){
        header("location: ../forms/ForgotPasswordform.php?message3=Fill%20Fields");
        exit();
    }
    
    if($signup->invalidEmail()!==false){
        header("location: ../forms/ForgotPasswordform.php?message3=Invalid%20Email");
        exit();
    }
    
    if($signup->passwordMatch()!==false){
        header("location: ../forms/ForgotPasswordform.php?message3=Passwords%20dont%20match");
        exit();
    }
    
    if($signup->passwordLength()!==false){
        header("location: ../forms/ForgotPasswordform.php?message=Password%20too%20short");
        exit();
    } 
    
    if($signup->emailExists()!==false){
        $query='UPDATE users SET password=? WHERE email=?';

        if(!$stmt= $conn->prepare($query)){
            header("location: ../forms/ForgotPasswordform.php?message3=Error%20Occurred");
        }

        $hashedPass=password_hash($password, PASSWORD_DEFAULT);
        $stmt->bindParam(1, $hashedPass);
        $stmt->bindParam(2, $email);

        //execute query
        if($stmt->execute()){
            header("location: ../forms/LogInform.php?message2=Password%20was%20changed");
        }
        else {
            header("location: ../forms/ForgotPasswordform.php?message3=Error%20Occurred");
        }
        
        exit();
    }
}

?>