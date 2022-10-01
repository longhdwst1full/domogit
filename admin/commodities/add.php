<h1 class="text-center py-3 text-primary">Thêm mới Hàng hóa</h1>
<!-- `name`, `price`, `sell`, `image`, `date_add`, `description`, `special`, `view`, `category_id` -->
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-sm-4">
            <label class="fw-bold  py-2"for="">Mã hàng hóa</label>
            <input type="text" name="id" class="form-control" readonly value="AUTO number" placeholder="">
        </div>
        <div class="form-group col-sm-4">
            <label class="fw-bold  py-2"for="">Tên hàng hóa</label>
            <input type="text" name="name" class="form-control" placeholder="">
        </div>
        <div class="form-group col-sm-4">
            <label class="fw-bold  py-2"for="">Giá hàng hóa</label>
            <input type="text" name="price" class="form-control" placeholder="">
        </div>

    </div>
    <div class="row">
        <div class="form-group col-sm-4">
            <label class="fw-bold  py-2"for="">Giá sell</label>
            <input type="text" name="sell" class="form-control" placeholder="">
        </div>
        <div class="form-group col-sm-4">
            <label class="fw-bold  py-2"for="">Hình ảnh</label>
            <input type="file" name="image" class="form-control" placeholder="">
        </div>
        <div class="form-group col-sm-4" >
            <label class="fw-bold  py-2"for="">Loại hàng</label>
            <select name="category_id" class="form-control">
                <?php foreach($category_all as $value): extract($value); ?>
                <option value="<?=$id?>">
                <?=$name?>
            </option>
                
                <?php endforeach;?>
            </select>
        </div>
    </div>
    <div class="row">

        <div class="form-group col-sm-4">
            <label class="fw-bold  py-2"for="">Hàng đặc biệt </label>
           <div class="form-control">
            <label class="fw-bold  py-2"class="radio-inline">
                <input type="radio"  name="special" value="0"><span class="m-2">Đặc biệt</span> </label>
            <label class="fw-bold  py-2"class="radio-inline"><input type="radio"  name="special" value="1" checked ><span class="m-2">Bình thường</span></label>
           </div>
        </div>
        <div class="form-group col-sm-4">
            <label class="fw-bold  py-2"for="">Ngày thêm hàng</label>
            <input type="date" name="date_add" class="form-control datepicker" placeholder="">
        </div>
        <div class="form-group col-sm-4">
            <label class="fw-bold  py-2"for="">Số lượng xem</label>
            <input type="text" name="view" readonly value="0" class="form-control" placeholder="">

        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-12">
            <label class="fw-bold  py-2"for="">Mô tả</label>
            <textarea name="description" class="form-control" placeholder="" cols="30" rows="4"></textarea>
        </div>
    
       
        <div class="form-group col-sm-12 my-3">
            <button name="btn_insert" class="btn btn-success">Thêm mới</button>
            <button type="reset" class="btn btn-warning mx-2">Nhập lại</button>
            <a href="index.php?btn_list" class="btn btn-primary">Danh sách</a>
            
        </div>
    </div>
</form>