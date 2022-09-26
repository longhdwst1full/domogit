

<div class="panel panel-default nn-panel-login">
    <div class="panel-heading">
        Tài khoản
    </div>
    <div class="panel-body">
        <form action="<?= $SITE_URL ?>/tai_khoan/dang-nhap.php" method="post" class="mt-3">

            <div class="form-group">
                <label>Email address:</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label >Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password" >
            </div>
            <div class="form-group">
                <div class="form-control">
                    <label for="" class="checkbox-inline">
                        <input type="checkbox" name="ghi_nho" checked>Ghi nhớ tài khoản
                    </label>
                </div>
            </div>
            <div class="form-group">

                <button name="btn_login" type="submit" class="btn btn-default ">Đăng nhập</button>
            </div>
            <div class="form-group">
                <li><a href="<?= $SITE_URL ?>/tai_khoan/index.php?quen-mk">Quên mật khẩu</a></li>
                <li><a href="<?= $SITE_URL ?>/tai_khoan/index.php?btn_register_new">Đăng kí thành viên</a></li>
            </div>
        </form>
    </div>
</div>