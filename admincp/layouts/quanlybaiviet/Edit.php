<?php
	$sql_sua_bv = "SELECT * FROM tbl_baiviet WHERE id='$_GET[idbaiviet]' LIMIT 1";
	$query_sua_bv = mysqli_query($mysqli,$sql_sua_bv);
?>
<div id="page-wrapper">
<?php
while($row = mysqli_fetch_array($query_sua_bv)) {
?>
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
                                    <form role="form" method="POST" action="layouts/quanlybaiviet/data.php?idbaiviet=<?php echo $row['id'] ?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Sửa bài viết</label>
                                            <input class="form-control" name="tenbaiviet" value="<?php echo $row['tenbaiviet'] ?>">
                                            
                                        </div>
                                      
                                      
                        
                                        <div class="form-group">
                                            <label>Hình ảnh</label>
                                            <input type="file" name="hinhanh" multiple>
                                            <img src="layouts/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>" width="70px">
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
                                            <label>Danh mục bài viết</label>
                                            <select class="form-control" name="danhmuc">
                                            <?php $sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
	    		                                $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		                                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                                                    if($row_danhmuc['id_baiviet']==$row['id_danhmuc']){
	    		                                    ?>
	    		            <option value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
                            <?php
	    			        }else{
	    		                ?>
                                <option value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
	    		            <?php
                                }
	    		            } 
	    		            ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tình trạng bài viết</label>
                                            <select class="form-control" name="tinhtrang">
                                            <?php
	    	                            	if($row['tinhtrang']==1){ 
	    		                            ?>
                                                <option value="1">Kích hoạt</option>
                                                <option value="0">Ẩn</option>
                                                <?php
	    		                            }else{ 
	    		                            ?>
                                            <option value="1">Kích hoạt</option>
	    		                            <option value="0" >Ẩn</option>
	    		                         <?php
	    		                           } 
	    		                         ?>
                                            </select>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-default" name="suabaiviet">Sửa bài viết</button>
                                   
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