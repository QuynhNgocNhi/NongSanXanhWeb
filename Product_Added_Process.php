<?php
ob_start();
session_start();
?>
<?php
if ($_SESSION['UserRoleId'] == 3) {
    header("location: Store_Register.php");
}
?>
<?php
require_once ("config.php");

if (isset($_POST)) {
    $ProductStatus = $_POST['ProductStatus'];
    $ProductUnitId = $_POST['ProductUnits'];
    $ProductMainImage = $_POST['ProductMainImage'];

    $ProductImages = $_POST['ProductImages'];
    $StoreId = $_SESSION['StoreId'];
    $UserId = $_SESSION['Id'];
    $Name = $_POST['Name'];
    $Price = $_POST['Price'];
    $Description = $_POST['Description'];
    $ProductCategoryId = $_POST['ProductCategoryId'];
//get category name
    $sql = "SELECT * FROM productcategory WHERE No = '$ProductCategoryId'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_array($result);
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
//insert product to database
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");

    $sql = "INSERT INTO products (Name, Price, Description, VendorId, StoreId, StoreName, ProductCategoryId,ProductCategory, Img, ProductUnitId, ProductUnitName, ProductStatus) VALUES (?,?, ?, ?, ?,?,?,?,?, ?,?, ?);";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sisiisissisi", $Name, $Price, $Description, $UserId, $StoreId, $StoreName, $ProductCategoryId, $ProductCategoryName, $ProductMainImage, $ProductUnitId, $ProductUnitName, $ProductStatus);
    $stmt->execute();



    //insert product category name to products table
//    $sql = "UPDATE products SET ProductCategory = '" . $ProductCategoryName . "';";
//    mysqli_query($conn,$sql);

//    get product id xưa ròi diễm ơi
//    $sql = "SELECT * FROM products WHERE StoreId = '" . $StoreId . "' AND Name = '" . $Name . "'";
//    $result = mysqli_query($conn, $sql);
//    if ($result) {
//        $row = mysqli_fetch_array($result, MYSQLI_BOTH);
//
//    }
//    Đây mới là chân ái
    $ProductId = mysqli_insert_id($conn);

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