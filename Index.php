<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<?php include ('layouts/header.php')?>
<!---//End-rate---->
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<!--header-->
<?php 
session_start();
include("admincp/config/connect.php");
 include('layouts/headertop.php');

 ?>
<!--banner-->
<?php include('layouts/main.php')?>
	<!--//content-->
	<!--//footer-->
	<?php include('layouts/footer.php')?>
		<!--//footer-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>
<!--light-box-files -->
		<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('a.picture').Chocolat();
		});
		</script>


</body>
</html>