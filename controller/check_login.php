<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	<?php
		session_start();
		//include ("header.php");
		include ("../model/connect.php");
        spl_autoload_register(function ($class_name){
            include $class_name . ".php";
        });
	?>
</head>
<?php
	function login($user,$pass,$conn){
	    echo $user;
			$sql = "SELECT * FROM members WHERE username='$user' AND passwd='$pass'";
			$res = $conn -> prepare($sql);
			$res -> execute();
			if($row = $res -> fetch(PDO::FETCH_ASSOC)){
                return $row['typeUser'];
			}
			else{				
				return 0;
			}
	}


	if (isset($_POST["login"]))
	{
		$user1 =$_POST["user"];
		$pass1 = $_POST["password"];
		$typeUser1 = "";

        $check = login($user1,$pass1,$conn);
        if($check != false){
                $typeUser1 = $check;
                if($typeUser1 == "admin"){
                    $_SESSION['type'] = "admin";
                    header("location: ../view/manage_user.php");
                }
                else if($typeUser1 == "user"){
                    $_SESSION['type'] = "user";
                    header("location: ../view/data_user.php");
                }
				//header("location: checkout_cart.php");
				exit();
			}
		else{
			header("location: ../view/login.php?x=error");
			exit();
		}
	}
	if(isset($_POST["logout"]))
	{		
		session_unset();
		session_destroy();
		if (ini_get("session.use_cookies")) {
			setcookie(session_name(),'',time() - 3600,"/");
		}
		echo "Session deleted";
		header("location: ../view/login.php");
		exit();
	}
	if($_SESSION['type'] != "admin" || $_SESSION['type'] != "user")
	{
		header("location: ../view/login.php");
		exit();
	}
	show_source("../controller/check_login.php");
	echo "ss";
	echo "hh";
?>