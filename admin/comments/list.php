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
        Tổng hợp bình luận
    </h3>
    <form method="post" action="index.php">
        <table class="table">
            <thead class="alert-success">
                <tr>
                    <th>Hàng hóa</th>
                    <th>Số BL</th>
                    <th>Mới nhất</th>
                    <th>Cũ nhất</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $value) :
                    extract($value) ?>
                    <tr>
                        <td><?= $name ?></td>
                        <td><?= $so_luong ?></td>
                        <td><?= $cu_nhat ?></td>
                        <td><?= $moi_nhat ?></td>
                        <td>
                            <a href="../comments/index.php?id=<?= $id ?>" class="btn btn-default">Chi tiết</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </form>
</body>

</html>