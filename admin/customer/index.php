<?php
require_once "../../dao/pdo.php";
require_once "../../dao/customer.php";
require "../../global.php";
extract($_REQUEST);

if (exist_params("btn_list")) {
    $items = customer_selecAll();
    $VIEW_NAME = "list.php";
} else if (exist_params("btn_insert")) {
    // lấy dữ liệu từ form
    $password = $_POST["password"];
    $name = $_POST["name"];
    $kich_hoat = $_POST["kich_hoat"];
    // $avatar = $_FILES["avatar"];
    $email = $_POST["email"];
    $vai_tro = $_POST["vai_tro"];

    $file_name = save_file("avatar", "$IMAGE_DIR/users/");
    $forder_img = $file_name ? $file_name : "user.png";
    // insert db
    customer_insert($password, $name, $kich_hoat, $forder_img, $email, $vai_tro);
    // show dữ liệu
    $items = customer_selecAll();
    $VIEW_NAME = "list.php";
} else if (exist_params("btn_edit")) {
    // lấy dữ liệu từ form
    $id = $_REQUEST['id'];
    $customer_info = customer_select_by_id($id);
    extract($customer_info);


    // show dữ liệu
    $items = customer_selecAll();
    $VIEW_NAME = "edit.php";
} else if (exist_params("btn_delete")) {
    // lấy dữ liệu từ form
    $id = $_REQUEST['id'];

    customer_delete($id);


    // show dữ liệu
    $items = customer_selecAll();
    $VIEW_NAME = "list.php";
} else if (exist_params("btn_update")) {
    // lấy dữ liệu từ form
    $id = $_POST['id'];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $kich_hoat = $_POST["kich_hoat"];
    $file_upload = $_FILES["avatar_new"];
    if ($file_upload['size'] > 0) {
        $file_name =uniqid()  . basename($file_upload['name']);
        $target_path = "$IMAGE_DIR/users/" .  $file_name;
       
        move_uploaded_file($file_upload['tmp_name'], $target_path);
       
    } else {
        $file_name = $_POST['avatar_old'];
    }
    $email = $_POST["email"];
    $vai_tro = $_POST["vai_tro"];
    customer_update($id, $password, $name, $kich_hoat, $file_name, $email, $vai_tro);


    // show dữ liệu
    $items = customer_selecAll();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
require "../index.php";
