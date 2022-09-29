<h1>Thêm mới loại hàng hóa</h1>
<br>

<form action="index.php?act=add" method="post" enctype="multipart/form-data">

    <div class="row mb10 form-group">
        Tên loại <br>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="row mb10">
        <div class="form-group col-sm-12">
            <button name="btn_insert" class="btn btn-default">Thêm mới</button>
            <button type="reset" class="btn btn-default">Nhập lại</button>


            <a href="index.php?btn_list">
                <button type="button" class="btn btn-default">Danh sách</button>

            </a>
        </div>
    </div>
</form>