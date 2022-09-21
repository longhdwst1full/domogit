<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xshop</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        $(function() {
            $(".datepicker").datepicker({
                dateFormat: 'yy-mm-dd'
            });
        })
    </script>


</head>

<body>
    <div class="container">
        <header class="row alert alert-danger">
            <h1 class=" alert-danger">
                Quản trị website
            </h1>
        </header>
        <nav class="row">

            <?php require "menu.php"; ?>
        </nav>

        <?php


        // controller
        // if (isset($_GET['act'])) {
        //     $act = $_GET['act'];
        //     switch ($act) {
        //         case 'admin':
        //             // kiểm tra xem người dung có click vào nút add hay không
        //             if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
        //                 $name = $_POST['name'];
        //             }
        //             include "categories/add.php";
        //             break;
        //         case 'addsp':
        //             require "commodities/add.php";
        //             break;
        //         default:
        //             require 'home.php';
        //     }
        // } else {
        //     require 'home.php';
        // }
        // require './home.php';
        // 
        ?>
        <!-- <div class="row"> -->
            <?php include $VIEW_NAME; ?>
        <!-- </div> -->


    </div>
</body>

</html>