

	<?php

				if(isset($_GET['action']) && $_GET['query']){
					$action = $_GET['action'];
					$query = $_GET['query'];
				}else{
					$action = '';
					$query = '';
				}
				if($action=='danhmucsp' && $query=='adddmsp'){
					include("layouts/danhmucsp/adddmsp.php");
				}
				elseif ($action=='admin' && $query=='admin') {
					include("layouts/admin/admin.php");
                }
				elseif ($action=='danhmucsp' && $query=='Edit') {
					include("layouts/danhmucsp/Edit.php");
                }elseif ($action=='quanlysanpham' && $query=='addsp') {
					include("layouts/quanlysanpham/addsp.php");
					
                }elseif($action=='quanlysanpham' && $query=='Editsp'){
					include("layouts/quanlysanpham/Editsp.php");}
				elseif($action=='quanlydonhang' && $query=='adddh'){
						include("layouts/quanlydonhang/adddh.php");}
				elseif($action=='donhang' && $query=='watchdh'){
						include("layouts/quanlydonhang/watchdh.php");
						}
				elseif($action=='quanlydanhmucbaiviet' && $query=='adddm'){
						include("layouts/quanlydanhmucbaiviet/adddm.php");
					}
				elseif($action=='quanlydanhmucbaiviet' && $query=='Edit'){
						include("layouts/quanlydanhmucbaiviet/Edit.php");}

				elseif($action=='quanlybaiviet' && $query=='addbv'){
							include("layouts/quanlybaiviet/addbv.php");
							
							
				}elseif($action=='quanlybaiviet' && $query=='Edit'){
							include("layouts/quanlybaiviet/Edit.php");
						}
				elseif($action=='quanlynguoidung' && $query=='User'){
							include("layouts/quanlynguoidung/User.php");
						}
				elseif($action=='quanlynguoidung' && $query=='Edit'){
							include("layouts/quanlynguoidung/Edit.php");
						}
	
					
	?> 
	
