<?php
require "../dao/pdo.php";
require "../dao/categories.php";


// cập nhập thông tin
if(isset($_POST['id'])){
    loai_update($_POST['id'], $_POST['name']);

    header('Location:demo.php');
}


if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $loai_info = loai_getInfo($id);
    extract($loai_info);
?>
    <form action="edit.php" method="post">
        <input type="hidden" value="<?=$id?>" name="id" />
        <input type="text" name="name" value="<?= $name ?>">
        <br>
        <input type="submit" value="Sửa">
    </form>
<?php } else {
    echo "Không tồn tại mã";
}
