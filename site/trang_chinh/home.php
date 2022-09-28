<?php
require "slider.php";
require_once "../../global.php";
require_once '../../dao/commodities.php';
$dac_biet_list = commodities_select_dac_biet();
$items_all = commodities_select_all_home();
// var_dump($items_all);
// echo "<br>";
// var_dump($dac_biet_list);
// die;
?>
<div class="row pt-20">
    <!-- <div class="col-sm-6 col-md-4 border mr-3">
        <div class="thumbnail text-center">
            <a href="">
                <img src="../../content/images/apple-macbook-pro-13-inch-m2-2022-xam-600x600.jpg" alt="">
            </a>
            <div class="caption text-left">
                <h3>$500
                </h3>
                <p>Sản phẩm</p>
            </div>
        </div>
    </div> -->
    <?php
    if ($items_all) {

        foreach ($items_all as $value) : extract($value); ?>

            <div class=" col-sm-6 col-md-4 mb-3 card" style="width: 18rem;">
                <a href="<?= $SITE_URL ?>/hang_hoa/chi-tiet.php?id=<?= $id ?>"> <img class="card-img-top" src="<?=$CONTENT_URL?>/images/products/<?= $image ?>" alt="Card image cap"></a>
                <div class="card-body">
                    <a href="<?= $SITE_URL ?>/hang_hoa/chi-tiet.php?id=<?= $id ?>">
                        <h5 class="card-title text-center"><?= $name ?></h5>
                    </a>
                    <h5 class="card-title">Mã hàng hóa: <?= $id ?></h5>
                    <div>

                        <p class="card-text mb-4">Đơn giá : <?= number_format($price, 2) ?>đ</p>
                    </div>
                    <a href="add_to_cart.php?product_id=<?=$id?>" class="btn btn-primary">Thêm vào giỏ hàng</a>
                </div>
            </div>
    <?php endforeach;
    } ?>

</div>