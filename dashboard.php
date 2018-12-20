<?php
	session_start();
	$user = $_SESSION['user'];
	$status = $_SESSION['status'];
	if($user==""){
		header("location:index.php"); 
	}
?>
<h1>Hello <?php echo $user; ?></h1>
<a href="logout.php">Logout</a>