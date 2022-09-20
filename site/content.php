<div class="row">
    <article class="col-sm-9">

        <?php
        require "./slider.php";
        require "./list_product.php";

        ?>


    </article>


    <article class="col-sm-3 mt-3 border h-50">
        <!--Danh mục  -->
        <div class="mt-3">
            <div class="mt-3 panel panel-default">

                <div class="panel-heading">Danh mục </div>
                <div class="list-group">
                    <?php
                    require "../dao/pdo.php";
                    require "../dao/categories.php";

                    pdo_get_connection();
                    $data = loai_selecAll();
                    // var_dump($data);
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

            <br>
            <div class="border-top mb-3">
                <h2 class="text-center">Đăng kí </h2>
                <form action="" class="mt-3">
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" placeholder="Enter email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </form>
            </div>
            <br>
            <div class="panel pamel-default">
                <div class="panmel-heading">
                    TOP 10 YÊU THÍCH
                </div>
                <div class="panel-body nn-panel-body contianer-fluid">
                    <div class="row" style="margin-bottom:20px !important;">
                        <div class="col-xs-3">
                            <img src="../content/images/apple-macbook-pro-13-inch-m2-2022-xam-600x600.jpg" style="width:100px !important;" alt="">
                        </div>
                        <div class="col-xs-7">
                            <a href="">Tên sản phẩm</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" mb-3">
                <h2>Top 10 yêu thích</h2>
                <div class="list-group list-group-flush">
                    <a class="list-group-item">First item</a>
                    <a class="list-group-item">Second item</a>
                    <a class="list-group-item">Third item</a>
                    <a class="list-group-item">Fourth item</a>
                </div>

            </div>
        </div>
    </article>
</div>