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
