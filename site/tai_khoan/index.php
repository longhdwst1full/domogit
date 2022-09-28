<style>
    img {
        width: 100px !important;
        height: 100px !important;
        object-fit: cover;
    }
</style>
<?php

require_once "../../global.php";
require "../../dao/customer.php";


extract($_REQUEST);

if (isset($_SESSION['user'])) {


    if (exist_params("update_tk", $_REQUEST)) {
        $id = $_SESSION['user']['id'];
        $customer_info = customer_select_by_id($id);
        extract($customer_info);
        // var_dump($customer_info);
        $VIEW_NAME = "cap_nhat_tk_form.php";
    } else if (exist_params("doi-mk", $_REQUEST)) {
        $VIEW_NAME = "doi-mk-form.php";
    } else if (exist_params("update_tk_customer")) {
        var_dump($_REQUEST);
        die;
        $id = $_POST['id'];
        $email = $_POST['email'];
        $name = $_POST["name"];


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
        var_dump($datas);
        var_dump($_FILES['image_new']);

        $VIEW_NAME = "cap_nhat_tk.php";
        die();
    } else {

        $VIEW_NAME = "$SITE_URL/trang_chinh/home.php";
    }
} else {
    if (exist_params("btn_register_new")) {
        $VIEW_NAME = "dang-ki-form.php";
    } else if (exist_params("quen-mk")) {
        $VIEW_NAME = "quen-mk-form.php";
    } else {

        $VIEW_NAME = "$SITE_URL/trang_chinh/home.php";
    }
}

require "../layout.php";
