<?php
function insert_danhmuc($tenloai)
{
    $sql = "insert into danhmuc(name) values('$tenloai')";
    pdo_execute($sql);
}

function delete_danhmuc($id)
{
    $sql = "update danhmuc set trang_thai = 0 where id = $id";
    pdo_execute($sql);
}

function load_all_dm()
{
    $sql = "select * from danhmuc where trang_thai = 1 order by id asc";
    $listdm = pdo_query($sql);
    return $listdm;
}
function load_one_dm($id)
{
    $sql = "select * from danhmuc where id = " . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id, $tenloai)
{
    $sql = "update danhmuc set name = '" . $tenloai . "' where id = " . $id;
    pdo_execute($sql);
}

?>
<!--  -->