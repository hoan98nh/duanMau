<!-- <script>
    if (typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", '<?php echo $_SERVER['PHP_SELF']; ?>');
    }
</script> -->
<div class="boxcenter">
    <div class="row2">
        <div class="row2 font_title">
            <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
        </div>
        <div class="row mb10 ">
            <!-- <input class="mr20" type="button" value="CHỌN TẤT CẢ">
            <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ"> -->
            <a href="index.php?act=adddm"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
        </div>
        <div class="row2 form_content ">
            <form action="#" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach ($listdm as $danhmuc) {
                            extract($danhmuc);
                            $suadm = "index.php?act=suadm&id=" . $id;
                            $xoadm = "index.php?act=xoadm&id=" . $id;
                        ?>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td> <?= $id ?> </td>
                                <td> <?= $name ?> </td>
                                <td>
                                    <a href="<?php echo $suadm ?>"><input type="button" value="Sửa"></a>
                                    <a href="<?php echo $xoadm ?>" onclick="return confirm('Delete this?');"><input type="button" value="Xóa"></a>
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