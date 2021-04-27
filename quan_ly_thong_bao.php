<?php 
include 'header.php'; 
require 'connect.php';

$sql= "SELECT * FROM `thong_bao` ORDER BY `id` DESC";
    $result = mysqli_query($connect,$sql);
    
    while ($row=mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    $html = '';
    $i = 1;
	foreach ($data as $value) {
		$xu_ly = '<a class="btn btn-default" href="cap_nhat_thong_bao.php?id_sua_doi='.$value['id'].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
	        	<a class="btn btn-default" href="cap_nhat_thong_bao.php?id_huy_bo='.$value['id'].'" onclick="xoaBaiViet()"><i class="fa fa-times" aria-hidden="true"></i></a>';

	    $html .= '
	    <tr role="row">
	        <td>'.$i++.'</td>
	        <td>'.$value['tieu_de'].'</td>
	        <td>'.$value['noi_dung'].'</td>
	        <td>'.$value['ten_anh'].'</td>
            <td><img src="data:image/jpeg;base64,'.base64_encode($value['hinh_anh'] ).'" height="60" width="60"></td>
	        <td> '.$xu_ly.'</td>
	    </tr>';
	}

?>
<div class="container">
    <div class="row">        
        <div class="col-md-12" id="tieu_de_trang">
            <h2>Quản lý Thông báo</h2>
        </div>
        <div class="col-md-12">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#tao_moi_thong_bao">
                Tạo thông báo
            </button>

            <!-- Modal -->
            <div class="modal fade" id="tao_moi_thong_bao" tabindex="-1" role="dialog" aria-labelledby="tao_moi_thong_baoLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form method="POST" action="xu_ly_thong_bao.php" enctype='multipart/form-data'>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tao_moi_thong_baoLabel">Tạo thông báo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="">Tiêu đề thông báo</label>
                                    <input type="text" name="tieu_de" class="form-control"  placeholder="Nhập tiêu đề" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Nội dung thông báo</label>
                                    <textarea type="date" name="noi_dung" class="form-control" rows="4" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Tên hình ảnh</label>
                                    <input type="file" class="form-control-file" name="hinh_anh" required>
                                </div>
                                <input type="hidden" name="user_id" value=<?php echo (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : ' '; ?>>
                                <input type="hidden" name="tao_thong_bao" value="tao_thong_bao">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                <button class="btn btn-primary" type="submit">Tạo thông báo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="danhmuctopic container" id="quan_ly_dat_san">
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Tiêu đề</th>
	      <th scope="col">Nội dung</th>
	      <th scope="col">Tên ảnh</th>
	      <th scope="col">Hình ảnh</th>
	      <th scope="col">Xử lý</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php echo $html; ?>
	  </tbody>
	</table>
</section>

<?php include 'footer.php'; ?>