<?php 
include "../../../../../DB/db.php";
	$id = rand(111111,999999);
	$rand_img_name = "xeber".$id.".jpg";
	$image_tmp=$_FILES['foto']['tmp_name'];
	$basliq = $_POST['basliq'];
	$text = $_POST['text'];
	$tarix = $_POST['tarix'];
	$image_size=$_FILES['foto']['size'];
	if($image_tmp!=""){
if($conn && $image_size <= 1000000){
	$moveToSliderFolder=move_uploaded_file($image_tmp, '../../../../../img/xeber/'.$rand_img_name);
	$img_src = "img/xeber/".$rand_img_name;
	$insert = "INSERT INTO yenilikler (id,tmp,basliq,text,tarix) VALUES ('$id','$img_src','$basliq','$text','$tarix')";
	$result = mysqli_query($conn,$insert);
	if($insert){
		  header("Location: ../adminpanel.php");
	}else{
		echo "Xəbər əlavə olunmadı!";
	}
}else{
	echo "<script>alert('Şəkil 1mb dan artıq ola bilməz!');location.href='../adminpanel.php';</script>";
}}else{
	if($conn && $image_size <= 1000000){
	$moveToSliderFolder=move_uploaded_file($image_tmp, '../../../../../img/xeber/'.$rand_img_name);
	$img_src = "";
	$insert = "INSERT INTO yenilikler (id,tmp,basliq,text,tarix) VALUES ('$id','$img_src','$basliq','$text','$tarix')";
	$result = mysqli_query($conn,$insert);
	if($insert){
		  header("Location: ../adminpanel.php");
	}else{
		echo "Xəbər əlavə olunmadı!";
	}
}else{
	echo "<script>alert('Şəkil 1mb dan artıq ola bilməz!');location.href='../adminpanel.php';</script>";
}
}
?>