<?php

function loai_selecAll() {
    $sql = "sELECT * FROM categories";
    return pdo_query($sql);
}


// thêm
function loai_insert($name) {
    $sql = "insert into categories(name) values(?)";
     pdo_excute($sql,$name);
}

// delete
function loai_delete($id) {
    $sql = "delete from categories where id=?";
     pdo_excute($sql,$id);
     header("Location: ../demo/demo.php");
}


// lấy thông tin 1 mã loại 
function loai_getInfo($id) {
    $sql="select * from categories where id=?";
  return  pdo_query_one($sql,$id);
}

// // cập nhập thông tin 1 mã loại 
function loai_update($id,$name) {
    $sql="update categories set name=? where id=?";
  return  pdo_excute($sql,$name,$id);
}
