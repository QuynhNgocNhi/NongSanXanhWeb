<?php
ob_start();
session_start();
if (!isset($_SESSION['Id'])) {
    header("location: login.php");
}

if ($_SESSION['UserRoleId'] == 3) {
    header("location: Store_Register.php");
} else {

    require_once('Store_Dashboard_Process.php');
}
?>
<?php

if (isset($_POST)) {
//    $fileName = $_FILES['file']['name'];
//$fileType = $_FILES['file']['type'];
//$fileError = $_FILES['file']['error'];
//$fileContent = file_get_contents($_FILES['file']['tmp_name']);

    $ProductMainImage = $_POST['ProductImage'];
    $StoreId = $_SESSION['StoreId'];
    $UserId = $_SESSION['Id'];
    $Name = $_POST['Name'];
    $Price = $_POST['Price'];
    $Description = $_POST['Description'];
    $ProductCategory = $_POST['ProductCategory'];

//insert product to database
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");

    $sql = "INSERT INTO products (Name, Price, Description, VendorId, StoreId, StoreName, ProductCategoryId) VALUES (?,?, ?, ?, ?,?,?);";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sisissi", $Name, $Price, $Description, $UserId, $StoreId, $StoreName, $ProductCategory );
    $stmt->execute();

    echo json_encode(array('success' => 0));
    echo "Product added!";

} else {
    echo "No data inserted!";
}
?>