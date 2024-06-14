<?php
function insert_sanpham($name, $price, $img, $mota, $iddm)
{
    $sql = "insert into sanpham(name, price, img, mota, iddm ) values('$name',$price,'$img','$mota','$iddm')";
    pdo_execute($sql);
}

function delete_sanpham($id)
{
    $sql = "update sanpham set status = 0 where id = $id";
    pdo_execute($sql);
}

function load_all_sp()
{
    $sql = "select * from sanpham where status = 1 order by id asc";
    $listsp = pdo_query($sql);
    return $listsp;
}
function load_one_sp($id)
{
    $sql = "select * from sanpham where id = " . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_sanpham($id, $name, $price, $img,$mota,$iddm)
{
    $sql = "update sanpham set name = '" . $name . "', price = '" . $price . "',img = '" . $img . "',mota = '" . $mota . "', iddm = '" . $iddm . "' where id = " . $id;
    pdo_execute($sql);
}

?>
<!--  -->