<?php 

	session_start();
	include("mysql.php");

	if (!isset($_session['reginster'])) {
		if(isset($_POST['name'])){
			$username = mysqli_real_escape_string($con,stripslashes($_POST['name']));
			$email    = mysqli_real_escape_string($con,stripslashes($_POST['email']));
			$password = mysqli_real_escape_string($con,stripslashes($_POST['password']));
			$repassword = mysqli_real_escape_string($con,stripslashes($_POST['repassword']));

			if(!$password == $repassword){
				header("Location:reginster.html");
			}
			$query = "SELECT * FROM user ;";
			$result = mysqli_query($con,$query);
			$userid = mysqli_num_rows($result)+1;

			$query = "INSERT INTO user(userid,username,email,password) VALUES('$userid','$username','$email',MD5('$password'))";

			$result = mysqli_query($con,$query);

			mysqli_commit($con);
			mysqli_close($con);
			header("Location:login.html");
		}
	}
 ?>