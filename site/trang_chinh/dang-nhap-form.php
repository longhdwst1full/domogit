<div class="panel panel-default nn-panel-login">
    <div class="panel-heading">Tài khoản</div>
    <div class="panel-body">


        <form action="<?= $SITE_URL ?>/tai_khoan/dang-nhap.php" method="post">
            <div class="form-group">
                <div>Email đăng nhập</div>
                <input  name="email" class="form-control">
            </div>
            <div  class="form-group">
                <div>Mật khẩu</div>
                <input class="form-control" name="password" type="password" >
            </div>
            <div class="form-group">
                <input class="form-control" name="ghi_nho" type="checkbox" checked> Ghi nhớ tài khoản?
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-default"name="btn_login">Đăng nhập</button>
            </div>
            <div>
                <li><a href="<?= $SITE_URL ?>/tai_khoan/quen-mk.php">Quên mật khẩu</a></li>
                <li><a href="<?= $SITE_URL ?>/tai_khoan/dang-ky.php">Đăng ký thành viên</a></li>
            </div>
        </form>
    </div>
</div>

