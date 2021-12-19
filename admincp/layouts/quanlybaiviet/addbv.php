
    
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sản phẩm</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="POST" action="layouts/quanlybaiviet/data.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Tên bài viết</label>
                                            <input class="form-control" name="tenbaiviet">
                                            
                                        </div>
                                      
                                      
                        
                                        <div class="form-group">
                                            <label>Hình ảnh</label>
                                            <input type="file" name="hinhanh" multiple>
                                        </div>
                                        <div class="form-group">
                                            <label>Tóm tắt</label>
                                            <textarea class="form-control" rows="3" name="tomtat"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Nội dung</label>
                                            <textarea class="form-control" rows="3" name="noidung"></textarea>
                                        </div>
                                   
                                   
                                      
                                       
                                        <div class="form-group">
                                            <label>Danh mục bài viết</label>
                                            <select class="form-control" name="danhmuc">
                                            <?php $sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
	    		                                $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		                                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
	    		                                    ?>
	    		            <option value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
	    		            <?php
	    		            } 
	    		            ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tình trạng bài viết</label>
                                            <select class="form-control" name="tinhtrang">
                                                <option value="1">Kích hoạt</option>
                                                <option value="0">Ẩn</option>
                                             
                                            </select>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-default" name="thembaiviet">Thêm bài viết</button>
                                   
                                    </form>
</br>
                    
                                </div>
                                   <!-- liet ke bai viet-->
                                   <?php
	$sql_lietke_bv = "SELECT * FROM tbl_baiviet,tbl_danhmucbaiviet WHERE tbl_baiviet.id_danhmuc=tbl_danhmucbaiviet.id_baiviet ORDER BY tbl_baiviet.id DESC";
	$query_lietke_bv = mysqli_query($mysqli,$sql_lietke_bv);
?>
                                <div class="col-lg-12" style="padding-top: 12px;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Liệt kê bài viết
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Tên bài viết</th>
                                            <th>Hình ảnh</th>
                                            <th>Tóm tắt</th>
                                            <th>Nội dung</th>
                                            <th>Danh mục</th>
                                            <th>Trạng thái</th>
                                            <th>Delete | Edit</th>
                                           
                                            
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_bv)){
  	$i++;
  ?>
  <tr>
  <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['tenbaiviet'] ?></td>
    
    <td><img src="layouts/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>" width="70px"></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php echo $row['noidung'] ?></td>
    <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
    <td><?php if($row['tinhtrang']==1){
        echo 'Kích hoạt';
      }else{
        echo 'Ẩn';
      } 
      ?>
      
    </td>
   	<td>
   		<a onclick="return Del('<?php  echo $row['tenbaiviet'];?>')" href="layouts/quanlybaiviet/data.php?idbaiviet=<?php echo $row['id'] ?>">Delete</a> | <a href="?action=quanlybaiviet&query=Edit&idbaiviet=<?php echo $row['id'] ?>">Edit</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
    </tr>
                                       
                                       
                                       </tbody>
 
</table>
<script>
    function Del(name){
        return confirm("Bạn có chắc chắn muốn xóa: " + name + " ?");
    }
</script>

                                      
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

    <!-- Core Scripts - Include with every page -->

