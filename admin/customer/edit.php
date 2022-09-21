<h1>Chỉnh sửa thông tin khách hàng</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="">Mã khách hàng</label>
            <input type="text" name="id" value="<?= $id ?>" class="form-control" require>
        </div>
        <div class="form-group col-sm-6">
            <label for="">Họ Tên</label>
            <input type="text" name="name" value="<?= $name ?>" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="">Mật khẩu</label>
            <input type="password" name="password" value="<?= $password ?>" class="form-control" require>
        </div>
        <div class="form-group col-sm-6">
            <label for="">Eamil</label>
            <input type="text" name="email" value="<?= $email ?>" class="form-control" require>
        </div>
    </div>
    <div class="row">

        <div class="form-group col-sm-6">
            <label for="">Hình ảnh</label>
            <input type="hidden" name="avatar_old" value="<?= $avatar ?>">

            <input type="file" name="avatar_new" class="form-control">
            <div style="width:100px">
                <img src="<?= $avatar ?>" width="100">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="">Kích hoạt</label>
            <div class="form-control">
                <label class="radio-inline">
                    <input type="radio" name="kich_hoat" value="0" <?= ($kich_hoat == '0') ? 'checked' : ''; ?>>Chưa kích hoạt</label>
                <label class="radio-inline">
                    <input type="radio" name="kich_hoat" value="1" <?=($kich_hoat == '1') ? 'checked' : ''; ?>>Kích hoạt</label>
            </div>
        </div>

        <div class="form-group col-sm-6">
            <label for="">Vai trò</label>
            <div class="form-control">
                <label class="radio-inline">
                    <input type="radio" name="vai_tro" value="0" <?= ($vai_tro == '0') ? 'checked' : ''; ?>>Khách hàng</label>
                <label class="radio-inline">
                    <input type="radio" name="vai_tro" value="1" <?=($vai_tro == '1') ? 'checked' : ''; ?>>Nhân viên</label>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="form-group col-sm-12">
            <button name="btn_update" class="btn btn-default">Cập nhập</button>
            <button type="reset" class="btn btn-default">Nhập lại</button>
            <a href="index.php" class="btn btn-default">Thêm mới</a>
            <a href="index.php?btn_list" class="btn btn-default">Danh sách</a>
        </div>
    </div>
</form>