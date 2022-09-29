<?php
require "slider.php";
require_once "../../global.php";
require_once '../../dao/commodities.php';
$dac_biet_list = commodities_select_dac_biet();
$items_all = commodities_select_all_home();

?>

<div class="row mt-5 pt-20 d-flex justify-content-around align-items-baseliner">

    <?php
    if ($items_all) {

        foreach ($items_all as $value) : extract($value); ?>

            <div class=" col-sm-6 col-md-4 mb-3 card " style="width: 32%; ">

                <div class="" style="height: 200px;">
                    <img class="rounded" style="width: 100%; height: 100%;" src="<?= $CONTENT_URL ?>/images/products/<?= $image ?>" alt="Card image cap"></a>

                </div>
                <a href="<?= $SITE_URL ?>/hang_hoa/chi-tiet.php?id=<?= $id ?>">
                    <div class="card-body text-center">
                        <a class="text-dark text-decoration-none text-uppercase" href="<?= $SITE_URL ?>/hang_hoa/chi-tiet.php?id=<?= $id ?>">
                            <h5 class="card-title text-center align-self-stretch"><?= $name ?></h5>
                        </a>
                        <h5 class="card-title text-left">Mã hàng hóa: <?= $id ?></h5>
                        <div class="d-flex justify-content-between align-items-center">

                            <p class="card-text m-0 pb-3 ">Đơn giá :</p>
                            <span class="fs-4 text-danger"><?= number_format($price, 2) ?>đ</span>
                        </div>
                        <div class="rating d-flex mt-1 justify-content-between my-2">
                            <div>

                                <span>
                                    <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                        </div>
                            <span><?= $view ?> Lượt xem</span>
                        </div>


                        <a href="add_to_cart.php?product_id=<?= $id ?>" class="btn btn-primary mt-2 text-center">Thêm vào giỏ hàng</a>
                    </div>
            </div>
    <?php endforeach;
    } ?>

</div>