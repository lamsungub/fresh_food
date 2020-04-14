var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true
});


function sentLogin() {
//Tạo biến 
	var email = document.getElementById('txtEmail').value;
	var reg_email = /^([0-9a-zA-Z_\.\-])+\@(([0-9a-zA-Z])+\.)+([0-9a-zA-Z]{2,4}$)/;

	var password = document.getElementById('txtPass').value;
	var reg_pass = /[a-zA-Z0-9]/;

	var countTrue = 0;
//Điều kiện email
	if (email == "") {
		document.getElementById('messEmail').innerHTML = "Email đăng nhập không được để trống";
	}
	else{
		if (reg_email.test(email) == false) {
			document.getElementById('messEmail').innerHTML = "Email không đúng định dạng";
		}
		else{
			document.getElementById('messEmail').innerHTML = "";
			countTrue += 1;
		}
	}
//Điều kiện pass
	if (password == "") {
		document.getElementById('messPass').innerHTML = "Password không để trống";
	}
	else{
		if (reg_pass.test(password) == false) {
			document.getElementById('messPass').innerHTML = "Password phải đủ 8 ký tự";
		}
		else{
			document.getElementById('messPass').innerHTML = "";
			countTrue +=1;
		}
	}
//Điều kiện để submit
	if (countTrue != 2) {
		return false;
	}
	else{
		document.getElementById('formLogin').submit();
	}
}

function sentRegister() {
//Tạo biến
	var name = document.getElementById('txtName').value;
	var reg_name = /[a-zA-Z]/;

	var email = document.getElementById('txtEmail').value;
	var reg_email = /^([0-9a-zA-Z_\.\-])+\@(([0-9a-zA-Z])+\.)+([0-9a-zA-Z]{2,4}$)/;

	var pass = document.getElementById('txtPass').value;
	var reg_pass = /[a-zA-Z0-9]/;

	var retypePass = document.getElementById('txtRePass').value;

	var countTrue = 0;
//Điều kiện tên
	if (name == "") {
		document.getElementById('messName').innerHTML = 
		"Họ tên không được để trống";
	}
	else{
		if (reg_name.test(name) == false) {
			document.getElementById('messName').innerHTML = 
			"Họ tên không đúng định dạng";
		}
		else{
			document.getElementById('messName').innerHTML = "";
			countTrue += 1;
		}
	}
//Điều kiện email
	if (email == "") {
		document.getElementById('messEmail').innerHTML = 
		"Email không được để trống";
	}
	else{
		if (reg_email.test(email) == false) {
			document.getElementById('messEmail').innerHTML = 
			"Email không đúng định dạng";
		}
		else{
			document.getElementById('messEmail').innerHTML = "";
			countTrue += 1;
		}
	}
//Điều kiện pass
	if (pass == "") {
		document.getElementById('messPass').innerHTML = 
		"Mật khẩu không được để trống";
	}
	else{
		if (reg_pass.test(pass) == false) {
			document.getElementById('messPass').innerHTML = 
			"Mật khẩu không đúng định dạng";
		}
		else{
			document.getElementById('messPass').innerHTML = "";
			countTrue += 1;
		}
	}
//Điều kiện pass nhập lại
	if (retypePass == "") {
		document.getElementById('messRePass').innerHTML =
		"Mật khẩu nhập lại không được để trống";
	}
	else{
			if (pass != retypePass) {
				document.getElementById('messRePass').innerHTML = 
				"Mật khẩu nhập lại phải trùng với mật khẩu vừa đăng ký";
			}
			else{
				document.getElementById('messRePass').innerHTML = "";
				countTrue += 1;
			}
	}
//Điều kiện để submit
	if (countTrue != 4) {
		return false;
	}
	else{
		document.getElementById('formRegister').submit();
	}
}

function addToCart(productName) {
	
}