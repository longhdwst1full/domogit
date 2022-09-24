<?php
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<form action="dang-ky.php" method="post" enctype="multipart/form-data">
    <input name="id" value="<?= $id ?>">
    <input name="password" type="password" value="<?= $password ?>">
    <input name="password" type="password" value="<?= $password ?>">
    <input name="name" value="<?= $name ?>">
    <input name="email" value="<?= $email ?>">
    <input name="up_hinh" type="file">
    <button name="btn_register">Đăng ký</button>
    <input name="vai_tro" value="0" type="hidden">
    <input name="kich_hoat" value="0" type="hidden">
</form>