<?php 
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../config/database.php';
include_once '../models/getproducts.php';

//instantiate db and connect
$database= new database();
$db= $database->connect();

$products= new Products($db);

$products->genre= isset($_GET['genre']) ? $_GET['genre'] : die();

if($products->getAccessoriesByGenre()===true){
    echo json_encode(array(
        'message'=> 'Error...'
    ));
}

$result = $products->getAccessoriesByGenre();

//get row count
$num= $result->rowCount();

//check if any productss
if($num>0){
    //products array
    $products_arr=array();
    $products_arr['data']=array();

    //i wanna fetch it as an associative array
    while($row= $result-> fetch(PDO::FETCH_ASSOC)){
        //extract cuz i wanna use $title, $body etc and not $row['title'] etc
        extract($row);

        $products_item=array(
            'product_id'=> $product_id,
            'product_name'=> $product_name,
            'acc_type_name'=> $acc_type_name,
            'price'=> $price,
            'image'=> base64_encode($image)
        );

        //push to "data"
        array_push($products_arr['data'], $products_item);
    }
    
    //turn to json and output
    echo json_encode($products_arr);

} else {
    // no productss
    echo json_encode(array('message'=> 'No products found.'));
}
?>