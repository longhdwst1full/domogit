<nav class="navbar d-flex flex-wrap navbar-expand-lg navbar-light bg-white py-4 fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="<?= $SITE_URL ?>/trang_chinh/index.php">
            <img src="../../content/images/products/3.PNG" style="width:50px; height:50px" alt="">
            <span class="text-uppercase fw-lighter ms-2">Attire</span>

        </a>


        <div class="order-lg-2 nav-btns d-flex">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <button type="button" class="btn position-relative">
                <a href="<?= $SITE_URL ?>/trang_chinh/index.php?view_cart"> <i class="fa fa-shopping-cart"></i></a>
                <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">5</span>
            </button>
            <button type="button" class="btn position-relative">
                <i class="fa fa-heart"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">2</span>
            </button>
            <button type="button" class="btn position-relative">
                <i class="fa fa-search"></i>
            </button>
        </div>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

       
    </div>
    <div class="container">
        <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="<?= $SITE_URL ?>/trang_chinh/index.php">
            <img src="../../content/images/products/3.PNG" style="width:50px; height:50px" alt="">
            <span class="text-uppercase fw-lighter ms-2">Attire</span>

        </a>


        <div class="order-lg-2 nav-btns d-flex">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <button type="button" class="btn position-relative">
                <a href="<?= $SITE_URL ?>/trang_chinh/index.php?view_cart"> <i class="fa fa-shopping-cart"></i></a>
                <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">5</span>
            </button>
            <!-- <button type="button" class="btn position-relative">
                <i class="fa fa-heart"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">2</span>
            </button> -->
            <!-- <button type="button" class="btn position-relative">
                <i class="fa fa-search"></i>
            </button> -->
        </div>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-lg-1" id="navMenu">
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item px-2 py-2">
                    <a class="nav-link text-uppercase text-dark" href="<?= $SITE_URL ?>/trang_chinh/index.php">Trang chủ</a>
                </li>
                <li class="nav-item px-2 py-2">
                    <a class="nav-link text-uppercase text-dark" href="<?= $SITE_URL ?>/trang_chinh/index.php?gioi_thieu">Giới thiệu</a>
                </li>
                <li class="nav-item px-2 py-2">
                    <a class="nav-link text-uppercase text-dark" href="<?= $SITE_URL ?>/trang_chinh/index.php?lien_he">Liên hệ</a>
                </li>
                <li class="nav-item px-2 py-2">
                    <a class="nav-link text-uppercase text-dark" href="<?= $SITE_URL ?>/trang_chinh/index.php?gop_y">Góp ý</a>
                </li>
                <!-- <li class="nav-item px-2 py-2">
                    <a class="nav-link text-uppercase text-dark" href="<?= $SITE_URL ?>/trang_chinh/index.php?hoi_dap">Hỏi đáp</a>
                </li> -->
                <li class="nav-item px-2 py-2">
                    <button type="button" class="btn position-relative">
                        <a href="<?= $SITE_URL ?>/trang_chinh/index.php?view_cart"> <i class="fa fa-shopping-cart"></i></a>
                        <!-- <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">5</span> -->
                    </button>
                </li>
                <li class="nav-item px-2 py-2">
                    <a class="nav-link text-uppercase text-dark" href="<?= $SITE_URL ?>/trang_chinh/index.php?">Đăng nhập</a>
                   
                </li>
                <li class="nav-item px-2 py-2">
                   
                    <a class="nav-link text-uppercase text-dark" href="<?= $SITE_URL ?>/trang_chinh/index.php?">Đăng kí</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- <nav class="container-fluid navbar navbar-expand-lg navbar-light bg-dark">

    <div class="logo col-3">
        <a href="<?= $SITE_URL ?>/trang_chinh/index.php">
            <img src="../../content/images/products/3.PNG" style="width:50px; height:50px" alt=""></a>
    </div>
    <form class="d-flex col-3">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <div class="collapse navbar-collapse text-center ml-auto p-2" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link text-light" href="<?= $SITE_URL ?>/trang_chinh/index.php">Trang chủ

                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="<?= $SITE_URL ?>/trang_chinh/index.php?gioi_thieu">Giới thiệu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="<?= $SITE_URL ?>/trang_chinh/index.php?lien_he">Liên hệ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="<?= $SITE_URL ?>/trang_chinh/index.php?gop_y">Góp ý</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="<?= $SITE_URL ?>/trang_chinh/index.php?hoi_dap">Hỏi đáp</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="<?= $SITE_URL ?>/trang_chinh/index.php?view_cart">Giỏ hàng</a>
            </li>


        </ul>
    </div>
</nav> -->