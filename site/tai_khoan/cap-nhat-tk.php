<?php
require '../../global.php';
require '../../dao/customer.php';
extract($_REQUEST);
var_dump($_REQUEST);
// var_dump($_POST['image_new']);
// die;
if (exist_params("btn_update")) {
    $file_name = save_file("image_new", "$IMAGE_DIR/users/");
    $hinh = $file_name ? $file_name : $image_old;
    try {
        customer_update_optimize($id,  $name,  $hinh);
        $MESSAGE = "Cập nhật thông tin thành viên thành công!";
        $_SESSION['user'] = customer_select_by_id($id);
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thông tin thành viên thất bại!";
    }
} else {
    extract($_SESSION['user']);
}
$VIEW_NAME = "tai_khoan/cap-nhat-tk-form.php";
require '../layout.php';
