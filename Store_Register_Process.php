<?php
ob_start();
session_start();
if (!isset($_SESSION['Id'])) {
    header("location: login.php");
}
?>
<?php
require_once('config.php');
?>

<?php
if (isset($_POST)) {

//    $Email = $_POST['Email'];
//    $UserName = $_POST['UserName'];
//    $Password = $_POST['Password'];
    $FullName = $_POST['FullName'];
    $Gender = $_POST['Gender'];
    $DOB = date("Y-m-d", strtotime($_POST['DOB']));;
    $CMND = $_POST['CMND'];
    $StoreName = $_POST['StoreName'];
    $StorePhone = $_POST['StorePhone'];
    $StoreAdress = $_POST['StoreAdress'];
    $Info = $_POST['Info'];
    $UserId = $_SESSION['Id'];
    $StoreId = $_SESSION['Id'];


//    $sql = "INSERT INTO users (FullName, Password, UserRoleId, EmailVerified) VALUES (?, ?, ?,?,?)";
    $sql = "INSERT INTO stores (FullName, Gender, DOB, CMND, StoreName, StorePhone, StoreAdress, Info, UserId) VALUES (?,?, ?, ?,?,?, ?,?, ?) ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sisisissi",$FullName, $Gender, $DOB, $CMND,$StoreName,  $StorePhone,$StoreAdress, $Info, $UserId);

    $stmt->execute();

echo "Create Store Successful!";


    $sql = "UPDATE users SET UserRoleId = 2, StoreId = '" .$StoreId."' WHERE Id = '".$UserId."'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);

echo "Data inserted!";

}
else{
    echo "No data inserted!";
}
?>