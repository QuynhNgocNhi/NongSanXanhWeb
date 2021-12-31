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

?>
<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="">

    <title>Thêm danh mục</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/global/2.jpg"/>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body class="theme-blush">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="Admin_Store.asset/images/logo.svg" width="48" height="48"
                                 alt="NSX"></div>
        <p>Chờ xíu đê...</p>
    </div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Call Top Bar -->
<nav class="navbar">
    <div class="col-12">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.php"><img src="Admin_Store.asset/images/logo.svg" width="30"
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
                    <div class="image"><a href="User_Account.php><img src="Admin_Store.asset/images/profile_av.jpg"
                                                                   alt="User"></a></div>
                    <div class="detail">
                        <h4>Sầu riêng Ri6</h4>
                        <small>Chỉ bán Sầu riêng</small>
                    </div>


                    <a href="login.php" title="Sign out"><i class="zmdi zmdi-power"></i></a>
                </div>
            </li>
            <li class="header">Quản lý Nông Sản Xanh</li>

            <li><a href="Admin_Dashboard.php"><i class="zmdi zmdi-home"></i><span>Dash board</span> </a>
            </li>
            <li class="active open"><a href="Admin_Category_Added.php"><i class="zmdi zmdi-plus-circle"></i><span>Thêm danh mục</span>
                </a></li>
            <li><a href="Admin_Unit_Added.php"><i class="zmdi zmdi-plus-circle"></i><span>Thêm đơn vị</span>
                </a></li>
            <li><a href="Product_List.php"><i class="zmdi zmdi-sort-amount-desc"></i><span>Tất cả sản phẩm</span>
                </a></li>
            <li><a href="Order_List.php"><i class="zmdi zmdi-grid"></i><span>Đơn hàng mới</span> </a></li>
                        <li><a href="All_Order_List.php"><i class="zmdi zmdi-grid"></i><span>Tất cả Đơn hàng</span> </a></li>

            <li><a href="Customer_List.php"><i class="zmdi zmdi-label-alt"></i><span>Khách hàng</span> </a></li>
            <li><a href="Comision_List.php"><i class="zmdi zmdi-blogger"></i><span>Lợi nhuận</span> </a></li>
        </ul>
    </div>
    <!-- #Menu -->
</aside>


<section class="content blog-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Danh mục
                    <small>Thêm danh mục</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i>Nông Sản Xanh</a></li>
                    <li class="breadcrumb-item"><a href="Vendor_Dashboard.php">Cửa hàng</a></li>
                    <li class="breadcrumb-item active">Thêm danh mục</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Masked Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <form action="Admin_Category_Added.php" method="POST">
                        <div class="body">
                            <div class="demo-masked-input">
                                <div class="row clearfix">

                                    <div class="col-lg-6 col-md-6"><b>Tên danh mục</b>
                                        <div class="input-group col-lg-12">
                                            <span class="input-group-addon"><i class="zmdi zmdi-info"></i></span>
                                            <input type="text" class="form-control" id="Name" name="Name"
                                                   placeholder="vd: Trái cây"">
                                        </div>
                                        <div class="col-lg-12 p-b-50 col-md-6 row">
                                            <div class="col-lg-6 p-b-50 col-md-6"><b>Hình ảnh danh mục</b>
                                            <!-- Thêm hình ảnh -->
                                            <div class="input-group">
                                                <p id="errorMessage"></p>

                                                <form action="Product_Img_Upload.php" id="FileUpload"
                                                      class="dropzone m-b-20 m-t-20"
                                                      method="post" enctype="multipart/form-data">

                                                    <div class="fallback">
                                                        <input id="MainProductImg" name="FileName[]" type="file"
                                                               multiple/>
                                                    </div>
                                                    <input id="UploadMainImgBtn" class="button button-input"
                                                           type="submit"
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
                                            <div>
                                                <div class="grid-two p-t-20 imageandtext row" id="imageSuccess">

                                                </div>
                                            </div>
                                        </div>
                                        </div>

                                        <p><b>Danh mục cha: litmit 2</b></p>

                                        <select class="form-control show-tick" multiple>

                                            <optgroup label="Chọn 1 danh mục cha" data-max-options="2">

                                                <?php

                                                include "config.php";

                                                $sql = "select * from productcategory";
                                                $result = mysqli_query($conn, $sql);

                                                if (mysqli_num_rows($result) > 0) {
                                                    $index = 0;

                                                    while ($row = mysqli_fetch_row($result)) {
                                                        echo "<option id='$row[0]'>$row[1]</option>";

                                                    }
                                                }
                                                ?>
                                            </optgroup>
                                        </select>

                                        <b>Tag liên quan</b>
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
                                        <div><b>Mô tả danh mục</b>
                                            <div class="form-group">
                                            <textarea id="Description" rows="5" class="form-control no-resize"
                                                      placeholder="Mô tả chung"></textarea>
                                            </div>
                                        </div>
                                        <button type="Submit" name="Submit" value="Thêm" id="AddCategory"
                                                class="btn btn-lg btn-brand btn-primary btn-rounded">Thêm danh mục
                                        </button>
                                    </div>

                                    <div class="col-lg-6 col-md-6"><b>Danh sách danh mục</b>


                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="card">

                                                    <!--                                Danh sách danh mục-->
                                                    <div class="body table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th>id</th>
                                                                <th>Tên danh mục</th>
                                                                <th>Bậc</th>
                                                                <th>Hành động</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php

                                                            include "config.php";

                                                            $sql = "select * from productcategory";
                                                            $result = mysqli_query($conn, $sql);

                                                            if (mysqli_num_rows($result) > 0) {
                                                                $index = 0;
                                                                $index1 = 0;
                                                                while ($row = mysqli_fetch_row($result)) {
                                                                    $index1++;
                                                                    if ($index % 2 == 0) {
                                                                        echo "<tr class='xl-khaki'>
                                                      <th scope='row'>";

                                                                        echo "$index1</th>
                                                                <td>";
                                                                        echo "$row[1]</td>
                                                                <td>";
                                                                        echo "$row[2]</td>
                                                                ";
                                                                        echo "<td>
                                         <a href='Admin_Category_Edit.php?action=edit&Id=" . $row[0] . "'><button type='button' class='btn btn-sm btn-icon btn-simple btn-icon-mini btn-round'><i class='zmdi zmdi-edit'></i></button></a> 
                                        <a href='Admin_Category_Edit.php?action=delete&Id=" . $row[0] . "'><button type='button' class='btn btn-sm btn-icon btn-simple btn-icon-mini btn-round'><i class='zmdi zmdi-delete'></i></button></a>
                                    </td></tr>";
                                                                    } else {
                                                                        echo "<tr class='xl-pink'>
                                                      <th scope='row'>";

                                                                        echo "$index1</th>
                                                                <td>";
                                                                        echo "$row[1]</td>
                                                                <td>";
                                                                        echo "$row[2]</td>
                                                                ";
                                                                        echo "<td>
                                        <a href='Admin_Category_Edit.php?action=edit&Id=" . $row[0] . "'><button type='button' class='btn btn-sm btn-icon btn-simple btn-icon-mini btn-round'><i class='zmdi zmdi-edit'></i></button></a> 
                                        <a href='Admin_Category_Edit.php?action=delete&Id=" . $row[0] . "'><button type='button' class='btn btn-sm btn-icon btn-simple btn-icon-mini btn-round'><i class='zmdi zmdi-delete'></i></button></a>
                                    </td></tr>";
                                                                    }
                                                                    $index += 1;


                                                                }


                                                            }
                                                            ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
<script src="Admin_Category.js"></script>

</html>