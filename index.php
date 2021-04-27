<?php 
include 'header.php'; 
require 'connect.php';

$sql_tb= "SELECT * FROM `thong_bao` ORDER BY `id` DESC LIMIT 3";
$result_tb = mysqli_query($connect,$sql_tb);

while ($row=mysqli_fetch_assoc($result_tb)) {
	$data_tb[] = $row;
}

$sql_tt= "SELECT * FROM `tin_tuc` ORDER BY `id` DESC LIMIT 3";
$result_tt = mysqli_query($connect,$sql_tt);

while ($row=mysqli_fetch_assoc($result_tt)) {
	$data_tt[] = $row;
}

	$info_carosel = '<h1>FootBall Due</h1>
					<p>Đặt sân nhanh chóng-Cáp kèo dễ dàng</p>
					<p>
						<button class="btn btn-lg btn-primary" type="button" data-toggle="modal" data-target="#datsan_bong">Đặt Sân</button>
						<button class="btn btn-lg btn-primary" type="button" data-toggle="modal" data-target="#thongtin_san">Xem Sân</button>
					</p>';
?>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
			<img class="first-slide" src="images/background_1.jpeg" alt="First slide">
			<div class="container">
				<div class="carousel-caption text-left">
					<?php echo $info_carosel; ?>
				</div>
			</div>
			</div>
			<div class="carousel-item">
			<img class="second-slide" src="images/background_2.jpeg" alt="Second slide">
			<div class="container">
				<div class="carousel-caption">
					<?php echo $info_carosel; ?>
				</div>
			</div>
			</div>
			<div class="carousel-item">
			<img class="third-slide" src="images/background_3.jpeg" alt="Third slide">
			<div class="container">
				<div class="carousel-caption text-right">
					<?php echo $info_carosel; ?>
				</div>
			</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
    </div>
	<section class="giaodien4">
		<div id="p1gd4">
			<h2 id="taisao">Tại sao lại cần FootBall Due</h2>
			<span id="slogangd4">Nền tảng đặt sân-giao lưu bóng đá đầu tiên của trường đại học Kinh Tế</span>
		</div>
		<div id="p2gd4">
			<div id="nd1gd4">
				<div id="imgnoidung4_1">
					<img class="noidung4" src="https://www.sporta.vn/assets/info-b35871504f4af944c9e1f28c2419d2df5ee8fa2dcab47d650aa94d4c054eaa9a.svg">
				</div>
				<div id="tieude4">
					<span class="tieudend4" class="tieudenoidung">Xem thông tin và đặt sân online</span>
				</div>
				<div id="ndtieude4">
					<span id="ndtieude4" class="noidungchinh">Có thể xem thông tin sân dễ dàng và đặt sân nhanh chóng và tiện lợi hơn</span>
				</div>
			</div>
			<div id="nd2gd4">
				<div id="imgnoidung4_2">
					<img class="noidung4_2" src="https://www.sporta.vn/assets/book-d9bc1eefa8ffc1c1a130292a3714a9565f07b44eda536fe02456b2a55ba5af1b.svg">
				</div>
				<div id="tieude4_2">
					<span class="tieudend4" class="tieudenoidung">Công cụ quản lý đặt sân online</span>
				</div>
				<div id="ndtieude4_2">
					<span id="ndtieude4_2" class="noidungchinh">Giúp người quản lý có thể quản lý thông tin đặt sân của sinh viên dễ dàng hơn và tiếp nhận đặt sân nhanh chóng, đơn giản</span>
				</div>
			</div>
			<div id="nd3gd4">
				<div id="imgnoidung4_3">
					<img class="noidung4_3" src="https://www.sporta.vn/assets/pr-5099167e7f25e00100225c9db1dbd0fb96c51c1dd95fd7e2e9f90d5a3186c985.svg">
				</div>
				<div id="tieude4_3">
					<span class="tieudend4" class="tieudenoidung">Tìm đối, giao lưu thông tin dễ dàng với Topic</span>
				</div>
				<div id="ndtieude4_2">
					<span id="ndtieude4_3" class="noidungchinh">Có thể tạo Topic để tạo các bài viết tìm đối cũng như giao lưu các thông tin bổ ích giữa các sinh viên có cùng đam mê</span>
				</div>
			</div>
		</div>
	</section>
	<section id="gd5">
		<div id="gd5" class="container-fluid">
			<div id="chiacotgd5" class="row">
				<div id="p1gd5" class="col-lg-5">
					<div id="tbgd5" class="tb_tt">
						<img class="tb_tt" src="./images/iconthongbao.png">
						<span class="tb_tt">Thông báo</span>
					</div>
					<?php foreach ($data_tb as $value) { 
						if (($timestamp = strtotime($value['ngay_dang'])) !== false)
						{
						  $php_date = getdate($timestamp);
						  // or if you want to output a date in year/month/day format:
						  $day_m = date("d/m", $timestamp); // see the date manual page for format options      
						  $year = date("Y", $timestamp); // see the date manual page for format options      
						}	
					?>
					<div id="tb1" class="tb">
						<div id="datetimetb1" class="datetimetb">
							<span class="ngaythang"><?php echo $day_m; ?></span>
							<span class="nam"><?php echo $year; ?></span>
						</div>
						<a  class="noidungtb" href="chitietthongbao.php?id=<?php echo $value['id']; ?>"><?php echo $value['tieu_de']; ?></a>
					</div>
					<?php } ?>
					<div class="xemthem">
						<a class="xemthem" href="thongbao.php">Xem thêm--></a>
					</div>
				</div>
				<div id="p2gd5" class="col-lg-5">
					<div id="ttgd5" class="tb_tt">
						<img id="tt" class="tb_tt" src="./images/icontintuc.png">
						<span class="tb_tt">Tin tức</span>
					</div>
					<?php foreach ($data_tt as $value) { 
					?>
						<div class="tb">
							<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($value['hinh_anh'] ).'" height="80" width="80" />'; ?>
							<a class="noidungtb" href="chitiettintuc.php?id=<?php echo $value['id']?>"><?php echo $value['tieu_de']?></a>
						</div>
					<?php } ?>
					<div class="xemthem">
						<a class="xemthem" href="tintuc.php">Xem thêm--></a>
					</div>
				</div>
				<div id="p3gd5" class="col-lg-2">
					<div id="quangcao">
						<div id="quangcao1">
							<a id="linkquangcao1" href="http://gonproshop.com/">
							<img class="quangcao" src="./images/imgquangcao1.jpg">
							</a>
						</div>
						<div id="quangcao2">
							<a id="linkquangcao2" href="https://www.facebook.com/The.FootballHouse.DaNang">
								<img class="quangcao" src="./images/imgquangcao2.jpg">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
