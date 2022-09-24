<?php
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<form action="doi-mk.php" method="post">
    <div>
        <input name="ma_kh">
    </div>
    <div>
        <input name="mat_khau" type="password">
    </div>
    <div>
        <input name="mat_khau2" type="password">
    </div>
    <div>
        <input name="mat_khau3" type="password">
    </div>
    <div>
        <button name="btn_change">Đổi mật khẩu</button>
    </div>
</form>