<?php

require "../../global.php";


extract($_REQUEST);


if (exist_params("gioi_thieu", $_REQUEST)) {
    $VIEW_NAME = "gioi-thieu.php";
} else if (exist_params("lien_he", $_REQUEST)) {
    $VIEW_NAME = "lien-he.php";
} else if (exist_params("gop_y", $_REQUEST)) {
    $VIEW_NAME = "gop-y.php";
} else if (exist_params("hoi_dap", $_REQUEST)) {
    $VIEW_NAME = "hoi-dap.php";
} else if (exist_params("btn_logoff", $_REQUEST)) {

    session_unset();
    $VIEW_NAME = "home.php";
} else {
    $VIEW_NAME = "home.php";
    require '../../dao/commodities.php';
    $dac_biet_list = commodities_select_dac_biet();
    $items_all = commodities_select_all_home();
}


require "../layout.php";
