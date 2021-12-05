<?php
$manhanvien = $_GET['manhanvien'];
include "BTTH_Connnect.php";
$sql = "DELETE FROM NHANVIEN WHERE MaNhanVien='$manhanvien'";
if (mysqli_query($conn, $sql)) {
    echo "Xóa thành công";
} else {
    echo "Error deleting record: " . mysqli_connect_error();
}
mysqli_close($conn);

?>
