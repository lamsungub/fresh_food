<div class="wrapper">
	<div class="container">
		<div class="path row">
        	<ol class="breadcrumb">
			    <li> 
			    	<i class="fa fa-home"></i><a href="<?php PATH; ?>?controller=home&aciton=index"> Trang chủ</a> 
			    </li>
			    <li class="active"> 
			    	<i class="fa fa-caret-right"></i> Sản phẩm
			    </li>
			</ol>
		</div>
		<div class="row">
			<div class="col-3" id="menu-cat">
				<div>
					<p class="cat1">Danh mục sản phẩm</p>
					<ul class="item1">
						<li>
							<a href="">
								<i class="fa fa-arrow-circle-right"></i> Thực phẩm tươi
							</a>
							<ul>
								<li>
									<a href="">
										<i class="fa fa-angle-double-right"></i> Hải sản
									</a>
								</li>
								<li>
									<a href="">
										<i class="fa fa-angle-double-right"></i> Thịt tươi
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="">
								<i class="fa fa-arrow-circle-right"></i> Trái cây
							</a>
						</li>
						<li>
							<a href="">
								<i class="fa fa-arrow-circle-right"></i> Rau-củ-quả
							</a>
						</li>
					</ul>
				</div>
				<div>
					<p class="cat2">Giá sản phẩm</p>
					<ul class="item2">
						<li>
							<input type="radio" name="prince[]" value=""> Dưới 100k
						</li>
						<li>
							<input type="radio" name="prince[]" value=""> Từ 100k-200k
						</li>
						<li>
							<input type="radio" name="prince[]" value=""> Từ 200k-500k
						</li>
						<li>
							<input type="radio" name="prince[]" value=""> Trên 500k
						</li>
						<li>
							<input type="radio" name="prince[]" value="" checked="true"> Tất cả giá
						</li>
					</ul>
				</div>
			</div>
			<div class="col-9">
				<div class="row"  id="content-category">
					<?php
						$products = $data['product'];
						foreach($products as $key => $value){
					?>
						<div class="item col-4">
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
			<div class="row" id="pagination">
				<?php 
					for ($i=1; $i <= 10 ; $i++) { 
						echo "<a href='?controller=product&action=product?page=$i'>Trang -$i</a>";
					}
				 ?>
			</div>
		</div>
	</div>
</div>


