<?php
require_once "../../global.php";
require_once "../../dao/customer.php";

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "<h5 class='text-center text-info mt-4'>Bạn chưa có đặt sản phẩm nào.</h5>";
    exit;
} else {

    $cart = $_SESSION['cart'];
}

$sum = 0;
?>
<table class="table">
    <h3 class="text-center my-3">Giỏ hàng của bạn</h3>
    <tr class="table-success">
        <th>Ảnh</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng </th>
        <th>Tổng tiền</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($cart as $id => $each) :

    ?>
        <tr class="py-2">
            <td>
                <img width="100" height="" src="<?= $CONTENT_URL ?>/images/products/<?= $each['image'] ?>" alt="">

            </td>
            <td>
                <?= $each['name'] ?>
            </td>
            <td>
                <?= number_format($each['price']) ?>
            </td>
            <td>
                <a href="update_quantity_in_cart.php?id=<?= $id ?>&type=decre">
                    -
                </a>


                <?= $each['quantity']; ?>
                <a href="update_quantity_in_cart.php?id=<?= $id ?>&type=incre">
                    +
                </a>
            </td>

            <td>
                <?php $result = $each['quantity']
                    * $each['price'];
                echo $result;
                $sum += $result;
                ?>

            </td>
            <td>
                <a class="btn btn-danger" href="delete_from_cart.php?id=<?= $id ?>">Xóa</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>
<h1>Tổng tiền :
    <?php echo $sum ?>
</h1>
<?php
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $each = customer_select_by_id($_SESSION['user']['id']);
?>
    <form action="#" method="post" class="mt-3">
        <div class="form-group">
            <label for="">Tên người nhận</label>
            <input type="text" class="form-control" name="name_receiver" value="<?= $each['name'] ?>">
        </div>
        <div class="form-group">
            <label for="">

                Số điện thoại người nhận
            </label>
            <input class="form-control" type="text" name="phone_receiver">

        </div>
        <div class="form-group">
            <label for="">

                Địa chỉ người nhận
            </label>
            <input class="form-control" type="text" name='address_receiver'>

        </div>
        <div class="form-group">

            <button class="btn btn-primary" name="dat_hang">Đặt hàng</button>
        </div>
    </form>
<?php  } else {

?>
    <form action="#" method="post" class="mt-3">
        <div class="form-group">
            <label for="">Tên người nhận</label>
            <input type="text" class="form-control" name="name_receiver" >
        </div>
        <div class="form-group">
            <label for="">

                Số điện thoại người nhận
            </label>
            <input class="form-control" type="text" name="phone_receiver">

        </div>
        <div class="form-group">
            <label for="">

                Địa chỉ người nhận
            </label>
            <input class="form-control" type="text" name='address_receiver'>

        </div>
        <div class="form-group">

            <button class="btn btn-primary" name="dat_hang">Đặt hàng</button>
        </div>
    </form>
<?php } ?>