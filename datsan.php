<?php 

require 'connect.php';
//Khai báo sử dụng session
session_start();
$dat_san = $_POST;
$errors = [];
    //Validate ten_san
    if (!is_string($dat_san['ten_san'])) {
        $errors['ten_san'] = "Tên sân không hợp lệ !";
    }
    //Validate gio_dat_san
    if (!is_string($dat_san['gio_dat_san'])) {
        $errors['gio_dat_san'] = "Giờ đặt sân không hợp lệ!";
    }
    //Validate ma_nguoi_dat
    if (!is_string($dat_san['ma_nguoi_dat'])  ) {
        $errors['ma_nguoi_dat'] = "Mã người đặt không hợp lệ!";
    }     
    if ($dat_san['ma_nguoi_dat'] == "" || $dat_san['ma_nguoi_dat'] == null || $dat_san['ten_nguoi_dat'] == "" || $dat_san['ten_nguoi_dat'] == null) {
        $errors['ma_nguoi_dat'] = "Vui lòng đăng nhập để đặt sân!";
    }    
    //Validate ten_nguoi_dat
    if (!is_string($dat_san['ten_nguoi_dat']) ) {
        $errors['ten_nguoi_dat'] = "Tên người đặt không hợp lệ!";
    }
    //Validate ngay_dat_san
    if (!isset($dat_san['ngay_dat_san']) || $dat_san['ngay_dat_san'] == "") {
        $errors['ngay_dat_san'] = "Vui lòng chọn ngày đặt sân!";
    }
    if ($dat_san['ngay_dat_san'] < date('Y-m-d')) {
        $errors['ngay_dat_san'] = "Vui lòng chọn ngày đặt hợp lệ (hôm nay hoặc ngày sau hôm nay)";
    }
    if (count($errors) > 0) {
    	// echo count($errors); 
     //    var_dump($errors);

        $err_str = '<ul>';
        foreach ($errors as $err) {
            $err_str .= '<li>'.$err.'</li>';
        }   
        $err_str .= '</ul>';

        $_SESSION['err_str'] = $err_str;
        header("location:index.php");
        die();
    }else{
        //Kết nối databse
        $sql = "INSERT INTO `dat_san` 
                (`ten_san`, `gio_dat_san`, `ngay_dat_san`, `ten_nguoi_dat`, `ma_nguoi_dat`,`sdt_nguoi_dat`,`ghi_chu`)
                VALUES ('".$dat_san['ten_san']."', '".$dat_san['gio_dat_san']."',
                '".$dat_san['ngay_dat_san']."',
                '".$dat_san['ten_nguoi_dat']."',
                '".$dat_san['ma_nguoi_dat']."',
                '".$dat_san['sdt_nguoi_dat']."',
                '".$dat_san['ghi_chu']."'
                )";
                // echo $sql; die();
        //Chạy câu SQL
        if ($result = mysqli_query($connect,$sql)) {
            $_SESSION['msg-success'] = 'Đặt sân thành công . Hãy chờ đợi Quản trị viên xét duyệt !';
   			header("location:index.php");
        }else{
			$_SESSION['err_str'] = $err_str;
            header("location:index.php");
        }
    }
?>