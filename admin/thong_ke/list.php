<h3>Thống kê hàng hóa từng loại </h3>

    <table class="table">
        <thead class="alert-success">
            <tr>
                <th>Loại hàng</th>
                <th>Số lượng</th>
                <th>Giá cao nhất</th>
                <th>Giá thấp nhât</th>
                <th>Giá trung bình</th>
                <th>Vai trò</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $value) :
                extract($value);
            ?>

                <tr>
                    <td><?= $name ?></td>
                    <td><?= $so_luong ?></td>
                    <td>$<?=number_format($gia_min,2)?></td>
                    <td>$<?=number_format($gia_max,2)?></td>
                    <td>$<?=number_format($gia_avg,2)?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
       
    </table>
<div class="form-group">
<a href="index.php?chart" class="btn btn-default">Xem biểu đồ</a>  
</div>