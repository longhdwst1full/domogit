<?php
require_once '../../global.php';
require_once '../../dao/customer.php';
extract($_REQUEST);
if (exist_params("btn_forgot")) {
    $user = customer_check_email($email);
    // var_dump($user);
    if ($user) {
        // extract($user);
        customer_update($user['id'], $password, $user['name'], $user['kich_hoat'], $user['avatar'],$email, $user['vai_tro']);
        $MESSAGE = "Cập nhập mật khẩu thành công";
        $VIEW_NAME = "tai_khoan/dang-nhap-form.php";
        global $id, $password;
        
    } else {
        $MESSAGE = "Sai email, email không tồn tai !";
        $VIEW_NAME = "tai_khoan/quen-mk-form.php";

    }
}
require '../layout.php';
