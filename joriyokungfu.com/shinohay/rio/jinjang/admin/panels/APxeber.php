<!DOCTYPE html>
<html lang="en">
<head>
  <title>Xəbər</title>
  <?php include "APhead.php"; ?>
</head>
<body>
	<div class="container-fluid adminpanelmain">
	<div class="row panel panel-default">
	  <div class="panel-heading"><strong>Admin Panel</strong></div>
	  <div class="panel-body">
	    <?php include "panelsleftmenu.php"; ?>
	    <div class="col-sm-9">
	    		<!-- XEBER ELAVE ET BOLMESI -->
							    <div class="panel panel-default">
							    	<div class="panel-heading">Xəbər əlavə et</div>
							    	<div class="panel-body">
							      	<form action="../actions/xeber-elave-et.php" method="post" enctype="multipart/form-data">
										<div class="form-group">
											<label for="label-basliq">Xəbərin başlığı</label>
											<input minlength="20" maxlength="200" class="form-control" id="label-basliq" name="basliq" required></textarea>
										</div>
										<div class="form-group">
										    <label for="label-movzu">Xəbərin mövzusu</label>
										    <textarea id="label-movzu" class="ckeditor" name="text" required></textarea>
										</div>
										<div class="form-group">
										    <label for="label-foto">Foto</label>
										    <input type="file" id="label-foto" name="foto">
										</div>
										<div class="form-group">
											<label for="label-tarix">Xəbərin əlavə olunma tarixi</label>
											<input type="date" class="form-control" id="label-tarix" name="tarix" required>
										</div>
							  			<button type="submit" class="btn btn-default">Təsdiqlə</button>
									 </form>
									 </div>
								</div>
				<!-- XEBER ELAVE ET BOLMESI -->

				<!-- XEBER SIL BOLMESI -->
							    <div class="panel panel-default">
							    		<div class="panel-heading">Xəbər sil</div>
								    	<div class="panel-body">
									      	<form action="../actions/xeber-sil.php" method="post">
												<div class="form-group">
													<label for="label-basliq">Xəbərin ID nömrəsi</label>
													<input type="text" minlength="6" maxlength="6" class="form-control" id="label-basliq" name="id" required>
												</div>
									  			<button type="submit" class="btn btn-default">Təsdiqlə</button>
											</form>
										</div>
								</div>
				<!-- XEBER SIL BOLMESI -->
		</div>
	</div>
</div>
</body>
</html>