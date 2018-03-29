<?php 
include "../../../../../DB/db.php";
	$id = rand(111111,999999);
	$yarisinadi = $_POST['yarisinadi'];
	$baslangic = $_POST['baslangic'];
	$bitme = $_POST['bitme'];
	$kecirilmeyeri = $_POST['kecirilmeyeri'];
	$istirakedenteskilatlar = $_POST['istirakedenteskilatlar'];
	$idmancilar = $_POST['idmancilar'];
	$mesqciler = $_POST['mesqciler'];
	$hakimler = $_POST['hakimler'];
	$yarisikeciren = $_POST['yarisikeciren'];

	if($conn){
	$insert = "INSERT INTO tedbirler (id,yarisinadi,baslangic,bitme,kecirilmeyeri,istirakedenteskilatlar,idmancilar,mesqciler,hakimler,yarisikeciren) VALUES ('$id','$yarisinadi','$baslangic','$bitme','$kecirilmeyeri','$istirakedenteskilatlar','$idmancilar','$mesqciler','$hakimler','$yarisikeciren')";
	$result = mysqli_query($conn,$insert);
	if($insert){
		  header("Location: ../adminpanel.php");
	}else{
		echo "Tədbir əlavə olunmadı!";
	}
}else{
	echo "<script>alert('Bazaya qoşulmadı!');location.href='../adminpanel.php';</script>";
}
?>