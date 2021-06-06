
<?php 
include_once 'Header.php';  
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
      echo '<p> An error occurred...</p>';
  }
  
  //create an array
  $product_arr=array(
      'product_id'=> $product->product_id,
      'product_name'=> $product->product_name,
      'description'=> $product->description,
      'genre'=> $product->genre,
      'price'=> $product->price,
      'ram'=> $product->ram,
      'quantity'=> $product->quantity,
      'release_year'=> $product->release_year,
      'processor'=> $product->processor,
      'graphics_card'=> $product->graphics_card,
      'operating_system'=> $product->operating_system,
      'image_name'=> $product->image_name,
      'image'=> $product->image
  );
} else if(isset($_GET['isacc'])) {
  //get the product
  if($product->getAccessioriesById()===true){
      echo '<p> An error occurred...</p>';
  }

  $product_arr=array(
      'product_id'=> $product->product_id,
      'product_name'=> $product->product_name,
      'description'=> $product->description,
      'price'=> $product->price,
      'acc_type_name'=> $product->acc_type_name,
      'quantity'=> $product->quantity,
      'release_year'=>'--',
      'image_name'=> $product->image_name,
      'image'=> $product->image
  );

}

?>

<script src="script.js" async></script>

<main class="container2">
 
  <!-- Left Column / Headphones Image -->
  <div class="left-column" style="margin-bottom:150px;">
  <?php  
  $encodedData =  base64_encode($product_arr['image']);
  file_put_contents('../forms/ProductImages2/'.$product_arr['image_name'], base64_decode($encodedData));
  $image_name=$product_arr['image_name'];
  
    echo "<img src='../forms/ProductImages2/$image_name' style='width:500px; height:600px; margin-top:60px; border:groove #000'> " ;
  ?> 
  
  <?php if(isset($_GET['isgame'])) { ?> 
    
    <div class="product-description" style="margin-top:10px;" >
      <br>
      <span>System Requirements: </span>
      <p class="RAM" style="margin-top:30px;">RAM: <?php echo $product_arr['ram']; ?>  </p>
      <p class="GraphicCard">Graphic Card: <?php echo $product_arr['graphics_card']; ?> </p>
      <p class="Processor">Processor: <?php echo $product_arr['processor']; ?> </p>
      <p class="OperationSystem">Operating System: <?php echo $product_arr['operating_system']; ?> </p>
    </div>
    <?php } ?> 
  
  </div>


  <!-- Right Column -->
  <div class="right-column">
 
    <!-- Product Description -->
    <div class="product-description">

      <?php if(isset($_GET['isacc'])) { ?> 
      <span> <?php echo $product_arr['acc_type_name']; ?> </span>

      <?php }else {?>
        <span> <?php echo $product_arr['genre']; ?> </span>
        <?php }?>

      <h1 class="shop-item-title"> <?php echo $product_arr['product_name']; ?> </h1>

      <?php echo '<p>'. $product_arr['description'].'</p>' ; ?>   
    </div>
    <div class="product-description">
      
      <p class="ReleaseDate">Release Date: <?php echo $product_arr['release_year']; ?> </p>
<!-- Product Pricing -->
<div class="product-price">
      <span class="shop-item-price"> <?php echo 'USD $'. $product_arr['price']; ?> </span>
      <button type="button" class="cart-btn" name="addToCart"> Add to cart </button> 
      
      <form action="orderform.php" method="post">
      <button type="submit" class="cart-btn" name="submit" > Buy </button> 
      <?php $_SESSION['product_id']=$product->product_id; ?>
      </form>
    </div>
  </div>
</div>
</main>
<?php include_once 'Footer.html'; ?>
