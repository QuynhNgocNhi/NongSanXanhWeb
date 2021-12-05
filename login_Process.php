<?php
require_once('config.php');
?>
<?php
ob_start();
session_start();
?>
<?php
if (isset($_POST)) {
    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];


//    $sql = "SELECT * FROM users WHERE  UserName = '" . $UserName . "' AND Password = '" . $Password . "' ";
    $sql = "SELECT * FROM users WHERE  UserName = '" . $UserName . "' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if ($row) {
        if (password_verify($Password, $row["Password"])) {
            if ($row["UserRoleId"] == 1) {
//            header("location: index_admin.php");
                session_start();
                $_SESSION["Id"] = $row["Id"];
                $_SESSION["UserRoleId"] = $row["UserRoleId"];
                $_SESSION["UserName"] = $row["UserName"];
                $_SESSION["StoreId"] = $row["StoreId"];


            } elseif ($row["UserRoleId"] == 3) {
                session_start();
                $_SESSION["Id"] = $row["Id"];
                $_SESSION["UserRoleId"] = $row["UserRoleId"];
                $_SESSION["UserName"] = $row["UserName"];


            } elseif ($row["UserRoleId"] == 2) {
                session_start();
               $_SESSION["Id"] = $row["Id"];
                $_SESSION["UserRoleId"] = $row["UserRoleId"];
                $_SESSION["UserName"] = $row["UserName"];
                $_SESSION["StoreId"] = $row["StoreId"];


            }
        } else {
            header(header: "../location: login.php");
        }


    } else {
        header(header: "../location: login.php");
    }

}
?>
