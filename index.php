<?php
ob_start();
session_start();
include "./model/pdo.php";
include "./model/login.php";
include "view/header.php";
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "sanphamct":
            include "view/chitietsanpham.php";
            break;
        case "login":
            // include "view/chitietsanpham.php";
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                unset($_SESSION["error"]);
                $checkUser = checkUser($user, $pass);
                var_dump($checkUser);
                if ($checkUser == true) {
                    $_SESSION["username"] = $checkUser['user'];
                    $_SESSION["role"] = $checkUser['role'];
                    header("Location: index.php?act=logined");
                } else {
                    $error = "thong tin dang nhap ko dung";
                    $_SESSION["error"] = $error;
                    header("Location: index.php?act=loginedFail");
                }
            }
            break;
        case "logined":
            header("Location: index.php");
            break;
        case "loginedFail":
            header("Location: index.php");
            break;
        case "logout":
            unset($_SESSION["username"]);
            unset($_SESSION["role"]);

            header("Location: index.php");
            break;
        default:
            header("Location: index.php");
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
