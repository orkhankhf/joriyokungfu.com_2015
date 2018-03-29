<?php 
include "../../../../../DB/db.php";
if($conn){
	$id = $_POST['id'];
	$select = "SELECT * FROM slider WHERE id='$id'";
	$resultsel = mysqli_query($conn,$select);
	$fetch = mysqli_fetch_array($resultsel);
	$dir="../../../../../".$fetch['tmp'];
	unlink($dir);
	$delete = "DELETE FROM slider WHERE id='$id'";
	$result = mysqli_query($conn,$delete);
	if($delete){
		  header("Location: ../adminpanel.php");
	}
}else{
	echo "Bazaya qoşulmadı!";
}
?>