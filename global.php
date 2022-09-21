<?php

$ROOT_URL ="/xshop";
$CONTENT_URL="$ROOT_URL/content";
$ADMIN_URL="$ROOT_URL/admin";
$SITE_URL="$ROOT_URL/site";


function exist_params($fieldname) {
    return array_key_exists($fieldname,$_REQUEST);
}