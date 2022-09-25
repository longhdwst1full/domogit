<?php
extract($_REQUEST);
if(strlen($MESSAGE)){
echo "<h5>$MESSAGE</h5>";

}
?>
<form action="dang-nhap.php" method="post">

<input name="email" value="<?= $email ?>">
<input name="password" type="password" value="<?=$password?>">
<input name="ghi_nho" type="checkbox" checked>
Ghi nhớ tài khoản?
<button name="btn_login">Đăng nhập</button>
</form>