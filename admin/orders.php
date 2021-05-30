
    <?php
session_start();
include_once "../config/database.php";
$db=new database();
$con=$db->connect();

error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$orderdet_id=$_GET['orderdet_id'];

$query='DELETE FROM order_details WHERE orderDet_id=?';
$stmt= $con->prepare($query);
$stmt->bindParam(1,$orderdet_id);

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
          <!-- your content here -->
          <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Orders  / Page <?php echo $page;?> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                      <tr><th>Order Id</th><th>User Id</th><th>Delivery Type</th><th>Order Date</th><th>Card Type</th>
                    </tr></thead>
                    <tbody>
                      <?php 

                        $query='SELECT ord.orderdet_id, usr.user_id, ord.delivery_type, ord.order_date, ord.card_type 
                        FROM order_details ord JOIN order_u ordu ON ord.orderdet_id=ordu.orderdet_id 
                        JOIN users usr ON ordu.user_id=usr.user_id Limit ' .$page1. ',10;';
                      
                      $stmt= $con->prepare($query);
              
                        $result=$stmt->execute() or die ("query 1 incorrect.....");

                        while(list($orderdet_id, $user_id, $delivery_type, $order_date, $card_type)=$stmt->fetch(PDO::FETCH_BOTH))
                        {	
                        echo "<tr><td>$orderdet_id</td><td>$user_id</td><td>$delivery_type<br>$order_date</td><td>$card_type<br>
                        <td>
                        <a class=' btn btn-danger' href='orders.php?orderdet_id=$orderdet_id&action=delete'>Delete</a>
                        </td></tr>";
                        }
                        ?>
                    </tbody>
                  </table>
                  
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <?php
include "footer.php";
?>