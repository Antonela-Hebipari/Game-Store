<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
		body
		{
			margin: 0;
			padding: 0;
			background:url('skyrim-solitude.jpg') fixed;
			background-size:cover;
			font-family: Times;
		}
		
		.loginbox
		{
			width: 440px;
			height: 680px;
			top: 50%;
			left: 50%;
			position:absolute  ;
			background-color:transparent;
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
            margin-left: 90px;
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

<?php include_once 'Header.php';  ?>

	<div class="loginbox">
		<br><br>
        <h1 align="center" style=" color: #116466"> Change Password </h1>
		<br>
		<form action="../models/newpassword.php" method="post">
			<p> Email: </p>
			<input type="email" name="email" placeholder="Email">
			<p> Password: </p>
            <input type="password" name="password" placeholder="New password">
            <p> Confirm Password:</p>
            <input type="password" name="confirmpassword" placeholder="Confrim new password">
			
			<div class="button">
			<input type="submit" name="submit" value="Change Password">
			</div>

			<br>
		</form>
			
			<?php 
			if(isset($_GET['message3'])){
				echo '<p>'.$_GET['message3'].'</p>';
			}
			?>
      
	</div>   
	<br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br><br><br>

		<?php include_once 'Footer.html' ;  ?>  
	
	
</body>

</html> 
