<?php
require_once "pdo.php";

function customer_selecAll()
{
  $sql = "sELECT * FROM customer";
  return pdo_query($sql);
}


// thêm
function customer_insert($password, $name, $kich_hoat, $avatar, $email, $vai_tro)
{
  $sql = "insert into customer( password, name, kich_hoat, avatar, email, vai_tro) values(?,?,?,?,?,?)";
  pdo_excute($sql, $password, $name, $kich_hoat==1, $avatar, $email, $vai_tro==1);
}


// delete
function customer_delete($id)
{
  $sql = "delete from customer where id=?";
  if(is_array($id)){
    foreach($id as $value){

      pdo_excute($sql, $value);
    }
  }else{
    pdo_excute($sql, $id);

  }
}


// lấy thông tin 1 mã loại 
function customer_getInfo($id)
{
  $sql = "select * from customer where id=?";
  return  pdo_query_one($sql, $id);
}

// // cập nhập thông tin 1 mã loại 
function customer_update($id, $password, $name, $kich_hoat, $avatar, $email, $vai_tro)
{
  $sql = "update customer set password=?, name=?, kich_hoat=?, avatar=?, email=?, vai_tro=? where id=?";
  return  pdo_excute($sql, $password, $name, $kich_hoat==1, $avatar, $email, $vai_tro==1, $id);
}


function customer_select_by_id($id){
  $sql="select * from customer where id=?";
  return pdo_query_one($sql, $id);
}

function customer_exist($id){
  $sql="select count(*) from customer where id=?";
  return pdo_query_value($sql, $id)>0;
}


function customer_select_by_role($vai_tro){
  $sql="select * from customer where vai_tro=?";
  return pdo_query($sql, $vai_tro)>0;
}

function customer_change_password() {
  
}