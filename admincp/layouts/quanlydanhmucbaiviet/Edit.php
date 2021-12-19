<?php
	$sql_sua_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet WHERE id_baiviet='$_GET[idbaiviet]' LIMIT 1";
	$query_sua_danhmucbv = mysqli_query($mysqli,$sql_sua_danhmucbv);
?>
 
 <div id="page-wrapper">
 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST" action="layouts/quanlydanhmucbaiviet/data.php?idbaiviet=<?php echo $_GET['idbaiviet'] ?>">
                                    <?php
                                    while($dong = mysqli_fetch_array($query_sua_danhmucbv)) {
 	                                ?>
                                    <div class="form-group">
                                            <label>Tên danh mục bài viết</label>
                                            <input class="form-control" name="tendanhmucbaiviet" value="<?php echo $dong['tendanhmuc_baiviet'] ?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Thứ tự</label>
                                            <input class="form-control" name="thutu" value="<?php echo $dong['thutu'] ?>">
                                            
                                        </div>
                                       
                                        
                                        <button type="submit" class="btn btn-default" name="suadanhmucbaiviet">Sửa danh mục bài viết</button>
                                        <?php
	                                     } 
	                                    ?>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
 </div>
 
