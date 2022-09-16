<?php
require './pdo/pdo.php';

$name= "Đồng hồ đeo tay";
$id= "1";

// update

$sql = "update categories set name=? where id=? ";
try {
    $stmt = $connect->prepare($sql);
    $stmt->execute(array($name, $id));
    echo "Cập nhập thành công";
} catch (PDOException $e) {
    echo "Lỗi cập nhập";
}


// truy vấn 
// lấy tất cả loại hàng từ bảng loại
// truy vấn 1 giá trị 


$sql= "select * from categories";
$stmt=$connect ->prepare($sql);
$stmt->execute();
$rows=$stmt->fetchAll();
// đọc và hiển thị trong ds trả về 

foreach ($rows as $row){
    echo $row["name"]."<br>";

}


// truy vấn 1 bản ghi
// lấy tất cả loại hàng từ bảng loại
// truy vấn 1 giá trị 


$sql= "select * from categories where id=?";
$stmt=$connect ->prepare($sql);
$stmt->execute(array($id));
$rows=$stmt->fetch();

    echo $row["name"]."<br>";

unset($connect);

