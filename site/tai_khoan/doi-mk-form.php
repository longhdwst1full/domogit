<?php
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<form action="doi-mk.php" method="post">
    <div class="form-group">
        <label for="">Email</label>
        <input name="email" value="<?= $_SESSION['user']['email']?>" class="form-control" disabled >
        <input name="id" value="<?= $_SESSION['user']['id']?>" type="hidden" class="form-control" >
    </div>
    <div class="form-group">
        <label for="">Mật Khẩu cũ</label>
        <input name="password"  type="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Mật khẩu mới</label>
        <input class="form-control" name="password2" type="password">
    </div>
    <div class="form-group">
        <label for="">Nhập lại mật khẩu mới</label>
        <input class="form-control" name="password3" type="password">
    </div>


    <div class="form-group">
        <button class="btn btn-primary" name="btn_change" type="submit">Đổi mật khẩu</button>
    </div>
</form>