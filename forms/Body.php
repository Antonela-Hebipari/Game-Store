<?php 
include_once 'Header.php';
include_once '../config/database.php';
include_once '../models/getproducts.php';

//instantiate db and connect
$database= new database();
$db= $database->connect();

// instantiate blog post object
$products= new Products($db);

?>


<div class="slider">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
      <a href='Product.php?product_id=140&isgame'> <img src="../forms/ProductImages/game1.jpg" alt="DragonAge" style="width:100%;"> </a>
      </div>

      <div class="item">
      <a href='Product.php?product_id=143&isgame'> <img src="../forms/ProductImages/game2.jpg" alt="TheSims4" style="width:100%; height:695px"> </a>
      </div>
    
      <div class="item">
      <a href='Product.php?product_id=142&isgame'>  <img src="../forms/ProductImages/game3.jpg" alt="Bastion" style="width:100%; height:700px"> </a>
      </div>
      <div class="item">
      <a href='Product.php?product_id=135&isgame'>  <img src="../forms/ProductImages/game4.jpg" alt="Skyrim" style="width:100%; height:700px"> </a>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="height:680px">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"style="height:680px">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
    <h5 class="titleh5">FEATURED & RECOMMENDED</h5>
  </div>
</div>
</div>
</div>

</section>

      <!--The Products with cattegories-->
      <div class="select">
        <form action="getgenre.php" method="get" onchange="submit();">
        <select name="genre" id="genre" style="color:white;">
          <option selected disabled>CATEGORIES</option>

          <option value="Sport">Sport</option>
          <option value="Action">Action</option>
          <option value="Adventure">Adventure</option>
          <option value="War">War</option>
          <option value="First-person shooter">First-person shooter</option>
          <option value="Simulation">Simulation</option>
          <option value="Strategy">Strategy</option>
          <option value="Arcade">Arcade</option>
          <option value="Racing">Racing</option>
          <option value="Role Playing">Role Playing</option>
          <option value="Shooter">Shooter</option>
          <option value="Horror">Horror</option>
          <option value="Exploration">Exploration</option>
          <option value="Science fiction">Science fiction</option>
          <option value="Fantasy">Fantasy</option>
          <option value="Survival">Survival horror</option>
          </option>
        </select>
</form>

    </div>
     <section class="horror">
       <div class="container-fluid">
         <div class="title-box">
           <h2>Horror</h2>
         </div>
         <div class="row" style="background-color:#000d10; padding-bottom:15px;">
         <div class="carousel" data-flickity>
           <div class="col-md-3">
             <div class="product-top"style="padding-top:15px;">
             <a href="Product.php?product_id=136&isgame"><img src="../forms/ProductImages/game13.jpg"></a>
               <div class="overlay-right">
               </div>
             </div>
             <div class="product-bottom text center">
              <h3>Little Nightmares II</h3>
              <h5>$29.99</h5>
             </div>
           </div>
           <div class="col-md-3">
            <div class="product-top"style="padding-top:15px;">
            <a href="Product.php?product_id=145&isgame"> <img src="../forms/ProductImages/game14.jpg"> </a>  
              <div class="overlay-right">
              </div>
            </div>
            <div class="product-bottom text center">
             <h3>The Evil Within</h3>
             <h5>	$19.99</h5>
            </div>
          </div>
          <div class="col-md-3">
            <div class="product-top"style="padding-top:15px;">
            <a href="Product.php?product_id=141&isgame"> <img src="../forms/ProductImages/game15.png"> </a> 
              <div class="overlay-right">
              </div>
            </div>
            <div class="product-bottom text center">
             <h3>Outlast 2</h3>
             <h5>$29.99</h5>
            </div>
          </div>
          <div class="col-md-3">
            <div class="product-top"style="padding-top:15px;">
            <a href="Product.php?product_id=139&isgame"><img src="../forms/ProductImages/game16.png"></a> 
              <div class="overlay-right">
              </div>
            </div>
            <div class="product-bottom text center">
             <h3>Soma</h3>
             <h5>$19.99</h5>
