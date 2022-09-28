<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $().ready(function() {
        $("#form_register").validate({
            onfocusout: false,
            onkeyup: false,
            onclick: false,
            rules: {
                "name": {
                    required: true,
                    maxlength: 15
                },

                "password": {
                    required: true,
                    minlength: 8
                },
                "password1": {
                    equalTo: "#password",
                    minlength: 8
                },
                "email": {
                    required: true,
                    email: true
                }
            },
            messages: {
                "name": {
                    required: "Bạn chưa có nhập họ tên",

                },

                "password": {
                    required: "Bạn chưa nhập mật khẩu",
                    minlength: "Mật khẩu >8 kí tự "
                },
                "password1": {
                    equalTo: "Nhập lại mật khẩu không chính xác",
                },
                "email": {
                    required: "Bạn chưa nhập email",
                    email: "Bạn nhập sai định dạng email rồi ",
                }
            }
        });
    });
</script>
<style>
    .error {
        color: red;
    }
</style>

<form action="dang-ky.php" method="post" enctype="multipart/form-data" id="form_register">
    <h3 class="text-center">Đăng kí</h3>

    <?php

    if (strlen($MESSAGE)) {
        echo "<h4 class='alert text-warning'>$MESSAGE</h4>";
    }
    ?>
    <div class="form-group">
        <label for="">Email</label>
        <input class="form-control" type="text" name="email">
    </div>
    <div class="form-group">
        <label for="">Họ tên</label>
        <input name="name" class="form-control" type="text">
    </div>
    <div class="form-group">
        <label for="">Mật khẩu</label>

        <input class="form-control" id="password" name="password" type="password">
    </div>
    <div class="form-group">
        <label for="">Nhập lại mật khẩu </label>

        <input name="password1" class="form-control" type="password">
    </div>
    <div class="form-group">
        <label for="">Ảnh</label>
        <input type="file" name="up_hinh" class="form-control">
    </div>
    <div class="form-group">

        <button class="btn btn-default" name="btn_register">Đăng ký</button>
    </div>

</form>