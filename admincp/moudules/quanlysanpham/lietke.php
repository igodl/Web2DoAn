<?php
$sql_lietke_sp = "SELECT * FROM `sanpham` ORDER BY MaSP";
$query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>

<p>Liệt Kê danh muc sản phẩm</p>
<table style="width:100%" border="1" style="border-collapse: collapse">
    <tr>
       
        <th>Mã Sản Phẩm</th>
        <th>Tên Sản Phẩm</th>
        <th>Giá Sản Phẩm</th>
        <th>Hình Ảnh</th>
		<th>Mô tả</th>
        <th>Nội Dung</th>
        <th>Quản Lý</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_sp)) {
       
    ?>
        <tr>
           
            <td style="width: 50px"><?php echo $row['MaSP'] ?></td>
            <td><?php echo $row['TenSP'] ?></td>
            <td><?php echo $row['Gia'] ?></td>
            <td> <img src="../images/dummy/products/<?php echo $row['Anh'] ?>" width="250px"> </td>
            <td><?php echo $row['MoTa'] ?></td>
			<td style="width: 400px"><?php echo $row['NoiDung'] ?></td>
            <td><a href="moudules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['MaSP'] ?>">Xóa</a> | <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['MaSP'] ?>">Sửa</a></td>
        </tr>
    <?php
    }
    ?>
</table>