<?php

if (isset($_SESSION["Login"])) {
     echo "<li><a href='login.php'><i class="fi fi-rs-user mr-10"></i>Cửa hàng</a></li>";
    echo "<li><a href='login.php'><i class="fi fi-rs-user mr-10"></i>Tài khoản của tôi</a></li>";
}

?>
<?php
$_SESSION['UserName'];
?>