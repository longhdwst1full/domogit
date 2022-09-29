<h1 class="alert alert-success">Thêm mới Hàng hóa</h1>
<!-- `name`, `price`, `sell`, `image`, `date_add`, `description`, `special`, `view`, `category_id` -->
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="">Mã hàng hóa</label>
            <input type="text" name="id" class="form-control" readonly value="AUTO number" placeholder="">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Tên hàng hóa</label>
            <input type="text" name="name" class="form-control" placeholder="">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Giá hàng hóa</label>
            <input type="text" name="price" class="form-control" placeholder="">
        </div>

    </div>
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="">Giá sell</label>
            <input type="text" name="sell" class="form-control" placeholder="">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Hình ảnh</label>
            <input type="file" name="image" class="form-control" placeholder="">
        </div>
        <div class="form-group col-sm-4" >
            <label for="">Loại hàng</label>
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
            <label for="">Hàng đặc biệt </label>
           <div class="form-control">
            <label class="radio-inline">
                <input type="radio" name="special" value="0">Đặc biệt </label>
            <label class="radio-inline"><input type="radio" name="special" value="1" checked >Bình thường</label>
           </div>
        </div>
        <div class="form-group col-sm-4">
            <label for="">Ngày thêm hàng</label>
            <input type="date" name="date_add" class="form-control datepicker" placeholder="">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Số lượng xem</label>
            <input type="text" name="view" readonly value="0" class="form-control" placeholder="">

        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-12">
            <label for="">Mô tả</label>
            <textarea name="description" class="form-control" placeholder="" cols="30" rows="4"></textarea>
        </div>
    
       
        <div class="form-group col-sm-12">
            <button name="btn_insert" class="btn btn-default">Thêm mới</button>
            <button type="reset" class="btn btn-default">Nhập lại</button>
            <button class="btn btn-default"><a href="index.php?btn_list" >Danh sách</a></button>
            
        </div>
    </div>
</form>