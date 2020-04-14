<div class="wrapper">
	<div class="container">
		<div class="path row">
        	<ol class="breadcrumb">
			    <li> 
			    	<i class="fa fa-home"></i><a href="<?php PATH; ?>?controller=home&aciton=index"> Trang chủ</a> 
			    </li>
			    <li class="active"> 
			    	<i class="fa fa-caret-right"></i> Giỏ hàng
			    </li>
			</ol>
		</div>
		<div class="col-12 table-cart">
			<form >
				<table border="1px" width="100%" id="detail-cart">
					<tr>
						<th >Ảnh			</th>
						<th >Sản phẩm		</th>
						<th >Đơn giá		</th>
						<th >Số lượng		</th>
						<th >Thành tiền 	</th>
						<th >Xóa			</th>
					</tr>

				<?php 
					$total = 0;
					foreach ($data['products'] as $key => $value): 
					$total += $value['quantity']*$value['detail']['unitPrice'];
				?>

					<tr>
						<td id="table-img">
							<img src="<?php PATH; ?>assets/image/products/<?php echo $value['detail']['image'];?>">
						</td>
						<td id="table-name"> <?php echo $value['detail']['productName']; ?></td>
						<td id="table-price"> <?php echo number_format($value['detail']['unitPrice']); ?> <span>đ</span></td>
						<td id="table-quantity">
							<div>
								<input type="number" min="1" name="" class="number" value="<?php echo $value['quantity']; ?>">
								<span>Kg</span>
								<button type="submit" class="btn btn-success">
									<i class="fa fa-refresh"></i>
								</button>
							</div>
						</td>
						<td id="table-total"><?php echo number_format($value['quantity']*$value['detail']['unitPrice']); ?></td>
						<td id="table-del">
							<button class="del">
								<i class="fa fa-times-circle btn btn-danger"></i>
							</button>
						</td>
					</tr>
				<?php 
					endforeach;
				?>
					<tr>
						<th colspan="4">Tổng tiền</th>
						<th colspan="2"><?php echo number_format($total); ?> <span>đ</span></th>
					</tr>
				</table>
				<div id="button-click">				
					<div >
						<button class="btn btn-danger">Tiếp tục mua hàng</button>
					</div>
					<div>
						<form action="checkout.php" method="post">
							<a href="checkout.php">
								<button type="button" class="btn btn-success" name="" id="btnCheck">Tiến hành thanh toán</button> 
							</a>
						</form>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
