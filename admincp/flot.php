<!DOCTYPE html>
<html>

<head>
  
    <?php include('layouts/header.php')?>

</head>

<body>

    <?php include('layouts/logout.php') ?>
        
            <!-- /.navbar-top-links -->

            <?php include('layouts/navleft.php');
              include('layouts/table.php');  ?>

            
                <!-- /.col-lg-6 -->
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Flot -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Flot - Use for reference -->
  
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
</body>

</html>
