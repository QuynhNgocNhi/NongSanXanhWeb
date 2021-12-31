<?php
ob_start();
session_start();
require_once('config.php');
?>
<?php
//if (!isset($_SESSION)) {$session = new \mysql_xdevapi\Session();}
if (empty($_SESSION['Id'])) {
    header("location: ../login.php");
} else {

    if (isset($_POST)) {
        if (isset($_COOKIE['WishList'])) {
            $cookie_data = stripslashes($_COOKIE['WishList']);
            $WishListData = json_decode($cookie_data, true);
        }
        else {
            $WishListData = array();
        }
        $ProductId = $_POST['ProductId'];
        $item_id_list = array_column($WishListData, 'Id');
        if (in_array($_POST["ProductId"], $item_id_list)) {
            foreach ($WishListData as $keys => $values) {
                if ($values["Id"] == $_POST["ProductId"]) {
                   unset($WishListData[$keys]);
                }

            }
        } else {
            //Product new in WishList
            // Get product details
            $sql = "SELECT * FROM products WHERE Id = '$ProductId'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $ItemData = array(
                'Id' => $row['Id'],
                'Name' => $row['Name'],
                'Price' => $row['Price'],
                'Image' => $row['Img'],
                'Unit' => $row['ProductUnitName'],
                'StoreName' => $row['StoreName'],
                'StoreId' => $row['StoreId'],
            );

            $WishListData[] = $ItemData;

        }
        // Insert item to WishList array
        $WishListDataFull = json_encode($WishListData, JSON_UNESCAPED_UNICODE);
        setcookie("WishList", $WishListDataFull, time() + 86400, "/");


        echo count($WishListData);
    }
//echo json_encode(array('num_products_in_WishList' => $WishList_Array_Length));

}
?>
