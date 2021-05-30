 <?php
session_start();
include_once "../config/database.php";
$db=new database();
$con=$db->connect();

error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$product_id=$_GET['product_id'];
/*this is delete query*/
$query='DELETE FROM products WHERE product_id=?';
$stmt= $con->prepare($query);
$stmt->bindParam(1,$product_id);

$result=$stmt->execute() or die ("query 1 incorrect.....");
}

///pagination
$page=$_GET['page'];

if($page=="" || $page=="1")
{
$page1=0;	
}
else
{
$page1=($page*10)-10;	
} 

include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        
        
         <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Products List</h4>
                
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter " id="page1">
                    <thead class=" text-primary">
                      <tr><th>Image</th><th>Id</th><th>Name</th><th>Description</th><th>Price</th> 
                      <th> <a class=" btn btn-primary" href="addproduct.php">Add New</a></th></tr></thead>
                    <tbody>
                      <?php 
                      $query='SELECT pr.image, pr.product_id, pr.product_name, pr.description, pr.price FROM products pr Limit ' .$page1. ',12;';
                      $stmt= $con->prepare($query);
              
                        $result=$stmt->execute() or die ("query 1 incorrect.....");

                        while(list($image, $product_id, $product_name, $description, $price)=$stmt->fetch(PDO::FETCH_BOTH))
                        {

                          file_put_contents('../forms/ProductImages/image.png', base64_decode($image));

                          echo "<tr><td> <img src='../forms/ProductImages/image.png' style='width:50px; height:50px; border:groove #000'> </td><td>$product_id</td> <td>$product_name</td> <td>$description</td> <td>$price</td>
                        <td>
                        <a class=' btn btn-success' href='productlist.php?product_id=$product_id&action=delete'>Delete</a>
                        </td></tr>";
                        }

                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>

                 <?php 
      
                 //counting paging
                $query='SELECT pr.image, pr.product_id, pr.product_name, pr.description, pr.price FROM products pr';
                $stmt= $con->prepare($query);
                $stmt->execute();
                $count= $stmt->rowCount();

                $a=$count/10;
                $a=ceil($a);
                for($b=1; $b<=$a;$b++)
                {
                ?> 
                <li class="page-item"><a class="page-link" href="productlist.php?page=<?php echo $b;?>"><?php echo $b." ";?></a></li>
                <?php	
}
?>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
                    
        </div>
      </div>
      <?php
include "footer.php";
?>