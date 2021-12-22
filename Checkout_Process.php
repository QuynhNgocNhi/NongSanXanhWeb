<?php
ob_start();
session_start();
require_once('config.php');
if (!isset($_SESSION['Id'])) {
    header("location: login.php");
}
?>
<?php
if (isset($_POST)) {

    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Address = $_POST['Address'];
    $Zip = $_POST['Zip'];
    $City = $_POST['City'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];
    $Note = $_POST['Note'];
//    $MainProductName = $_POST['MainProductName'];
//    Or use $Cart[0]['Name'] after decode
    $OrderStatus = 0;
    $UserId = $_SESSION['Id'];
    $Cart = $_COOKIE['Cart'];
//    Get cart
    $OrderTotal = 0;
    $cookie_data = stripslashes($_COOKIE['Cart']);
    $CartData = json_decode($cookie_data, true);
    $MainProductName = $CartData[0]['Name'];
    $ItemTotalList = array_column($CartData, 'Total');
    $OrderTotal = array_sum($ItemTotalList);
//INSERT ORDER TO DB
    $sql = "INSERT INTO orders (UserId, FirstName, LastName, Address,Zip, City, Note , Phone, Email, MainProductName,OrderStatus, OrderTotal) VALUES (?,?, ?, ?,?,?,?,?,?,?,?,?) ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssssssssii", $UserId, $FirstName, $LastName, $Address, $Zip, $City, $Note, $Phone, $Email, $MainProductName, $OrderStatus, $OrderTotal);
    $stmt->execute();

//    get order id
    $OrderId = mysqli_insert_id($conn);

    //    insert order detail
    $sql = "INSERT INTO orderdetail (OrderId, UserId, StoreId, StoreName, ProductId, Quantity, Total,Price, ProductName,ProductImage,Note) VALUES (?,?, ?, ?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiisiiddsss", $OrderId, $UserId, $StoreId, $StoreName, $ProductId, $Quantity, $Total, $Price, $ProductName, $ProductImage, $Note);
//        $result = mysqli_query($conn,$sql);
    foreach ($CartData as $keys => $values) {
        $StoreId = $CartData[$keys]['StoreId'];
        $StoreName = $CartData[$keys]['StoreName'];
        $ProductId = $CartData[$keys]['Id'];
        $ProductName = $CartData[$keys]['Name'];
        $ProductImage = $CartData[$keys]['Image'];
        $Price = $CartData[$keys]['Price'];
        $Quantity = $CartData[$keys]['Quantity'];
        $Total = $CartData[$keys]['Total'];

        $stmt->execute();
    }
    setcookie("Cart", "", time() + 0, "/");
    echo "Invoice.php?OrderId=$OrderId";




}
?>