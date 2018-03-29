<!DOCTYPE html>
<html lang="en">
<head>
  <title>Foto Galereya</title>
  <?php include "APhead.php"; ?>
</head>
<body>
	<div class="container-fluid adminpanelmain">
	<div class="row panel panel-default">
	  <div class="panel-heading"><strong>Admin Panel</strong></div>
	  <div class="panel-body">
	    <?php include "panelsleftmenu.php"; ?>
	    <div class="col-sm-9">
				<!-- GALERIYE SEKIL ELAVE ET BOLMESI-->
					    <div class="panel panel-default">
					    	<div class="panel-heading">Galeriyaya şəkil əlavə et</div>
					    	<div class="panel-body">
					      		<form action="../actions/galerye-foto-elave-et.php" method="post" enctype="multipart/form-data">
									<div class="form-group">
									    <label for="label-foto">Şəkil</label>
									    <input type="file" id="label-foto" name="sekil" required>
									</div>
									<div class="form-group">
									    <label for="label-aciqlama">Açıqlama artır</label>
									    <input type="text" id="label-aciqlama" minlength="20" maxlength="200" placeholder="max. 200 hərf" class="form-control" name="sekilinfo" required>
									</div>
									<div class="form-group">
										<label for="label-tarix">Şəklin əlavə olunma tarixi</label>
										<input type="date" class="form-control" id="label-tarix" name="tarix" required>
									</div>
									<div class="form-group">
										<label for="label-bolme">Bölmə seçin</label>
										<select name="select" id="label-bolme" class="form-control">
											<option value="dunya">Dünya Çempionatı</option>
											<option value="rayonlararasi">Rayonlar arası turnir</option>
											<option value="respublika" selected="respublika">Respublika Çempionatı</option>
											<option value="nabran">Nabran İdman düşərgəsi</option>
											<option value="davudmahmudzade">Davud Mahmudzadə</option>
										</select>
									</div>
						  			<button type="submit" class="btn btn-default">Təsdiqlə</button>
								 </form>
							</div>
						</div>
				<!-- GALERIYE SEKIL ELAVE ET BOLMESI-->

				<!-- GALERIYADAN SEKIL SIL BOLMESI -->
							    <div class="panel panel-default">
							    		<div class="panel-heading">Galeriyadan şəkil sil</div>
								    	<div class="panel-body">
									      	<form action="../actions/galeriyadan-sekil-sil.php" method="post">
												<div class="form-group">
													<label for="label-basliq">Şəklin ID nömrəsi</label>
													<input type="text" minlength="6" maxlength="6" class="form-control" id="label-basliq" name="id" required>
												</div>
									  			<button type="submit" class="btn btn-default">Təsdiqlə</button>
											</form>
										</div>
								</div>
				<!-- GALERIYADAN SEKIL SIL BOLMESI -->
		</div>
	</div>
</div>
</body>
</html>