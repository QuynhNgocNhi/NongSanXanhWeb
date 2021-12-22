<?php
ob_start();
session_start();
?>
<?php
require_once('config.php');

//if (!isset($_SESSION)) {$session = new \mysql_xdevapi\Session();}
if (empty($_SESSION['Id'])) {
    header("location: ../login.php");
} else {

    if (isset($_POST)) {
        if (isset($_COOKIE['Cart'])) {
            $cookie_data = stripslashes($_COOKIE['Cart']);
            $CartData = json_decode($cookie_data, true);
        } else {
            $CartData = array();
        }
        $ProductId = $_POST['ProductId'];
        $Action = $_POST['Action'];
//        $UserId = $_SESSION['Id'];
        // Update quantity (check if ProductId already exits in the $CartData
        // => update its quantity = quantity + 1 (or user defined number)
//        $SubTotal = ;
        $item_id_list = array_column($CartData, 'Id');
        if (in_array($_POST["ProductId"], $item_id_list)) {
            foreach ($CartData as $keys => $values) {
                if ($CartData[$keys]["Id"] == $_POST["ProductId"]) {
                    if ($Action == 0) {
                        $CartData[$keys]["Quantity"] = $CartData[$keys]["Quantity"] - 1;

                        if ($CartData[$keys]["Quantity"] == 0)
                            unset($CartData[$keys]);
                    } else
                        $CartData[$keys]["Quantity"] = $CartData[$keys]["Quantity"] + 1;
                }
                $CartData[$keys]["Total"] = $CartData[$keys]["Quantity"] * $CartData[$keys]["Price"];
//                $SubTotal = ;
            }
        } else {
            //Product new in cart
            // Get product details
            $sql = "SELECT * FROM products WHERE Id = '$ProductId'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
//            $SubTotal = $row['Price'];
            $ItemData = array(
                'Id' => $row['Id'],
                'Name' => $row['Name'],
                'Price' => $row['Price'],
                'Image' => $row['Img'],
                'Unit' => $row['ProductUnitName'],
                'StoreName' => $row['StoreName'],
                'StoreId' => $row['StoreId'],
                'Quantity' => 1,
                'Total' => $row['Price']
            );

            $CartData[] = $ItemData;
//            $CartData[] = $SubTotal;

        }
        // Insert item to cart array
        $CartDataFull = json_encode($CartData, JSON_UNESCAPED_UNICODE);
        setcookie("Cart", $CartDataFull, time() + 86400, "/");


        echo count($CartData);
    }
//echo json_encode(array('num_products_in_cart' => $Cart_Array_Length));

}
if (isset($_GET["success"])) {
    $message = '
 <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Thêm sản phẩm vào giỏ thành công!
 </div>
 ';
}

?>
