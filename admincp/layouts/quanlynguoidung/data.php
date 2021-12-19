<?php
include('../../config/connect.php');
$username = $_POST['username'];
$password= md5($_POST['password']);
$status= $_POST['userstatus'];

if(isset($_POST['themthanhvien'])){
	//them
	$sql_them = "INSERT INTO tbl_user(username,password,user_status) VALUE('".$username."','".$password."','".$status."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=quanlynguoidung&query=User');

}elseif(isset($_POST['suathanhvien'])){
	//sua
	$sql_update = "UPDATE tbl_user SET username='".$username."',password='".$password."',user_status='".$status."' WHERE id_user='$_GET[iduser]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlynguoidung&query=User');
}else{
    //xoa
	$id=$_GET['iduser'];
	$sql_xoa = "DELETE FROM tbl_user WHERE id_user='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlynguoidung&query=User');
}


?>