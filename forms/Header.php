      <!--Header-->
<?php session_start(); ?>
<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
        <!-- Carousel-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="productstyle.css">

      </head>
    <body>


      <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid"style="font-size: medium;">
          <img src="logo2.png" width= "70px" height="60px", style="border-radius:50%" >
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item home">
                
                  <a class="nav-link active" aria-current="page" href="Body.php">Home</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link active" aria-current="page" href="#">About</a>
                </li>
              <li>
                <div class="container-fluid">

                  <form action="searchresults.php" method="post"  class="d-flex login"  style="margin-top: 10px;">
                    <input class="form-control me-2" type="search" name="search" placeholder="Search for anything" aria-label="Search">


                    <button class="btn btn-outline-success bg-dark" type="submit"><i class="fa fa-search"></i>
                    </button>
                  </form>
                </div>
               
              </li>
              <li class="nav-item">
                  <?php 
                if(isset($_SESSION['Username'])){
                  echo '<a class="nav-link active" aria-current="page" href="#">'.$_SESSION['Username'].'</a>';
                } else echo '<a class="nav-link active" aria-current="page" href="LogInform.php"> Log In </a>';  
                ?>
              </li>
              <li class="nav-item">
              <?php 
                if(isset($_SESSION['Username'])){
                  echo '<a class="nav-link active" aria-current="page" href="../login_signup/logout.php">Logout </a>';
                } else echo '<a class="nav-link active" aria-current="page" href="Signupform.php"> Sign Up </a>';  
                ?>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="ShoppingCart.php"><i class="fa fa-shopping-cart"></i></a>
              </li>
            </div>
          </div>
        </div>
              
            </ul>
            
            
            
          </div>
        </div>
      </nav>
   
