<h1>Thêm mới loại hàng hóa</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row mb10 form-group">
        Tên loại <br>
        <input type="text" class="form-control" name="name" value="<?= $name ?>">
    </div>
    <input type="hidden" value="<?= $id ?>" name="id">
    <div class="row">
        <div class="form-group col-sm-12">
            <button name="btn_update" class="btn btn-default">Cập nhập</button>
            <button type="reset" class="btn btn-default">Nhập lại</button>
            <a href="index.php" class="btn btn-default">
                <input type="button" class="btn btn-default" value="Thêm mới">
            </a>
            <a href="index.php?btn_list">
                <input type="button" class="btn btn-default" value="Danh sách">
            </a>
        </div>
    </div>
</form>