<?php
session_start();
include('config/connect.php');
$nameErr = $emailErr = $genderErr = $websiteErr = "";
if(isset($_POST['dangnhap'])){
    $taikhoan=$_POST['username'];
    $matkhau=md5($_POST['password']);
    $sql="select *from tbl_admin where username='".$taikhoan."' and password='".$matkhau."' limit 1 ";
    $row=mysqli_query($mysqli,$sql);
    $count = mysqli_num_rows($row);
    if($count>0){
        $_SESSION['dangnhap']=$taikhoan;
        header("location:index.php?action=admin&query=admin");
    }else{
        header('Location: login.php');
            $_SESSION['dangnhap1'] = 'Username and Password error !';
    }
 
}
?>
 

<!DOCTYPE html>
<html>

<head>

   <?php include('layouts/header.php') ?>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                    <form action="" autocomplete="off" method="POST" onsubmit="">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="text" class="form-control" placeholder="Email" name="username" require="true" >
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" >
                        </div>
                 
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>
                            
                        </div>
                        
                        <button type="submit" name="dangnhap">Sign in</button> <?php
                                                //nếu có session tên dangnhap thì ta thực hiện lệnh dưới
                                                if(isset($_SESSION['dangnhap1']) && $_SESSION['dangnhap1'] != NULL)
                                                {
                                                    echo '<h4 style="color: red"> '.$_SESSION['dangnhap1'];' </h4>';
                                                    
                                                }
                                            ?> 
                        <div class="social-login-content">
                        </div>
                       
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

</body>

</html>
