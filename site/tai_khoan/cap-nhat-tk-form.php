<?php
if (isset($MESSAGE)) {


    if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
}
// var_dump($_REQUEST);
// var_dump($_SESSION['user']);
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    extract($user);
}
// die;
?>
<form action="cap-nhat-tk.php" method="post"  enctype="multipart/form-data">
    <div class="form-group">
<div class="form-group">
    <img style="width: 200px; height: 200px"src="<?= $CONTENT_URL ?>/images/users/<?= $avatar ?>">

</div>
<div class="form-group">

</div>
        <input name="image_old" class="form-control" type="hidden" value="<?= $avatar ?>">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input name="id" class="form-control" type="hidden" value="<?= $id ?>">
        <input name="email" class="form-control" type="text" value="<?= $email ?>" disabled>
    </div>
    <div class="form-group">
        <label for="">Họ tên</label>
        <input name="name" class="form-control" type="text" value="<?= $name ?>">
    </div>
    <div class="form-group">
        <label for="">Thay ảnh mới tại đây</label>
        <input  class="form-control" type="file" value="" name="image_new" id="image_new" >
        
        <input type="file" name="fileToUpload" id="fileToUpload">
    </div>
    <div class="form-group">
        <label for="">Vai trò</label>
        <input name="vai_tro" disabled class="form-control" value="<?= $vai_tro == 0 ? 'Khách hàng' : 'Nhân viên' ?>" type="text">
    </div>
    <div class="form-group">

        <button type="submit" class="btn btn-default" name="btn_update">Cập nhật</button>
    </div>

</form>