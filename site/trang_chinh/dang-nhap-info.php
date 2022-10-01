<style>
    .nn-panel-login img {
        width: 120px;
        height: 140px;
        bottom: 1px solid gray;
        border-radius: 5px;
    }
</style>
<?php
require '../../check_user_admin.php.php';

?>
<div class="panel panel-default nn-panle-login">
    <div class="panel-heading">TÀI KHOẢN</div>
    <div class="panel-body">
        <div class="text-center">
            <img src="<?= $CONTENT_URL ?>/images/users/<?= $_SESSION['user']['avatar'] ?>">
            <br>
            <?= $_SESSION['user']['name'] ?>
        </div>


        <li>
            <a href="<?= $SITE_URL ?>/tai_khoan/dang-nhap.php?btn_logoff">
                Đăng xuất
            </a>
        </li>
        <li><a href="<?= $SITE_URL ?>/tai_khoan/doi-mk.php">Đổi mật khẩu</a></li>
        <li><a href="<?= $SITE_URL ?>/tai_khoan/cap_nhat_tk.php">Cập nhật tài khoản</a></li>
        <?php
        if ($_SESSION['user']['vai_tro'] == TRUE) {
            echo "<li><a href='$ADMIN_URL/trang-chinh'>Quản trị website</a></li>";
        }
        ?>
    </div>
</div>