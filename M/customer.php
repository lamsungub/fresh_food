<?php
class Cutomer
{
	public static function getAllCutomer(){
		//Bước 1: Kết nối CSDL
		$db = DB::connection();
		//Bước 2: Tạo truy vấn lấy dữ liệu
		$sql = "SELECT * FROM cutomers WHERE fullName = '$fullName' OR email = '$email'";
    //lấy toàn bộ sản phẩm 
		//Bước 3: Chuẩn bị tiến hành truy vấn
		 $result = mysqli_query($db, $sql);
      
    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
	    if (mysqli_num_rows($result) > 0)
	    {
	        // Sử dụng javascript để thông báo
	        echo '<script language="javascript">alert("Thông tin đăng nhập bị sai"); window.location="register.php";</script>';
	          
	        // Dừng chương trình
	        die ();
	    }
	    else {
	        // Ngược lại thì thêm bình thường
	        $sql = "INSERT INTO cutomers (fullName, password, email) VALUES ('$fullName','$password','$email')";
	          
	        if (mysqli_query($conn, $sql)){
	            echo '<script language="javascript">alert("Đăng ký thành công"); window.location="register.php";</script>';
	        }
	        else {
	            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
	        }
	    }
	}
}

?>