</div>
            </div>
          </div>
         </div>
       </div>
     </section>
     
     <section class="RPG">
      <div class="container-fluid">
        
        <div class="title-box">
          <h2>RPG</h2>
        </div>
        <div class="row" style="background-color:#000d10;">
        <div class="carousel" data-flickity>
          
        <div class="col-md-3">
            <div class="product-top" style="padding-top:15px;">
            <a href="Product.php?product_id=144&isgame"> <img src="../forms/ProductImages/game20.jpg"> </a> 
              <div class="overlay-right">
              </div>
            </div>
            <div class="product-bottom text center">
             <h3>Cyberpunk 2077</h3>
             <h5>‎$59.99</h5>
            </div>
          </div>
          
          <div class="col-md-3">
           <div class="product-top"style="padding-top:15px;">
           <a href="Product.php?product_id=138&isgame"><img src="../forms/ProductImages/game21.png"></a> 
             <div class="overlay-right"></div>
           </div>
           <div class="product-bottom text center">
            <h3>Mass Effect 2</h3>
            <h5>$9.89</h5>
           </div>
         </div>

         <div class="col-md-3">
           <div class="product-top"style="padding-top:15px;">
           <a href="Product.php?product_id=146&isgame"><img src="./ProductImages/game22.png"></a> 
             <div class="overlay-right"></div>
           </div>
           <div class="product-bottom text center">
            <h3>Diablo III</h3>
            <h5>$19.99</h5>
           </div>
         </div>

         <div class="col-md-3">
           <div class="product-top"style="padding-top:15px;">
           <a href="Product.php?product_id=137&isgame"> <img src="./ProductImages/game23.jpg"></a> 
             <div class="overlay-right">
             </div>
           </div>
          <div class="product-bottom text center">
            <h3>Fallout 4</h3>
            <h5>$14.99</h5>
          </div>
        </div>
      

      </div>   
    </div>
  </div>
  </section>
    
<?php 

if($products->getGamesByGenre()===true){
  echo '<p> An error occurred...</p>';
}

$result = $products->getGamesByGenre();
//get row count
$num= $result->rowCount();


//check if any productss
if($num>0){

  if($products->genre!=''){
  
?> 

<section >
       <div class="container-fluid">
         <div class="title-box">
           <h2><?php echo $products->genre; ?></h2>
          </div>
          <div class="row" style="background-color:#000d10; padding-bottom:15px;">
         <div class="carousel" data-flickity>

<?php




  //products array
  $products_arr=array();
  $products_arr['data']=array();

  //i wanna fetch it as an associative array
  while($row= $result-> fetch(PDO::FETCH_ASSOC)){
      //extract cuz i wanna use $title, $body etc and not $row['title'] etc
      extract($row);

      $products_item=array(
          'product_id'=> $product_id,
          'genre'=> $genre,
          'product_name'=> $product_name,
          'price'=> $price,
          'image_name'=> $image_name,
          'image'=> $image
      );
?>

           <div class="col-md-3">
             <div class="product-top"style="padding-top:15px;">
          
            <?php 
            $encodedData =  base64_encode($products_item['image']);
            file_put_contents('../forms/ProductImages2/'.$products_item['image_name'], base64_decode($encodedData));
            $image_name=$products_item['image_name'];
            
            echo "<a href='Product.php?product_id=$product_id&isgame'> "."<img src='../forms/ProductImages2/$image_name'>". "</a>";
            ?>

              <div class="overlay-right">
              </div>
            </div>
            <div class="product-bottom text center">
             <h3><?php echo $product_name; ?> </h3>
             <h5>‎<?php echo $price; ?></h5>
            </div>
          </div>

<?php 
      //push to "data"
      array_push($products_arr['data'], $products_item);
  } 
}

}
?>

           </div>
         </div>
        </div>
    </section>

    <?php include_once 'Footer.html'; ?>
