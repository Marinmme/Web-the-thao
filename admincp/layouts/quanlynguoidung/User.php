
        <div id="page-wrapper">
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
                                    <form role="form" method="POST" action="layouts/quanlynguoidung/data.php">
                                       
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" name="username" type="text" >
                                        </div>
                                   
                                        <div class="form-group">
                                            <label>password</label>
                                            <input class="form-control" type="password" name="password" >
                                        </div>
                                       
                                    
                                   
                                      
                                        <div class="form-group">
                                            <label>Selects</label>
                                            <select class="form-control" name="userstatus">
                                                <option value="1">Manage</option>
                                                <option value="0">Staff</option>
                                            
                                            </select>
                                        </div>
                                     
                                        <button type="submit" class="btn btn-default" name="themthanhvien">Thêm User</button>
                                        
                                    </form>
</br>
<!--liet ke nguoi dung --> 
<?php
	$sql_lietke_user = "SELECT * FROM tbl_user order by id_user asc";
	$query_lietke_user = mysqli_query($mysqli,$sql_lietke_user);
?>
                                    <div class="row">
                <div class="col-lg-12" style="padding-top: 12px;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Username</th>
                                            <th>Type</th>
                                            <th>Delete | Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                        <?php
                                          $i = 0;
                                         while($row = mysqli_fetch_array($query_lietke_user)){
  	                                        $i++; ?>
<tr>
  <td><?php echo $i ?></td>
<td><?php echo $row['username'] ?></td>
    <td><?php if($row['user_status']==1){
        echo 'Manage';
      }else{
        echo 'Staff';
      } 
      ?>
      
    </td>
   	<td>
   		<a onclick="return Del('<?php  echo $row['username'];?>')" href="layouts/quanlynguoidung/data.php?iduser=<?php echo $row['id_user'] ?>">Delete</a> | <a href="?action=quanlynguoidung&query=Edit&iduser=<?php echo $row['id_user'] ?>">Edit</a> 
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

                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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


