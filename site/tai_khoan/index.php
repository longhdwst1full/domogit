<style>

    img {
        width: 100px !important;
        height: 100px !important;
        object-fit: cover;
    }
    </style>
<?php

require "../../global.php";
require "../../dao/customer.php";


extract($_REQUEST);

if (isset($_SESSION['user'])) {


    if (exist_params("update_tk", $_REQUEST)) {
        $VIEW_NAME = "cap-nhat-tk-form.php";
    } else if (exist_params("doi-mk", $_REQUEST)) {
        $VIEW_NAME = "doi-mk-form.php";
    } else if (exist_params("btn_logoff", $_REQUEST)) {
        
        session_unset();
        $VIEW_NAME = "$SITE_URL/trang_chinh/home.php";
        require "../layout.php";
    } else {

        $VIEW_NAME = "home.php";
    }
} else {
    $VIEW_NAME = "$SITE_URL/trang_chinh/home.php";
}

require "../layout.php";
