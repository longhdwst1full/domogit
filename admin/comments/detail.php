<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3 class="alert alert-success">
        Chi tiết bình luận
    </h3>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
    }

    ?>
    <form action="index.php?id=<?= $id ?>" method="post" enctype="multipart/form-data">
        <table class="table">
            <thead class="alert-success">
                <tr>
                    <th></th>
                    <th>Nội dung</th>
                    <th>Ngày BL</th>
                    <th>Người Bình luận</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $value) : extract($value); ?>
                    <tr>
                        <td>
                            <input type="checkbox" name="id[]" value="<?= $id ?>">

                        </td>
                        <td><?= $content ?></td>
                        <td><?= $date_comment ?></td>
                        <td><?= $customer_id ?></td>
                        <td>
                            <a href="index.php?btn_delete&id=<?= $id ?>&customer_id=<?= $customer_id ?>" class="btn btn-default btn-sm">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6">
                        <button id="check-all" type="button" class="btn btn-default">Chọn tất cả</button>
                        <button id="clear-all" type="button" class="btn btn-default">Bỏ chọn tất cả</button>
                        <button id="btn_delete" name="btn_delete" class="btn btn-default">Xóa các mục chọn</button>
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>
</body>

</html>