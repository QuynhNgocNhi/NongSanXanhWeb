<?php
ob_start();
session_start();
if (!isset($_SESSION['Id'])) {
    header("location: login.php");
}

if ($_SESSION['UserRoleId'] == 3) {
    header("location: Store_Register.php");
    require_once('Store_Dashboard_Process.php');
}

$ProductId = $_GET['ProductId'];
include "config.php";
$sql = "SELECT * FROM products WHERE Id='$ProductId'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


?>
<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Sửa sản phẩm</title>
    <link rel="icon" href="favicon.icon" type="image/x-icon">
    <!-- Favicon-->
    <link rel="stylesheet" href="Admin_Store.asset/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Admin_Store.asset/plugins/dropzone/dropzone.css">
    <link rel="stylesheet" href="Admin_Store.asset/plugins/bootstrap-select/css/bootstrap-select.css"/>
    <!-- Custom Css -->
    <link rel="stylesheet" href="Admin_Store.asset/css/main.css">
    <link rel="stylesheet" href="Admin_Store.asset/css/blog.css">
    <link rel="stylesheet" href="Admin_Store.asset/css/color_skins.css">
    <!-- Bootstrap Tagsinput Css -->
    <link rel="stylesheet" href="Admin_Store.asset/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>

</head>
s
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body class="theme-blush">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="Admin_Store.asset/images/logo.svg" width="48" height="48"
                                 alt="NSX"></div>
        <p>Chờ xíu đê...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Call Top Bar -->
<nav class="navbar">
    <div class="col-12">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="./index.php"><img src="Admin_Store.asset/images/logo.svg" width="30"
                                                            alt="Compass"><span class="m-l-10">Nông sản xanh</span></a>
        </div>
        <ul class="nav navbar-nav navbar-left">
            <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i
                            class="zmdi zmdi-swap"></i></a></li>
            <li class="hidden-sm-down">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                </div>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="javascript:void(0);" class="fullscreen hidden-sm-down" data-provide="fullscreen"
                   data-close="true"><i class="zmdi zmdi-fullscreen"></i></a>
            </li>
            <li><a href="login.php" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a></li>

        </ul>
    </div>
</nav>

<!-- Call Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="profile.html"><img src="Admin_Store.asset/images/profile_av.jpg"
                                                                   alt="User"></a></div>
                    <div class="detail">
                        <h4>Sầu riêng Ri6</h4>
                        <small>Chỉ bán Sầu riêng</small>
                    </div>


                    <a href="login.php" title="Sign out"><i class="zmdi zmdi-power"></i></a>
                </div>
            </li>
            <li class="header">Quản lý cửa hàng</li>
            <li><a href="Vendor_Dashboard.php"><i class="zmdi zmdi-home"></i><span>Thông tin cửa hàng</span> </a>
            </li>
            <li class="open"><a href="Product_Added.php"><i class="zmdi zmdi-plus-circle"></i><span>Thêm sản
                            phẩm</span> </a></li>
            <li><a href="Product_List.php"><i class="zmdi zmdi-sort-amount-desc"></i><span>Tất cả sản phẩm</span>
                </a></li>
            <li><a href="Order_List.php"><i class="zmdi zmdi-grid"></i><span>Đơn hàng</span> </a></li>
            <li><a href="Customer-List.php"><i class="zmdi zmdi-label-alt"></i><span>Khách hàng</span> </a></li>
            <li><a href="Comision_List.php"><i class="zmdi zmdi-blogger"></i><span>Lợi nhuận</span> </a></li>

        </ul>
    </div>
    <!-- #Menu -->
</aside>


