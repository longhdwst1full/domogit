<h1>Danh sách loại hàng</h1>

<form action="index.php" method="post" enctype="multipart/form-data">
    <table class="table">
        <thead class="alert-success">
            <tr>
                <th></th>
                <th>Mã kh</th>
                <th>Tên loại hàng</th>
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

                    <td>
                        <a href="index.php?btn_edit&id=<?= $id ?>" class="">Sửa</a>
                        <a href="index.php?btn_delete&id=<?= $id ?>" class="">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">
                    <button id="check-all" class="btn btn-default">
                        Chọn tất cả
                    </button>
                    <button id="clear-all" class="btn btn-default">
                        Xóa tất cả
                    </button>
                    <button id="delete-all" class="btn btn-default">
                        Xóa các mục đã chọn
                    </button>


                    <a href="index.php" class=" btn-default">
                        <input type="button" class="btn btn-default" value="Nhập thêm"> </a>

                </td>
            </tr>
        </tfoot>
    </table>
</form>