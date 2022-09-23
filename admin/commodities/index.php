<?php
require_once "../../dao/pdo.php";
require_once "../../dao/commodities.php";
require_once "../../dao/categories.php";
require "../../global.php";
extract($_REQUEST);

if (exist_params("btn_list")) {
    
    $items = category_id_commodities();
    $VIEW_NAME = "list.php";
} else if (exist_params("btn_insert")) {
    // lấy dữ liệu từ form
    $name = $_POST["name"];
    $price = $_POST["price"];
    $sell = $_POST["sell"];
    $view = $_POST["view"];
    $description = $_POST["description"];
    $category_id = $_POST["category_id"];
    $date_add = $_POST["date_add"];
    $special = $_POST["special"];
    $forder_img = save_file("image",$UPLOAD_URL);
    // insert db
    commodities_insert($name, $price, $sell, $forder_img, $date_add, $description, $special, $view, $category_id);
    // show dữ liệu
    $items = category_id_commodities();
    $VIEW_NAME = "list.php";
} else if (exist_params("btn_edit")) {
    // lấy dữ liệu từ form
    $id = $_REQUEST['id'];
    $category_all=loai_selecAll(); 
    $commodity_info = commodities_select_by_id($id);
    extract($commodity_info);

   
    // show dữ liệu
    $VIEW_NAME = "edit.php";
}
 else if (exist_params("btn_delete")) {
    // lấy dữ liệu từ form
    $id = $_REQUEST['id'];
   
    commodities_delete($id);


    // show dữ liệu
    // $items = category_id_commodities();
    $VIEW_NAME = "list.php";
} else if (exist_params("btn_update")) {
    // lấy dữ liệu từ form
    $id = $_POST['id'];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $sell = $_POST["sell"];
    $view = $_POST["view"];
    $description = $_POST["description"];
    $category_id = $_POST["category_id"];
    $date_add = $_POST["date_add"];
    $special = $_POST["special"];
    
    $image_new = $_FILES["image_new"];
    if ($image_new['size'] > 0) {
        $forder_img = save_file("image_new",$UPLOAD_URL);
    } else {
        $forder_img = $_POST['image'];
    }
   
    commodities_update($id, $name, $price, $sell, $forder_img, $date_add, $description, $special, $view, $category_id);


    // show dữ liệu
    $items = category_id_commodities();
    $VIEW_NAME = "list.php";
} else {
    require_once "../../dao/categories.php";
   
    $category_all=loai_selecAll();   
     $VIEW_NAME = "add.php";
}
require "../index.php";
