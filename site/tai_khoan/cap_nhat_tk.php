<?php
require '../../global.php';
require '../../dao/customer.php';
var_dump($_POST);
// echo $_FILES['avatar'];
extract($_REQUEST);
// var_dump($_REQUEST);
// var_dump($_POST['image_old']);
// die;
if (exist_params("btn_update")) {
    $file_name = save_file("image_new", "$IMAGE_DIR/users/");
    $hinh = $file_name ? $file_name : $image_old;
    try {
        if (customer_check_email_exits($email)) {
            $MESSAGE = "Email  này đã được sử dụng!";
            $VIEW_NAME = "cap_nhat_tk_form.php";
        } else {
            customer_update_optimize($id,  $name,  $hinh);
            $MESSAGE = "Cập nhật thông tin thành viên thành công!";
            $_SESSION['user'] = customer_select_by_id($id);
            $VIEW_NAME = "$SITE_URL/trang_chinh/home.php";
        }
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thông tin thành viên thất bại!";
    }
} else {
    extract($_SESSION['user']);
}
$VIEW_NAME = "tai_khoan/cap_nhat_tk_form.php";
require '../layout.php';
