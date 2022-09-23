<?php

require "../../global.php";
extract($_REQUEST);


if (exist_params("gioi_thieu")) {
    $VIEW_NAME = "gioi-thieu.php";
} else if (exist_params("lien_he")) {
    $VIEW_NAME = "lien-he.php";
} else if (exist_params("gop_y")) {
    $VIEW_NAME = "gop-y.php";
} else if (exist_params("hoi_dap")) {
    $VIEW_NAME = "hoi-dap.php";
} else {
    require '../../dao/commodities.php';
    $dac_biet_list = commodities_select_dac_biet();
    $items_all = commodities_select_all_home();
    $VIEW_NAME = "home.php";
}
require "../layout.php";
