<?php 
require 'connect.php';
//Khai báo sử dụng session
session_start();

$sql= "SELECT * FROM `tin_tuc` ORDER BY `id` DESC";
    $result = mysqli_query($connect,$sql);
    
    while ($row=mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    $html = '';
    $i = 1;


include 'header.php'; 
?>
	<section class="danhsachtintuc">
		<div id="danhsachtintuc" class="container-fluid">
			<div class="row header_tt">
				<div class="dsthongbao col-md-12">
					<span class="dsthongbao">Danh sách tin tức</span>
				</div>
			</div>
			<div id="chiacotdstintuc" class="row">
				<div id="p1gdtt" class="col-md-2"></div>
				<div id="p1gdtt" class="col-md-8">
					<div class="tentintuc">
						<?php foreach ($data as $value) { ?>
						<div id="tentb" class="tentb">
								<img class="datetb" src="<?php echo 'data:image/jpeg;base64,'.base64_encode($value['hinh_anh'] ); ?>">
							<div class="date">
								<a id="tentb1" class="tentb" href="chitiettintuc.php?id=<?php echo $value['id']; ?>"><?php echo $value['tieu_de']; ?></a>
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