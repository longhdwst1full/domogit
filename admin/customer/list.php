<h1>Danh sách khách hàng</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <table class="table">
        <thead class="alert-success">
            <tr>
                <th></th>
                <th>Mã kh</th>
                <th>Họ và tên</th>
                <th>Email</th>
                <th>Hình ảnh</th>
                <th>Vai trò</th>
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
                    <td><?= $email ?></td>
                    <td><img src="<?=$CONTENT_URL?>/images/users/<?= $avatar ?>" style="width: 100px; height: 100px" alt=""></td>
                    <td><?= ($vai_tro == 1) ? "Nhân viên " : "Khách hàng" ?></td>
                    <td>
                        <a href="index.php?btn_edit&id=<?= $id ?>" class="">Sửa</a>
                        <a href="index.php?btn_delete&id=<?= $id ?>" class="">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="7">
                    <button id="check-all" class="btn btn-default">
                        Chọn tất cả
                    </button>
                    <button id="clear-all" class="btn btn-default">
                        Xóa tất cả
                    </button>
                    <button id="delete-all" class="btn btn-default" name="btn_delete">
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