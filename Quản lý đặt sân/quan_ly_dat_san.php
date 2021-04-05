<?php include 'header.php'; 
require 'connect.php';
$sql= "SELECT * FROM `dat_san` ORDER BY `id` DESC";
    $result = mysqli_query($connect,$sql);
    
    while ($row=mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    $html = '';
    $i = 1;
	foreach ($data as $value) {
		if ($value['xu_ly'] == null || $value['xu_ly'] == '') {
			$xu_ly = '<a class="btn btn-default" href="xu_ly_dat_san.php?id_chap_nhan='.$value['id'].'"><i class="fa fa-check" aria-hidden="true"></i></a>
	        	<a class="btn btn-default" href="xu_ly_dat_san.php?id_huy_bo='.$value['id'].'"><i class="fa fa-times" aria-hidden="true"></i></a>';
		}
		else if ($value['xu_ly'] == 'chap_nhan') {
			$xu_ly = "Chấp nhận";
		}
		else if ($value['xu_ly'] == 'huy_bo') {
			$xu_ly = "Huỷ bỏ";
		}

	    $html .= '
	    <tr role="row">
	        <td>'.$i++.'</td>
	        <td>'.$value['ma_nguoi_dat'].'</td>
	        <td>'.$value['ten_nguoi_dat'].'</td>
	        <td>'.$value['sdt_nguoi_dat'].'</td>
	        <td>'.$value['ten_san'].'</td>
	        <td>'.$value['gio_dat_san'].'</td>
	        <td>'.$value['ngay_dat_san'].'</td>
	        <td> '.$xu_ly.'</td>
	    </tr>';
	}

	        
?>
<section class="danhmuctopic container">
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Mã người đặt</th>
	      <th scope="col">Tên người đặt</th>
	      <th scope="col">Sdt người đặt</th>
	      <th scope="col">Tên sân</th>
	      <th scope="col">Giờ đặt sân</th>
	      <th scope="col">Ngày đặt sân</th>
	      <th scope="col">Xử lý</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php echo $html; ?>
	  </tbody>
	</table>
</section>

<?php include 'footer.php'; ?>