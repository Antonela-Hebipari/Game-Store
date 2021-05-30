 <?php
session_start();
include_once "../config/database.php";
include "sidenav.php";
include "topheader.php";

$db=new database();
$con=$db->connect();

if(isset($_POST['btn_save']))
{
$username=$_POST['username'];
$age=$_POST['age'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];

$query='INSERT INTO users (Username, Email, Age, Address, Password) 
VALUES (?, ?, ?, ?, ?)';

$stmt= $con->prepare($query);
$hashedPass=password_hash($password, PASSWORD_DEFAULT);

//bind the values to the ? at the query
$stmt->bindParam(1,$username);
$stmt->bindParam(2,$email);
$stmt->bindParam(3,$age);
$stmt->bindParam(4,$address);
$stmt->bindParam(5,$hashedPass);

$result=$stmt->execute() or die ("query 1 incorrect.....");

}


?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Users</h4>
                  <p class="card-category">Complete User profile</p>
                </div>
                <div class="card-body">
                  <form action="" method="post" name="form" enctype="multipart/form-data">
                    <div class="row">
                      
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" id="username" name="username" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Age</label>
                          <input type="text" name="age" id="age"  class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" name="address" id="address" class="form-control" required>
                        </div>
                      </div>
                      
                    </div>
                    
                    <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary pull-right">Add User</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
      <?php
include "footer.php";
?>