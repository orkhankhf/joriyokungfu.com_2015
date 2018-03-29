<!DOCTYPE html>
<html lang="en">
<head>
  <title>Slider</title>
  <?php include "APhead.php"; ?>
</head>
<body>
	<div class="container-fluid adminpanelmain">
	<div class="row panel panel-default">
	  <div class="panel-heading"><strong>Admin Panel</strong></div>
	  <div class="panel-body">
	    <?php include "panelsleftmenu.php"; ?>
	    <div class="col-sm-9">
				<!-- SLIDERE SEKIL ELAVE ET BOLMESI-->
					    <div class="panel panel-default">
					    	<div class="panel-heading">Sliderə şəkil əlavə et</div>
					    	<div class="panel-body">
					      	<form action="../actions/slidere-foto-elave-et.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
								    <label for="label-foto">Şəkil</label>
								    <input type="file" id="label-foto" name="sekil" required>
								</div>
								<div class="form-group">
									<label for="label-tarix">Şəklin əlavə olunma tarixi</label>
									<input type="date" class="form-control" id="label-tarix" name="tarix" required>
								</div>
					  			<button type="submit" class="btn btn-default">Təsdiqlə</button>
							 </form>
							 </div>
						</div>
				<!-- SLIDERE SEKIL ELAVE ET BOLMESI-->

				<!-- SLIDERDEN SEKIL SIL BOLMESI -->
							    <div class="panel panel-default">
							    		<div class="panel-heading">Sliderdən şəkil sil</div>
								    	<div class="panel-body">
									      	<form action="../actions/sliderden-sekil-sil.php" method="post">
												<div class="form-group">
													<label for="label-basliq">Şəklin ID nömrəsi</label>
													<input type="text" minlength="6" maxlength="6" class="form-control" id="label-basliq" name="id" required>
												</div>
									  			<button type="submit" class="btn btn-default">Təsdiqlə</button>
											</form>
										</div>
								</div>
				<!-- SLIDERDEN SEKIL SIL BOLMESI -->
		</div>
	</div>
</div>
</body>
</html>