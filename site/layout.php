<?php
// require "../../dao/pdo.php";
// require "../../dao/categories.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <header class="row alert-success">
            <h1 class="alert alert-success">Siêu thị trực tuyến</h1>
        </header>
        <nav class="row">
            <?php
            require_once "trang_chinh/menu.php";
            ?>
        </nav>
        <div class="row">
            <article class="col-sm-9">
                <?php    
                require $VIEW_NAME;
                ?>

            </article>


            <aside class="col-sm-3 mt-3 border">

                <?php
                require "trang_chinh/tai_khoan.php";
                require "trang_chinh/danh_muc.php";
                require "trang_chinh/top10.php";
                ?>
            </aside>
        </div>



        <footer class="row  mt-3 d-flex justify-content-center h-25 bg-success text-dark">
            <p class="py-3 text-center">Copy by Hoàng Đình Long</p>
        </footer>
    </div>
</body>

</html>