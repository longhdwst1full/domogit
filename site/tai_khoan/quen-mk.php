<?php
require '../../global.php';
require '../../dao/customer.php';
extract($_REQUEST);
$VIEW_NAME = "tai_khoan/quen-mk-form.php";
if (exist_params("btn_forgot")) {
    $user = customer_select_by_id($id);
    if ($user) {
        if ($user['email'] != $email) {
            $MESSAGE = "Sai địa chỉ email!";
        } else {
            $MESSAGE = "Mật khẩu của bạn là: " . $user['password'];
            $VIEW_NAME = "tai_khoan/dang-nhap-form.php";
            global $id, $password;
        }
    } else {
        $MESSAGE = "Sai tên đăng nhập!";
    }
}
require '../layout.php';
