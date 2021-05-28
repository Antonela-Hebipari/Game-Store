<?php 
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../config/database.php';
include_once '../models/getproducts.php';

//instantiate db and connect
$database= new database();
$db= $database->connect();

$product= new Products($db);

//get id from url
$product->product_id= isset($_GET['product_id']) ? $_GET['product_id'] : die();

if(isset($_GET['isgame'])) {
    //get the product
    if($product->getGamesById()===true){
        echo json_encode(array(
            'message'=> 'Error...'
        ));
    }
    
    //create an array (cuz we want json data)
    $product_arr=array(
        'product_id'=> $product->product_id,
        'product_name'=> $product->product_name,
        'description'=> $product->description,
        'genre'=> $product->genre,
        'price'=> $product->price,
        'ram'=> $product->ram,
        'processor'=> $product->processor,
        'graphics_card'=> $product->graphics_card,
        'operating_system'=> $product->operating_system,
        'image'=> $product->image
    );

    //make json
    print_r(json_encode($product_arr));
} else echo json_encode(array(
    'message'=> 'No such product found..'
));

?>