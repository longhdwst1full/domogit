<?php
// require_once "../../global.php";
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<form action="quen-mk.php" method="post">
    <h3>Đổi mật khẩu mới tại đây</h3>
    <div class="form-group">
      <label for="">Email</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label for="">Mật khẩu mới</label>
        <input name="password" type="password" class="form-control" placeholder="">
    </div>
    <div>
        <label for=""> Nhập lại mật khẩu</label>
        <input name="password2" class="form-control" type="password">
    </div>
    
    <div>
        <button class="btn btn-default" name="btn_forgot">Đổi mật khẩu</button>
    </div>
</form>