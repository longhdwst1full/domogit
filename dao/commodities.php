<?php
require_once 'pdo.php';
function commodities_insert($name, $price, $sell, $forder_img, $date_add, $description, $special, $view, $category_id)
{
    $sql =  "iNSERT INTO commodities(name, price, sell, image, date_add, description, special, view, category_id) VALUES (?,?,?,?,?,?,?,?,?)";
    return pdo_excute($sql, $name, $price, $sell, $forder_img, $date_add, $description, $special, $view, $category_id);
}
function commodities_update($id, $name, $price, $sell, $image, $date_add, $description, $special, $view, $category_id)
{
    $sql = "uPDATE commodities 
    SET name=?,
    price=?,sell=?,image=?,date_add=?,description=?,special=?,view=?,category_id=? WHERE id=?";
    return pdo_excute($sql, $name, $price, $sell, $image, $date_add, $description, $special, $view, $category_id, $id);
}
function commodities_delete($id)
{
    $sql = "dELETE FROM commodities WHERE id=?";
    if (is_array($id)) {
        foreach ($id as $value) {

            pdo_excute($sql, $value);
        }
    } else {
         pdo_excute($sql, $id);
    }
}
function commodities_select_all()
{
    $sql = "sELECT * FROM commodities";
    return pdo_query($sql);
}
function commodities_select_by_id($id)
{
    $sql = "SELECT * FROM commodities WHERE id=?";
    return pdo_query_one($sql, $id);
}
function commodities_exist($id)
{
    $sql = "SELECT count(*) FROM commodities WHERE id=?";
    return pdo_query_value($sql, $id) > 0;
}
function commodities_tang_so_luot_xem()
{
}
function commodities_select_top10()
{
}
function commodities_select_dac_biet()
{
}
function commodities_select_by_loai(
    // $sql= "select "
)
{
}
function commodities_select_keyword()
{
}


function category_id_commodities()
{
    $sql = "select c.name as commodity_id,b.* from categories c join commodities b on b.category_id = c.id";
    return pdo_query($sql);
}


function commodities_select_all_home(){
    
}