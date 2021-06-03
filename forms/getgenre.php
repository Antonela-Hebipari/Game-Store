<?php 
session_start();
if(isset($_GET['genre'])){

$_SESSION['genre']= $_GET['genre'];

if($_SESSION['genre']=="Keyboard" || $_SESSION['genre']=="Mouse" ||$_SESSION['genre']=="Headsets"
||$_SESSION['genre']=="Controller" ||$_SESSION['genre']=="Gaming chair" ||$_SESSION['genre']=="Gaming surface"
||$_SESSION['genre']=="Webcam" ||$_SESSION['genre']=="Microphone"||$_SESSION['genre']=="Gaming Glasses" 
||$_SESSION['genre']=="Controller Charger" )
{
    $_SESSION['acc']='isacc';
    header('location: Body.php?'.$_GET['genre'].'&acc=isacc');
} 
else header('location: Body.php?'.$_GET['genre']);

} else header('location: Body.php');

?>