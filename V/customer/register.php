<div class="wrapper">
	<div id="content-register" class="container">
        <div class="path row">
        	<ol class="breadcrumb">
			    <li> 
			    	<i class="fa fa-home"></i><a href="<?php PATH; ?>?controller=home&aciton=index"> Trang chủ</a> 
			    </li>
			    <li class="active"> 
			    	<i class="fa fa-caret-right"></i> Đăng ký
			    </li>
			</ol>
		</div>
    	<div id="register" class="row">
    		<div class="col-6">
        		<form method="post" action="" id="formRegister">
	        		<div>
	        			<p>Họ và tên</p>
	        			<input type="text" id="txtName" name="" placeholder="OganicStore">
	        			<label id="messName"></label>
		        	</div>
		        	<div>
	        			<p>Email</p>
	        			<input type="text" id="txtEmail" name="" placeholder="Oganic2020@gmail.com">
	        			<label id="messEmail"></label>
		        	</div>
		        
		        	<div>
	        			<p>Mật khẩu</p>
	        			<input type="password" id="txtPass" name="">
	        			<label id="messPass"></label>
		        	</div>
		        	<div>
	        			<p>Nhập lại mật khẩu</p>
	        			<input type="password" id="txtRePass" name="">
	        			<label id="messRePass"></label>
		        	</div>
		        	
	        		<input type="button" onclick="sentRegister()" class="btn btn-success" value="Đăng ký">
	        	</form>
    		</div>
    		<div class="col-6" id="img-register">
    			<img src="<?php PATH; ?>assets/image/logo/register.jpg">
    			<div>
    				<a href="<?php PATH; ?>?controller=customer&action=login">
    					<h5>Đã có tài khoản?</h5>
    				</a>
    			</div>
    		</div>
    	</div>
	</div>
</div>
