<?php
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<form action="doi-mk.php" method="post">
    <div>
        <input name="id">
        <input type="email">
    </div>
    <div>
        <input name="password" type="password">
    </div>
    <div>
        <input name="password2" type="password">
    </div>
    <div>
        <input name="password3" type="password">
    </div>
    <div>
        <button name="btn_change">Đổi mật khẩu</button>
    </div>
</form>