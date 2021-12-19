
            <!-- /.navbar-top-links -->

            
            <!-- liet ke don hang -->
<?php
	$sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_customer WHERE tbl_cart.id_khachhang=tbl_customer.id_khachhang ORDER BY tbl_cart.id_cart DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
            <div id="page-wrapper"></br>
            <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Đơn hàng
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Mã đơn hàng</th>
                                            <th>Tên khách hàng</th>
                                            <th>Địa chỉ</th>
                                            <th>Email</th>
                                            <th>Số điện thoại</th>
                                            <th>Tình trạng</th>
                                            <th>Quản lý</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['tenkhachhang'] ?></td>
    <td><?php echo $row['diachi'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['dienthoai'] ?></td>
    <td>
    	<?php if($row['cart_status']==1){
    		echo '<a href="layouts/quanlydonhang/data.php?code='.$row['code_cart'].'">Đơn hàng mới</a>';
    	}else{
    		echo 'Đã xem';
    	}
    	?>
    </td>
   	<td>
   		<a href="index.php?action=donhang&query=watchdh&code=<?php echo $row['code_cart'] ?> ">Xem đơn hàng</a>
           
    	
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
    <!-- /#wrapper -->
            </div>
    <!-- Core Scripts - Include with every page -->

