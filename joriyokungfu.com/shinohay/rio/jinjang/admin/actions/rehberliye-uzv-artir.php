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
	$vezife=$_POST['vezife'];
	$bolme = $_POST['rehberlik_bolme'];

if($conn && $image_size <= 1000000 && $image_size != 0){
	$moveToSliderFolder=move_uploaded_file($image_tmp, '../../../../../img/rehberlik/'.$rand_img_name);
	$img_src = "img/rehberlik/".$rand_img_name;
	$insert = "INSERT INTO rehberlik (id,ad,soyad,vezife,tarix,tmp,bolme) VALUES ('$id','$ad','$soyad','$vezife','$tarix','$img_src','$bolme')";
	$result = mysqli_query($conn,$insert);
	if($insert){
		  header("Location: ../adminpanel.php");
	}else{
		echo "Rəhbərlik bölməsinə üzv əlavə olunmadı!";
	}
}else{
	echo "<script>alert('Şəkil 1mb dan artıq ola bilməz!');location.href='../adminpanel.php';</script>";
}
?>