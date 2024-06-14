<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "header.php";
// controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "them thanh cong";
            }
            include "./danhmuc/add.php";
            break;
        case 'listdm':
            $listdm = load_all_dm();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_danhmuc($id);
            }
            header("Location: index.php?act=listdm");
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $dm = load_one_dm($id);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['maloai'];
                $tenloai = $_POST['tenloai'];
                update_danhmuc($id, $tenloai);
                $thongbao = "cap nhat thanh cong";
                header("Location: index.php?act=listdm");
            }
            break;

            // san pham

        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];
                $iddm  = $_POST['iddm'];

                $img = $_FILES['img']['name'];
                $target_dir = "../upload/sanpham/";
                $targer_file =  $target_dir . basename($_FILES['img']['name']);
                move_uploaded_file($_FILES['img']['tmp_name'], $targer_file);
                // if(move_uploaded_file($_FILES['img']['tmp_name'], $targer_file){
                //   do;  
                // }
                // else{

                // };
                insert_sanpham($name, $price, $img, $mota, $iddm);
                $thongbao = "them thanh cong";
            }
            $listdanhmuc = load_all_dm();
            include "./sanpham/add.php";
            break;
        case 'listsp':
            $listsp = load_all_sp();
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_sanpham($id);
            }
            header("Location: index.php?act=listsp");
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $sp = load_one_sp($id);
            }
            $listdanhmuc = load_all_dm();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];
                $iddm  = $_POST['iddm'];

                $img = $_FILES['img']['name'];
                if ($img != "") {
                    $target_dir = "../upload/sanpham/";
                    $targer_file =  $target_dir . basename($_FILES['img']['name']);
                    move_uploaded_file($_FILES['img']['tmp_name'], $targer_file);
                } else {
                    $img = $_POST['oldImg'];
                }
                update_sanpham($id, $name, $price, $img, $mota, $iddm);
                $thongbao = "cap nhat thanh cong";
                header("Location: index.php?act=listsp");
            }
            break;


        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
?>
<!--  -->