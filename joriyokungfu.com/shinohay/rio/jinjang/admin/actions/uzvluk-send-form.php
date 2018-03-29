<?php
include "../../../../../DB/db.php";
	$id = rand(111111,999999);
	$ad = $_POST["ad"];
	$soyadataadi = $_POST["soyadataadi"];
	$dogumyeri = $_POST["dogumyeri"];
	$dogumtarixi = $_POST["dogumtarixi"];
	$tehsil = $_POST["tehsil"];
	$isyeri = $_POST["isyeri"];
	$evunvani = $_POST["evunvani"];
	$evtelefonu = $_POST["evtelefonu"];
	$mobil = $_POST["mobil"];
	$olduguidman = $_POST["olduguidman"];
	$mesgulolacagi = $_POST["mesgulolacagi"];
	$tamsaglam = $_POST["saglamligi"];
	$ankettarixi = $_POST["ankettarixi"];
	$rand_img_name = "anket".$id.".jpg";
	$image=$_FILES['sekil']['name'];
	$image_tmp=$_FILES['sekil']['tmp_name'];
	$image_size=$_FILES['sekil']['size'];
if($conn && $image_size <= 1000000 && $image_size != 0){
	$moveToAnketFolder=move_uploaded_file($image_tmp,'../../../../../img/anket/'.$rand_img_name);
	$img_src = "img/anket/".$rand_img_name;
	$insert = "INSERT INTO uzvluk (id,ad,soyadataadi,dogulduguyer,doguldugutarix,tehsil,isyeri,evunvani,evnomresi,mobil,mesguloldugu,mesgulolacagi,saglamligi,fototmp,qeydiyyattarixi) VALUES ('$id','$ad','$soyadataadi','$dogumyeri','$dogumtarixi','$tehsil','$isyeri','$evunvani','$evtelefonu','$mobil','$olduguidman','$mesgulolacagi','$tamsaglam','$img_src','$ankettarixi')";
	$result = mysqli_query($conn,$insert);
	if($insert){
		  header("Location: ../../../../../index.php");
	}else{
		echo "Anket əlavə olunmadı!";
	}
}else{
	echo "<script>alert('Şəkil 1mb dan artıq ola bilməz!');location.href='../../../../../uzvluk.php';</script>";
}
?>