<?php

require_once('config.php');
if (isset($_POST)) {
    $VendorConfirm = $_POST['Confirm'];
    $OrderId = $_POST['OrderId'];
    if ($VendorConfirm == 3) {
        $OrderStatus = 8;
    } elseif ($VendorConfirm == 2) {
        $OrderStatus = 1;
    }
    $sql = "UPDATE orderdetail SET VendorConfirm = '" . $VendorConfirm . "', OrderStatus = '$OrderStatus' WHERE Id = '$OrderId'";
    mysqli_query($conn, $sql);

}
?>
