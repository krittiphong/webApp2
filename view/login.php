<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<?php
		include ("header.php");
		if(isset($_GET['x']))
		{
			echo "<script language='javascript'>";
			echo "alert('Incorrect username or password!!!')";
			echo "</script>";
		}
	?>
	<style>
			a{
				text-decoration: none;
			}
			#aiai{
				background-image: url("logo.png"); 
				height: 100%;
				width: 100%;
				background-size: 100%;				
			}		
			form{
				
				height: 430px;
			}		
	</style>
</head>
<body>
	
	<div align="center" id="aiai"  >
		<br/>
		<form action = "../controller/check_login.php" method ="post">
			<h3>
				<br/><br/>
				<input type="text"  name="user" id ="user" placeholder="username">
				<br/><br/>
				<input type="password"  name="password" id ="password" placeholder="password">
			</h3>
			<br/>
			<input  type="submit" name="login" id="login" value="login">
		</form>
	</div>
</body>
<footer>
	<?php 
		include ("../view/footer.php");
		show_source("../view/login.php");
	?>
</footer>
</html>