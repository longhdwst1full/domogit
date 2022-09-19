<div class="row">
    <article class="col-sm-9">

        <?php
        require "./slider.php";
        require "./list_product.php";

        ?>


    </article>


    <article class="col-sm-3 mt-3 border h-50">
        <div class="mt-3">
            <h2 class="text-center">Danh mục </h2>
            <div class="list-group">
                <a href="#" class="list-group-item ">Disabled item</a>
                <a href="#" class="list-group-item ">Disabled item</a>
                <a href="#" class="list-group-item">Third item</a>
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
            <div class=" mb-3">
                <h2>Sản phẩm hot</h2>
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