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
    $ProductImg = $_POST['ProductImg'];
    $StoreId = $_SESSION['Id'];
    $Name = $_POST['Name'];
    $Price = $_POST['Price'];
    $Description = $_POST['Description'];

//insert product to database
    $sql = "INSERT INTO products (Name, Price, Description, StoreId, StoreName, Img) VALUES (?,?, ?, ?, ?,?);";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sisiss", $Name, $Price, $Description, $StoreId, $StoreName, $NewImg);
    $stmt->execute();

    echo json_encode(array('success' => 0));
    echo "Product added!";

} else {
    echo "No data inserted!";
}
?>