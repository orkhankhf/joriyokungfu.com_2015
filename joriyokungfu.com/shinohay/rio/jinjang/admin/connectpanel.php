<?php
session_start();
include "../../../../DB/db.php";
if($conn){

	$admin = $_POST["admin"];
	$sifre = $_POST["sifre"];
	$admins = array();

	$select = "SELECT * FROM `admin`";
	$query = mysqli_query($conn,$select);

	while($row = mysqli_fetch_assoc($query)){
		array_push($admins,$row['admin']);
		array_push($admins,$row['sifre']);
	}
	if($admin==$admins[0]&&$sifre==$admins[1]){
		$_SESSION["admin"] = $admin;
		$_SESSION["sifre"] = $sifre;
		include "adminpanel.php";
	}else{
		echo "<script>alert('Login və ya şifrə düzgün daxil edilməyib!');</script>";
		include "index.php";
	}
}

?>