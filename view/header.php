<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="css/css.css">
    <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- <style>
      form li a{

      }
    </style> -->
</head>

<body>
    <div class="boxcenter">
        <!-- BIGIN HEADER -->
        <header>
            <div class="row mb header">
                <h1>SIÊU THỊ TRỰC TUYẾN</h1>
            </div>
            <div class="row mb menu">
                <ul>

                    <li class="dropdown">
                        <a class="dropdownbtn" href="">Trang chủ</a>
                        <div class="dropdown_content">
                            <a href="">Đồng hồ</a>
                            <a href="">Điện thoại</a>
                            <a href="">Laptop</a>
                        </div>
                    <li class="dropdown">
                        <a class="dropdownbtn" href="">Danh mục</a>
                        <div class="dropdown_content">
                            <a href="">Đồng hồ</a>
                            <a href="">Điện thoại</a>
                            <a href="">Laptop</a>
                        </div>
                    <li class="dropdown">
                        <a class="dropdownbtn" href="">Sản Phẩm</a>
                        <div class="dropdown_content">
                            <a href="">Đồng hồ</a>
                            <a href="">Điện thoại</a>
                            <a href="">Laptop</a>
                        </div>
                    <li class="dropdown">
                        <a class="dropdownbtn" href="">Bình luận</a>
                        <div class="dropdown_content">
                            <a href="">Đồng hồ</a>
                            <a href="">Điện thoại</a>
                            <a href="">Laptop</a>
                        </div>
                    </li>
                    <?php
                    if (isset($_SESSION["username"]) && ($_SESSION["username"] != "")) {
                        if((isset($_SESSION["role"])) && ($_SESSION["role"] == 1)){

                        
                    ?>
                        <li class="">
                            <a class="" href="./admin/">Quản trị viên</a>
                        </li>
                    <?php
                        }
                    }
                    ?>

                </ul>
            </div>
        </header>
        <!-- END HEADER -->