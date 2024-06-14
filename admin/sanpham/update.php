<?php
if (is_array($sp)) {
    extract($sp);
}
?>
<div class="boxcenter">
    <div class="row2">
        <div class="row2 font_title">
            <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
        </div>
        <div class="row2 form_content ">
            <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
                <div class="row2 mb10 form_content_container">
                    <label> ID </label> <br>
                    <input type="text" name="id" value="<?=$id?>" readonly>
                </div>
                <div class="row2 mb10">
                    <label>Tên sản phẩm </label> <br>
                    <input type="text" name="name" value="<?=$name?>">
                </div>
                <div class="row2 mb10">
                    <label>Giá </label> <br>
                    <input type="text" name="price" value="<?=$price?>">
                </div>
                <div class="row2 mb10">
                    <label>Hình </label> <br>
                    <img src="../upload/sanpham/<?=$img?>" alt="">
                    <input type="text" name="oldImg" value="<?=$img?>" hidden>
                    <input type="file" name="img" id="">
                </div>
                <div class="row2 mb10">
                    <label>Mô tả </label> <br>
                    <textarea name="mota" id=""><?=$mota?></textarea>
                </div>
                <div class="row2 mb10">
                    <label>Danh mục</label> <br>
                    <select name="iddm">
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            if($iddm == $id){
                                $s = 'selected';
                            }
                            else{
                                $s = "";
                            }
                        ?>
                            <option value="<?= $id ?>" <?= $s ?>>
                                <?= $name ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="row mb10 ">
                    <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT">
                    <input class="mr20" type="reset" value="NHẬP LẠI">

                    <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>
                </div>
            </form>
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo "<script type='text/javascript'>alert('$thongbao');</script>";
            }
            ?>
        </div>
    </div>
</div>