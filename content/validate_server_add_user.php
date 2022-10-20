<?php
$nameerr = "";
$emailerr = "";
$passworderr = "";

require_once "../../dao/customer.php";
if (strlen($name) == 0) {
    $nameerr = "Please enter your name";
}

if (strlen($email) == 0) {
    $emailerr = "Please enter your email";
} else {
    $countData = customer_check_email_exits($email);
   
    if ($countData['total'] > 0) {
        $emailerr = "Email already exists, please choose another email";
    }
}

if (strlen($password) == 0) {
    $passworderr = "Please enter your password";
}
