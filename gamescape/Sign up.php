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

<?php include_once 'Head.html';  ?>

	<div class="loginbox">
		
        <h1 align="center" style=" color: #116466"> Sign Up </h1>
            <font face="Times" size="3">
            <p><marquee style="color: #116466"> Sign up as a client to  have full access to our latest updates  and to be able to order everything from everywhere!</marquee></p>
             </font>

		<form method="post">
			<p> Full Name: </p>
            <input type="text" alt="Full Name" name="" placeholder="Full Name" >
            <p> Age: </p>
            <input type="text" name="" placeholder="Age">
			<p> Email: </p>
			<input type="email" name="" placeholder="Email">
			<p> Address </p>
			<input type="text" name="" placeholder="Address">
			<p> Password: </p>
            <input type="Password" name="" placeholder="Password">
            <p> Confirm Password</p>
            <input type="password" name="" placeholder="Password">
			
			<br>
		</form>
        <div class="button">
			<input type="submit" value="Sign Up">
		</div>
	
      
	</div>   
	<br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br><br><br>

		<?php include_once 'Footer.html' ;  ?>  
	
	
</body>

</html> 
