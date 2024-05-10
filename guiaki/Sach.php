<?php
 include_once "database.php";

// Truy vấn lấy 5 bản ghi sách từ CSDL
$sql = "SELECT * FROM Sach LIMIT 5";
$result = $db->query($sql)->fetchAll();

// Hiển thị dữ liệu sách
if (count($result) > 0) {
    echo "<h2>Dữ liệu sách</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Mã sách</th><th>Tên sách</th><th>Số lượng</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["MaSach"]. "</td><td>" . $row["TenSach"]. "</td><td>" . $row["SoLuong"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Không có dữ liệu sách";
}

?>