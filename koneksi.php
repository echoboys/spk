<?php
	//error_reporting(0);
	$host = "127.0.0.1";
	$user = "root";
	$pass = "123456";
	$db = "spk";
	$koneksi = mysqli_connect($host, $user, $pass,$db);
	if (!$koneksi) {
	    die("Connection failed: " . mysqli_connect_error());
	} else {
		//echo "sukses";
	}
?>