<?php
 require_once "../../global.php";
 require_once "../../dao/customer.php";
 
$cart = $_SESSION['cart'];
$sum = 0;
?>
<table class="table">
    <h3 class="text-center my-3">Giỏ hàng của bạn</h3>
    <tr>
        <th>Ảnh</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng </th>
        <th>Tổng tiền</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($cart as $id => $each) : 
// var_dump($id);
// var_dump($each);
// die;
?>
        <tr>
            <td>
                <img width="100" height="" src="<?= $each['image'] ?>" alt="">

            </td>
            <td>
                <?= $each['name'] ?>
            </td>
            <td>
                <?=number_format( $each['price']) ?>
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
                <a href="delete_from_cart.php?id=<?= $id ?>">Xóa</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>
<h1>Tổng tiền :
    <?php echo $sum ?>
</h1>
<?php
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
    $each = customer_select_by_id($_SESSION['user']['id']);
    ?>
    <form action="#" method="post">
        Tên người nhận
        <input type="text" name="name_receiver" value="<?= $each['name'] ?>">
        <br>
        Số điện thoại người nhận
        <input type="text" name="phone_receiver">
        <br>
        Địa chỉ người nhận
        <input type="text" name='address_receiver' >
        <br>
        <button>Đặt hàng</button>
    </form>
<?php }
else{
    ?>
    <form action="#" method="post">
        Tên người nhận
        <input type="text" name="name_receiver" >
        <br>
        Số điện thoại người nhận
        <input type="text" name="phone_receiver">
        <br>
        Địa chỉ người nhận
        <input type="text" name='address_receiver' >
        <br>
        <button>Đặt hàng</button>
    </form>
<?php }
