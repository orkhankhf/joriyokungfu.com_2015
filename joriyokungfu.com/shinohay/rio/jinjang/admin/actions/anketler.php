<div id="anketler" class="tab-pane fade admin-panel anketler-main">
<div>
		<h3 class="my-red-headers-h3">Anketlər</h3>
		</br>
		</br>
		<div class="row col-lg-10 col-md-10 col-sm-10">
			<?php
			include "../../../../DB/db.php";
			$uzvler=[];
			$res_no_pagination = mysqli_query($conn,"SELECT * FROM uzvluk");
			while($row=mysqli_fetch_array($res_no_pagination)){
				array_push($uzvler,$row['id']);
			}
				$select = "SELECT * FROM uzvluk order by qeydiyyattarixi desc";
				$result = mysqli_query($conn,$select);
				echo "<table>";
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
							echo "<td>"."<img width='100' height='130' src='../../../../".$row["fototmp"]."'>"."</td>";
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
							echo "<td><form action='actions/delete_anket_db.php' method='post'>";
							echo "<input name='id' value='".$row["id"]."' class='delete_form_input'>";
							echo "<input type='submit' value='SİL' class='btn btn-danger'>";
							echo "</form></td>";
						echo "</tr>";
				}
				echo "</table>";
			?>	
		</div>
</div>
</div>