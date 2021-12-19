<?php
	$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
	$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>
<div id="page-wrapper">
<?php
while($row = mysqli_fetch_array($query_sua_sp)) {
?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sửa sản phẩm</h1>
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
                                    <form role="form" method="POST" action="layouts/quanlysanpham/data.php?idsanpham=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Tên sản phẩm</label>
                                            <input class="form-control" name="tensanpham" value="<?php echo $row['tensanpham'] ?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Mã sản phẩm</label>
                                            <input class="form-control" name="masp" value="<?php echo $row['masp'] ?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Giá sản phẩm</label>
                                            <input class="form-control" name="giasp" value="<?php echo $row['giasp'] ?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Số lượng</label>
                                            <input class="form-control" name="soluong" value="<?php echo $row['soluong'] ?>">
                                            
                                        </div>
                                      
                                      
                                        <div class="form-group">
                                            <label>Hình ảnh</label>
                                            <input type="file" name="hinhanh" multiple>
                                            <img class="img-fluid" src="../quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" width="100px">
                                        </div>
                                        <div class="form-group">
                                            <label>Tóm tắt</label>
                                            <textarea class="form-control" rows="3" name="tomtat"><?php echo $row['tomtat'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Nội dung</label>
                                            <textarea class="form-control" rows="3" name="noidung"><?php echo  $row['noidung'] ?></textarea>
                                        </div>
                                   
                                   
                                      
                                       
                                        <div class="form-group">
                                            <label>Danh mục sản phẩm</label>
                                            <select class="form-control" name="danhmuc">
                                            <?php $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	    		                                $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		                                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                                                    if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
	    		                                    ?>
	    		            <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                            <?php
	    			            }else{
	    	                	?>     
                                <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>                      
                <?php
                                }
	    		} 
	    		?>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label>Tình trạng sản phẩm</label>
                                            <select class="form-control" name="tinhtrang">
                                            <?php
	    		                        if($row['tinhtrang']==1){ 
	    		                                ?>
                                                <option value="1">Kích hoạt</option>
                                                <option value="2">Ẩn</option>
                                                <?php 
                                        }else{
                                            ?>
                                            <option value="1">Kích hoạt</option>
	    		                            <option value="0" selected>Ẩn</option>
                                            <?php
	    		                                } 
	    		                                ?>
                                             
                                            </select>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-default" name="suasanpham">Sửa sản phẩm</button>
                                   
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
 } 
 ?>
</div>