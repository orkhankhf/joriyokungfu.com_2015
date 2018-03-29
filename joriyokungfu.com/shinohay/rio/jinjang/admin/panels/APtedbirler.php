<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tədbirlər</title>
  <?php include "APhead.php"; ?>
</head>
<body>
	<div class="container-fluid adminpanelmain">
	<div class="row panel panel-default">
	  <div class="panel-heading"><strong>Admin Panel</strong></div>
	  <div class="panel-body">
	    <?php include "panelsleftmenu.php"; ?>
	    <div class="col-sm-9">
				<!-- TEDBİR ELAVE ET BOLMESİ -->
					    <div class="panel panel-default">
					    	<div class="panel-heading">Tədbir əlavə et</div>
					    	<div class="panel-body">
						      	<form action="../actions/tedbir-elave-et.php" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="label-yarisadi">Yarışın adı</label>
										<input type="text" minlength="5" maxlength="30" class="form-control" id="label-yarisadi" name="yarisinadi" required>
									</div>
									<div class="form-group">
										<label for="label-kecirilmetarixi">Başlanğıc tarixi</label>
										<input type="date" class="form-control" id="label-kecirilmetarixi" name="baslangic" required>
									</div>
									<div class="form-group">
										<label for="label-kecirilmetarixi">Bitmə tarixi</label>
										<input type="date" class="form-control" id="label-kecirilmetarixi" name="bitme" required>
									</div>
									<div class="form-group">
										<label for="label-kecirilmeyeri">Keçirilmə Yeri</label>
										<input type="text" minlength="5" maxlength="50" class="form-control" id="label-kecirilmeyeri" name="kecirilmeyeri" required>
									</div>
									<div class="form-group">
										<label for="label-istirakedenteskilatlar">İştirak edən təşkilatlar</label>
										<input type="text" minlength="5" maxlength="60" class="form-control" id="label-istirakedenteskilatlar" name="istirakedenteskilatlar" required>
									</div>
									<div class="form-group">
										<label for="label-idmancilar">İdmançı sayı</label>
										<input type="number" class="form-control" id="label-idmancilar" name="idmancilar" required>
									</div>
									<div class="form-group">
										<label for="label-mesqciler">Məşqçi sayı</label>
										<input type="number" class="form-control" id="label-mesqciler" name="mesqciler" required>
									</div>
									<div class="form-group">
										<label for="label-hakimler">Hakim sayı</label>
										<input type="number" class="form-control" id="label-hakimler" name="hakimler" required>
									</div>
									<div class="form-group">
										<label for="label-yarisikeciren">Yarışın keçirilməsinə məsul təşkilat</label>
										<input type="text" minlength="3" maxlength="50" class="form-control" id="label-yarisikeciren" name="yarisikeciren" required>
									</div>
						  			<button type="submit" class="btn btn-default">Təsdiqlə</button>
								</form>
							</div>
						</div>
				<!-- TEDBİR ELAVE ET BOLMESİ -->

				<!-- TEDBİR SIL BOLMESI -->
							    <div class="panel panel-default">
							    		<div class="panel-heading">Tədbir sil</div>
								    	<div class="panel-body">
									      	<form action="../actions/tedbir-sil.php" method="post">
												<div class="form-group">
													<label for="label-basliq">Tədbirin ID nömrəsi</label>
													<input type="text" minlength="6" maxlength="6" class="form-control" id="label-basliq" name="id" required>
												</div>
												<button type="submit" class="btn btn-default">Təsdiqlə</button>
											</form>
										</div>
								</div>
				<!-- TEDBİR SIL BOLMESI -->
		</div>
	</div>
</div>
</body>
</html>