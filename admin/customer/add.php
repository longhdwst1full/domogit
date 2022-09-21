<h1>Thêm mới khách hàng</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="">Họ Tên</label>
            <input type="text" name="name" class="form-control" placeholder="">
        </div>
        <div class="form-group col-sm-6">
            <label for="">Mật khẩu</label>
            <input type="password" name="password" class="form-control" placeholder="">
        </div>

    </div>
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control" placeholder="">
        </div>
        <div class="form-group col-sm-6">
            <label for="">Hình ảnh</label>
            <input type="file" name="avatar" class="form-control" placeholder="">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="">Kích hoạt</label>
            <div class="form-control">
                <label class="radio-inline"><input type="radio" name="kich_hoat" value="0">Chưa kích hoạt</label>
                <label class="radio-inline"><input type="radio" name="kich_hoat" value="1" checked>Kích hoạt</label>
            </div>
        </div>
    
        <div class="form-group col-sm-6">
            <label for="">Vai trò</label>
            <div class="form-control">
                <label class="radio-inline"><input type="radio" name="vai_tro" value="0">Khách hàng</label>
                <label class="radio-inline"><input type="radio" name="vai_tro" value="1" checked>Nhân viên</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-12">
            <button name="btn_insert" class="btn btn-default">Thêm mới</button>
            <button type="reset" class="btn btn-default">Nhập lại</button>
            <button class="btn btn-default"><a href="index.php?btn_list" >Danh sách</a></button>
            
        </div>
    </div>
</form>