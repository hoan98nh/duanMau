<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div class="boxcenter">
    <div class="row2">
        <div class="row2 font_title">
            <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
        </div>
        <div class="row2 form_content ">
            <form action="index.php?act=updatedm" method="POST">
                <div class="row2 mb10 form_content_container">
                    <label> Mã loại </label> <br>
                    <input type="text" name="maloai" value="<?= $id ?>" readonly>
                </div>
                <div class="row2 mb10">
                    <label>Tên loại </label> <br>
                    <input type="text" name="tenloai" value="<?= $name ?>">
                </div>
                <div class="row mb10 ">
                    <input class="mr20" name="capnhat" type="submit" value="Cập nhật">
                    <!-- <input class="mr20" type="reset" name="reset" value="NHẬP LẠI"> -->

                    <a href="index.php?act=listdm"><input class="mr20" type="button" value="DANH SÁCH"></a>
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