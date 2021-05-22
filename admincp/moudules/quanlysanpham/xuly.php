<?php

include('../../config/connect.php');

$masp = $_POST['masp'];
$gia = $_POST['giasp'];
$tensp = $_POST['tensp'];
$content = $_POST['noidung'];
$moTa = $_POST['moTa'];
$img = $_FILES['hinhanh']['name'];
$img_tmp = $_FILES['hinhanh']['tmp_name'];
$img = time() . '_' . $img;


if (isset($_POST['themsanpham'])) {
    $sql_them = "INSERT INTO `sanpham`(`TenSP`, `Gia`, `MoTa`, `NoiDung`, `Anh`) VALUES ('$tensp','$gia','$moTa','$content','$img')";
    move_uploaded_file($img_tmp, '../../../images/dummy/products/' . $img);
    mysqli_query($mysqli, $sql_them);
    header('Location:../../admin.php?action=quanlysanpham&query=them');
} else if (isset($_POST['suasanpham'])) {
    //sua
    if ($img != '') {
        move_uploaded_file($img_tmp, '../../../images/dummy/products/' . $img);

        $sql = "SELECT * FROM sanpham WHERE MaSP='$_GET[idsanpham]' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('../../../images/dummy/products/' . $row['hinhanh']);
        }

        $sql_update = "UPDATE sanpham SET TenSP='" . $tensp . "',Gia='" . $gia . "',Anh='" . $img . "',NoiDung='" . $content . "' ,MoTa='" . $moTa . "' WHERE MaSP='$_GET[idsanpham]'";
    } else {
        move_uploaded_file($img_tmp, '../../../images/dummy/products/' . $img);
        $sql_update = "UPDATE sanpham SET TenSP='" . $tensp . "',Gia='" . $gia . "',NoiDung='" . $content . "' ,MoTa='" . $moTa . "' WHERE MaSP='$_GET[idsanpham]'";
    }
    mysqli_query($mysqli, $sql_update);
    header('Location:../../admin.php?action=quanlysanpham&query=them');
} else {
    $id = $_GET['idsanpham'];
    $sql = "SELECT * FROM sanpham WHERE MaSP='$id' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('../../../images/dummy/products/' . $row['Anh']);
    }
    $sql_xoa = "DELETE FROM sanpham WHERE MaSP='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../admin.php?action=quanlysanpham&query=them');
}
