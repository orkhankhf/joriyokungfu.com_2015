<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Admin Panel</title>
  	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../../../bootstrap/css/bootstrap.css">
	<script src="../../../../bootstrap/jquery-ajax/jquery-ajax.js"></script>
	<script src="../../../../bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
<?php
	if( isset($_SESSION['admin']) && isset($_SESSION['sifre']) ){
	    echo "<div class='container-fluid adminpanelmain'>
	    	  <div class='row panel panel-default'>
	    	  <div class='panel-heading'><strong>Admin Panel</strong></div>
	    	  <div class='panel-body'>";
	    	  include 'leftmenu.php';
	}else{
	    include "connectpanel.php";
	}
?>
  </div>
</div>
</body>
</html>