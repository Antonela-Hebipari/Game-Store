
<head>
<style type="text/css">
.bodii
{
    margin: 0;
    padding: 0;
    background-color: #002930;

}
.userboxi
		{
			width: 440px;
			height: 680px;
			top: 50%;
			left: 25%;
			position:absolute  ;
			background-color:transparent;
			color: #66fcf1;
			font-family: Georgia, 'Times New Roman', Times, serif;
			box-sizing: border-box;
			transform: translate(-50%,-50%);
			padding: 70px 20px;
        }
        .userboxi p
		{
			margin: 0;
			padding: 0;
			font-style: bold;
			margin-left: 5px;
            
		}
		.userboxi input
		{
			width: 85%;
			height: 35px;
			margin-bottom: 7%;
			margin-left: 5px;
            background-color: white;
            color: #1f2833;
            border: none;
			
			opacity: 0.7;
		}
        .submiti{
		background-color: #116466;
		font-size: 20px;
		color: white;
		border-radius: 8px;
		padding: 2px 30px;
	}

</style>
</head>
<?php 
include 'Header.php';

include_once '../config/database.php';
//include_once '../models/getproducts.php';

//instantiate db and connect
$database= new database();
$conn= $database->connect(); 

if(isset($_SESSION['User_ID'])){
    $query='SELECT usr.address, usr.username, usr.age, usr.email 
        FROM  users usr WHERE usr.user_id=?;';
        
        //prepare statement 
        $stmt= $conn->prepare($query);

        //bind this id to the ? at the query
        $stmt->bindParam(1, $_SESSION['User_ID']);
        if(!$stmt->execute()){
            echo json_encode(array(
                'message'=> 'Error...'
            ));
        }

        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        //set properties
        $address=$row['address'];
        $username=$row['username'];
        $age=$row['age'];
        $email=$row['email'];
        
        $user_arr=array(
            'username'=> $username,
            'address'=> $address,
            'age'=> $age,
            'email'=> $email
        );
    ?>

<div class="bodii">
<div class="userboxi">
    <br><br>
    <h1 align="left" style= "color:#66fcf1 "> Profile </h1>
    <br>
	<form action="" method="post">
		<p> Username: </p>
           <?php echo '<input type="text" name="username" value="'.$username.'" readonly>'; ?>    
            <p> Age: </p>
			<?php echo '<input type="text" name="age" value="'.$age.'" readonly>'; ?> 
			<p> Email: </p>
			<?php echo '<input type="email" name="email" value="'.$email.'" readonly>'; ?> 
			<p> Address </p>
			<?php echo '<input type="text" name="address" value="'.$address.'" readonly>'; ?> 
            
		</form>  
            <a  href="EditUser.php" class="submiti"> EDIT </a>
  
    </div>
	
</div>

	<?php
} else header("location: ../forms/LogInform.php?message2=User%20Not%20Logged%20in");

?>



   <br><br> <br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br>
    <?php include_once 'Footer.html' ;  ?>  
