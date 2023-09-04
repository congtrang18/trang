<?php
// Thông tin kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$database = "tuhoc";

try {
    // Kết nối cơ sở dữ liệu bằng PDO
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
   
    // Thiết lập chế độ báo lỗi PDO thành ngoại lệ
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "kết nối cơ sở dữ liệu thành công";

} catch (PDOException $e) {
    // Xử lý ngoại lệ nếu có lỗi kết nối CSDL hoặc truy vấn
    echo "Lỗi kết nối CSDL: " . $e->getMessage();
}
?>