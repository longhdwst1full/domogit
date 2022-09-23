<div class="mt-3 panel panel-default">

    <div class="panel-heading">Danh mục </div>
    <div class="list-group">
        <?php

        require_once "../../dao/pdo.php";
        require_once "../../dao/categories.php";

        $data = loai_selecAll();
        // var_dump($data);
        // die;
        if ($data) {
            // extract($data);
            foreach ($data as $value) { ?>

                <a href='' class='list-group-item'>
                    <?= $value['name'] ?> </a>
        <?php }
        } else {
            echo "Không tìm thấy danh dục";
        }

        ?>
    </div>
    <div class="panel-footer">
        <form action="hang-hoa/liet-ke.php">
            <input type="text" name="keywords" placeholder="Từ khóa tìm kiêm">
        </form>
    </div>
</div>