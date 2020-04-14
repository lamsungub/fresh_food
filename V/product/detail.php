<div class="wrapper">

	<div class="container">

		<div class="path row">
        	<ol class="breadcrumb">
			    <li> 
			    	<i class="fa fa-home"></i><a href="<?php PATH; ?>?controller=home&aciton=index"> Trang chủ</a> 
			    </li>
			    <li class="active"> 
			    	<i class="fa fa-caret-right"></i> Chi tiết sản phẩm
			    </li>
			</ol>
		</div> <!-- end breadcrumb -->

		<div class="row" id="detail">
			<?php 
				$proID= $product;
			?>

			<div id="img-detail" class="col-3">
				<img src="assets/image/products/<?php echo $proID['image'];?>">
			</div>
			<div id="title-detail" class="col-5">
				<div>
					<h2>
						<b><?php echo $proID['productName']; ?></b>
					</h2>
				</div>
				<div>
					<span><b>Giá:</b></span>
					<span><?php echo number_format($proID['unitPrice']); ?> <b>đ</b></span>
				</div>
				<div>
					<span><b>Mô tả:</b></span>
					<span class="text">
						<?php echo $proID['description']; ?>
					</span>
				</div>
			</div>
			<div id="number-detail" class="col-4">
				<div>
					<h4>
						<b>Số lượng</b>
					</h4>
				</div>
				<form action="<?php echo PATH; ?>">
					<input type="hidden" name="controller" value="home">
					<input type="hidden" name="action" value="addtocart">
					<input type="hidden" name="id" value="<?php echo $proID['productID']?>">
					<input type="number" max="<?php echo $proID['quantity']?>" name="quantity"   value="1" >
					<div id="button">
						<button type="submit" class="btn btn-success">Thêm vào giỏ hàng</button>
						<button class="btn btn-danger">
							<a href="">Mua ngay</a>
						</button>
					</div>
				</form>
			</div>
		</div>
		<div id="related-products" class="row">
			<h5><b>Sản phẩm  liên quan</b></h5>
			<!-- <div class="owl-carousel owl-theme">
		    	<div class="item">
		    		<div class="cart">
			    		<div class="cart-img">
			    			<a href="">
			    				<img src="<?php PATH; ?>assets/image/fruit/mang_cut.jpg">
			    			</a>
			    		</div>
			   
		    			<div class="cart-title">
		    				<span>Măng cụt</span>
		    			</div>
						<div class="cart-price">
							<span class="price-new">Giá mới <b>đ</b></span>
					    	<span class="price-old"><s>Giá cũ <b>đ</b></s></span>
						</div>
						<div class="cart-link">
							<a href="#" id="cart-link1">
								<i class="fa fa-cart-plus"></i> Thêm vào giỏ
							</a>
							<a href="#" id="cart-link2">
								<i class="fa fa-shopping-cart"></i> Mua nhanh
							</a>
						</div>
					</div>
		    	</div>
			    <div class="item"><h4>2</h4></div>
				<div class="item"><h4>2</h4></div>
				<div class="item"><h4>2</h4></div>
				<div class="item"><h4>2</h4></div>
				<div class="item"><h4>2</h4></div>
				<div class="item"><h4>2</h4></div>
				<div class="item"><h4>2</h4></div>
				<div class="item"><h4>2</h4></div>
				<div class="item"><h4>2</h4></div>
				<div class="item"><h4>2</h4></div>
				<div class="item"><h4>2</h4></div>
			</div> -->
		</div>
	</div>
</div>
