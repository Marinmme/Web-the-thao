
    
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
                                    <form role="form" method="POST" action="layouts/quanlysanpham/data.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Tên sản phẩm</label>
                                            <input class="form-control" name="tensanpham">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Mã sản phẩm</label>
                                            <input class="form-control" name="masp">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Giá sản phẩm</label>
                                            <input class="form-control" name="giasp">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Số lượng</label>
                                            <input class="form-control" name="soluong">
                                            
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
                                            <label>Danh mục sản phẩm</label>
                                            <select class="form-control" name="danhmuc">
                                            <?php $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	    		                                $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		                                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
	    		                                    ?>
	    		            <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
	    		<?php
	    		} 
	    		?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tình trạng sản phẩm</label>
                                            <select class="form-control" name="tinhtrang">
                                                <option value="1">Kích hoạt</option>
                                                <option value="2">Ẩn</option>
                                             
                                            </select>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-default" name="themsanpham">Thêm sản phẩm</button>
                                   
                                    </form>
</br>
                    
                                </div>
                                   <!-- liet ke san pham-->
    <?php $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
	$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
                                <div class="col-lg-12" style="padding-top: 12px;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Liệt kê danh mục sản phẩm
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Mã</th>
                                            <th>Giá sản phẩm</th>
                                            <th>Số lượng</th>
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
  while($row = mysqli_fetch_array($query_lietke_sp)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $row['id_sanpham']  ?></td>
      <td><?php echo $row['tensanpham'] ?></td>
    <td><?php echo $row['masp'] ?></td>
    <td><?php echo $row['giasp'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><img src="layouts/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" width="100px"></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php echo $row['noidung'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><?php if($row['tinhtrang']==1){
        echo 'Kích hoạt';
      }else{
        echo 'Ẩn';
      } 
      ?>
      
    </td>
   	<td>
   		<a onclick="return Del('<?php  echo $row['tensanpham'];?>')" href="layouts/quanlysanpham/data.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Delete</a> | <a href="?action=quanlysanpham&query=Editsp&idsanpham=<?php echo $row['id_sanpham'] ?>">Edit</a> 
   	</td>
   
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

