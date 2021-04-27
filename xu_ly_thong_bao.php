<?php 

require 'connect.php';
//Khai báo sử dụng session
session_start();

$errors = [];
  
if ($_POST['tao_thong_bao']) {
    $thong_bao = $_POST;
    //Validate tieu_de
    if (!is_string($thong_bao['tieu_de'])) {
        $errors['tieu_de'] = "Tiêu đề không hợp lệ !";
    }
    //Validate noi_dung
    if (!is_string($thong_bao['noi_dung'])) {
        $errors['noi_dung'] = "Nội dung không hợp lệ!";
    }
    //Validate ten_anh
    if (!isset($_FILES["hinh_anh"]["name"]) || $_FILES["hinh_anh"]["name"] == "") {
        $errors['hinh_anh'] = "Vui lòng chọn hình ảnh!";
    }

    if (count($errors) > 0) {
    	echo count($errors); 
     //    var_dump($errors);

        $err_str = '<ul>';
        foreach ($errors as $err) {
            $err_str .= '<li>'.$err.'</li>';
        }   
        $err_str .= '</ul>';

        $_SESSION['err_str'] = $err_str;
        header("location: quan_ly_thong_bao.php");
        die();
    }else{
        $file = addslashes(file_get_contents($_FILES["hinh_anh"]["tmp_name"]));  
        $ten_anh = addslashes($_FILES["hinh_anh"]["name"]);
        // echo $ten_anh; die();
        //Kết nối databse
        $sql = 'INSERT INTO `thong_bao` (`tieu_de`, `noi_dung`, `ten_anh`, `hinh_anh`, `user_id`) VALUES ("'.$thong_bao["tieu_de"].'","'.$thong_bao["noi_dung"].'","'.$ten_anh.'","'.$file.'","'.$thong_bao["user_id"].'")';
                // echo $sql; die();
        //Chạy câu SQL
        if ($result = mysqli_query($connect,$sql)) {
            $_SESSION['msg-success'] = 'Tạo thông báo thành công';
   			header("location: quan_ly_thong_bao.php");
            die();
        }else{
			$_SESSION['err_str'] = $err_str;
            header("location: quan_ly_thong_bao.php");
            die();
        }
    }
}
else {
    $_SESSION['msg-error'] = 'Đã xảy ra lỗi !';
    header("location: quan_ly_thong_bao.php");
    die();
}
    
?>