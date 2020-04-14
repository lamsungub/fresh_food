<?php
require_once("C/base_controller.php");

class PageController extends BaseController{
	public function __construct(){
		//Khai báo thư mục chứa các view của Product
		$this->folder = "page";
	}

	public function messenger(){
		$this->render("messenger");
	}
}
?>