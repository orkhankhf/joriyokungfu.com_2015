<?php
include "../../../../../DB/db.php";
	$id = rand(111111,999999);
	$youtube_link=$_POST['video'];
	$tarix=$_POST['tarix'];
	$text=$_POST['videoinfo'];
	$bolme=$_POST['select'];
if($conn){
	$insert = "INSERT INTO videogalery (id,tmp,tarix,videoinfo,bolme) VALUES ('$id','$youtube_link','$tarix','$text','$bolme')";
	$result = mysqli_query($conn,$insert);
	if($insert){
		  header("Location: ../adminpanel.php");
	}else{
		echo "Video əlavə olunmadı!";
	}
}else{
	echo "<script>alert('Bazaya bağlanmadı!');location.href='../adminpanel.php';</script>";
}
?>