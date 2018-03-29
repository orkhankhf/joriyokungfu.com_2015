<?php
include "../../../../../DB/db.php";
	$id = rand(111111,999999);
	$rand_img_name = "IMG".$id.".jpg";
	$image=$_FILES['sekil']['name'];
	$image_tmp=$_FILES['sekil']['tmp_name'];
	$image_size=$_FILES['sekil']['size'];
	$type=$_FILES['sekil']['type'];
	$tarix=$_POST['tarix'];
	$text=$_POST['sekilinfo'];
	$bolme=$_POST['select'];
if($conn && $image_size <= 1000000 && $image_size != 0){
	$moveToSliderFolder=move_uploaded_file($image_tmp, '../../../../../img/galery/'.$rand_img_name);
	$img_src = "img/galery/".$rand_img_name;
	$insert = "INSERT INTO galery (id,tmp,tarix,sekilinfo,bolme) VALUES ('$id','$img_src','$tarix','$text','$bolme')";
	$result = mysqli_query($conn,$insert);
	if($insert){
		  header("Location: ../adminpanel.php");
	}else{
		echo "Şəkil əlavə olunmadı!";
	}
}else{
	echo "<script>alert('Şəkil 1mb dan artıq ola bilməz!');location.href='../adminpanel.php';</script>";
}
?>