<?php 
session_start(); 
 
if (isset($_SESSION['tendangnhap'])){
    // xóa session login
    unset($_SESSION['tendangnhap']); 
    unset($_SESSION['ho_va_ten']); 
    unset($_SESSION['so_dien_thoai']); 
}

$_SESSION['msg-success'] = 'Đăng xuất thành công !';
header("location:index.php");

?>