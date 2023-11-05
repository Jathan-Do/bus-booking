<?php
// Thông tin kết nối đến cơ sở dữ liệu
$host = 'localhost'; // Thay thế bằng tên host hoặc địa chỉ IP của máy chủ MySQL của bạn (thường là localhost trong môi trường phát triển)
$dbname = 'futabus-booking';
$username = 'root'; // Tài khoản root mặc định
$password = ''; // Mật khẩu là rỗng trong môi trường phát triển XAMPP

// Tạo kết nối đến cơ sở dữ liệu
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Lỗi kết nối đến cơ sở dữ liệu: " . $e->getMessage());
}

// Truy vấn dữ liệu từ bảng "bus_schedule"
try {
    $query = $pdo->query("SELECT * FROM bus_schedule");
    $data = $query->fetchAll(PDO::FETCH_ASSOC);

    // Chuyển dữ liệu thành JSON
    $json_data = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

    // Trả về dữ liệu dưới dạng JSON cho việc gọi API từ thiết bị khác
    header('Content-Type: application/json');
    echo $json_data;
} catch (PDOException $e) {
    die("Lỗi truy vấn cơ sở dữ liệu: " . $e->getMessage());
}
