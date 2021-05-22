<?php
$sql_sua_sp = "SELECT * FROM sanpham WHERE MaSP='$_GET[idsanpham]' LIMIT 1";
$query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>

<p class="title_them">Sửa Sản Phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
    <?php
    while ($dong = mysqli_fetch_array($query_sua_sp)) {
    ?>
        <form method="POST" action="moudules/quanlysanpham/xuly.php?idsanpham=<?php echo $dong['MaSP'] ?>" enctype="multipart/form-data">
            <tr>
                <td>Tên sản phẩm</td>
                <td><input style="width:50%;" type="text" name="tensp" value="<?php echo $dong['TenSP'] ?>"></td>
            </tr>
            <tr>
                <td>Giá Sản Phẩm</td>
                <td><input style="width:50%;" type="text" name="giasp" value="<?php echo $dong['Gia'] ?>"></td>
            </tr>

            <tr>
                <td>Hình ảnh</td>
                <td>
                    <input type="file" name="hinhanh">
                    <img src="../images/dummy/products/<?php echo $dong['Anh'] ?>" width="150px">
                </td>
            </tr>

            <tr>
                <td>Mô tả</td>
                <td><textarea row=10 name="moTa"><?php echo $dong['MoTa'] ?></textarea></td>
            </tr>
			
			<tr>
                <td>Nội dung</td>
                <td><textarea row="10" width="100%" name="noidung"><?php echo $dong['NoiDung'] ?></textarea></td>
            </tr>
			
            <tr>
                <td colspan="2"><input type="submit" name="suasanpham" value="Sửa Sản Phẩm"></td>
            </tr>

        </form>
    <?php
    }
    ?>
</table>