<?php
require_once "../../dao/pdo.php";
require_once "../../dao/categories.php";
 ?>
<div class="mt-3 panel panel-default">

    <div class="panel-heading">Danh mục </div>
    <div class="list-group">
        <?php
        $dsloai = loai_selecAll();
        // var_dump($data);
        // die;
        if ($dsloai) {
            // extract($data);
            foreach ($dsloai as $value) {
                extract($value);
                $link = "../hang_hoa/liet_ke.php?id=$id";
                echo "<a href='$link' class='list-group-item'>
                    $name </a>";
            }
        } else {
            echo "Không tìm thấy danh dục";
        }

        ?>
    </div>
    <div class="panel-footer">
        <form action="../hang_hoa/liet_ke.php">
            <input type="text" name="keywords" placeholder="Từ khóa tìm kiêm" class="form-control">
        </form>
    </div>
</div>