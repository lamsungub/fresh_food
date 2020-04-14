<?php
class DB{
	//self là bản thân nó gọi đến chính đối tượng mà nó.
	//this là có thể gọi được các thuộc tính cả của cha khi kế thừa đối tượng cha
	private static $db = NULL; //privat
	public static function connection(){
		if(!isset(self::$db)){
			try{
				self::$db = new PDO('mysql:host=localhost;dbname=csdl', 'root', '');
      			self::$db->exec("SET NAMES 'utf8'");
			}catch(PDOException $ex){
				echo "Lỗi trong quá trình kết nối CSDL: ". $ex->getMessage();
			}
		}
		return self::$db;
	}
}
?>