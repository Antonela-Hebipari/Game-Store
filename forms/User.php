<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body
{
    margin: 0;
    padding: 0;
    background-color: #002930;

}
.userbox
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
        .userbox p
		{
			margin: 0;
			padding: 0;
			font-style: bold;
			margin-left: 5px;
            
		}
		.userbox input
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
        input[type="submit"]{
		background-color: #116466;
		font-size: 20px;
		color: white;
		border-radius: 8px;
		padding: 2px 30px;
	}

</style>

</head>
<body>
<?php include_once 'Header.php'; ?>
<div class="userbox">
    <br><br>
    <h1 align="left" style= "color:#66fcf1 "> Profile </h1>
    <br>
    <form>
    <p> Username: </p>
            <input type="text" name="username" value='alesiaskenderas' readonly>
            <p> Age: </p>
            <input type="text" name="age" value='22' readonly>
			<p> Email: </p>
			<input type="email" name="email" value='alesia.skenderas@gmail.com' readonly >
			<p> Address </p>
			<input type="text" name="address"value='Tirane' readonly >
            <div class="button">
            <form action="EditUser.php" method="post">
            <input  type="submit" name="submit" value="EDIT">
</form>
</div>

</div>
    </form>
    </div>
     
   <br><br> <br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br>
    <?php include_once 'Footer.html' ;  ?>  
			
</body>
</html>