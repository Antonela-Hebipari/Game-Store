<html>
<head>
<title>Homepage</title>
        <link rel="stylesheet" href="style.css">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Carousel--><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php

include_once 'Head.html'; 
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
        <img src="./ProductImages/game1.jpg" alt="DragonAge" style="width:100%;">
      </div>

      <div class="item">
        <img src="./ProductImages/game2.jpg" alt="TheSims4" style="width:100%; height:695px">
      </div>
    
      <div class="item">
        <img src="./ProductImages/game3.jpg" alt="Bastion" style="width:100%; height:700px">
      </div>
      <div class="item">
        <img src="./ProductImages/game4.jpg" alt="Skyrim" style="width:100%; height:700px">
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
        <select name="format" id="format" style="color:white;">
          <option selected disabled>CATEGORIES</option>

          <option value="Rpg">RPG</option>
          <option value="Horror">Horror</option>
          <option value="Adventure">Adventure</option>
          <option value="Survival">Survival</option>
          <option value="Fighting">Fighting</option>
          </option>
        </select>
      </div>
     <section class="horror">
       <div class="container">
         <div class="title-box">
           <h2>Horror</h2>
         </div>
         <div class="row">
           <div class="col-md-3">
             <div class="product-top">
               <img src="./ProductImages/game13.jpg">
               <div class="overlay-right">
               </div>
             </div>
             <div class="product-bottom text center">
              <h3>Little Nightmares II</h3>
              <h5>$29.99</h5>
             </div>
           </div>
           <div class="col-md-3">
            <div class="product-top">
              <img src="./ProductImages/game14.jpg">
              <div class="overlay-right">
              </div>
            </div>
            <div class="product-bottom text center">
             <h3>The Evil Withing</h3>
             <h5>	$19.99</h5>
            </div>
          </div>
          <div class="col-md-3">
            <div class="product-top">
              <img src="./ProductImages/game15.png">
              <div class="overlay-right">
              </div>
            </div>
            <div class="product-bottom text center">
             <h3>Outlast 2</h3>
             <h5>$29.99</h5>
            </div>
          </div>
          <div class="col-md-3">
            <div class="product-top">
              <img src="./ProductImages/game16.png">
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
     </section>
     
     <section class="RPG">
      <div class="container">
        
        <div class="title-box">
          <h2>RPG</h2>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="product-top">
              <img src="./ProductImages/game20.jpg">
              <div class="overlay-right">
              </div>
            </div>
            <div class="product-bottom text center">
             <h3>Cyberpunk 2077</h3>
             <h5>‎$59.99</h5>
            </div>
          </div>
          <div class="col-md-3">
           <div class="product-top">
             <img src="./ProductImages/game21.png">
             <div class="overlay-right"></div>
           </div>
           <div class="product-bottom text center">
            <h3>Mass Effect 2</h3>
            <h5>$9.89</h5>
           </div>
         </div>
         <div class="col-md-3">
           <div class="product-top">
             <img src="./ProductImages/game22.png">
             <div class="overlay-right"></div>
           </div>
           <div class="product-bottom text center">
            <h3>Diablo III</h3>
            <h5>$19.99</h5>
           </div>
         </div>
         <div class="col-md-3">
           <div class="product-top">
             <img src="./ProductImages/game23.jpg">
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
    </section>
    
    <?php include_once 'Footer.html' ; ?>
    </body>
    </html>
