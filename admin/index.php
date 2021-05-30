<?php
session_start();
include_once "../config/database.php";

include "sidenav.php";
include "topheader.php";

$db=new database();
$con=$db->connect();
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
         <div class="panel-body">
            <a>
            <?php  //success message
            if(isset($_POST['success'])) {
            $success = $_POST["success"];
            echo "<h1 style='color:#0C0'>Your Product was added successfully &nbsp;&nbsp;  <span class='glyphicon glyphicon-ok'></h1></span>";
            }
            ?> </a>
                </div>
                <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Users List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                        <tr><th>User_ID</th><th>Address</th><th>Username</th><th>Age</th><th>Email</th><th>Password</th>
                    </tr></thead>
                    <tbody>
                      
                      <?php
                      $query='SELECT * FROM  users;';
                      
                      $stmt= $con->prepare($query);
              
                        $result=$stmt->execute() or die ("query 1 incorrect.....");

                        while(list($user_id, $address, $username, $age, $email, $password)=$stmt->fetch(PDO::FETCH_BOTH))
                        {	
                        echo "<tr><td>$user_id</td><td>$address</td><td>$username</td><td>$age</td>
                        <td>$email</td><td>$password</td> </tr>";
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