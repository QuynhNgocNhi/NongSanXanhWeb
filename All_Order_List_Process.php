<?php

require_once('config.php');
if (isset($_POST)) {
    $StatusId = $_POST['StatusId'];
    $OrderId = $_POST['OrderId'];
    $OrderDetailId = $_POST['OrderDetailId'];

    $sql = "UPDATE orderdetail SET OrderStatus = '" . $StatusId . "' WHERE Id = '$OrderDetailId'";
    mysqli_query($conn, $sql);
    $sql = "UPDATE orders SET OrderStatusId = '" . $StatusId . "' WHERE Id = '$OrderId'";
    mysqli_query($conn, $sql);

}
?>
