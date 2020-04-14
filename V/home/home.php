	<!-- Phần slide -->
	<div id="slide" class="container">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  	<div class="carousel-inner">
			    <div class="carousel-item active">
			       <img src="<?php PATH; ?>assets/image/logo/slideshow_1.jpg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			       <img src="<?php PATH; ?>assets/image/logo/slideshow_2.jpg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			       <img src="<?php PATH; ?>assets/image/logo/slideshow_3.png" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			       <img src="<?php PATH; ?>assets/image/logo/slideshow_4.png" class="d-block w-100" alt="...">
			    </div>
		  	</div>
	 	 	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
		  	</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
				</a>
		</div>
	</div>
		<div style="clear: both;"></div>
	<div id="content-index" class="container">
		<h1>TẤT CẢ SẢN PHẨM</h1>

		<div class="owl-carousel owl-theme">
			<?php 
				$proAll = $data['product'];
				foreach ($proAll as $key => $value) {
			?>
	    	<div class="item">
	    		<div class="cart">
		    		<div class="cart-img">
		    			<a href="<?php PATH; ?>?controller=product&action=detail&id=<?php echo$value['productID']; ?>">
		    				<img src="assets/image/products/<?php echo $value['image'];?>">
		    			</a>
		    		</div>
		   
	    			<div class="cart-title">
	    				<span>
	    					<?php echo $value['productName']; ?>
	    				</span>
	    			</div>
					<div class="cart-price">
						<span class="price-new">
							<?php echo number_format($value['unitPrice']-($value['unitPrice']*$value['discount'])/100);?>
							<b>đ</b>
						</span>
				    	<span class="price-old"><s><?php echo number_format($value['unitPrice']); ?> <b>đ</b></s></span>
					</div>
					<div class="cart-link">
						<a href="#" id="cart-link1">
							<i class="fa fa-cart-plus"></i> Thêm vào giỏ
						</a>
						<a href="<?php PATH; ?>?controller=product&action=detail&id=<?php echo$value['productID']; ?>" id="cart-link2">
							<i class="fa fa-info-circle"></i> Chi tiết
						</a>
					</div>
				</div>
	    	</div>
	    	<?php 
				}
		 	?>
		</div>

	</div>
		<div style="clear: both;"></div>
	<div id="info" class="container row">