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


//    $sql = "INSERT INTO users (FullName, Password, UserRoleId, EmailVerified) VALUES (?, ?, ?,?,?)";
    $sql = "INSERT INTO stores (FullName, Gender, DOB, CMND, StoreName, StorePhone, StoreAdress, Info) VALUES (?,?, ?, ?,?,?, ?,?) ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sisisiss",$FullName, $Gender, $DOB, $CMND,$StoreName,  $StorePhone,$StoreAdress, $Info);

    $stmt->execute();
echo "Data inserted!";

}
else{
    echo "No data inserted!";
}
?>