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

    $ProductMainImage = $_POST['ProductMainImage'];
    $ProductImages = $_POST['ProductImages'];
    $StoreId = $_SESSION['StoreId'];
    $UserId = $_SESSION['Id'];
    $Name = $_POST['Name'];
    $Price = $_POST['Price'];
    $Description = $_POST['Description'];
    $ProductCategory = $_POST['ProductCategory'];

//todo: Generate Productid = StoreId + time created or prevent default Productname
//insert product to database
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");

    $sql = "INSERT INTO products (Name, Price, Description, VendorId, StoreId, StoreName, ProductCategoryId, Img) VALUES (?,?, ?, ?, ?,?,?,?);";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sisiisis", $Name, $Price, $Description, $UserId, $StoreId, $StoreName, $ProductCategory, $ProductMainImage);
    $stmt->execute();

//    get product id
    $sql = "SELECT * FROM products WHERE StoreId = '" . $StoreId . "' AND Name = '" . $Name . "'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_array($result, MYSQLI_BOTH);
        $ProductId = $row["Id"];
    }

//    add Product images to db
    for ($i = 0; $i < count($ProductImages); $i++) {
        $ProductImage = $ProductImages[$i];
        if ($i == 0) {
            $sql = "UPDATE productimgs SET ProductId = '" . $ProductId . "', IsMainProductImg = 1 WHERE ImgUrl = '" . $ProductImage . "'";
        }
        else {

            $sql = "UPDATE productimgs SET ProductId = '" . $ProductId . "' WHERE ImgUrl = '" . $ProductImage . "'";
        }
        mysqli_query($conn, $sql);

    }
    echo json_encode(array('success' => 0));
    echo "Product added!";

} else {
    echo "No data inserted!";
}
?>