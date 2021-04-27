<footer>
		<div id="lienket" class="container-fluid">
			<div id="ndlienket" class="row">
				<div id="nd1" class="col-lg-5">
					<h3 class="tennd">Về FootBall Due</h3>
					<a class="ndgioithieu" href="#">Giới thiệu về FootBall Due</a>
					<a class="ndgioithieu" href="#">Chính sách bảo mật</a>
					<a class="ndgioithieu" href="#">Điều khoản sử dụng</a>
				</div>
				<div id="nd2" class="col-lg-5">
					<h3 class="tennd">Thông tin liên hệ</h3>
					<ul id="lienhe2">
			    <li class="2">
			    	<a class="ha" href="https://www.facebook.com/profile.php?id=100006308411608">
			    		<img class="logothongtin" src="./images/fb.png" alt="">
			    	</a>
			    </li>
			    <li class="2">
			    	<a class="ha" href="https://www.instagram.com/minhhieu.1910/?hl=en">
			    		<img class="logothongtin" src="./images/ig.png" alt="">
			    	</a>
			    </li>
			    <li class="2">
			    	<a class="ha" href="https://mail.google.com/mail/u/1/?pli=1#inbox">
			    		<img class="logothongtin" src="./images/gmail.png" alt="">
			    	</a>
			    </li>
			    <li class="2"></li>
			</ul>
				</div>
				<div id="nd3" class="col-lg-2"></div>
			</div>
		</div>
		<div id="banquyen" class="container-fluid">
			<div id="ndbanquyen" class="row">
				<div id="ndbq1" class="col-lg-2"></div>
				<div id="ndbq2" class="col-lg-8">
					<h3 id="banquyen">2020 © FOOTBALL DUE.All rights reseved NHOM1 BY 44K21.2</h3>
				</div>
				<div id="ndbq3" class="col-lg-2"></div>
			</div>
		</div>
	</footer>
	<script src="jquery-3.5.1.min.js"></script>
	<script src="./bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
	<script src="./jquery-toast-plugin-master/src/jquery.toast.js"></script>
	<script src="dinhdang.js"></script>
	<?php
		if (isset($_SESSION['msg-success'])) {
			
			?>	
			<script type="text/javascript">
				console.log('<?php echo $_SESSION['msg-success']; ?>');	
				$.toast({
				    heading: 'Thông báo',
				    text: '<?php echo $_SESSION['msg-success']; ?>',
				    position: 'top-right',
				    stack: false,
				    icon: 'success'
				});
			</script>
			<?php
			unset($_SESSION['msg-success']);
		}		
		if (isset($_SESSION['msg-error'])) {
			
			?>	
			<script type="text/javascript">
				console.log('<?php echo $_SESSION['msg-error']; ?>');	
				$.toast({
				    heading: 'Lỗi',
				    text: '<?php echo $_SESSION['msg-error']; ?>',
				    position: 'top-right',
				    stack: false,
				    icon: 'error'
				});
			</script>
			<?php
			unset($_SESSION['msg-error']);
		}		
		if (isset($_SESSION['msg-warning'])) {
			?>	
			<script type="text/javascript">
				console.log('<?php echo $_SESSION['msg-warning']; ?>');	
				$.toast({
				    heading: 'Cảnh báo',
				    text: '<?php echo $_SESSION['msg-warning']; ?>',
				    position: 'top-right',
				    stack: false,
				    icon: 'warning'
				});
			</script>
			<?php
			unset($_SESSION['msg-warning']);
		}		
		if (isset($_SESSION['err_str'])) {
			?>	
			<script type="text/javascript">
				console.log('<?php echo $_SESSION['err_str']; ?>');	
				$.toast({
				    heading: 'Lỗi',
				    text: '<?php echo $_SESSION['err_str']; ?>',
				    position: 'top-right',
				    icon: 'error',
				    hideAfter: false,
				});
			</script>
			<?php
			unset($_SESSION['err_str']);
		}
	?>
</body>
</html>