<?php
	if(isset($_GET['dangxuat']) && $_GET['dangxuat'] ==1 ){
		unset($_SESSION['dangnhap']);
		header('location:login.php');
	}
?>
<div id="wrapper">

<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php?action=admin&query=admin">Admin</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
    
        <!-- /.dropdown -->
 
        <!-- /.dropdown -->
       
        <!-- /.dropdown -->
        <ul class="nav navbar-top-links navbar-right">
               
               <!-- /.dropdown -->
              
               <!-- /.dropdown -->
              
               <!-- /.dropdown -->
               <li class="dropdown">
                   <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                       <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                   </a>
                   <ul class="dropdown-menu dropdown-user">
                       <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile: <?php if(isset($_SESSION['dangnhap'])){
                        echo $_SESSION['dangnhap'];}
                        ?></a>
                       </li>
                       <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                       </li>
                       <li class="divider"></li>
                <li><a href="index.php?dangxuat=1"><i class="fa fa-sign-out fa-fw"></i> Logout
                        </a>
                </li>
                   </ul>
                   <!-- /.dropdown-user -->
               </li>
               <!-- /.dropdown -->
           </ul>
          
          
               
              
           
        <!-- /.dropdown -->
    </ul>
</nav>
</div>