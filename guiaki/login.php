
<?php
 include_once "database.php";
 

// Lấy thông tin đăng nhập từ form
$username = $_POST['username'];
$password = $_POST['password'];

// Kiểm tra trong CSDL
$sql = "SELECT * FROM User WHERE TenUser='$username' AND MatKhau='$password'";
$result = $db->query($sql)->fetchAll();

if (count($result) > 0) {
    // Đăng nhập thành công
    $_SESSION['username'] = $username;
    header("Location: Sach.php");
} else {
    // Đăng nhập thất bại
    echo "Tên người dùng hoặc mật khẩu không chính xác!";
}
?>