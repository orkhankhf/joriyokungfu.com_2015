<!DOCTYPE html>
<html>
<head>
	<title>Üzvlük</title>
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
  		<div class="uzvluk-main col-lg-12 col-lg-push-0 col-md-12 col-md-push-0 col-sm-8 col-sm-push-2 col-xs-8 col-xs-push-2">
			<h4 class="sehife_basliqlari">ÜZVLÜK ANKETİ</h4>
					<form action="shinohay/rio/jinjang/admin/actions/uzvluk-send-form.php" method="post" enctype="multipart/form-data">
						<div class="form-group col-lg-6 col-md-6">
							<label for="ad">Ad</label>
							<input type="text" class="form-control" minlength="2" maxlength="15" id="ad" name="ad" required>
						</div>

						<div class="form-group col-lg-6 col-md-6">
						    <label for="soyadataadi">Soyad / Ata adı</label>
						    <input type="text" class="form-control" minlength="6" maxlength="30" id="soyadataadi" name="soyadataadi" required>
						</div>

						<div class="form-group col-lg-6 col-md-6">
						    <label for="dogumyeri">Doğulduğu yer</label>
						    <input type="text" class="form-control" minlength="6" maxlength="30" id="dogumyeri" name="dogumyeri" required>
						</div>

						<div class="form-group col-lg-6 col-md-6">
						    <label for="dogumtarixi">Təvəllüd</label>
						    <input type="date" class="form-control" id="dogumtarixi" name="dogumtarixi" required>
						</div>

						<div class="form-group col-lg-6 col-md-6">
						    <label for="tehsil">Təhsil</label>
						    <input type="text" class="form-control" minlength="3" maxlength="100" id="tehsil" name="tehsil" required>
						</div>

						<div class="form-group col-lg-6 col-md-6">
						    <label for="isyeri">İş yeri</label>
						    <input type="text" class="form-control" minlength="3" maxlength="100" id="isyeri" name="isyeri" required>
						</div>

						<div class="form-group col-lg-6 col-md-6">
						    <label for="evunvani">Ev ünvanı</label>
						    <input type="text" class="form-control" minlength="5" maxlength="40" id="evunvani" name="evunvani" required>
						</div>

						<div class="form-group col-lg-6 col-md-6">
						    <label for="evtelefonu">Ev nömrəsi</label>
						    <input type="number" class="form-control" minlength="7" maxlength="10" id="evtelefonu" name="evtelefonu" required>
						</div>

						<div class="form-group col-lg-6 col-md-6">
						    <label for="mobil">Mobil</label>
						    <input type="number" class="form-control" minlength="9" maxlength="14" id="mobil" name="mobil" required>
						</div>

						<div class="form-group col-lg-6 col-md-6">
						    <label for="olduguidman">Məşğul olduğu idman növü</label>
						    <input type="text" class="form-control" minlength="3" maxlength="50" id="olduguidman" name="olduguidman" required>
						</div>

						<div class="form-group col-lg-6 col-md-6">
						    <label>Məşğul olacağı idman növü</label>
							<select name="mesgulolacagi" class="form-control">
								<option value="kungfu">Kung Fu</option>
								<option value="taichi">Tai Chi</option>
							</select>
						</div>

						<div class="form-group col-lg-6 col-md-6">
							<label>Sağlamlığı</label>
							<select name="saglamligi" class="form-control">
								<option value="tamsaglam">Tam Sağlam</option>
							</select>
						</div>

						<div class="form-group col-lg-6 col-md-6">
						    <label for="sekil">Şəkil</label>
						    <input type="file" class="form-control" id="sekil" name="sekil" required>
						</div>

						<div class="form-group col-lg-6 col-md-6">
						    <label for="ankettarixi">Anketin doldurulma tarixi</label>
						    <input type="date" class="form-control" id="ankettarixi" name="ankettarixi" required>
						</div>

			  			<div class="form-group">
			  				<button type="submit" class="btn btn-default">Təsdiqlə</button>
			  			</div>

			  			<div class="qeyd">
							<p>QEYD:</p>
							<p>Təlim zamanı baş verə biləcək hər hansı xoşəgəlməz hadisəyə görə Azərbaycan Coriyo Kung Fu Federasiyası məsuliyyət daşımır.</p>
			  			</div>
					 </form>
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