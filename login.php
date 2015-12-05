<?php 
	session_start();
	if(!isset($_SESSION['token'])||$_SESSION['token']=="")
		$_SESSION['token']=md5(time());

	$data = "<!DOCTYPE html>
<html lang=\"en\">
<head>
	<meta charset=\"UTF-8\">
	<title>LOGIN</title>
	<link rel=\"stylesheet\" href=\"css/login.css\">
</head>
<body>
	<div class=\"content\">
		<div class=\"login\">
			<div class=\"header\">
				<p>Welcome</p>
			</div>
			<div class=\"body\">
				<div class=\"form\">
					<form action=\"login.php\" method=\"post\">
						<input type=\"text\" name=\"name\" placeholder=\"Username\" autofocus required>
						<input type=\"hidden\" name=\"token\" value=\"".$_SESSION['token']."\">
						<input type=\"password\" name=\"password\" placeholder=\"Password\" required>
						<input type=\"text\" name=\"vcode\" placeholder=\"Vcode\" required>
						<img src=\"image/vcode.png\" alt=\"vcode\">
					</form>					
				</div>
			</div>
			<div class=\"footer\">
				<div class=\"buttom\">
					<button class=\"reginster\">
						<a href=\"reginster.html\">REGINSTER</a>
					</button>
					<button class=\"submit\">
						<a href=\"javascript:void(0)\">LOGIN</a>
					</button>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<span class=\"copyright\">
			ALLRIGHT RESERVED BY <a href=\"http://simple.wenqiangyang.com\">Windard</a>
		</span>		
	</footer>
	<script src=\"js/jquery-2.1.1.min.js\"></script>
	<script src=\"js/login.js\"></script>
</body>
</html>
";


	// echo "zhe  shi toke  :  ".$_SESSION['token']." \"over\"";
	include("mysql.php");
	if(!isset($_SESSION['username'])){
		if(isset($_POST['name'])){
			$username = $_POST['name'];
			$username = stripslashes($username);
			$username = mysqli_real_escape_string($con,$username);
			$password = $_POST['password'];
			$password = stripslashes($password);
			$password = mysqli_real_escape_string($con,$password);
			$password = MD5($password);
					echo "fuck";
			if($_POST['token']==$_SESSION['token']){
				$query = "SELECT * FROM `user` WHERE username='$username' AND password='$password';";
				$result = mysqli_query($con,$query);
				if(mysqli_num_rows($result)==1){
					$_SESSION['username']=mysqli_fetch_array($result)['username'];
					$_SESSION['token'] = md5(time());
					setcookie("username",$username);
					header("Location:admin.php");
				}else{
					echo $data;
				}				
			}else{
				echo $data;
			}

		}else{
			echo $data;
		}
	}else{
		header("Location:admin.php");
	}
?>


