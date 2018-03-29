<?php 
include "../../../../../DB/db.php";
if($conn){
	$id = $_POST['id'];
	$delete = "DELETE FROM tedbirler WHERE id='$id'";
	$result = mysqli_query($conn,$delete);
	if($delete){
		  header("Location: ../adminpanel.php");
	}
}else{
	echo "Bazaya qoşulmadı!";
}
?>