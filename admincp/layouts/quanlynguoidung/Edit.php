<?php
	$sql_sua_user = "SELECT * FROM tbl_user WHERE id_user='$_GET[iduser]' LIMIT 1";
	$query_sua_user = mysqli_query($mysqli,$sql_sua_user);
?>

<div id="page-wrapper">
<?php
while($row = mysqli_fetch_array($query_sua_user)) {
?>
            <div class="row">
                <div class="col-lg-14">
                    <h1 class="page-header">User</h1>
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
                                    <form role="form" method="POST" action="layouts/quanlynguoidung/data.php?iduser=<?php echo $row['id_user'] ?>">
                                       
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" name="username" type="text" value="<?php echo $row['username'] ?>">
                                        </div>
                                   
                                        <div class="form-group">
                                            <label>password</label>
                                            <input class="form-control" type="password" name="password" value="<?php echo $row['password'] ?>">
                                        </div>
                                       
                                    
                                   
                                      
                                        <div class="form-group">
                                            <label>Selects</label>
                                            <select class="form-control" name="userstatus">
                                            <?php
	    	                            	if($row['user_status']==1){ 
	    		                            ?>
                                                <option value="1">Manage</option>
                                                <option value="0">Staff</option>
                                                <?php
	    		                            }else{ 
	    		                            ?>
                                               <option value="1">Manage</option>
	    		                            <option value="0" >Staff</option>
	    		                         <?php
	    		                           } 
	    		                         ?>
                                            </select>
                                        </div>
                                     
                                        <button type="submit" class="btn btn-default" name="suathanhvien">Sửa User</button>
                                        
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
