<?php
	session_start();
	include 'koneksi.php';

	$user = $_POST['username'];
	$pass = md5($_POST['password']);
	
	$data = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$user' AND password='$pass'");
	$cek = mysqli_num_rows($data);
	if($cek>0){
		$_SESSION['user'] = $user;
		$_SESSION['status'] = 'login';
		header("location:dashboard.php");
	} else {
		header("location:index.php?msg=fail");
	}
?>