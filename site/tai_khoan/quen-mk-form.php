<?php
require "../../global.php";
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<form action="doi-mk.php" method="post">
    <h3>Đổi mật khẩu mới tại đây</h3>
    <div class="form-group">
      <label for="">Email</label>
        <input type="email" class="form-control" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Mật khẩu</label>
        <input name="password" type="password" class="form-control" placeholder="">
    </div>
    <div>
        <input name="password2" type="password">
    </div>
    
    <div>
        <button class="btn btn-default" name="btn_change">Đổi mật khẩu</button>
    </div>
</form>