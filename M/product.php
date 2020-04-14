<?php
class Product
{
	public static function getAllProduct(){
		//Bước 1: Kết nối CSDL
		$db = DB::connection();
		//Bước 2: Tạo truy vấn lấy dữ liệu
		$sql = "SELECT * FROM products"; //lấy toàn bộ sản phẩm 
		//Bước 3: Chuẩn bị tiến hành truy vấn
		$stmt = $db->prepare($sql);
		$stmt->execute();
		//Bước 4: Tiếp nhận kết quả trả về
		$records = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$records[] = $row;
		}
		return $records;
	}
	
	public static function getAllProductById($id){
					//b1: tạo kết nối csdl
			$db = DB::connection();
		//b2: tạo truy vấn lấy dữ liệu
			$sql = "SELECT * FROM products WHERE productID = ?"; //laay toàn bộ sản phẩm theo id
			//b3: chuẩn bị truy vấn
			$stmt = $db->prepare($sql);
			$stmt -> bindValue(1, $id);
			$stmt -> execute();
			$item = $stmt->fetch(PDO::FETCH_ASSOC);
			return $item;
		}
	public static function getProductBySearch($name){
		//Bước 1: Kết nối CSDL
		$db = DB::connection();
		//Bước 2: Tạo truy vấn lấy dữ liệu
		$sql = "SELECT * FROM products WHERE productName LIKE ?";
		$stmt = $db->prepare($sql);
		$stmt -> bindValue(1, $name.'%');
		$stmt->execute();
		
		$records = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$records[] = $row;
		}
		return $records;
	}
}

?>