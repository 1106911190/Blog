<?php 
	if (isset($_SESSION['username'])) {
		echo 	"Wlcome ".$_SESSION['username'];
	}else{
		// header("Location:login.php");
		echo $_SESSION['username'];
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