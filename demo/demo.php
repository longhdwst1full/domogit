<?php

require "../dao/pdo.php";
require "../dao/categories.php";


// thêm mới danh sách loại
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    loai_insert($name);
}


// xóa loại
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    loai_delete($id);
}

// load lại danh sach loại
$dsloai = loai_selecAll();
// var_dump($dsloai);

foreach ($dsloai as $value) {
    extract($value);
    $delete_link = "demo.php?id=" . $id;
    $edit_link = "edit.php?id=" . $id;
    echo '<li>
    <a href="#">' . $name . "</a> 
    <a href=$edit_link>Sửa</a> 
     -<a href=$delete_link>X</a>
      </li>";
}


?>

<br>
<br>
<form action="demo.php" method="post">
    <input type="text" name="name">
    <br>
    <input type="submit" value="Thêm mới">
</form>