<?php
require_once("C/base_controller.php");

class CustomerController extends BaseController{
	public function __construct(){
		//Khai báo thư mục chứa các view của Home
		$this->folder = "customer";
	}

	
	public function login(){
		$cutomer = Cutomer::getAllCutomer();
		$data = array('cutomer' => $cutomer);
		// đổ dữ liệu,  biểu diễn ra view tương ứng
		$this->render("login",$data);
	}

	public function register(){
		$this->render("register");
	}
}