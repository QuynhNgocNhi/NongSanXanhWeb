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
if(isset($_POST['ChangeAvatar']) && isset($_FILES['FileName'])){
    echo "<pre>";
    print_r($_FILES['FileName']);
    $ImgName = $_FILES['FileName']['name'];
    $ImgSize = $_FILES['FileName']['size'];
    $TmpName = $_FILES['FileName']['tmp_name'];
    $Error = $_FILES['FileName']['error'];
    $UserId = $_SESSION['Id'];
    $UeRoleId = $_SESSION['UserRoleId'];
//    todo: Thêm role



    if($Error==0){
        if($ImgSize > 125000 ){
            $Mess = "Kích thước hình ảnh quá lớn!";
            header("Location: User_Account.php?error=$Mess");

        }
        else{

           $ImgEx= pathinfo($ImgName, PATHINFO_EXTENSION);
           $ImgExAllowed = strtolower($ImgEx);
           $AllowedExs = array("jpg", "jpeg", "png");
           if(in_array($ImgExAllowed, $AllowedExs)){
               $NewAvatar = uniqid("IMG-",true).'.'.$ImgExAllowed;
               $ImgUploadPath = 'data/Avartar_Upload/'.$NewAvatar;
               move_uploaded_file($TmpName,$ImgUploadPath);

//               insert to database
               $sql = " INSERT INTO images(ImgUrl, IsAvatar, UserId) VALUE ('$NewAvatar',1, '$UserId')";
               mysqli_query($conn, $sql);
               header("Location: User_Account.php");
           }
           else{
               $Mess = "Sai ddinhj dangj!";
            header("Location: User_Account.php?error=$Mess");
           }
        }
    }
    else{
        $Mess = "Lỗi!";
            header("Location: User_Account.php?error=$Mess");
    }



}

?>