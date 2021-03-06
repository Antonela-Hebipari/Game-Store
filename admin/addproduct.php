  <?php
session_start();

if($_SESSION['Username']!='admin'){
  header("location: ../forms/LogInform.php?message2=Not%20Admin");
}

include_once "../config/database.php";
$db=new database();
$con=$db->connect();

if(isset($_POST['btn_save']))
{
$product_name=$_POST['product_name'];
$description=$_POST['description'];
$price=$_POST['price'];

//if its a game
$ram=$_POST['ram'];
$graphics_card=$_POST['graphics_card'];
$processor=$_POST['processor'];
$operating_system=$_POST['operating_system'];

//if its an accessory
$acc_type=$_POST['acc_type'];

//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	$picture = file_get_contents($_FILES['picture']['tmp_name']);

$query='INSERT INTO products (product_name, description, price, image, image_name)  VALUES (?, ?, ?, ?, ?)';

$stmt= $con->prepare($query);

//bind the values to the ? at the query
$stmt->bindParam(1,$product_name);
$stmt->bindParam(2,$description);
$stmt->bindParam(3,$price);
$stmt->bindParam(4,$picture);
$stmt->bindParam(5,$picture_name);

$result=$stmt->execute() or die ("query 1 incorrect.....");

header("location: sumit_form.php?success=1");
}

}
include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <form action="" method="post" type="form" name="form" enctype="multipart/form-data">
        <div class="row">
          
                
         <div class="col-md-7">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Add Product</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" id="product_name" required name="product_name" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="">
                        <label for="">Add Image</label>
                        <input type="file" name="picture" required class="btn btn-fill btn-success" id="picture" >
                      </div>
                    </div>
                     <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" cols="80" id="description" required name="description" class="form-control"></textarea>
                      </div>
                    </div>
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Price</label>
                        <input type="text" id="price" name="price" required class="form-control" >
                      </div>
                    </div>
                  </div>
                 

              <div class="card-footer">
                  <button type="submit" id="btn_save" name="btn_save" required class="btn btn-fill btn-primary">Add Product</button>
              </div>
                
              </div>
              
            </div>
          </div>

        </div>
         </form>
          
        </div>
      </div>
      <?php
include "footer.php";
?>