<!-- Modal -->
<div class="modal fade" id="datsan_bong" tabindex="-1" role="dialog" aria-labelledby="datsan_bongLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<form action="datsan.php" method="POST">
			<div class="modal-header">
				<h5 class="modal-title" id="datsan_bongLabel">Đặt sân</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
					<div class="form-group">
						<label for="">Chọn sân</label>
						<select class="form-control" id="chonsan" name="ten_san">
							<option>Sân 1</option>
							<option>Sân 2</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Chọn khung giờ</label>
						<select class="form-control" id="chongio" name="gio_dat_san">
							<option>16:30-17:30</option>
							<option>17:30-18:30</option>
							<option>18:30-19:30</option>
							<option>19:30-20:30</option>
							<option>20:30-21:30</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Ngày đặt sân</label>
						<input type="date" name="ngay_dat_san" class="form-control"  placeholder="Ngày, tháng, năm">
					</div>
					<div class="form-group">
						<label for="">Ghi chú đặt sân</label>
						<textarea type="date" name="ghi_chu" class="form-control" rows="3"></textarea>
					</div>
					<input type="hidden" name="ma_nguoi_dat" value=<?php echo (isset($_SESSION['tendangnhap'])) ? $_SESSION['tendangnhap'] : ' '; ?>>
					<input type="hidden" name="ten_nguoi_dat" value="<?php echo (isset($_SESSION['ho_va_ten'])) ? $_SESSION['ho_va_ten'] : ' '; ?>">
					<input type="hidden" name="sdt_nguoi_dat" value="<?php echo (isset($_SESSION['so_dien_thoai'])) ? $_SESSION['so_dien_thoai'] : ' '; ?>">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
				<button class="btn btn-primary" id="xacnhan" type="submit" name="datsan">Xác nhận đặt sân</button>
			</div>
		</form>
    </div>
  </div>
</div>
<div class="modal fade" id="thongtin_san">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="datsan_bongLabel">Thông tin sân bóng</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Sơ đồ sân bóng</p> <br />
					<p>hình ảnh sân bóng</p> <br />
					<p>thông tin, giá cả</p> <br />
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<?php include 'footer.php'; ?>
	