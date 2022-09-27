<?php
require_once "../../global.php";
require_once "../../dao/commodities.php";
$list_top10 = commodities_select_top10();
//  var_dump($list_top10);
//  die;
?>

<div class="panel pamel-default">
    <div class="panmel-heading">
        TOP 10 YÊU THÍCH
    </div>
    <?php foreach ($list_top10 as $value) : extract($value); ?>
        <div class="panel-body nn-panel-body contianer-fluid">
            <div class="row" style="margin-bottom:20px !important;">
                <div class="col-xs-3">
                    <img src="<?=$UPLOAD_URL?><?= $image ?>" style="width:100px !important;" alt="">
                </div>
                <div class="col-xs-7">
                    <a href=""><?= $name ?></a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class=" mb-3">
    <h2>Top 10 yêu thích</h2>
    <ul class="list-group list-group-flush">
        <?php foreach ($list_top10 as $value) : extract($value); ?>
            <li class="list-group-item">
                <div class="d-flex justify-content-betwend">
                    <div class="w-25 mr-3">
                        <a href="../hang_hoa/chi-tiet.php?id=<?= $id ?>"><img src="<?=$UPLOAD_URL?><?= $image ?>" style="width: 100%; height: 100%;" alt=""></a>
                    </div>
                    <div class="w-75">
                    <a href="../hang_hoa/chi-tiet.php?id=<?= $id ?>"><?= $name ?></a>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
       
    </ul>

</div>