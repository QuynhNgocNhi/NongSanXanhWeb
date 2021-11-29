<?php
ob_start();
session_start();
?>
<?php
require_once('config.php');
?>


<?php
function UInvalid($UserName)
{
    $result = true;
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $UserName)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwMatch($Password, $PasswordConfirmation)
{
    $result = true;
    if ($Password !== $PasswordConfirmation) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;

}

function UExists($conn, $UserName, $Email)
{
    $result = true;
    $sql = "SELECT * FROM users WHERE UserName = ? OR Email = ?;";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:Account_Registration.php?error=stamentFalsed");

        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $UserName, $Email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;//for loginform
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);

}

?>