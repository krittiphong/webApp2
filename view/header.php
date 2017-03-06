<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<div style = "background-color: black ;height: 150px;">
		<center> 
				<h1>  
					<br/>
					<font color ="blue"> CPE MUSCLE </font>
				</h1>
				<?php
					session_start();
					if($_SESSION['type'] == "admin" ){
						echo "<form action ='../controller/check_login.php' method ='post' align= 'center'>
							<input  type='submit' name='logout' id='logout' value='logout'>
						</form>";
					}
				?>
		</center>
	</div>
</head>
