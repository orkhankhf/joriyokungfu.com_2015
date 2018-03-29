<!DOCTYPE html>
<html>
<head>
	<title>Ən Son Yeniliklər</title>
	<?php include "head.php"; ?>
</head>
<body onload="sehife_yuklenende()">
<?php
error_reporting(0);
include "includes/header.php";
include "includes/navbar.php";
?>
<div class="container">
	<div class="row">
		<?php 
		include "includes/pages_left.php";
		?>
		<!-- MIDDLE SIDE START -->
<div class="en-son-yenilikler-main col-lg-7 col-md-7 col-sm-10 col-xs-12" style="padding:0px;">
	<div class="en-son-yenilikler">

		<?php
			include "DB/db.php";
			$page=$_GET["page"];
			$per_page=8;
			if($page=="" || $page=="1"){
			  $page1=0;
			}else{
			  $page1=($page*$per_page)-$per_page;
			}
			$res=mysqli_query($conn,"SELECT * FROM yenilikler order by tarix desc limit $page1 ,$per_page");
			while($row=mysqli_fetch_array($res)){	
				$if_tmp="";
                if($row['tmp']!=""){
	                $if_tmp="<strong> - FOTO</strong>";
	                }else{
	                $if_tmp="";
                }
			  echo "<div class='xeber-box col-xs-12'>";
			  	echo "<div class='panel panel-default'>";
				  echo "<div class='panel-heading'>";
				  	echo "<div class='basliq-div'><p><a href='xeber.php?page".$row['id']."'>".$row['basliq'].$if_tmp."</a></p></div>";
				  	echo "<div class='tarix-div'><p>".$row['tarix']."</p></div>";
				  echo "</div>";
				  echo "<div class='panel-body'>";
				  	echo "<div class='text-div'>".$row['text']."</div>";
				  	echo "<div class='oxu-div'><a href='xeber.php?page".$row['id']."' class='btn btn-default'>Ardını Oxu</a></div>";
				  echo "</div>";
				echo "</div>";
			  echo "</div>";
			}
			$res1=mysqli_query($conn,"SELECT * FROM yenilikler");
			$cou=mysqli_num_rows($res1);
			$a=$cou/$per_page;
			$a=ceil($a);
			$last_page=ceil($a);
		?>

	</div>
	<!-- PAGINATION SISTEMI YARADIIR -->
	<ul class="photo-galery-pagination pagination pagination-md">
	<script type="text/javascript">
		var cem_seh = [];
	</script>
			<li class="ilk_sehifeye" style='display:none;'><a href="ensonyenilikler.php">1</a><span>...</span></li>
		<?php   for($b=1;$b<=$a;$b++){    ?>
	    <script type="text/javascript">
	    	cem_seh.push(<?php echo $b; ?>);
	    </script>
	    <?php   }   ?>
			<li class='smaller_page' id='1'><a class='smaller_page_a' href='ensonyenilikler.php?page=1'>1</a></li>
			<li class='smaller_page' id='2'><a class='smaller_page_a' href='ensonyenilikler.php?page=2'>2</a></li>
			<li class='current_pgg active' id='3'><a class='current_pgg_a' href='ensonyenilikler.php?page=3'>3</a></li>
			<li class='larger_page' id='4'><a class='larger_page_a' href='ensonyenilikler.php?page=4'>4</a></li>
			<li class='larger_page' id='5'><a class='larger_page_a' href='ensonyenilikler.php?page=5'>5</a></li>
			
			<script type='text/javascript'>
							function sehife_yuklenende() {
								var url = window.location.href;
								var page_id = window.location.search.slice(-1);
								pagenumber = url.match(/\d+/);
								if(url.slice(-3)=="php"){
								document.getElementsByClassName('current_pgg')[0].setAttribute("class","current_pgg");
								document.getElementsByClassName('smaller_page')[0].setAttribute("class","active");
								}
								if(<?php echo $a; ?><6 && url.slice(-1)=="p"){
									window.location.href=url+"?page=1";
								}
								pagenumber.join("");
								document.getElementsByClassName('current_pgg')[0].id=pagenumber;
								document.getElementsByClassName('current_pgg_a')[0].href="ensonyenilikler.php?page="+pagenumber;
								document.getElementsByClassName('current_pgg_a')[0].innerHTML=pagenumber;
								
								var current = pagenumber;
								var smaller_first = current-1;
								var smaller_second = current-2;
								var larger_first = parseInt(current)+1;
								var larger_second = parseInt(current)+2;

								var a = document.getElementsByClassName('smaller_page')[1].id = smaller_first ;
								var b = document.getElementsByClassName('smaller_page_a')[1].href ='ensonyenilikler.php?page='+smaller_first;
								var c = document.getElementsByClassName('smaller_page_a')[1].innerHTML=smaller_first;

								var d = document.getElementsByClassName('smaller_page')[0].id = smaller_second ;
								var e = document.getElementsByClassName('smaller_page_a')[0].href ='ensonyenilikler.php?page='+smaller_second;
								var f = document.getElementsByClassName('smaller_page_a')[0].innerHTML=smaller_second;

								var g = document.getElementsByClassName('larger_page')[0].id = larger_first ;
								var h = document.getElementsByClassName('larger_page_a')[0].href ='ensonyenilikler.php?page='+larger_first;
								var i = document.getElementsByClassName('larger_page_a')[0].innerHTML=larger_first;

								var j = document.getElementsByClassName('larger_page')[1].id = larger_second ;
								var k = document.getElementsByClassName('larger_page_a')[1].href ='ensonyenilikler.php?page='+larger_second;
								var l = document.getElementsByClassName('larger_page_a')[1].innerHTML=larger_second;
								
								if(document.getElementsByClassName('current_pgg_a')[0].innerHTML==1){
										document.getElementsByClassName('smaller_page_a')[0].style.display='none';
										document.getElementsByClassName('smaller_page_a')[1].style.display='none';
									}else{
										if(document.getElementsByClassName('current_pgg_a')[0].innerHTML==2){
										document.getElementsByClassName('smaller_page_a')[0].style.display='none';
										}
									}
								if(document.getElementsByClassName('current_pgg_a')[0].innerHTML==cem_seh.length-1){
									document.getElementsByClassName('larger_page_a')[1].style.display='none';
								}else{
									if (document.getElementsByClassName('current_pgg_a')[0].innerHTML==cem_seh.length){
									document.getElementsByClassName('larger_page_a')[0].style.display='none';
									document.getElementsByClassName('larger_page_a')[1].style.display='none';
									}
								}
								if(document.getElementsByClassName('current_pgg_a')[0].innerHTML>3){
									document.getElementsByClassName('ilk_sehifeye')[0].style.display='inline-block';
									document.getElementsByClassName('ilk_sehifeye')[0].style.float='left';
								}
								if(document.getElementsByClassName('current_pgg_a')[0].innerHTML>cem_seh.length-3){
									document.getElementsByClassName('enson_sehife')[0].style.display='none';
								}

							}

			</script>
	    	
	    <li class="enson_sehife"><span>...</span><a href="ensonyenilikler.php?page=<?php echo$last_page;?>">Son(<?php echo$last_page;?>)</a></li>
	</ul>
	<script type="text/javascript">
	if(<?php echo $a ?> == ""){
		document.getElementsByClassName('photo-galery-pagination')[0].style.display='none';
	}
	</script>
</div>
<!-- MIDDLE SIDE FINISH -->
		<?php
		include "includes/rightside.php";
		?>
	</div>
</div>
<?php include "includes/footer.php"; ?>
</body>
</html>