<html>
<head>
	<title>SPK-SAW (Mysqli-Prosedural)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.css">
	<link rel="icon" href="image/favicon.ico"/>
</head>
<body>
	<div class="left">
		<img src="image/linux.jpg" height="100%" width="100%">
	</div>
	<div class="right">
		<h1>Login to Application</h1>
		<form action="ceklogin.php" method="post">
			<input type="text" name="username" placeholder="Username" autofocus="">
			<input type="password" name="password" placeholder="Password">
			<br>
			<input type="submit" value="Login" class="button">
		</form>
		<?php
			session_start();
			if(isset($_GET['msg'])){
				if($_GET['msg']=="fail"){
					echo "<i style='color:red'>Login Gagal, Username dan Password Salah</i>";
				}
			}
			if(isset($_SESSION['status'])){
				if($_SESSION['status']=='login'){
					header("location:dashboard.php");
				}
			}
		?>
	</div>
</body>
</html>