<!DOCTYPE html>
<html>
<head>
	<title>OGANIC STORE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php ECHO PATH;?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php ECHO PATH;?>/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php ECHO PATH;?>/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php ECHO PATH;?>/assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
	<div class="wrapper">
		<!-- Phần top-header -->
		<div id="top-header">
			<div class="container row">
				<div class="col-6" id="contact">
					<ul>
						<li>
							<a href="">
								<i class="fa fa-phone"></i>
								<span> Hostline: 0123456789</span>
							</a>
						</li>
						<li>	
							<a href="mailto:project.freshfoods@gmail.com?subject=Feedback">
								<i class="fa fa-envelope"></i>
								<span>OganicStore@gmail.com</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-6" id="menu">
					<ul>
						<li><a href="<?php PATH; ?>?controller=product&action=product"> Sản phẩm</a></li>
						<li><a href="<?php PATH; ?>?controller=home&action=introduce"> Giới thiệu</a></li>
						<li><a href="<?php PATH; ?>?controller=home&action=policy"> Chính sách</a></li>
						<li><a href="<?php PATH; ?>?controller=home&action=help"> Trợ giúp</a></li>
						<li><a href="<?php PATH; ?>?controller=customer&action=register"><i class="fa fa-user-plus"></i> Đăng ký</a></li>
						<li><a href="<?php PATH; ?>?controller=customer&action=login"><i class="fa fa-user"></i> Đăng nhập</a></li>
					</ul>
				</div>
			</div>
		</div>
			<div style="clear: both;"></div>
		<!-- Phần bot-header -->
		<div id="bot-header" class="container row">
			<div id="logo" class="col-2">
				<a href="<?php PATH; ?>?controller=home&action=index">
					<img src="<?php PATH; ?>assets/image/logo/logo.png">
				</a>
			</div>
			<div id="search" class="col-4">  		
				<form  action="<?php echo PATH;?>?controller=home&action=search" method="post">
					<input type="search" name="search" placeholder="Tìm kiếm">			
					<button type="submit" name="">
						<i class="fa fa-search"></i>
					</button>
				</form>
			</div>
			<!-- end search -->
			<div id="category" class="col-5">
				<a href="">
					<img src="<?php PATH; ?>assets/image/logo/thucpham.png">
					<p>Thực phẩm tươi</p>
				</a>
				<a href="">
					<img src="<?php PATH; ?>assets/image/logo/raucutuoi.png">
					<p>Rau củ tươi</p>
				</a>
				<a href="">
					<img src="<?php PATH; ?>assets/image/logo/hoaquatuoi.jpg">
					<p>Hoa quả sạch</p>
				</a>
			</div>
			<div id="carts" class="col-1">
				<a href="<?php PATH; ?>?controller=home&action=cart">
					<i class="fa fa-shopping-cart"></i>
					<span>0</span>
				</a>
			</div>
		</div>
			<div style="clear: both;"></div>


<?= @$content ?>


		</div>
			<div style="clear: both;"></div>
		<div id="top-footer">
			<div  class="container row">
				<div class="col-3" id="top-footer-1">
					<a href="<?php echo PATH;?>?controller=home&action=index">
						<img src="<?php PATH; ?>assets/image/logo/logo.png">
					</a>
					<div>
						<p>Mang thực phẩm sạch đến cho mọi nhà</p>
					</div>
				</div>
				<div class="col-3" id="top-footer-2" >
					<p><i class="fa fa-link"></i> KẾT NỐI CHÚNG TÔI</p>
					<div>
						<a href="https://www.facebook.com/NhamNhi.jav/">
							<i class="fa fa-facebook-square"></i>
						</a>

						<a href="">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="">
							<i class="fa fa-youtube"></i>
						</a>
					</div>
				</div>
				<div class="col-3" id="top-footer-3">
					<p><i class="fa fa-history"></i> THỜI GIAN MỞ CỬA</p>
					<div>
						<p><i class="fa fa-angle-double-right"></i> Thứ hai - Thứ 6 : 08h00 - 18h00 </p>
						<p><i class="fa fa-angle-double-right"></i> Thứ bảy : 09h00 - 21h00</p>
						<p><i class="fa fa-angle-double-right"></i> Chủ nhật : 10h00 - 21h00</p>
					</div>
				</div>
				<div class="col-3" id="top-footer-4"> 
					<p>
						<i class="fa fa-map-marker"></i> ĐỊA CHỈ
					</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59585.57153763693!2d105.75589415624123!3d21.028755581716904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab5756f91033%3A0x576917442d674bfd!2zQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1576375193929!5m2!1svi!2s" width="250" height="220" frameborder="0" style="border:0;" allowfullscreen="">
					</iframe>
				</div>
			</div>
		</div>
			<div style="clear: both;"></div>
		<div id="bot-footer">
			<div><i class="fa fa-copyright"></i> Copy all right Oganic Store 2019</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript" src="<?php PATH; ?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php PATH; ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php PATH; ?>assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php PATH; ?>assets/js/main.js"></script>