<div class="wrapper">
		<div class="container">
			<div class="path row">
            	<ol class="breadcrumb">
				    <li> 
				    	<i class="fa fa-home"></i><a href="<?php PATH; ?>?controller=home&aciton=index"> Trang chủ</a> 
				    </li>
				    <li class="active"> 
				    	<i class="fa fa-caret-right"></i> Tìm kiếm
				    </li>
				</ol>
			</div>
			<div id="search">
				<div class="row">
				<?php
					$search = $data['products'];
					if (empty($search)) {
						echo "không tìm thấy dữ liệu";
					}
					foreach($search as $key => $value){			
				?>
			    	<div class="item col-3" >
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
		</div>
	</div>
