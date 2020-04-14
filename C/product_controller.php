<?php
require_once("C/base_controller.php");
require_once ("M/product.php");

class ProductController extends BaseController{
	public function __construct(){
		//Khai báo thư mục chứa các view của Home
		$this->folder = "product";
	}

	
	public function product(){ 
		$arrPro = product::getAllProduct();
		$data = array('product' => $arrPro);
		// đổ dữ liệu,  biểu diễn ra view tương ứng
		$this->render("product", $data);
	}

	public function detail(){
		$arrProID = product::getAllProductById($_GET['id']);
		$data = ['product' => $arrProID];
		$this->render("detail",$data);
	}
}