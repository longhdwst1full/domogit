<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $().ready(function() {
        $("#form_upade_password").validate({
            onfocusout: false,
            onkeyup: false,
            onclick: false,
            rules: {
                "password": {
                    required: true,
                    minlength: 8
                },
                "password2": {
                    equalTo: true,
                    minlength: 8
                },
                "password3": {
                    equalTo: "#password",
                    minlength: 8
                }
            },
            messages: {


                "password": {
                    required: "Bạn chưa nhập mật khẩu cũ ",
                    minlength: "Mật khẩu >8 kí tự "
                },

                "password2": {
                    required: "Bạn chưa nhập mật khẩu",
                    minlength: "Mật khẩu >8 kí tự "
                },
                "password3": {
                    equalTo: "Nhập lại mật khẩu không chính xác",
                    minlength: "Mật khẩu >8 kí tự "

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

<form action="doi-mk.php" method="post" id="form_upade_password">

    <h3 class="text-center">Đổi mật khẩu </h3>

    <?php
    if (strlen($MESSAGE)) {
        echo "<h4 class='alert text-warning'>$MESSAGE</h4>";
    }
    ?>
    <div class="form-group">
        <label for="">Email</label>
        <input name="email" value="<?= $_SESSION['user']['email'] ?>" class="form-control" disabled>
        <input name="id" value="<?= $_SESSION['user']['id'] ?>" type="hidden" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Mật Khẩu cũ</label>
        <input name="password" type="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Mật khẩu mới</label>
        <input class="form-control" id="password" name="password2" type="password">
    </div>
    <div class="form-group">
        <label for="">Nhập lại mật khẩu mới</label>
        <input class="form-control" name="password3" type="password">
    </div>


    <div class="form-group">
        <button class="btn btn-primary" name="btn_change" type="submit">Đổi mật khẩu</button>
    </div>
</form>