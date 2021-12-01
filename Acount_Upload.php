<?php
if(isset($_POST['ChangeAvatar']) && isset($_FILES['FileName'])){
    echo "<pre>";
    print_r($_FILES['FileName']);
    $ImgName = $_FILES['FileName']['name'];
    $ImgSize = $_FILES['FileName']['size'];
    $TmpName = $_FILES['FileName']['tmp_name'];
    $Error = $_FILES['FileName']['error'];

    if($Error===0){
        if($ImgSize > 125000 ){
            $Mess = "Kích thước hình ảnh quá lớn!";
            header("Location: User_Account.php?error=$Mess");

        }
        else{
           $ImgEx= pathinfo($ImgName, PATHINFO_EXTENSION);
           $ImgExAllowed = strtolower($ImgEx);
           $AllowedExs = array("jpg", "jpeg", "png");
           if(in_array($ImgExAllowed, $AllowedExs)){
               $NewAvatar =
           }
        }
    }
    else{
        $Mess = "Lỗi!";
            header("Location: User_Account.php?error=$Mess");
    }



}

?>