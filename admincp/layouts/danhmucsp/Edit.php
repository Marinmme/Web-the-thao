<?php
	$sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
	$query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-14">
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
                                <div class="col-lg-10">
                                    <form role="form" method="POST" action="layouts/danhmucsp/data.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
									<?php while($dong = mysqli_fetch_array($query_sua_danhmucsp)) {?>
                                        <div class="form-group">
                                            <label>Tên danh mục</label>
                                            <input class="form-control" name="tendanhmuc" type="text" value="<?php echo $dong['tendanhmuc'] ?>">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>Thứ tự danh mục</label>
                                            <input class="form-control" placeholder="Enter text" name="thutu" value="<?php echo $dong['thutu'] ?>">
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
                                     
                                        <button type="submit" class="btn btn-default" name="suadanhmuc">Sua danh muc</button>
										<?php }?>
                                    </form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
  </div>
