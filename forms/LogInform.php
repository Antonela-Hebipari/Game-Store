
	<link rel="stylesheet" href="style log in.css">	
	<?php include_once 'Header.php';  ?>

	<div class="loginbox">
	
		<h1 align="center" style="font-size: 40px"> Log In </h1>
		
		<form action="../login_signup/login.php" method="post">
	       <p> Email: </p>
			<input type="email" name="email" placeholder="Email"><br>
			<p> Password: </p>
			<input type="password" name="password" placeholder="Password"><br>
			<input type="submit" name="submit" value="Log In"><br>
			</form>
			<?php 
			if(isset($_GET['message2'])){
				echo '<p>'.$_GET['message2'].'</p>';
			}
			?>
	</div>
	<br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br>

		<?php include_once 'Footer.html' ;  ?>