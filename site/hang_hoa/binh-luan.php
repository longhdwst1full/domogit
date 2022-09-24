<?php
require '../../dao/comments.php';
if (exist_params("noi_dung")) {
    $customer_id = $_SESSION['user']['id'];
    $date_comment = date_format(date_create(), 'Y-m-d');
    binh_luan_insert($content,$commodity_id,$customer_id,$date_comment);
}
$binh_luan_list = binh_luan_select_by_hang_hoa($id);
foreach ($binh_luan_list as $bl) {
    echo "<li>$bl[content] <i><b>$bl[customer_id]</b>, $bl[date_comment]</i></li>";
}
if (!isset($_SESSION['user'])) {
    echo '<b>Đăng nhập để bình luận về sản phẩm này</b>';
} else {
?>
    <form action="<?= $_SERVER["REQUEST_URI"] ?>" method="post">
        <input name="noi_dung" /><button>Gửi</button>
    </form>
<?php } ?>
