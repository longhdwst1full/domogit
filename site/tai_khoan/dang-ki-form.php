<?php



if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<form action="dang-ky.php" method="post" enctype="multipart/form-data">
    <h3 class="text-center">Đăng kí</h3>
    <div class="form-group">
        <label for="">Email</label>
        <input class="form-control" type="text" name="email">
    </div>
    <div class="form-group">
        <label for="">Họ tên</label>
        <input name="name" class="form-control" type="text">
    </div>
    <div class="form-group">
        <label for="">Mật khẩu</label>

        <input class="form-control" name="password" type="password">
    </div>
    <div class="form-group">
        <label for="">Nhập lại mật khẩu </label>

        <input name="password1" type="password">
    </div>
    <div class="form-group">
        <label for="">Ảnh</label>
        <input type="file" name="up_hinh"  class="form-control">
    </div>
    <div class="form-group">

        <button class="btn btn-default" name="btn_register">Đăng ký</button>
    </div>

</form>