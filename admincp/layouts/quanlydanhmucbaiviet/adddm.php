

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST" action="layouts/quanlydanhmucbaiviet/data.php">
                                        <div class="form-group">
                                            <label>Tên danh mục bài viết</label>
                                            <input class="form-control" name="tendanhmucbaiviet">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Thứ tự</label>
                                            <input class="form-control" name="thutu">
                                            
                                        </div>
                                       
                                        
                                        <button type="submit" class="btn btn-default" name="themdanhmucbaiviet">Thêm danh mục bài viết</button>
                                        
                                    </form>
                                    
                                </div>
<!--Lietke-->
<?php
	$sql_lietke_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY thutu DESC";
	$query_lietke_danhmucbv = mysqli_query($mysqli,$sql_lietke_danhmucbv);
?>
                                <div class="col-lg-12" style="padding-top: 12px;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Liệt kê tên danh mục bài viết
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên danh mục</th>
                                            <th>Delete | Edit</th>
                                     
                                         
                                            
                                        </tr>
                                    </thead>
                                    <?php
                                    $i = 0;
                                    while($row = mysqli_fetch_array($query_lietke_danhmucbv)){
  	                                $i++;
                                    ?>
                                    <tbody>
                                    <tr>
  	                                <td><?php echo $i ?></td>
                                    <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
                                    	<td>
   		<a href="layouts/quanlydanhmucbaiviet/data.php?idbaiviet=<?php echo $row['id_baiviet'] ?>">Delete</a> | <a href="?action=quanlydanhmucbaiviet&query=Edit&idbaiviet=<?php echo $row['id_baiviet'] ?>">Edit</a> 
   	                                </td>
   
                                    </tr>
                                     <?php
                                         } 
                                        ?>              
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                                <!-- /.col-lg-6 (nested) -->
                             
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


