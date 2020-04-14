<?php
//Tạo ra một mảng các controller sẽ được khai báo trong website
$C = array(
	'home'	=>	['index','cart','help','introduce','policy','product','search','addtocart'],
	'customer'=>['login','register'],
	'product' => ['product','detail'],
	'page'		=>	['error']
);

//Kiểm tra sự tồn tại của controller và action do người dùng gửi yêu cầu
if(!array_key_exists($controller, $C) || !in_array($action, $C[$controller])){
	$controller = "page";
	$action = "messenger";
}

//Nhúng file định nghĩa controller
include_once("C/". $controller. "_controller.php");

//Tạo tên lớp trong controller tương ứng
$klass = str_replace("_", "", ucwords($controller,"_")). "Controller";

//Khởi tạo đối tượng có kiểu $klass
$controller = new $klass;
//Truy cập tới phương thức $action trong $controller
$controller->$action();
?>












