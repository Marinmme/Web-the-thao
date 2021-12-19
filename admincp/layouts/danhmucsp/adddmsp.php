

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-14">
                    <h1 class="page-header">Thêm sản phẩm</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10">
                                    <form role="form" method="POST" action="layouts/danhmucsp/data.php">
                                        <div class="form-group">
                                            <label>Tên danh mục</label>
                                            <input class="form-control" name="tendanhmuc" type="text">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>Thứ tự danh mục</label>
                                            <input class="form-control" placeholder="Enter text" name="thutu">
                                        </div>
                                       <!-- <div class="form-group">
                                            <label>Slug danh mục</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                      
                                        <div class="form-group">
                                            <label>Text area</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                     
                                      
                                        <div class="form-group">
                                            <label>Selects</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>-->
                                     
                                        <button type="submit" class="btn btn-default" name="themdanhmuc">Thêm danh mục</button>
                                     
                                    </form>
<?php
	$sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
	$query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
                                    <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh mục</h1>
                </div>
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Liệt kê đơn hàng
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Tên danh mục</th>
                                        
                                            <th>Delete</th>
                                            <th>Edit</th>
                                            
                                            
                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="odd gradeX">
                                    <?php
  $i = 0;
//   lấy ra từng mãng
  while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
   	<td>
   		<a onclick="return Del('<?php  echo $row['tendanhmuc'];?>')"  href="layouts/danhmucsp/data.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Delete</a> 
       
   	</td>
       <td> <a href="?action=danhmucsp&query=Edit&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Edit</a> </td>
       
   
  </tr>
  <?php
  } 
  ?>
 
</table>
<script>
    function Del(name){
        return confirm("Bạn có chắc chắn muốn xóa: " + name + " ?");
    }
</script>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                <!-- /.col-lg-12 -->
            </div>
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


    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    

