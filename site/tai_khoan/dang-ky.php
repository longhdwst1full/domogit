<?php
require '../../global.php';
require '../../dao/customer.php';
extract($_REQUEST);
if (exist_params("btn_register")) {
    if (!customer_exist($id)) {
        $MESSAGE = "Mã này đã được sử dụng!";
    } else {
        $file_name = save_file("up_hinh", "$IMAGE_DIR/users/");
        $hinh = $file_name ? $file_name : "user.png";
        try {
            customer_insert($password, $name, $kich_hoat, $hinh, $email, $vai_tro);
            $MESSAGE = "Đăng ký thành viên thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Đăng ký thành viên thất bại!";
        }
    }
} else {
    global $id, $password, $name, $email, $hinh, $kich_hoat, $vai_tro, $password2;
}
$VIEW_NAME = "tai_khoan/dang-ky-form.php";
require '../layout.php';
