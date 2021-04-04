<!DOCTYPE html>
<html>
<head>
	<title>FootBall Due</title>
	<link rel="stylesheet" type="text/css" href="giaodien.css">
	<link rel="stylesheet" type="text/css" href="./bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  <script>
	  $( function() {
	    $( "#datepicker" ).datepicker();
	  } );
	</script>
</head>
<body>
	<header>
		<div id="gd1" class="container-fluid">
			<div id="chiacotgd1" class="row">
				<div id="p1gd1" class="col-lg-3">
					<img id="imglogo" src="./logofbdue1.jpg">
				</div>
				<div id="p2gd1" class="col-lg-3"></div>
				<div id="p3gd1" class="col-lg-6">
					<h2 id="tenweb">Football Due</h2>
					<span id="sloganweb">Giao lưu bóng đá trường đại học Kinh Tế Đà Nẵng</span>
				</div>
			</div>
			<div id="gd2" class="container">
			<div id="chiacotgd2" class="row">
				<div id="p1gd2" class="col-lg-2">
				</div>
				<div id="p2gd2" class="col-lg-8">
					<ul id="menu">
					    <li id="list1" class="listmenu">
					    	<a id="trangchu" class="listmenu" href="index.php">Trang chủ</a>
					    </li>
					    <li id="list2" class="listmenu">
					    	<a id="thongbao" class="listmenu" href="thongbao.php">Thông báo</a>
					    </li>
					    <li id="list3" class="listmenu">
					    	<a id="tintuc" class="listmenu" href="tintuc.php">Tin tức</a>
					    </li>
					    <li id="list4" class="listmenu">
					    	<a id="topic" class="listmenu" href="topic.php">Topic</a>
					    </li>
					    <li class="listmenu">
					    	<a id="dn" class="listmenu" href="#">Đăng nhập</a>
					    	<form method="GET" class="form_dang_nhap dang-nhap">
						    		<div id="login">
						    			<input id="madangnhap" class="dien" type="text" name="tendangnhap" placeholder="Mã đăng nhập" autocomplete="off">
						    			<img class="loginpass" src="./imglogin.png">
						    		</div>
						    		<div id="password">
						    			<input type="text" id="nhapmatkhau" class="dien" name="inputmatkhau" placeholder="Nhập mật khẩu" autocomplete="off">
						    			<img class="loginpass" src="./imgpassword.png">
						    		</div>
						    		<button id="an_dangnhap" type="submit">Đăng nhập</button>
					    	</form>
					    </li>
					</ul>
				</div>
				<div id="p3gd2" class="col-lg-2">
				</div>
			</div>
		</div>
	</header>