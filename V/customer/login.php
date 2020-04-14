<div class="wrapper">
	<div id="content-login" class="container">
        <div class="path row">
			<ol class="breadcrumb">
			    <li> 
			    	<i class="fa fa-home"></i><a href="<?php PATH; ?>?controller=home&aciton=index"> Trang chủ</a> 
			    </li>
			    <li class="active"> 
			    	<i class="fa fa-caret-right"></i> Đăng nhập
			    </li>
			</ol>
		</div>
        <div id="login" class="row">
        	<div class="col-6" id="img-login">
        		<img src="<?php PATH; ?>assets/image/logo/login.jpg">
	        	<div>
		        	<a href="<?php PATH; ?>?controller=customer&action=register">
		        		<h5>Chưa có tài khoản?</h5>
		        	</a>
		        </div>
        	</div>

        	<div class="col-6">
        		<form method="post" action="" id="formLogin">
	        		<div>
	        			<p>Email đăng nhập</p>
	        			<input type="text" id="txtEmail" name="userName" placeholder="Email đăng nhập">
						<label id="messEmail"></label>
	        		</div>
	        		<div>
	        			<p>Mật khẩu</p>
	        			<input type="password" id="txtPass" name="Pass" placeholder="Mật khẩu">
						<label id="messPass"></label>
	        		</div>
	        		<input type="button" class="btn btn-success" onclick="sentLogin()" value="Đăng nhập">
        		</form>
        	</div>
        </div>
	</div>
</div>
