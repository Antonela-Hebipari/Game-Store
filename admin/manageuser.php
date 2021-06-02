<?php
session_start();
include_once "../config/database.php";
$db=new database();
$con=$db->connect();

if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$user_id=$_GET['user_id'];

/*this is delete query*/
$query='DELETE FROM users WHERE user_id=?';
$stmt= $con->prepare($query);
$stmt->bindParam(1,$user_id);

$result=$stmt->execute() or die ("query 1 incorrect.....");
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
                <h4 class="card-title">Manage User</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter table-hover" id="">
                    <thead class=" text-primary">
                      <tr><th>Email</th>
                <th>Password</th>
	<th><a href="adduser.php" class="btn btn-success">Add New</a></th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $query='SELECT user_id, email, password FROM  users;';
                        $stmt= $con->prepare($query);
              
                        $result=$stmt->execute() or die ("query 1 incorrect.....");
                        while(list($user_id, $email, $password)= $stmt->fetch(PDO::FETCH_BOTH))
                        {
                        echo "<tr><td>$email</td><td>$password</td>";

                        echo"<td>
                        <a href='manageuser.php?user_id=$user_id&action=delete' type='button' rel='tooltip' title='' class='btn btn-danger btn-link btn-sm' data-original-title='Delete User'>
                                <i class='material-icons'>close</i>
                              <div class='ripple-container'></div></a>
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