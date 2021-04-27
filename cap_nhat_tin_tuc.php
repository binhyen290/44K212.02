<?php
include 'header.php';
require 'connect.php';
 
if(isset($_GET['id_sua_doi']) && !empty($_GET['id_sua_doi'])){
    // Lấy dữ liệu đầu vào
    $id = $_GET['id_sua_doi'];
    $sql= "SELECT * FROM `tin_tuc` WHERE `id` = {$_GET['id_sua_doi']}";
    $result = mysqli_query($connect,$sql);
    
    while ($row = mysqli_fetch_assoc($result)) {
        if (!empty($row) || $row !== '' || $row !== null) {
            $tieu_de = $row["tieu_de"];
            $noi_dung = $row["noi_dung"];
            $ten_anh = $row["ten_anh"];
        }
        else{
            $_SESSION['msg-error'] = 'Đã xảy ra lỗi !';
            header("location: quan_ly_tin_tuc.php");
            exit();
        }
        
    }

}

if ($_POST['cap_nhat_tin_tuc']) {
    $cap_nhat_tin_tuc = $_POST;
    $file = addslashes(file_get_contents($_FILES["hinh_anh"]["tmp_name"]));  
    $ten_anh = addslashes($_FILES["hinh_anh"]["name"]);
    $sql = 'UPDATE tin_tuc SET tieu_de = "' . $cap_nhat_tin_tuc['tieu_de'] . '", noi_dung="' . $cap_nhat_tin_tuc['noi_dung'] . (($ten_anh !== null || $file !== null) ? '", ten_anh="' . $ten_anh . '", hinh_anh="'. $file : ' ') . '", user_id ="' . $cap_nhat_tin_tuc['user_id'] . '" WHERE id = "' . $cap_nhat_tin_tuc['id'] . '"';
    //Chạy câu SQL
    if ($result = mysqli_query($connect,$sql)) {
        $_SESSION['msg-success'] = 'Xử lý cập nhật tin tức thành công !';
        header("location: quan_ly_tin_tuc.php");
    }else{
        $_SESSION['msg-error'] = 'Đã xảy ra lỗi !';
        header("location: quan_ly_tin_tuc.php");
    }
}


if (isset($_GET['id_xoa'])) {
    mysqli_query($connect, "DELETE FROM `tin_tuc` WHERE id='{$_GET['id_xoa']}'");
    $_SESSION['msg-success'] = "Xóa tin tức thành công"; 
	header('location: quan_ly_tin_tuc.php');
}

?>
<div class="container" id="cap_nhat_bai_viet">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Cập nhập tin tức</h2>
        </div>
        <div class="col-md-12">
            <form method="POST" action="cap_nhat_tin_tuc.php" enctype='multipart/form-data'>
                <div class="form-group">
                    <label for="">Tiêu đề tin tức</label>
                    <input type="text" name="tieu_de" class="form-control"  placeholder="Nhập tiêu đề" required value="<?php echo $tieu_de; ?>">
                </div>
                <div class="form-group">
                    <label for="">Nội dung tin tức</label>
                    <textarea name="noi_dung" class="form-control" rows="4" required><?php echo $noi_dung; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input type="file" class="form-control-file" name="hinh_anh"> <span><?php echo $ten_anh; ?></span>
                </div>
                <div class="form-group">
                    <input type="hidden" name="user_id" value=<?php echo (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : ' '; ?>>
                    <input type="hidden" name="cap_nhat_tin_tuc" value="cap_nhat_tin_tuc">
                    <input type="hidden" name="id" value="<?php echo $_GET['id_sua_doi']; ?>">
                    <button class="btn btn-primary" type="submit">Cập nhật tin tức</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include 'footer.php';
