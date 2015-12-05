<?php 
	// if (isset($_SESSION['username'])) {
	// 	echo 	"Wlcome ".$_SESSION['username'];
	// }else{
	// 	echo $_SESSION['username'];
	// }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADMIN</title>
	<link rel="stylesheet" href="css/admin.css">
</head>
<body>
	<!-- <h1>这是后台</h1> -->
	<header>
		<div class="header">
			<div class="logo">
				<h1>BLOG 后台管理系统</h1>
				<!-- <br> -->
				<span>听起来好高大上的样子，不过应该没有什么人能够看到</span>
			</div>			
		</div>
	</header>
	<div class="container">
		<div class="main">
			<div class="content">
				<div class="all_post">
					<div class="each_post">
						<div class="post_header">
							<h3>这是一篇文章</h3>
						</div>
						<div class="post_body">
							<p>这是简单的文章内容</p>
						</div>
						<div class="post_footer">
							<p><a href="#">EDIT</a></p>
						</div>
					</div>
					<div class="each_post">
						<div class="post_header">
							<h3>这是一篇文章</h3>
						</div>
						<div class="post_body">
							<p>这是简单的文章内容</p>
						</div>
						<div class="post_footer">
							<p><a href="#">EDIT</a></p>
						</div>
					</div>
					<div class="each_post">
						<div class="post_header">
							<h3>这是一篇文章</h3>
						</div>
						<div class="post_body">
							<p>这是简单的文章内容</p>
						</div>
						<div class="post_footer">
							<p><a href="#">EDIT</a></p>
						</div>
					</div>
					<div class="each_post">
						<div class="post_header">
							<h3>这是一篇文章</h3>
						</div>
						<div class="post_body">
							<p>这是简单的文章内容</p>
						</div>
						<div class="post_footer">
							<p><a href="#">EDIT</a></p>
						</div>
					</div>
					<div class="each_post">
						<div class="post_header">
							<h3>这是一篇文章</h3>
						</div>
						<div class="post_body">
							<p>这是简单的文章内容</p>
						</div>
						<div class="post_footer">
							<p><a href="#">EDIT</a></p>
						</div>
					</div>																				
				</div>
			</div>
		</div>
		<div class="slide">
			<div class="nav">
				<ul>
					<li>博客管理</li>
					<li>评论管理</li>
					<li>标签管理</li>
					<li>个人管理</li>
				</ul>				
			</div>
		</div>
	</div>
	<footer>
		<span class="copyright">
			ALLRIGHT RESERVED BY <a href="http://simple.wenqiangyang.com">Windard</a>
		</span>		
	</footer>
	<script src="js/jquery-2.1.1.min.js"></script>
</body>
</html>