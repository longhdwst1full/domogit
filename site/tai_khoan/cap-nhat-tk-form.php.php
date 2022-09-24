<?php
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<form action="cap-nhat-tk.php" method="post" enctype="multipart/form-data">
    <img src="<?= $CONTENT_URL ?>/images/users/<?= $avatar ?>">
    <input name="id" value="<?= $id ?>" readonly>
    <input name="name" value="<?= $name ?>">
    <input name="email" value="<?= $email ?>">
    <input name="image_new" type="file">
    <button name="btn_update">Cập nhật</button>
    <input name="vai_tro" value="<?= $vai_tro ?>" type="hidden">
    <input name="kich_hoat" value="<?= $kich_hoat ?>" type="hidden">
    <input name="password" value="<?= $password ?>" type="hidden">
    <input name="image_old" value="<?= $avatar ?>" type="hidden">
</form>