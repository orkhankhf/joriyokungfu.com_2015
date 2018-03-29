<!DOCTYPE html>
<html lang="en">
<head>
  <title>Video Galereya</title>
  <?php include "APhead.php"; ?>
</head>
<body>
	<div class="container-fluid adminpanelmain">
	<div class="row panel panel-default">
	  <div class="panel-heading"><strong>Admin Panel</strong></div>
	  <div class="panel-body">
	    <?php include "panelsleftmenu.php"; ?>
	    <div class="col-sm-9">
				<!-- GALERIYE VIDEO ELAVE ET BOLMESI-->
					    <div class="panel panel-default">
					    	<div class="panel-heading">Galeriyaya video əlavə et</div>
					    	<div class="panel-body">
					      		<form action="../actions/videogalerye-video-elave-et.php" method="post" enctype="multipart/form-data">
									<div class="form-group">
									    <label for="label-video">Youtube linki</label>
									    <input type="text" id="label-video" class="form-control" maxlength="70" name="video" class="col-lg-12" value="http://www.youtube.com/embed/" required>
									</div>
									<div class="form-group">
									    <label for="label-aciqlama">Açıqlama artır</label>
									    <input type="text" id="label-aciqlama" minlength="20" maxlength="200" class="form-control" name="videoinfo" required>
									</div>
									<div class="form-group">
										<label for="label-tarix">Videonun əlavə olunma tarixi</label>
										<input type="date" class="form-control" id="label-tarix"  name="tarix" required>
									</div>
									<div class="form-group">
										<label for="label-bolme">Bölmə seçin</label>
										<select name="select" id="label-bolme" class="form-control">
											<option value="dunya">Dünya Çempionatı</option>
											<option value="respublika" selected="respublika">Respublika Çempionatı</option>
										</select>
									</div>
						  			<button type="submit" class="btn btn-default">Təsdiqlə</button>
								</form>
							</div>
						</div>
				<!-- GALERIYE VIDEO ELAVE ET BOLMESI-->

				<!-- GALERIYADAN VIDEO SIL BOLMESI -->
							    <div class="panel panel-default">
							    		<div class="panel-heading">Galeriyadan video sil</div>
								    	<div class="panel-body">
									      	<form action="../actions/videogaleriyadan-video-sil.php" method="post">
												<div class="form-group">
													<label for="label-basliq">Videonun ID nömrəsi</label>
													<input type="text" minlength="6" maxlength="6" class="form-control" id="label-basliq" name="id" required>
												</div>
									  			<button type="submit" class="btn btn-default">Təsdiqlə</button>
											 </form>
										</div>
								</div>
				<!-- GALERIYADAN VIDEO SIL BOLMESI -->
		</div>
	</div>
</div>
</body>
</html>