<?php
include_once 'Header.php';

if(isset($_SESSION['User_ID'])){
  ?>
<head>

	<style type="text/css">
		.loginbox
		{
			width: 440px;
			height: 450px;
			top: 50%;
			left: 50%;
			position:absolute  ;
			background-color:gray;
			color: #66fcf1;
			font-family: Georgia, 'Times New Roman', Times, serif;
			box-sizing: border-box;
			transform: translate(-50%,-50%);
			padding: 70px 20px;
			
		}
		
		.loginbox p
		{
			margin: 0;
			padding: 0;
			font-style: bold;
			margin-left: 30px;
            
		}
		.loginbox input
		{
			width: 85%;
			height: 35px;
			margin-bottom: 7%;
			margin-left: 30px;
            background-color: white;
            color: #1f2833;
			
			opacity: 0.7;
		}

		.button
		{
            margin-left: 100px;
            border: none;
            text-align: center;
            display: inline-block;
		}

	input[type="submit"]{
		background-color: #116466;
		font-size: 20px;
		color: white;
		border-radius: 8px;
		padding: 2px 30px;
	}
		::placeholder {
            color: #2c3531  
        }
 
	</style>
</head>
<body>

	<div class="loginbox">
		<br><br>

		<form action="../order1/checkout1.php" method="post">
			<p>Card_type: </p>
            <input type="text" name="Card_Type" placeholder="Card Type" >
			<p>delivery_type: </p>
			<input type="text" name="delivery_type" placeholder="delivery Type" >
			<input type="submit" name="submit" value="Place Order">
		</form>
		<br>
		<?php 
		if(isset($_GET['message3'])){
			echo '<p>'.$_GET['message3'].'</p>';
		}
}

else{
	header("location: LogInform.php?message2=User%20Not%20Logged%20in");
}
			?>	
			
      
	</div>   
	<br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br><br><br>

    <?php include_once 'Footer.html'; ?>