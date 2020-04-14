<?php
require_once("C/base_controller.php");
require_once("M/product.php");

class HomeController extends BaseController{
	public function __construct(){
		//Khai báo thư mục chứa các view của Home
		$this->folder = "home";
	}

	
	public function index(){ // tạo một action đã đăng ký trong router
		// // lấy dữ liệu từ model
		$arrPro = product::getAllProduct();
		$data = array('product' => $arrPro);
		// đổ dữ liệu,  biểu diễn ra view tương ứng
		$this->render("home", $data);
	}
	// public function product(){
	// 	$this->render("product");
	// }

	public function cart() {
		if(isset($_COOKIE['cart'])) {
			$cart = $_COOKIE['cart'];
			$products = explode(';', $cart);
			$newProducts = [];
			foreach ($products as $index => $product) {
				$arr = explode('|', $product);
				$newProducts[] = [
					'detail' => Product::getAllProductById($arr[0]),
					'quantity' => $arr[1],
				];
			}
		} else {
			$newProducts = [];
		}
		$data = array('products' => $newProducts);
		$this->render("cart", $data);
	}
	public function addtocart(){
		$this->render("addtocart");
	}
	public function help(){
		$this->render("help");
	}
	public function introduce(){
		$this->render("introduce");
	}
	public function policy(){
		$this->render("policy");
	}
	public function search(){
		$name = (isset($_POST['search']) && $_POST['search'] !== '')? $_POST['search']: " ";
		$arrPro = Product::getProductBySearch($name);
		$data = array('products'=>$arrPro);
		$this->render("search",$data);
	}
}
?>









