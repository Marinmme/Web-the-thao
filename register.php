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
<!--register-->

<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Register</h1>
		<em></em>
		<h2><a href="index.php">Home</a><label>/</label>Register</h2>
	</div>
</div>
<!-- <?php
// define variables and set to empty values
$nameErr = $emailErr = $phoneErr = $passErr = $addressErr = "";
$name = $email = $phone = $comment = $pass = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["Email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["Email"]);
  }
  if (empty($_POST["diachi"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["diachi"]);
  }
    

  if (empty($_POST["PhoneNumber"])) {
    $phoneErr = "Phone is required";
  } else {
    $phone = test_input($_POST["PhoneNumber"]);
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
?>-->
<!-- header('Location: index.php?action=checkout');-->
<?php
ob_start();
    if(isset($_POST['customer'])){
        $tenkhachhang = $_POST['name'];
		$email = $_POST['Email'];
        $diachi = $_POST['diachi'];
		$matkhau = md5($_POST['Password']);
		$dienthoai = $_POST['PhoneNumber'];
        $sql_dangky=mysqli_query($mysqli,"insert into tbl_customer(tenkhachhang,email,diachi,dienthoai,matkhau) value('".$tenkhachhang."','".$email."','".$diachi."','".$dienthoai."','".$matkhau."')");
        if($sql_dangky){
			$_SESSION['customer'] = $tenkhachhang;
			$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
		
			echo "<script> window.location.href='checkout.php'</script>;";
			
		}
    }
?>

<!--login-->
<div class="container">
		<div class="login">
			<form action="" method="POST">
			<div class="col-md-6 login-do">
			<span class="error">* <?php echo $nameErr;?></span>
			<div class="login-mail">
				
					<input type="text" placeholder="name" name="name">
					
					
				</div>
				
			
				
				<span class="error">* <?php echo $emailErr;?></span>
				<div class="login-mail">
					<input type="text" placeholder="Email"  name="Email" >
					<i  class="glyphicon glyphicon-envelope"></i>
				</div>
				<span class="error">* <?php echo $emailErr;?></span>
				<div class="login-mail">
					<input type="text" placeholder="Diachi"  name="diachi" >
					<i  class="glyphicon glyphicon-envelope"></i>
				</div>
				<span class="error">* <?php echo $passErr;?></span>
				<div class="login-mail">
					<input type="password" placeholder="Password" name="Password" >
					<i class="glyphicon glyphicon-lock"></i>
				</div>
				<span class="error">* <?php echo $phoneErr;?></span>
				<div class="login-mail">
					
					<input type="text" placeholder="PhoneNumber" name="PhoneNumber">
					<i  class="glyphicon glyphicon-phone"></i>
				</div>
				   <a class="news-letter " href="#">
						 <label class="checkbox1"><input type="text" name="checkbox" ><i> </i>Forget Password</label>
					   </a>
				<label class="hvr-skew-backward">
					<input type="submit" value="Submit" name="customer">
				</label>
				<label class="hvr-skew-backward">
				<td><a href="#">Đăng nhập nếu có tài khoản</a></td>
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

	<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!--<script type="text/javascript">

 $(document).ready(function() {
	
	//Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
	$("#formDemo").validate({
				rules: {
					Name: "required",
				
					PhoneNumber: {
						required: true,
						minlength: 5
					},
				
					Email: {
						required: true,
						email: true
					},
					Password: {
						required: true,
						minlength: 5
					},
		
				},
				messages: {
					Name: "Vui lòng nhập họ",
				
					PhoneNumber: {
						required: "Vui lòng nhập số điện thoại",
						minlength: "Số máy quý khách vừa nhập là số không có thực"
					},
					Password: {
						required: 'Vui lòng nhập mật khẩu',
						minlength: 'Vui lòng nhập ít nhất 5 kí tự'
					},
					Email: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long",
						equalTo: "Please enter the same password as above"
					},
					email: "Vui lòng nhập Email",
					agree: "Vui lòng đồng ý các điều khoản"
				}
			});
});-->
</script>
</body>
</html>