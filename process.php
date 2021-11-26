<?php
require_once('config.php');
?>

<?php
if (isset($_POST)) {
    $Email = $_POST['Email'];
    $UserName = $_POST['UserName'];
    $Password = sha1($_POST['Password']);
    $UserRoleId = 3;
    $EmailVerified = "no";

    $sql = "INSERT INTO users (Email, UserName, Password, UserRoleId, EmailVerified) VALUES (?, ?, ?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssis", $Email, $UserName, $Password, $UserRoleId, $EmailVerified);

    $stmt->execute();
   

}
else{
    echo "No data founded!";
}
?>