<!DOCTYPE html>
<html lang="en">
<head>
  <title>Yığma Komanda</title>
  <?php include "APhead.php"; ?>
</head>
<body>
	<div class="container-fluid adminpanelmain">
	<div class="row panel panel-default">
	  <div class="panel-heading"><strong>Admin Panel</strong></div>
	  <div class="panel-body">
	    <?php include "panelsleftmenu.php"; ?>
	    <div class="col-sm-9">
				<!-- YIGMA KOMANDAYA UZV ELAVE ET BOLMESI -->
					    <div class="panel panel-default">
					    	<div class="panel-heading">Yığma komandaya üzv artır</div>
					    	<div class="panel-body">
					      		<form action="../actions/yigma-komandaya-uzv-artir.php" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="label-uzv-adi">Ad</label>
										<input type="text" minlength="2" maxlength="15" class="form-control" id="label-uzv-adi" name="ad" required>
									</div>
									<div class="form-group">
										<label for="label-uzv-soyadi">Soyad</label>
										<input type="text" minlength="2" maxlength="15" class="form-control" id="label-uzv-soyadi" name="soyad" required>
									</div>
									<div class="form-group">
										<label for="label-uzv-nailiyyet">İdmançının nailiyyətləri</label>
										<input type="text" maxlength="300" class="form-control" id="label-uzv-nailiyyet" name="nailiyyet">
									</div>
									<div class="form-group">
									    <label for="label-uzv-foto">Şəkil</label>
									    <input type="file" id="label-uzv-foto" name="sekil" required>
									</div>
									<div class="form-group">
										<label for="label-tarix">Əlavə olunma tarixi</label>
										<input type="date" class="form-control" id="label-tarix" name="tarix" required>
									</div>
						  			<span class="yetkili">DIQQƏT! BU BÖLMƏYƏ YALNIZ ACKF FEDERASİYASININ PREZİDENTİ DAVUD MAHMUDZADƏNİN DƏYİŞİKLİK ETMƏK HÜQUQU VAR!</span>
								 	<button type="submit" class="btn btn-default">Təsdiqlə</button>
								 </form>
							</div>
						</div>
				<!-- YIGMA KOMANDAYA UZV ELAVE ET BOLMESI -->

				<!-- YIGMA KOMANDADAN UZV SIL BOLMESI -->
							    <div class="panel panel-default">
							    		<div class="panel-heading">Yığma Komandadan üzv sil</div>
								    	<div class="panel-body">
									      	<form action="../actions/yigma-komandadan-uzv-sil.php" method="post">
												<div class="form-group">
													<label for="label-basliq">Üzvün ID nömrəsi</label>
													<input type="text" minlength="6" maxlength="6" class="form-control" id="label-basliq" name="id" required>
												</div>
												<span class="yetkili">DIQQƏT! BU BÖLMƏYƏ YALNIZ ACKF FEDERASİYASININ PREZİDENTİ DAVUD MAHMUDZADƏNİN DƏYİŞİKLİK ETMƏK HÜQUQU VAR!</span>
									  			<button type="submit" class="btn btn-default">Təsdiqlə</button>
											</form>
										</div>
								</div>
				<!-- YIGMA KOMANDADAN UZV SIL BOLMESI -->
		</div>
	</div>
</div>
</body>
</html>