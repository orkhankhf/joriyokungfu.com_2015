<!DOCTYPE html>
<html>
<head>
	<title>Rəhbərlik</title>
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
  		<div class="rehberlik-main">
    	<h2 class="sehife_basliqlari">Azərbaycan Corİyo Kunq Fu Federasİyasının RəhbərlİYİ </h2>
        	<?php
				include "DB/db.php";
				$select = "SELECT * FROM rehberlik WHERE bolme='rehberlik' order by tarix desc";
				$result=mysqli_query($conn,$select);
				while($row =mysqli_fetch_assoc($result)){
				      echo "<div class='col-sm-4 col-xs-6 rehberlik-uzv'>";
				      echo "<div class='yigma_komanda-imgdiv'><img src='".$row['tmp']."' class='img-responsive box-photos col-lg-12'></div>";
				      echo "<span>".$row['ad']." ".$row['soyad']."</span>";
				      echo "<span>".$row['vezife']."</span>";
				      echo "</div>";
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