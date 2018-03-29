<?php 
include "../../../../../DB/db.php";
if($conn){
	$id = $_POST['id'];
	$select = "SELECT * FROM yenilikler WHERE id='$id'";
	$resultsel = mysqli_query($conn,$select);
	$fetch = mysqli_fetch_array($resultsel);
	if(!empty($fetch['tmp'])){
		$dir="../../../../../".$fetch['tmp'];
		unlink($dir);
	}
	$delete = "DELETE FROM yenilikler WHERE id='$id'";
	$result = mysqli_query($conn,$delete);
	if($delete){
		  header("Location: ../adminpanel.php");
	}
}else{
	echo "Bazaya qoşulmadı!";
}
?>