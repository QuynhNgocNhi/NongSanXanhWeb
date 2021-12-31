<?php

if (isset($_POST)) {

    include "config.php";
    $ten = $_POST['Name'];
    $icon = $_POST['CategoryMainImage'];

    $sql = "INSERT INTO productcategory (Name,Icon) VALUES ('$ten','$icon')";

    if (mysqli_query($conn, $sql)) {
        echo "Thêm thành công";
    } else {
        echo "Error adding record: " . mysqli_connect_error();
    }
    header("Location: Admin_Category_Added.php");


}

?>