<!DOCTYPE html>
<html>
<head>
	<title>Azərbaycan Coriyo Kung Fu Federasiyasının Tarixi</title>
	<?php include "head.php"; ?>
</head>
<body>
<?php
include "includes/header.php";
include "includes/navbar.php";
?>
<div class="container">
	<div class="row">
		<?php 
		include "includes/pages_left.php";
		?>
		<!-- MIDDLE SIDE START -->
  <div class="col-lg-7 col-md-7 col-sm-10 col-xs-12" style="padding:0px;">
  		<div class="xeber-tek-main col-xs-12">
		<?php
			include "DB/db.php";
  			if($conn){
  				$id = substr($_SERVER['REQUEST_URI'],-6);
  				$select = "SELECT * FROM yenilikler WHERE id='$id'";
  				$res = mysqli_query($conn,$select);
  				while($row = mysqli_fetch_assoc($res)){
  					$if_tmp="";
  					$if_img="";
  					if($row['tmp']!=""){
  						$if_tmp="<strong> - FOTO</strong>";
  						$if_img="<img align='left' src='".$row['tmp']."' class='img-thumbnail' width='406' height='393'>";
  					}else{
  						$if_tmp="";
  					}
  					echo "
  					<div class=xeber-tek-up>
  						<span><strong>id:&nbsp;</strong>".$row['id']."</span>
  						<span>əlavə olunma tarixi:&nbsp;&nbsp;<strong>".$row['tarix']."</strong></span>
  						<h3>".$row['basliq'].$if_tmp."</h3>
  					</div>
  					<div class='xeber-tek-text'>
  						".$if_img."
  						".$row['text']."
  					</div>
  					";
  				}
  			}
  		?>
		</div>
  </div>
<!-- MIDDLE SIDE FINISH -->
		<?php
		include "includes/rightside.php";
		?>
	</div>
</div>
<?php include "includes/footer.php"; ?>
</body>
</html>