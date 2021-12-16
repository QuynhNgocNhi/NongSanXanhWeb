<?php

$dir = 'data/Product_Img_Upload/';
function deleteImage($filename)
{
    global $dir;
    unlink($dir . $filename);
}


include "config.php";
$ProductId = $_GET['ProductId'];


# delete from folder
//Get image
$sql1 = "SELECT * FROM productimgs WHERE ProductId = '" . $ProductId . "'";
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) > 0) {

    while ($ProductImages = mysqli_fetch_assoc($result1)) {
        $filename = $ProductImages['ImgUrl'];
        deleteImage($filename);
//        delete image from db
        $sql2 = "DELETE FROM productimgs WHERE ImgUrl = '" . $filename . "'";
        $result2 = mysqli_query($conn, $sql2);

    }
}

# delete product from db
$sql = "DELETE FROM products WHERE Id = '$ProductId'";


if (mysqli_query($conn, $sql)) {
    echo "xóa thành công";
} else {
    echo "Error delete record: " . mysqli_connect_error();
}
header("Location: Product_List.php");

mysqli_close($conn);
?>