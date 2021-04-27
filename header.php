<?php require 'connect.php';  
	//Khai báo sử dụng session
	session_start();
 
	//Khai báo utf-8 để hiển thị được tiếng việt
	header('Content-Type: text/html; charset=UTF-8');
	 
	//Xử lý đăng nhập
	if (isset($_POST['dangnhap'])) 
	{
		    //Kết nối tới database
	    include('connect.php');
	     
	    //Lấy dữ liệu nhập vào
	    $tendangnhap = addslashes($_POST['tendangnhap']);
	    $matkhau = addslashes($_POST['matkhau']);
	     
	    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
	    if (!$tendangnhap || !$matkhau) {
	        $_SESSION['msg-warning'] = 'Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu!';
    		header("location:index.php");
	        exit;
		}
	     
	    // mã hóa pasword
	    $matkhau = md5($matkhau);
	     
	    //Kiểm tra tên đăng nhập có tồn tại không
	    $query = mysqli_query($connect, "SELECT * FROM user WHERE tendangnhap='$tendangnhap'");
	    if (mysqli_num_rows($query) == 0) {
	        $_SESSION['msg-error'] = 'Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại !';
    		header("location:index.php");
	        exit;
	    }
	     
	    //Lấy mật khẩu trong database ra
	    $row = mysqli_fetch_array($query);
	     
	    //So sánh 2 mật khẩu có trùng khớp hay không
	    if ($matkhau != $row['matkhau']) {
	        $_SESSION['msg-warning'] = 'Mật khẩu không đúng. Vui lòng nhập lại !';
    		header("location:index.php");
	        exit;
	    }
	     
	    //Lưu tên đăng nhập
	    $_SESSION['tendangnhap'] = $tendangnhap;
	    $_SESSION['ho_va_ten'] = $row['ho_va_ten'];
	    $_SESSION['so_dien_thoai'] = $row['so_dien_thoai'];
	    $_SESSION['user_id'] = $row['id'];
	    $_SESSION['quyen'] = $row['quyen'];
	    $_SESSION['msg-success'] = 'Đăng nhập thành công! Chào mừng '.$_SESSION['ho_va_ten'].' !';
	    header("location:index.php");
	    die();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>FootBall Due</title>
	<link rel="stylesheet" type="text/css" href="giaodien.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="./bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="jquery-ui.css"> -->
	<link rel="stylesheet" type="text/css" href="./font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./jquery-toast-plugin-master/src/jquery.toast.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	 <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
</head>
<body>
	<header>
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<a href="index.php"><img src="images/logofbdue.png" alt="Logo"></a>
					</div>
					<div class="col-md-6 text-right">
						<h1 class="display-4">Football Due</h1>
						<p class="lead">Giao lưu bóng đá Trường đại học Kinh Tế Đà Nẵng</p>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="index.php"><img src="images/logofbdue.png" alt="Logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Trang chủ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="thongbao.php">Thông báo</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="tintuc.php">Tin tức</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="topic.php">Tìm đối bóng đá</a>
				</li>
				<?php
				//hàm isset là kiểm tra biến có tồn tại hay không?
					if (isset($_SESSION['ho_va_ten']) && $_SESSION['ho_va_ten']){
							?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="nav_prof" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php echo $_SESSION['ho_va_ten']; ?>
							</a>
							<div class="dropdown-menu" aria-labelledby="nav_prof">
								<a class="dropdown-item" href="#">Cài đặt tài khoản</a>
								<?php if (isset($_SESSION['quyen']) && $_SESSION['quyen'] == 1) {
								?>
									<a class="dropdown-item" href="quan_ly_dat_san.php">Quản lý đặt sân</a>
									<a class="dropdown-item" href="quan_ly_thong_bao.php">Quản lý thông báo</a>
									<a class="dropdown-item" href="quan_ly_tin_tuc.php">Quản lý tin tức</a>
								<?php
								} ?>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="logout.php">Đăng xuất</a>
							</div>
						</li>
						<?php
						}
						else{
							?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="nav_login" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Đăng nhập
							</a>
							<div id="drop_dangnhap" class="dropdown-menu" aria-labelledby="nav_login">
								<form method="POST" class="form_dang_nhap dang-nhap" action="header.php">
									<div class="form-group">
										<span class="icon_login"><i class="fa fa-user"></i></span>
										<input id="madangnhap" class="dien" type="text" name="tendangnhap" placeholder="Mã đăng nhập" autocomplete="off">
									</div>
									<div class="dropdown-divider"></div>
									<div class="form-group">
										<span class="icon_login"><i class="fa fa-key"></i></span>
										<input type="password" id="nhapmatkhau" class="dien" name="matkhau" placeholder="Nhập mật khẩu" autocomplete="off">
									</div>
									<div class="dropdown-divider"></div>
									<div class="form-group">
										<button id="an_dangnhap" name="dangnhap" class="btn btn-primary" type="submit">Đăng nhập</button>
									</div>
								</form>
							</div> 
						</li>
					<?php
						}
				?>
			</div>
		</nav>
	</header>