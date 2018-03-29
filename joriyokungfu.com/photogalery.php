<!DOCTYPE html>
<html>
<head>
	<title>Foto Qalereya</title>
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
<div class=" photo-galery-main col-lg-7 col-md-7 col-sm-10 col-xs-12" style="padding:0px;">
	<div class="photo-galery">

		<?php
			include "DB/db.php";
			$page=$_GET["page"];
			$per_page=12;
			if($page=="" || $page=="1"){
			  $page1=0;
			}else{
			  $page1=($page*$per_page)-$per_page;
			}
			$all_photos=[];
			$res=mysqli_query($conn,"SELECT * FROM galery order by tarix desc limit $page1 ,$per_page");
			while($row=mysqli_fetch_array($res)){	
			  echo "<img onClick='clicked_img(this.id)' src='".$row['tmp']."' class='box-photos' title='".$row['sekilinfo']."'>";
			  array_push($all_photos,$row['tmp']);
			}
			$res1=mysqli_query($conn,"SELECT * FROM galery");
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
		<li class="ilk_sehifeye" style='display:none;'><a href="photogalery.php">1</a><span>...</span></li>
	<?php   for($b=1;$b<=$a;$b++){    ?>
     	<script type="text/javascript">
	    	cem_seh.push(<?php echo $b; ?>);
	    </script>
    <?php   }   $b=1;  
						for($a=0;$a<=count($all_photos);$a++){
						echo "<script>document.getElementsByClassName('box-photos')[".$a."].setAttribute('id','".$b."');</script>";
						$b++;
					}?>

    <li class='smaller_page' id='1'><a class='smaller_page_a' href='photogalery.php?page=1'>1</a></li>
			<li class='smaller_page' id='2'><a class='smaller_page_a' href='photogalery.php?page=2'>2</a></li>
			<li class='current_pgg active' id='3'><a class='current_pgg_a' href='photogalery.php?page=3'>3</a></li>
			<li class='larger_page' id='4'><a class='larger_page_a' href='photogalery.php?page=4'>4</a></li>
			<li class='larger_page' id='5'><a class='larger_page_a' href='photogalery.php?page=5'>5</a></li>
			<script type='text/javascript'>
							function sehife_yuklenende(){
								var url = window.location.href;
								var page_id = window.location.search.slice(-1);
								pagenumber = url.match(/\d+/);
								if(url.slice(-3)=="php"){
								document.getElementsByClassName('current_pgg')[0].setAttribute("class","current_pgg");
								document.getElementsByClassName('smaller_page')[0].setAttribute("class","active");
								}
								if(cem_seh.length<6 && url.slice(-1)=="p"){
									window.location.href=url+"?page=1";
								}
								pagenumber.join("");
								document.getElementsByClassName('current_pgg')[0].id=pagenumber;
								document.getElementsByClassName('current_pgg_a')[0].href="photogalery.php?page="+pagenumber;
								document.getElementsByClassName('current_pgg_a')[0].innerHTML=pagenumber;
								
								var current = pagenumber;
								var smaller_first = current-1;
								var smaller_second = current-2;
								var larger_first = parseInt(current)+1;
								var larger_second = parseInt(current)+2;

								var a = document.getElementsByClassName('smaller_page')[1].id = smaller_first ;
								var b = document.getElementsByClassName('smaller_page_a')[1].href ='photogalery.php?page='+smaller_first;
								var c = document.getElementsByClassName('smaller_page_a')[1].innerHTML=smaller_first;

								var d = document.getElementsByClassName('smaller_page')[0].id = smaller_second ;
								var e = document.getElementsByClassName('smaller_page_a')[0].href ='photogalery.php?page='+smaller_second;
								var f = document.getElementsByClassName('smaller_page_a')[0].innerHTML=smaller_second;

								var g = document.getElementsByClassName('larger_page')[0].id = larger_first ;
								var h = document.getElementsByClassName('larger_page_a')[0].href ='photogalery.php?page='+larger_first;
								var i = document.getElementsByClassName('larger_page_a')[0].innerHTML=larger_first;

								var j = document.getElementsByClassName('larger_page')[1].id = larger_second ;
								var k = document.getElementsByClassName('larger_page_a')[1].href ='photogalery.php?page='+larger_second;
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

		<li class="enson_sehife"><span>...</span><a href="photogalery.php?page=<?php echo$last_page;?>">Son(<?php echo$last_page;?>)</a></li>
</ul>
<script type="text/javascript">
	if(<?php echo $a ?> == ""){s
		document.getElementsByClassName('photo-galery-pagination')[0].style.display='none';
	}
	</script>
</div>
<!-- PopUp Image -->
	<div class="overlay">
			<div class="sliderBox col-lg-9 col-md-10">
				<div class="prevButt" onClick="prev_img()" id="navButt"></div>
				<div class="nextButt" onClick="next_img()" id="navButt"></div>
				<img class='popUpImg'>
				<p class="galeryimg_desctription"></p>
					<script>
						var img_id;
						var popUpImg = document.getElementsByClassName('popUpImg')[0];
						var desc=document.getElementsByClassName("galeryimg_desctription")[0];
							function clicked_img(id){
								img_id=id;
						   		document.getElementsByClassName('overlay')[0].style.display='block';
						   		var src = document.getElementById(id).src;
								src = src.substr(src.length - 24);
								popUpImg.src = src;
								var title = document.getElementById(img_id).title;
								desc.innerHTML=title;
							}
							function prev_img(){
								if(img_id <= 12 && img_id > 1){
									img_id--;
								}else{
									img_id=12;
								}
								var src = document.getElementById(img_id).src;
								src = src.substr(src.length - 24);
								popUpImg.src = src;
								var title = document.getElementById(img_id).title;
								desc.innerHTML=title;
							}
							function next_img(){
								if(img_id < 12){
									img_id++;
								}else{
									img_id=1;
								}
								var src = document.getElementById(img_id).src;
								src = src.substr(src.length - 24);
								popUpImg.src = src;
								var title = document.getElementById(img_id).title;
								desc.innerHTML=title;
							}
							document.onkeydown = function(e) {
						        switch (e.keyCode) {
						          // switch previous
						            case 37:
						                prev_img();
						                break;
						          // switch previous

						          // switch next
						            case 39:
						                next_img();
						                break;
						          // switch next

						          // close the overlay
						            case 27:
						                close_overlay();
						                break;
						          // close the overlay

						        };
						    };

					</script>
			</div>

			<div class="closeButt" onclick="close_overlay()">x</div>
			<script type="text/javascript">
			function close_overlay(){
				document.getElementsByClassName('overlay')[0].style.display='none';
			}
			</script>
	</div>
<!-- PopUp Image -->
<!-- MIDDLE SIDE FINISH -->
		<?php
		include "includes/rightside.php";
		?>
	</div>
</div>
<?php include "includes/footer.php"; ?>
</body>
</html>