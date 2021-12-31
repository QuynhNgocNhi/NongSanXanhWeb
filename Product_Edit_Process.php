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

    $StoreId = $_SESSION['StoreId'];
    $UserId = $_SESSION['Id'];

    $ProductId = $_POST['ProductId'];
    $ProductStatus = $_POST['ProductStatus'];
    $ProductUnitId = $_POST['ProductUnits'];
    $ProductMainImage = $_POST['ProductMainImage'];
    $ProductImages = $_POST['ProductImages'];
    $Name = $_POST['Name'];
    $Price = $_POST['Price'];
    $Description = $_POST['Description'];
    $ProductCategoryId = $_POST['ProductCategoryId'];
    //get category name
    $sql = "SELECT * FROM productcategory WHERE No = '" . $ProductCategoryId . "'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_array($result, MYSQLI_BOTH);
        $ProductCategoryName = $row["Name"];
    }
    //get unit name
    $sql = "SELECT * FROM productunits WHERE Id = '" . $ProductUnitId . "'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_array($result, MYSQLI_BOTH);
        $ProductUnitName = $row["UnitName"];
    }
    //get store name
    $sql = "SELECT * FROM stores WHERE Id = '" . $StoreId . "'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_array($result, MYSQLI_BOTH);
        $StoreName = $row["StoreName"];
    }
//todo: Generate Productid = StoreId + time created or prevent default Productname
//update product in database
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");

    $sql = "UPDATE products SET Name = '$Name', Price = '$Price', Description = '$Description', ProductCategoryId = '$ProductCategoryId',ProductCategory = '$ProductCategoryName', Img = '$ProductMainImage', ProductUnitId = '$ProductUnitId', ProductUnitName = '$ProductUnitName', ProductStatus = '$ProductStatus' WHERE Id = '$ProductId';";
//    $sql = "UPDATE products SET Name = '$Name' Where Id = '$ProductId';";
    mysqli_query($conn, $sql);
    //insert product category name to products table


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
        } else {

            $sql = "UPDATE productimgs SET ProductId = '" . $ProductId . "' WHERE ImgUrl = '" . $ProductImage . "'";
        }
        mysqli_query($conn, $sql);

    }
//    echo json_encode(array('success' => 0));
    echo "Product added!";

} else {
    echo "No data inserted!";
}
?>