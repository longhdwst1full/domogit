<div class="thumbnail">
    <img src='<?= $CONTENT_URL ?>/images/products/<?= $image ?>' style='max-width:95%;height:100px;' >
    <div class="caption">
        <p>
        <ul>
            <li>MÃ HH: <?= $id ?></li>
            <li>TÊN HH: <?= $name ?></li>
            <li>ĐƠN GIÁ: <?= number_format($price, 2) ?></li>
            <li>GIẢM GIÁ: <?= $sell * 100 ?>%</li>
        </ul>
        </p>
        <div><?= $description ?></div>
    </div>
</div>
<?php require 'binh-luan.php'; ?>
<?php require 'hang-cung-loai.php'; ?>