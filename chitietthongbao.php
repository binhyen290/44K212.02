<?php include 'header.php'; 
	require 'connect.php';

	$id = $_GET['id'];

	$sql = "SELECT * FROM `thong_bao` WHERE id = {$id}";

    $result = mysqli_query($connect,$sql);
	while ($row=mysqli_fetch_assoc($result)) {
		
        $data[] = $row;
    }

	$sql_tb= "SELECT * FROM `thong_bao` WHERE NOT ( id = {$id} )ORDER BY `id` DESC LIMIT 5";
	$result = mysqli_query($connect,$sql_tb);

	while ($row=mysqli_fetch_assoc($result)) {
		$data_tb[] = $row;
	}
?>
	<section class="chitietthongbao">
		<div id="chiacotchitiet" class="container-fluid">
			<div class="row">
				<div class="col-md-1"></div>
				<div id="p1gdtb" class="col-md-7">
					<div class="tieu-de-thong-bao">
						<h4><?php echo $data[0]['tieu_de']; ?></h4>
						<div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo date("d-m-Y", strtotime($data[0]['ngay_dang'])); ?></div>
					</div>
					<div class="noi-dung-thong-bao">
						<img class="datetb" src="<?php echo 'data:image/jpeg;base64,'.base64_encode($data[0]['hinh_anh'] ); ?>">
						<p><?php echo $data[0]['noi_dung']; ?></p>
					</div>
				</div>
				<div class="col-md-3 ttk">
					<div class="tb_tt">
						<span>Thông báo khác</span>
					</div>
					<?php foreach ($data_tb as $value) { 
						if (($timestamp = strtotime($value['ngay_dang'])) !== false)
						{
						  $php_date = getdate($timestamp);
						  // or if you want to output a date in year/month/day format:
						  $day_m = date("d/m/Y", $timestamp); // see the date manual page for format options 
						}	
					?>
					<div class="tb_k">
						<a  class="noidungtb" href="chitietthongbao.php?id=<?php echo $value['id']; ?>"><?php echo $value['tieu_de']; ?></a>
						<span><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $day_m; ?></span>
					</div>
					<?php } ?>
				</div>
				<div class="col-md-1"></div>
			</div>
	</section>
<?php include 'footer.php'; ?>