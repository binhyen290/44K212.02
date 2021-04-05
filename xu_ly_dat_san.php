<?php 

require 'connect.php';
//Khai báo sử dụng session
session_start();

if (isset($_GET['id_huy_bo'])) {
    $id = $_GET['id_huy_bo'];
    $val = 'huy_bo';
}
else if (isset($_GET['id_chap_nhan'])) {
    $id = $_GET['id_chap_nhan'];
    $val = 'chap_nhan';
}
$errors = '';
  
    //Validate
    if (!is_numeric($id)) {
        $errors = "Yêu cầu không hợp lệ !";
    }
    else{
        $sql = "UPDATE dat_san SET xu_ly = '".$val."' WHERE id = ". $id. "";
        //Chạy câu SQL
        if ($result = mysqli_query($connect,$sql)) {
            $_SESSION['msg-success'] = 'Xử lý đặt sân thành công !';
            header("location:quan_ly_dat_san.php");
        }else{
            $_SESSION['msg-success'] = $errors;
            header("location:quan_ly_dat_san.php");
        }
  
    }
?>