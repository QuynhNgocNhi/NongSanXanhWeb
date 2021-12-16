<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý nhân viên</title>
</head>
<!--    Cau1-->
<body>
<?php
$ProductId = $_GET['ProductId'];
include "BTTH_Connnect.php";
$sql = "SELECT * FROM NHANVIEN WHERE MaNhanVien='$manhanvien'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($result);


?>
<form method="get" action="#">
    <table border="1" cellspacing="0">
        <tr>
            <td>Mã Nhân viên</td>
            <td><input type="input" name="ma" value='<?php echo $manhanvien; ?>'></td>
        </tr>
        <tr>
            <td>Tên Nhân viên</td>
            <td><input type="input" name="ten" value='<?php echo $row[1]; ?>'></td>
        </tr>
        <tr>
            <td>Lương tháng</td>
            <td><input type="input" name="luong" value='<?php echo $row[2]; ?>'></td>
        </tr>
        <?php
        if ($row[3] == 1) {
            ?>
            <tr>
                <td>Giới tính</td>
                <td><input type="checkbox" name="GioiTinh" checked>nam</td>
            </tr>
            <?php
        }
        ?>
        <?php
        if ($row[3] == 0) {
            ?>
            <tr>
                <td>Giới tính</td>
                <td><input type="checkbox" name="GioiTinh">Nữ</td>
            </tr>
            <?php
        }
        ?>
        <tr>
            <td>Mã phòng</td>
            <td>
                <select name="MaPhong">
                    <option value="<?php echo $row[4]; ?>" selected><?php echo $row[4]; ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td align="center"><input type="Submit" value="Cập Nhật" name="Submit"></td>
            <td><input type="Reset" value="Reset"></td>
        </tr>
    </table>
</form>
</body>
<?php
if (isset($_GET['Submit']) && ($_GET['Submit']) == "Cập Nhật") {

    include "BTTH_Connnect.php";
    $manhanvien = $_GET['ma'];
    $tennhanvien = $_GET['ten'];
    $luongthang = $_GET['luong'];

    $maphong = $_GET['MaPhong'];
    if (isset($_GET['GioiTinh']))
        $gioitinh = 1;
    else
        $gioitinh = 0;

    $sql = "UPDATE NHANVIEN SET TenNhanVien = '$tennhanvien', LuongThang = '$luongthang', GioiTinh = '$gioitinh', MaPhong = '$maphong'  WHERE MaNhanVien='$manhanvien'";

    if (mysqli_query($conn, $sql)) {
        echo "Cập nhật thành công";
    } else {
        echo "Error modified record: " . mysqli_connect_error();
    }
    header("Location: BTTH4.php");



}
?>

