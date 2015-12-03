<?php 
	if (isset($_POST['name'])) {
		$username = $_POST['name'];
		$password = $_POST['password'];
	}else{
		header("Location:login.html");
	}

	$flag = 0;
	$pass = file("css/password.txt");
	foreach ($pass as $item) {
		list($user,$pass) = explode("  ",$item);
		$user = trim($user);
		$pass = trim($pass);
		if($user==$username){
			if($pass==$password){
				$flag = 1;
			}else{
			}
		}else{
		}
	}
	if($flag){
		setcookie('username',$username);
		header("Location:admin.php");
	}else{
		header("Location:login.html");	
	}	
 ?>