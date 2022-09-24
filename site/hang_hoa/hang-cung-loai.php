<ul>
<?php
$hh_cung_loai = commodities_select_by_loai($category_id);
foreach ($hh_cung_loai as $hh) {
echo "<li><a href='chi-tiet.php?id=$hh[id]'>
$hh[name]</a></li>";
}
?>
</ul>