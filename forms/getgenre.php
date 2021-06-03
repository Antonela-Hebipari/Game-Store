<?php 

include_once '../config/database.php';
include_once '../models/getproducts.php';


if(isset($_GET['genre'])){

$database= new database();
$db= $database->connect();

$products= new Products($db);

$products->genre= isset($_GET['genre']) ? $_GET['genre'] : die();
header('location: Body.php?'.$_GET['genre']);

} else header('location: Body.php');

?>