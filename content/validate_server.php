<?php
global $name_err, $email_error, $avatar_error;
if (isset($_REQUEST['btn_validate'])) {
    extract($_REQUEST);
    if (isset($_REQUEST['name']) && strlen($name) == 0) {
        $name_err = "Không để trống họ và tên!";
    } else if (strlen($ho_ten) > 20) {
        $name_err = "Họ và tên không vượt quá 20 ký tự!";
    }
    if (strlen($email) == 0) {
        $email_error = "Không để trống email!";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Không đúng định dạng email!";
    }
    if (strlen($diem) > 0 && ($diem < 0 || $diem > 10)) {
        $avatar_error = "Điểm phải từ 0 đến 10!";
    }
}
