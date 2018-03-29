<?php
include "../../../../../DB/db.php";
	$id = rand(111111,999999);
	$rand_img_name = "IMG".$id.".jpg";
	$image=$_FILES['sekil']['name'];
	$image_tmp=$_FILES['sekil']['tmp_name'];
	$image_size=$_FILES['sekil']['size'];
	$type=$_FILES['sekil']['type'];
	$tarix=$_POST['tarix'];
	$ad=$_POST['ad'];
	$soyad=$_POST['soyad'];
	$nailiyyet=$_POST['nailiyyet'];

if($conn && $image_size <= 1000000 && $image_size != 0){
	$moveToSliderFolder=move_uploaded_file($image_tmp, '../../../../../img/yigma-komanda/'.$rand_img_name);
	$img_src = "img/yigma-komanda/".$rand_img_name;
	$insert = "INSERT INTO yigmakomanda (id,ad,soyad,nailiyyet,hecmi,tarix,tmp) VALUES ('$id','$ad','$soyad','$nailiyyet','$image_size','$tarix','$img_src')";
	$result = mysqli_query($conn,$insert);
	if($insert){
		  header("Location: ../adminpanel.php");
	}else{
		echo "Komandaya üzv əlavə olunmadı!";
	}
}else{
	echo "<script>alert('Şəkil 1mb dan artıq ola bilməz!');location.href='../adminpanel.php';</script>";
}
?>