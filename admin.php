<?php 
	if (isset($_COOKIE['username'])) {
		echo 	"Wlcome ".$_COOKIE['username'];
	}else{
		header("Location:login.html");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADMIN</title>
</head>
<body>
	<h1>这是后台</h1>
</body>
</html>