<!-- <script>
    if (typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", '<?php echo $_SERVER['PHP_SELF']; ?>');
    }
</script> -->
<div class="boxcenter">
    <div class="row2">
        <div class="row2 font_title">
            <h1>DANH SÁCH HÀNG HÓA</h1>
        </div>
        <div class="row mb10 ">
            <!-- <input class="mr20" type="button" value="CHỌN TẤT CẢ">
            <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ"> -->
            <a href="index.php?act=addsp"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
        </div>
        <div class="row2 form_content ">
            <form action="#" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table>
                        <tr>
                            <!-- <th></th> -->
                            <th>MÃ SP</th>
                            <th>TÊN SP</th>
                            <th>Giá</th>
                            <th>Hình</th>
                            <th>Mô tả</th>
                            <th>Lượt xem</th>
                            <th>ID Danh mục</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach ($listsp as $sanpham) {
                            extract($sanpham);
                            $suasp = "index.php?act=suasp&id=" . $id;
                            $xoasp = "index.php?act=xoasp&id=" . $id;
                        ?>
                            <tr>
                                <!-- <td><input type="checkbox" name="" id=""></td> -->
                                <td> <?= $id ?> </td>
                                <td> <?= $name ?> </td>
                                <td> <?= $price ?></td>
                                <td> <img src="../upload/sanpham/<?=$img?>" alt=""></td>
                                <td> <?= $mota ?></td>
                                <td> <?= $luotxem ?></td>
                                <td> <?= $iddm ?></td>
                                <td>
                                    <a href="<?php echo $suasp ?>"><input type="button" value="Sửa"></a>
                                    <a href="<?php echo $xoasp ?>" onclick="return confirm('Delete this?');"><input type="button" value="Xóa"></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>