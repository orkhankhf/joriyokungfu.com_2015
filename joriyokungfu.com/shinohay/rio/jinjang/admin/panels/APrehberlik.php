<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rəhbərlik</title>
  <?php include "APhead.php"; ?>
</head>
<body>
	<div class="container-fluid adminpanelmain">
	<div class=" row panel panel-default">
	  <div class="panel-heading"><strong>Admin Panel</strong></div>
	  <div class="panel-body">
	    <?php include "panelsleftmenu.php"; ?>
	    <div class="col-sm-9">
				<!-- REHBERLIYE UZV ELAVE ET BOLMESI -->
					    <div class="panel panel-default">
					    	<div class="panel-heading">Rəhbərlik bölməsinə üzv artır</div>
					    	<div class="panel-body">
					      		<form action="../actions/rehberliye-uzv-artir.php" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="label-uzv-adi">Ad</label>
										<input type="text" minlength="2" maxlength="15" class="form-control" id="label-uzv-adi" name="ad" required>
									</div>
									<div class="form-group">
										<label for="label-uzv-soyadi">Soyad</label>
										<input type="text" minlength="2" maxlength="15" class="form-control" id="label-uzv-soyadi" name="soyad" required>
									</div>
									<div class="form-group">
										<label for="label-uzv-vezife">Vəzifə</label>
										<input type="text" maxlength="100" class="form-control" id="label-uzv-vezife" name="vezife">
									</div>
									<div class="form-group">
										<label for="label-bolme">Bölmə seçin</label>
										<select name="rehberlik_bolme" id="label-bolme" class="form-control">
											<option value="rehberlik" selected="rehberlik">Rəhbərlik</option>
											<option value="hakimler" >Hakimlər</option>
											<option value="regionlar">Regionlar</option>
										</select>
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
				<!-- REHBERLIYE UZV ELAVE ET BOLMESI -->

				<!-- REHBERLİKDEN UZV SIL BOLMESI -->
							    <div class="panel panel-default">
							    		<div class="panel-heading">Rəhbərlikdən üzv sil</div>
								    	<div class="panel-body">
									      	<form action="../actions/rehberlikden-uzv-sil.php" method="post">
												<div class="form-group">
													<label for="label-basliq">Üzvün ID nömrəsi</label>
													<input type="text" minlength="6" maxlength="6" class="form-control" id="label-basliq" name="id" required>
												</div>
												<span class="yetkili">DIQQƏT! BU BÖLMƏYƏ YALNIZ ACKF FEDERASİYASININ PREZİDENTİ DAVUD MAHMUDZADƏNİN DƏYİŞİKLİK ETMƏK HÜQUQU VAR!</span>
									  			<button type="submit" class="btn btn-default">Təsdiqlə</button>
											</form>
										</div>
								</div>
				<!-- REHBERLİKDEN UZV SIL BOLMESI -->
		</div>
	</div>
</div>
</body>
</html>