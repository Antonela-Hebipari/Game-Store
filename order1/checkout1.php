<?php
session_start();
include_once '../config/database.php';
include_once 'checkout.php';

$database= new database();
$db= $database->connect(); 

$orderdet=new orderDet($db);

if(isset($_POST['submit'])&&isset($_SESSION['User_ID'])){ 
    
    $orderdet->Card_Type= $_POST['Card_Type'];
    $orderdet->delivery_type= $_POST['delivery_type'];
    $orderdet->user_id=$_SESSION['User_ID'];
    $orderdet->product_id=$_SESSION['product_id'];
    unset($_SESSION['product_id']);

    if($orderdet->placeOrder()!==false){
        header("location: ../forms/orderform.php?message3=ERROR");
    } else{
        header("location: thanks.html?message3=Success");
    } 

}

