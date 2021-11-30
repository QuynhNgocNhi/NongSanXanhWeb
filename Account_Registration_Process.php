<?php
ob_start();
session_start();
?>
<?php
require_once('config.php');
?>

<?php
if (isset($_POST)) {
    $Email = $_POST['Email'];
    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];
    $UserRoleId = 3;
    $EmailVerified = "no";

    require_once 'Account_Registration_Function.php';
//    if (UInvalid($UserName)) {
////        echo " <h3 class="heading">Đăng ký tài khoản</h3>";
//        header('Content-type: application/json');
//        echo json_encode(array('success' => 0));
//        exit();
//    }
//    if (pwMatch($Password, $PasswordConfirmation)) {
////                echo " <h3 class="heading">Đăng ký tài khoản</h3>";
//
//        header('Content-type: application/json');
//        echo json_encode(array('success' => 0));
//        exit();
//    }
    if (UExists($conn, $UserName, $Email) !== false) {

        header('Content-type: application/json');
        echo json_encode(array('success' => 0));
        exit();
    }

    $hashPassword = password_hash($Password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (Email, UserName, Password, UserRoleId, EmailVerified) VALUES (?, ?, ?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssis", $Email, $UserName, $hashPassword, $UserRoleId, $EmailVerified);
    $stmt->execute();

    echo json_encode(array('success' => '1'));


} else {
    echo "No data founded!";
}
?>