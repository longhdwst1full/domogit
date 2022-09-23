<h3>Quản lý hàng hóa</h3>

<ul class="pager">
    <li><a href="?btn_list&page_no=0">|&lt;</a></li>
    <li><a href="?btn_list&page_no=<?=$_SESSION['page_no']-1?>">|lt;&lt;</a></li>
    <li><a href="?btn_list&page_no=<?=$_SESSION['page_no']+1?>">|gt;&gt;</a></li>
    <li><a href="?btn_list&page_no=<?=$_SESSION['page_count']-1?>">&gt;|</a></li>
</ul>
<form action="index.php" method="post" enctype="multipart/form-data">
    <table class="table">
        <thead class="alert-success">
            <tr>
                <th></th>
                <th>Mã hh</th>
                <th>Tên HH</th>
                <th>Ảnh </th>
                <th>Đơn giá</th>
                <th>Giảm giá</th>
                <th>Loại hàng</th>
                <th>Lượt xem </th>
                <th></th>
            </tr>
        </thead>
       
        <tbody>
            <?php foreach ($items as $value) :
                extract($value);
            ?>

                <tr>
                    <th>
                        <input type="checkbox" name="id[]" value="<?= $id ?>">
                    </th>

                    <td><?= $id ?></td>
                    <td><?= $name ?></td>
                    <td><img style="width:100px;" src="../../upload/<?= $image ?>" alt=""></td>

                    <td>$<?= number_format($price, 2) ?></td>
                    <td><?= number_format($sell*100) ?>%</td>
                    <td><?= $commodity_id ?></td>
                    <td><?= $view ?></td>
                    <td>
                        <a href="index.php?btn_edit&id=<?= $id ?>" class="">Sửa</a>
                        <a href="index.php?btn_delete&id=<?= $id ?>" class="">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="9">
                    <button id="check-all" class="btn btn-default">
                        Chọn tất cả
                    </button>
                    <button id="clear-all" class="btn btn-default">
                        Xóa tất cả
                    </button>
                    <button id="delete-all" class="btn btn-default">
                        Xóa các mục đã chọn
                    </button>
                    <button id="" class="btn btn-default">
                        <a href="index.php" class=" btn-default">Nhập thêm</a>
                    </button>
                </td>
            </tr>
        </tfoot>
    </table>
</form>