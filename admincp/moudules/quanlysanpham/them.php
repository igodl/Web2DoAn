<p class="title_them">Thêm Sản Phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
    <form method="POST" action="moudules/quanlysanpham/xuly.php" enctype="multipart/form-data">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input style="width:50%;" type="text" name="tensp"></td>
        </tr>
        <tr>
            <td>Giá Sản Phẩm</td>
            <td><input style="width:50%;" type="text" name="giasp"></td>
        </tr>

        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh"></td>
        </tr>

        <tr>
            <td>Mô tả</td>
            <td><textarea row="10" width="100%"  name="moTa"></textarea></td>
        </tr>
		
		<tr>
            <td>Nội dung</td>
            <td><textarea row="10" width="100%"  name="noidung"></textarea></td>
        </tr>
		
        <tr>
            <td colspan="2"><input type="submit" name="themsanpham" value="Thêm Sản Phẩm"></td>
        </tr>

    </form>
</table>