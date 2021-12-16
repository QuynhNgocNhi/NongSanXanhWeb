<?php

require_once('config.php');

$sql = "SELECT * FROM stores WHERE UserId = '".$_SESSION['Id']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if($row){
    $_SESSION["StoreName"] = $row["StoreName"];
    $StoreName = $_SESSION['StoreName'];
    $StoreId = $_SESSION['Id'];
}
else{
    header("location: Store_Register.php");
}
?>
