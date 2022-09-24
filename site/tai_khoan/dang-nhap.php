<?php

require "../../global.php";
require "../../dao/customer.php";

extract($_REQUEST);

if (exist_params("btn_login")) {
    $user = customer_select_by_id($id);
    if ($user) {
        if ($user['password'] == $password) {
            $MESSAGE = "Đăng nhập thành công!";
            if(exist_params('ghi_nho')){
                add_cookie('id',$id,30);
                add_cookie('password',$password,30);
            }
            else{
                delete_cookie('id');
                delete_cookie('password');
            }
            // ghi vào session để kiểm tra 
            $_SESSION["user"] = $user;
            // Xử lý ghi nhớ tài khoản
            // Quay trở lại trang được yêu cầu
            if(isset($_SESSION['request_uri'])){
                header("location: " .$_SESSION['request_uri']);
            }
        } else {
            $MESSAGE = "Sai mật khẩu!";
        }
    } else {
        $MESSAGE = "Sai mã đăng nhập!";
    }
} else {
    if (exist_params("btn_logoff")) {
        session_unset();
    }
    $id = get_cookie("id");
    $password = get_cookie("password");
}

$VIEW_NAME = "tai_khoan/dang-nhap-form.php";
require '../layout.php';
