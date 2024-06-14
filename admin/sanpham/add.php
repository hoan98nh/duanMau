
<div class="boxcenter">
    <div class="row2">
        <div class="row2 font_title">
            <h1>THÊM MỚI HÀNG HÓA</h1>
        </div>
        <div class="row2 form_content ">
            <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
                <div class="row2 mb10 form_content_container">
                    <label> ID </label> <br>
                    <input type="text" name="id" disabled>
                </div>
                <div class="row2 mb10">
                    <label>Tên sản phẩm </label> <br>
                    <input type="text" name="name" placeholder="nhập vào tên">
                </div>
                <div class="row2 mb10">
                    <label>Giá </label> <br>
                    <input type="text" name="price" placeholder="nhập vào tên">
                </div>
                <div class="row2 mb10">
                    <label>Hình </label> <br>
                    <input type="file" name="img" id="">
                </div>
                <div class="row2 mb10">
                    <label>Mô tả </label> <br>
                    <textarea name="mota" id=""></textarea>
                </div>
                <div class="row2 mb10">
                    <label>Danh mục</label> <br>
                    <select name="iddm">
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                        ?>
                            <option value="<?= $id ?>">
                                <?= $name ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="row mb10 ">
                    <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">
                    <input class="mr20" type="reset" value="NHẬP LẠI">

                    <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>
                </div>
            </form>
        </div>
    </div>
</div>