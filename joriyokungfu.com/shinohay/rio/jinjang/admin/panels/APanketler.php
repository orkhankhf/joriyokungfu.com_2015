<!DOCTYPE html>
<html lang="en">
<head>
  <title>Anketlər</title>
  <?php include "APhead.php"; ?>
</head>
<body>
	<div class="container-fluid adminpanelmain">
	<div class="row panel panel-default">
	  <div class="panel-heading"><strong>Admin Panel</strong></div>
	  <div class="panel-body">
	    <?php include "panelsleftmenu.php"; ?>
	    <div class="col-sm-9">
				<!-- ANKETLER BOLMESI -->
							    <div class="panel panel-default">
							    		<div class="panel-heading">Anketlər</div>
								    	<div class="panel-body">
									      	<div id="anketler" class="anketler-main">
											<div>
														<?php
														include "../../../../../DB/db.php";
														$uzvler=[];
														$res_no_pagination = mysqli_query($conn,"SELECT * FROM uzvluk");
														while($row=mysqli_fetch_array($res_no_pagination)){
															array_push($uzvler,$row['id']);
														}
															$select = "SELECT * FROM uzvluk order by qeydiyyattarixi desc";
															$result = mysqli_query($conn,$select);
															echo "<div class='anketler-table-scroll'>";
															echo "<table class='table table-responsive table-striped table-bordered table-hover table-condensed'>";
															echo "<th>FOTO</th>";
															echo "<th>ID</th>";
															echo "<th>AD</th>";
															echo "<th>SOYAD/ATA ADI</th>";
															echo "<th>DOĞULDUĞU YER</th>";
															echo "<th>TƏVƏLLÜD</th>";
															echo "<th>TƏHSİL</th>";
															echo "<th>İŞ YERİ</th>";
															echo "<th>EV ÜNVANI</th>";
															echo "<th>EV NÖMRƏSİ</th>";
															echo "<th>MOBİL</th>";
															echo "<th>MƏŞĞUL OLDUĞU İDMAN NÖVÜ</th>";
															echo "<th>MƏŞĞUL OLACAĞI İDMAN NÖVÜ</th>";
															echo "<th>SAĞLAMLIĞI</th>";
															echo "<th>QEYDİYYAT TARİXİ</th>";
															echo "<th>SİL</th>";
															while($row=mysqli_fetch_assoc($result)){
																	echo "<tr>";
																		echo "<td>"."<img width='100' height='130' src='../../../../../".$row["fototmp"]."'>"."</td>";
																		echo "<td>".$row["id"]."</td>";
																		echo "<td>".$row["ad"]."</td>";
																		echo "<td>".$row["soyadataadi"]."</td>";
																		echo "<td>".$row["dogulduguyer"]."</td>";
																		echo "<td>".$row["doguldugutarix"]."</td>";
																		echo "<td>".$row["tehsil"]."</td>";
																		echo "<td>".$row["isyeri"]."</td>";
																		echo "<td>".$row["evunvani"]."</td>";
																		echo "<td>".$row["evnomresi"]."</td>";
																		echo "<td>".$row["mobil"]."</td>";
																		echo "<td>".$row["mesguloldugu"]."</td>";
																		echo "<td>".$row["mesgulolacagi"]."</td>";
																		echo "<td>".$row["saglamligi"]."</td>";
																		echo "<td>".$row["qeydiyyattarixi"]."</td>";
																		echo "<td><form action='../actions/delete_anket_db.php' method='post'>";
																		echo "<input name='id' value='".$row["id"]."' class='delete_form_input'>";
																		echo "<input type='submit' value='SİL' class='btn btn-danger'>";
																		echo "</form></td>";
																	echo "</tr>";
															}
															echo "</table>";
															echo "</div>";
														?>
											</div>
											</div>
										</div>
								</div>
				<!-- ANKETLER BOLMESI -->
		</div>
	</div>
</div>
</body>
</html>