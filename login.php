<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<?php include('layouts/header.php') ?>
		
<!---//End-rate---->
</head>
<body>
<!--header-->
<?php include('layouts/headertop.php') ?>
<?php include("admincp/config/connect.php")?>
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Login</h1>
		<em></em>
		<h2><a href="index.php">Home</a><label>/</label>Login</h2>
	</div>
</div>
<!--login-->
<br></br>
 <?php
// define variables and set to empty values
 $emailErr =$passErr = "";
$email  = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
  if (empty($_POST["Email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["Email"]);
  }
    
  if (empty($_POST["Password"])) {
    $passErr = "Pass is required";
  } else {
    $pass = test_input($_POST["Password"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
	if(isset($_POST['login'])){
		$email = $_POST['Email'];
		$matkhau = md5($_POST['Password']);
		$sql = "SELECT * FROM tbl_customer WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);

		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['customer'] = $row_data['tenkhachhang'];
			$_SESSION['id_khachhang'] = $row_data['id_khachhang'];
			echo "<script> window.location.href='index.php'</script>;";
		}
	} 
?>
<div class="container">
		<div class="row block-9">
		
			<form  method="post"  action="">
			<div class="col-md-6 login-do">
			<span class="error">* <?php echo $emailErr;?></span>
				<div class="login-mail">
					<input type="text" placeholder="Email" name="Email">
					<i  class="glyphicon glyphicon-envelope"></i>
				</div>
				<span class="error">* <?php echo $passErr;?></span>
				<div class="login-mail">
					<input type="password" placeholder="Password" name="Password">
					<i class="glyphicon glyphicon-lock"></i>
				</div>
				   <a class="news-letter " href="#">
						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
					   </a>
				<label class="hvr-skew-backward">
					<input type="submit" value="login" name="login">
				</label>
			</div>
			
			
			<div class="clearfix"> </div>
			</form>
		</div>

</div>

<!--//login-->

			<!--brand-->
		<div class="container">
			<div class="brand">
				<div class="col-md-3 brand-grid">
					<img src="images/ic.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic1.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic2.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic3.png" class="img-responsive" alt="">
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<!--//brand-->
		
	<!--//content-->
		<!--//footer-->
	<?php include('layouts/footer.php') ?>
		<!--//footer-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>
 
</body>
</html>