<section class="content blog-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Sửa sản phẩm
                    <small></small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i>Nông Sản Xanh</a></li>
                    <li class="breadcrumb-item"><a href="Vendor_Dashboard.php">Cửa hàng</a></li>
                    <li class="breadcrumb-item active">Sửa sản phẩm</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Masked Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <form action="Product_Edit.php" method="POST">

                        <div class="body">
                            <div class="demo-masked-input">
                                <div class="row clearfix">


                                    <div class="col-lg-6 col-md-6"><b>Tên Sản phẩm</b>
                                        <div class="input-group ">
                                            <span class="input-group-addon"><i class="zmdi zmdi-info"></i></span>
                                            <input type="text" class="form-control" id="Name"
                                                   value="<?php echo $row['Name']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6"><b>Giá (Vnđ)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="zmdi zmdi-money"></i></span>
                                            <input type="number" id="Price" class="form-control business_money-coins"
                                                   value="<?php echo $row['Price']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6"><b>Danh mục</b>

                                        <select name="ProductCategory" class="form-control show-tick z-index"
                                                data-live-search="true">

                                            <?php

                                            include "config.php";

                                            $sql3 = "select * from productcategory";

                                            $result3 = mysqli_query($conn, $sql3);


                                            if (mysqli_num_rows($result3) > 0) {

                                                while ($row3 = mysqli_fetch_row($result3)) {
                                                    if ($row3[1] == $row['ProductCategory'])
                                                        echo "<option selected value='$row3[0]'>$row3[1]</option>";
                                                    else
                                                    echo "<option value='$row3[0]'>$row3[1]</option>";

                                                }
                                            }
                                            ?>

                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-md-6"><b>Đơn vị bán</b>
                                        <select class="form-control show-tick" id="ProductUnits">

                                            <?php
                                            include "config.php";

                                            $sql4 = "select * from productunits";
                                            $result4 = mysqli_query($conn, $sql4);

                                            if (mysqli_num_rows($result4) > 0) {
                                                $index = 0;
                                                while ($row4 = mysqli_fetch_row($result4)) {
                                                    if ($row4[1] == $row['ProductUnitName'])
                                                        echo "<option selected value='$row4[0]'>$row4[1]</option>";
                                                    echo "<option value='$row4[0]'>$row4[1]</option>";

                                                }
                                            }
                                            ?>

                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-md-6"><b>Trạng thái hàng</b>
                                        <select class="form-control show-tick" id="ProductStatus">
                                            <?php if ($row['ProductStatus'] == 1)
                                                echo "<option selected value='1'>Còn hàng</option>
                                                        <option value='0'>Hết hàng</option> ";
                                            else
                                                echo "<option selected value='0'>Hết hàng</option>
                                                        <option value='1'>Còn hàng</option>";
                                            ?>




                                        </select>
                                    </div>
                                    <script>


                                    </script>

                                    <div class="col-lg-6 p-b-50 col-md-6"><b>Hình ảnh sản phẩm</b>
                                        <div id="ProductId" class="hide" style="display: none"><?php echo $row['Id']; ?></div>
                                        <!-- Thêm hình ảnh -->
                                        <div class="input-group">


                                            <form action="Product_Img_Upload.php" id="FileUpload"
                                                  class="dropzone m-b-20 m-t-20"
                                                  method="post" enctype="multipart/form-data">

                                                <div class="fallback">
                                                    <input id="MainProductImg" name="FileName[]" type="file"
                                                           multiple/>
                                                </div>
                                                <input id="UploadMainImgBtn" class="button button-input" type="submit"
                                                       name="AddMain" value="Thêm hình ảnh">
                                            </form>
                                            <div class="col-12 grid-two p-t-20 imageandtext row" id="image_preview">


                                            </div>
                                        </div>
                                        <!--                                        todo: click để chọn ra ảnh sẽ đăng, click thêm ảnh sẽ duocjd thêm và chuyển qua bên kia, lưu về database,-->
                                        <!--                                        xuất ra thẻ img có id và onclick = get name ra cái div ở phía dứi để lấy từng cái value-->

                                    </div>
                                    <!--                                    try-->
                                    <div class="col-lg-6 p-b-50 col-md-6 p-t-20 "><b>Hình ảnh Hợp lệ</b>
                                        <p id="errorMessage" class="text-danger"></p>
                                        <div>
                                            <div class="grid-two p-t-20 imageandtext row" id="imageSuccess">
                                                <?php
                                                include "config.php";


                                                //Get image
                                                $sql1 = "SELECT * FROM productimgs WHERE ProductId = '" . $ProductId . "'";
                                                $result1 = mysqli_query($conn, $sql1);

                                                if (mysqli_num_rows($result1) > 0) {

                                                    while ($ProductImages = mysqli_fetch_assoc($result1)) {
                                                        showImage($ProductImages['ImgUrl']);
                                                    }
                                                }

                                                function showImage($ProductImages)
                                                {
                                                    echo "<img src= 'data/Product_Img_Upload/" . $ProductImages . "' alt='product image'>";
                                                }

                                                ?>

                                            </div>
                                        </div>

                                        <!--                                        <div class="imageandtext image_grid" id="imageSuccess">-->
                                        <!--                                            <div class="imageandtext image_grid">-->
                                        <!--                                                <label for="IMG1">-->
                                        <!--                                                    <img src='assets/img/products/01-Fresh/saurieng.jpg'-->
                                        <!--                                                         style="width:200px"/>-->
                                        <!--                                                </label>-->
                                        <!--                                                <input type="checkbox" name="ProductImage" id="IMG1">-->
                                        <!--                                                <div class="caption" id="result">-->
                                        <!---->
                                        <!--                                                </div>-->
                                        <!--                                            </div>-->
                                        <!--                                        </div>-->
                                    </div>

                                    <div class="col-lg-6 col-md-6"><b>Tag sản phẩm</b>
                                        <!-- Thêm Tag -->

                                        <div class="body">
                                            <div class="form-group demo-tagsinput-area">
                                                <div class="form-line">
                                                    <input id="Tags" type="text" class="form-control"
                                                           data-role="tagsinput"
                                                           value="Amsterdam,Washington,Sydney,Beijing,Cairo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Thông tin thêm -->
                                    <div class="col-lg-3 col-md-6">
                                        <p><b>Max Selection Limit: 2</b></p>
                                        <select class="form-control show-tick" multiple>
                                            <optgroup label="Condiments" data-max-options="2">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </optgroup>
                                            <optgroup label="Breads" data-max-options="2">
                                                <option>Plain</option>
                                                <option>Steamed</option>
                                                <option>Toasted</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <p><b>Display Count</b></p>
                                        <select class="form-control show-tick" multiple
                                                data-selected-text-format="count">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                            <option>Onions</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-md-12"><b>Mô tả sản phẩm</b>
                                        <div class="form-group">
                                            <textarea id="Description" rows="5"
                                                      class="form-control no-resize"  ><?php echo $row['Description'] ?></textarea>
                                        </div>
                                    </div>

                                    <button type="submit" id="EditProduct"
                                            class="btn btn-lg btn-brand btn-primary btn-rounded">Cập nhật sản phẩm
                                    </button>

                                </div>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Jquery Core Js -->
<script src="Admin_Store.asset/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="Admin_Store.asset/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="Admin_Store.asset/plugins/dropzone/dropzone.js"></script> <!-- Dropzone Plugin Js -->
<script src="Admin_Store.asset/plugins/ckeditor/ckeditor.js"></script> <!-- Ckeditor -->

<script src="Admin_Store.asset/bundles/mainscripts.bundle.js"></script>
<!-- Custom Js -->
<script src="Admin_Store.asset/js/pages/forms/editors.js"></script>
<script src="Admin_Store.asset/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

<!-- Bootstrap Tags Input Plugin Js -->

<script src="Product_Edit.js"></script>
</body>

</html>
