<!DOCTYPE html>
<html>
<head>
	<title>Tədbirlər</title>
	<?php include "head.php"; ?>
</head>
<body>
<?php
include "includes/header.php";
include "includes/navbar.php";
?>
<div class="container">
	<div class="row">
		<!-- MIDDLE SIDE START -->
  <div class="col-xs-12" style="padding:0px;">
  		<div class="tedbirler-main">
    	<h2 class="sehife_basliqlari">Azərbaycan Corİyo Kunq Fu Federasİyasının yarışlarının təqvİm planı</h2>
		<table class="table table-responsive table-striped table-bordered table-hover table-condensed">
              <tr>
                <th rowspan="2">S/N</th>
                <th rowspan="2">Yarışın adı</th>
                <th rowspan="2">Keçirilmə tarixi</th>
                <th rowspan="2">Keçirilmə yeri</th>
                <th rowspan="2">İştirak edən təşkilatlar</th>
                <th colspan="4">İştirakçıların sayı</th>
                <th rowspan="2">Yarışın keçirilməsinə məsul təşkilat</th>
              </tr>
              <tr>
                <th>İdmançı</th>
                <th>Məşqçi</th>
                <th>Hakim</th>
                <th>Cəm</th>
              </tr>

			<?php
	    		include "DB/db.php";
	    		if($conn){
	    			$select = "SELECT * FROM tedbirler order by baslangic desc";
	    			$result = mysqli_query($conn,$select);
	    			$sira_no=1;
	    			while($row = mysqli_fetch_array($result)){
	    				$a=$row['idmancilar'];
	    				$b=$row['mesqciler'];
	    				$c=$row['hakimler'];
	    				$cem = $a+$b+$c;
	    				echo "<tr>";
			                echo"<td>".$sira_no."</td>";
			                echo"<td>".$row['yarisinadi']."</td>";
			                echo"<td>".$row['baslangic']."</br>~</br>".$row['bitme']."</td>";
			                echo"<td>".$row['kecirilmeyeri']."</td>";
			                echo"<td>".$row['istirakedenteskilatlar']."</td>";
			                echo"<td>".$row['idmancilar']."</td>";
			                echo"<td>".$row['mesqciler']."</td>";
			                echo"<td>".$row['hakimler']."</td>";
			                echo"<td>".$cem."</td>";
			                echo"<td>".$row['yarisikeciren']."</td>";
			            echo "</tr>";
			           $sira_no++;
	    			}
	    		} 
	    	?>
        </table>
		</div>
  </div>
<!-- MIDDLE SIDE FINISH -->
		
	</div>
</div>
<?php include "includes/footer.php"; ?>
</body>
</html>