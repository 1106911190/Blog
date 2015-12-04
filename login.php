<?php 
// 	if (isset($_POST['name'])) {
// 		$username = $_POST['name'];
// 		$password = $_POST['password'];
// 	}else{
// 		header("Location:login.html");
// 	}

// 	$flag = 0;
// 	$pass = file("css/password.txt");
// 	foreach ($pass as $item) {
// 		list($user,$pass) = explode("  ",$item);
// 		$user = trim($user);
// 		$pass = trim($pass);
// 		if($user==$username){
// 			if($pass==$password){
// 				$flag = 1;
// 			}else{
// 			}
// 		}else{
// 		}
// 	}
// 	if($flag){
// 		setcookie('username',$username);
// 		header("Location:admin.php");
// 	}else{
// 		header("Location:login.html");	
// 	}	

	session_start();
	include("mysql.php");
	if(!isset($_session['username'])){
		if(isset($_POST['name'])){
			$username = $_POST['name'];
			$username = stripslashes($username);
			$username = mysqli_real_escape_string($con,$username);
			$password = $_POST['password'];
			$password = stripslashes($password);
			$password = mysqli_real_escape_string($con,$password);
			$password = MD5($password);
			// echo "first";
			$query = "SELECT * FROM `user` WHERE username='$username' AND password='$password';";
			$result = mysqli_query($con,$query);
			// echo $password;
			// echo mysqli_num_rows($result);
			setcookie("username",$username);
			if(mysqli_num_rows($result)>0){
				header("Location:admin.php");
			}
		}
	}
	// include("login.html");
?>