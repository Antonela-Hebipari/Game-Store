<?php
include_once 'Header.php';
include_once '../config/database.php';

//instantiate db and connect
$database= new database();
$db= $database->connect();

if(isset($_POST['search'])){
    $searchvalue=$_POST['search'];
    if( trim($searchvalue)==""){
        echo '<p style="color: black; font-size:30px">You need to type something... </p>';
        exit();
    }

    $query='SELECT product_id, description, product_name, price, image_name, image FROM products 
    WHERE product_name REGEXP "'.$searchvalue.'"; ';

$stmt= $db->prepare($query);
$result=$stmt->execute() or die('incorrect query...');

$num= $stmt->rowCount();

if($num>0){
?>

<section>

   <div class="row" style="background-color:#000d10; padding-bottom:15px;">
  <div class="carousel" data-flickity>

<?php

while($row= $stmt-> fetch(PDO::FETCH_ASSOC)){
//extract cuz i wanna use $title, $body etc and not $row['title'] etc
extract($row);

$products_item=array(
   'product_id'=> $product_id,
   'genre'=>'--',
   'product_name'=> $product_name,
   'price'=> $price,
   'image_name'=> $image_name,
   'image'=> $image
);

$vl='';
if(str_contains(strtolower($product_name), 'keyboard')|| str_contains(strtolower($product_name), 'mouse')||str_contains(strtolower($product_name), 'headset')||
str_contains(strtolower($product_name), 'controller')||str_contains(strtolower($product_name), 'gaming chair')||str_contains(strtolower($product_name), 'gaming surface')||
str_contains(strtolower($product_name), 'webcam')||str_contains(strtolower($product_name), 'microphone')||str_contains(strtolower($product_name), 'gaming glasses')
||str_contains(strtolower($product_name), 'charger')){
  $vl='isacc';
  }

?>

    <div class="col-md-3">
      <div class="product-top" style="padding-top:15px;">
   
     <?php 
     $encodedData =  base64_encode($products_item['image']);
     file_put_contents('../forms/ProductImages2/'.$products_item['image_name'], base64_decode($encodedData));
     $image_name=$products_item['image_name'];
     
     if($vl=='isacc'){ 
       echo "<a href='Product.php?product_id=$product_id&isacc'> "."<img src='../forms/ProductImages2/$image_name'>". "</a>";

     } else
     echo "<a href='Product.php?product_id=$product_id&isgame'> "."<img src='../forms/ProductImages2/$image_name'>". "</a>";
     ?>

       <div class="overlay-right">
       </div>
     </div>
     <div class="product-bottom text center">
      <h3><?php echo $product_name; ?> </h3>
      <h5> $‎<?php echo $price; ?></h5>
     </div>
   </div>
<?php  

} 
}else{
    echo '<p style="color: black; font-size:30px">No products found! </p>';
    exit();
} 

}

?>

    </div>
  </div>

</section>

<?php include_once 'Footer.html'; ?>



