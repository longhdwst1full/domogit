<?php
if(isset($_SESSION['user'])){
require 'dang-nhap-info.php';
}
else{
$email = get_cookie("email");
// echo $email;
// die;
$password = get_cookie("password");
require 'dang-nhap-form.php';
}