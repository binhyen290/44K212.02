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

?>
	<section class="danhsachthongbao">
		<div id="danhsachthongbao" class="container-fluid">
			<div class="row header_tt">
				<div class="dsthongbao col-md-12">
					<span class="dsthongbao">Danh sách thông báo</span>
				</div>
			</div>
			<div id="chiacotdsthongbao" class="row">
				<div id="p1gdtb" class="col-md-2"></div>
				<div id="p1gdtb" class="col-md-8">
					<div class="tenthongbao">
						<?php foreach ($data as $value) { ?>
						<div id="tentb" class="tentb">
								<img class="datetb" src="<?php echo 'data:image/jpeg;base64,'.base64_encode($value['hinh_anh'] ); ?>">
							<div class="date">
								<a id="tentb1" class="tentb" href="chitietthongbao.php?id=<?php echo $value['id']; ?>"><?php echo $value['tieu_de']; ?></a>
								<p><?php echo $value['noi_dung']; ?></p>
								<span class="datetb"><?php echo date("d-m-Y", strtotime($value['ngay_dang'])); ?></span>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
				<div id="p1gdtb" class="col-md-2"></div>
			</div>
		</div>
	</section>
<?php include 'footer.php'; ?>