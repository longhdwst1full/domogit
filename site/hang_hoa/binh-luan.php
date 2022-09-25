<?php
require_once '../../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/comments.php';

if (exist_params("noi_dung")) {
    $kh = $_SESSION['user']['id'];
    $content =$_POST['noi_dung'];
    $date_comment = date_format(date_create(), 'Y-m-d');
    binh_luan_insert($content, $id, $kh, $date_comment);
}
// list bình lua
$comment_list = binh_luan_select_by_hang_hoa($id);
foreach ($comment_list as $bl) { ?>
    <ul>
        <li class="">
          <p>  <i><b>
                <?= $bl['customer_id'] = $_SESSION['user']['id'] ? $_SESSION['user']['name'] : "" ?>
            </b></i>
            </p>
            
           <div class="d-flex justify-content-between w-75"> 
            <p><?= $bl['content'] ?></p>
            <p><?= $bl['date_comment'] ?></p>
         </div>
        </li>
    </ul>
   
<?php }
if (!isset($_SESSION['user'])) {
    echo '<b>Đăng nhập để bình luận về sản phẩm này</b>';
} else {
?>
    <form class="d-flex w-90"  action="<?= $_SERVER["REQUEST_URI"] ?>" method="post">
        <input class="form-control" name="noi_dung" /><button class="btn btn-default">Gửi</button>
    </form>
<?php } ?>