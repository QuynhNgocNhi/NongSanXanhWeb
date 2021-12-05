<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý nhân viên</title>
</head>
<!--    Cau1-->
<!--    <body>-->
<!--    <form method="get" action="#">-->
<!--        <table border="1" cellspacing="0">-->
<!--            <tr>-->
<!--                <td>Mã công ty</td>-->
<!--                <td><input type="input" name="ma"></td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>Tên công ty</td>-->
<!--                <td><input type="input" name="ten"></td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>Địa chỉ</td>-->
<!--                <td><input type="input" name="diachi"></td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td align="center"><input type="Submit" value="Thêm" name="Submit"></td>-->
<!--                <td><input type="Reset" value="Reset"></td>-->
<!--            </tr>-->
<!--        </table>-->
<!--    </form>-->
<!--    </body>-->
<?php
// if(isset($_GET['Submit'])&&($_GET['Submit']=="Thêm"))
// {
// include "BTTH_Connnect.php";
// $macongty= $_GET['ma'];
// $tencongty=$_GET['ten'];
// $diachi= $_GET['diachi'];
// $sql = "insert into CONGTY values ('$macongty','$tencongty','$diachi')";
// $result = mysqli_query($conn, $sql);
//
// if($result){
// echo "Thêm thành công";
// }
// else{
// echo "Thêm không thành công";
// }
// mysqli_close($conn);
// }
//?>
<!--    <body>-->
<!--Cau2-->
<?php
//?>
<!--</body>-->
<?php
//if (isset($_GET['Submit']) && ($_GET['Submit'] == "Thêm")) {
//    include "BTTH_Connnect.php";
//    $macongty = $_GET['ma'];
//    $tencongty = $_GET['ten'];
//    $diachi = $_GET['diachi'];
//    $sql = "select * from CHINHANH where MaCongTy='001'";
//    $result = mysqli_query($conn, $sql);
//
//    echo "<table border='1' cellspacing='0'>";
//    echo "<tr><th>STT</th><th>Mã chi nhánh</th><th>Tên chi nhánh</th></tr>";
//    $stt = 1;
//    if (mysqli_num_rows($result) > 0) {
//        while ($row = mysqli_fetch_row($result)) {
//            echo "<tr>";
//            echo "<td>$stt</td><td>$row[0]</td><td>$row[1]</td>";
//            echo "</tr>";
//            $stt++;
//        }
//    } else {
//        echo "Không có dòng nào";
//    }
//    mysqli_close($conn);
//}
//?>
<!--Cau3-->
<!--<body>-->
<!--<form method="get" action="#">-->
<!--    <table border="1" cellspacing="0">-->
<!--        <tr>-->
<!--            <td>Tên cần tìm</td>-->
<!--            <td><input type="input" name="ten"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td colspan='2' align="center"><input type="Submit" value="Tìm"-->
<!--                                                  name="Submit"></td>-->
<!--        </tr>-->
<!--    </table>-->
<!--</form>-->
<!--</body>-->
<?php
// if(isset($_GET['Submit'])&&($_GET['Submit']=="Tìm"))
// {
// include "BTTH_Connnect.php";
// $tennhanvien= $_GET['ten'];
// $sql = "select * from NHANVIEN where TenNhanVien='$tennhanvien'";
// $result = mysqli_query($conn, $sql);
// if(mysqli_num_rows($result)>0)
// {
// $row = mysqli_fetch_row($result);
// echo "<h3>Mã nhân viên tìm thấy:$row[0]</h3>";
// echo "<h3>tên nhân viên tìm thấy:$row[1]</h3>";
// }
// else{
// echo "Tìm không thấy";
// }
// mysqli_close($conn);
// }
?>
<!--cau45-->
<?php
//
//include "BTTH_Connnect.php";
//
//$sql = "select * from NHANVIEN";
//$result = mysqli_query($conn, $sql);
//echo "<table border='1' cellspacing='0'>";
//echo "<tr><th>STT</th><th>Mã chi nhánh</th><th>Chức năng</th></tr>";
//
//if (mysqli_num_rows($result) > 0) {
//    while ($row = mysqli_fetch_row($result)) {
//        echo "<tr>";
//        echo "<td>$row[0]</td><td>$row[1]</td><td><a
//href='BTTH4_XoaNhanVien.php?manhanvien=$row[0]'>Xóa  </a><span> |</span><a
//href='BTTH4_View.php?manhanvien=$row[0]'> View</a></td>";
//        echo "</tr>";
//    }
//
//} else {
//    echo "Không có dòng nào!";
//}
//
//mysqli_close($conn);
//
//?>
<body>
<form method="get" action="#">
    <table border="1" cellspacing="0">
        <tr>
            <td>Mã chi nhánh</td>
            <td><input type="input" name="ma"></td>
        </tr>
        <tr>
            <td>Tên chi nhánh</td>
            <td><input type="input" name="ten"></td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td><input type="input" name="diachi"></td>
        </tr>
        <?php

        include "BTTH_Connnect.php";

        $sql = "select * from CONGTY";
        $result = mysqli_query($conn, $sql);
        //        echo "<table border='1' cellspacing='0'>";
        //        echo "<tr><th>STT</th><th>Mã chi nhánh</th><th>Chức năng</th></tr>";

        if (mysqli_num_rows($result) > 0) {

            echo "<tr>";
            echo "<td>Tên công ty</td><td><select name='macongty'>";
            while ($row = mysqli_fetch_row($result)) {
                echo "<option value = '$row[0]'>$row[1]</option>";
            }
            echo " </select></td></tr>";
        }
        ?>
        <tr>
            <td colspan='2' align="center"><input type="Submit" value="Thêm"
                                                  name="Submit"></td>
        </tr>
    </table>
</form>
<?php
if (isset($_GET['Submit']) && ($_GET['Submit']) == "Thêm") {

    include "BTTH_Connnect.php";
    $machinhanh = $_GET['ma'];
    $tenchinhanh = $_GET['ten'];
    $diachi = $_GET['diachi'];
    $macongty = $_GET['macongty'];

    $sql = "INSERT INTO CHINHANH VALUES ('$machinhanh','$tenchinhanh','$diachi', '$macongty')";

    if (mysqli_query($conn, $sql)) {
        echo "Thêm thành công";
    } else {
        echo "Error adding record: " . mysqli_connect_error();
    }
    header("Location: BTTH4.php");



}
?>
</body>


