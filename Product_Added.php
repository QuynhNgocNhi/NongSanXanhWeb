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
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Thêm sản phẩm</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
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

<body class="theme-blush">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="Admin_Store.asset/images/logo.svg" width="48" height="48"
                                 alt="NSX"></div>
        <p>Chờ xíu đê...</p>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {

        $("#UploadMainImgBtn").click(function (e) {
            e.preventDefault();
            let formData = new FormData();
            let image = $("#MainProductImg")[0].files;

            // Check image selected or not
            if (image.length > 0) {
                formData.append('Product_Image', image[0]);
                $.ajax({
                    url: 'Product_Img_Upload.php',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        data = JSON.parse(data);
                        if (data.error !== 1) {
                            mainImage = data.src
                            let path = "data/Product_Img_Upload/" + mainImage;
                            $("#previousImage").attr("src", path);
                        } else {
                            $("#errorMessage").text(data.error_message);
                        }
                    }
                });

            } else {
                $("#errorMessage").text("Please select an image.");
            }
        });

    });
</script>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Call Top Bar -->
<nav class="navbar">
    <div class="col-12">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="./index.html"><img src="Admin_Store.asset/images/logo.svg" width="30"
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
            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                    role="button"><i class="zmdi zmdi-notifications"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu dropdown-menu-right slideDown">
                    <li class="header">NOTIFICATIONS</li>
                    <li class="body">
                        <ul class="menu list-unstyled">
                            <li><a href="javascript:void(0);">
                                    <div class="icon-circle bg-blue"><i class="zmdi zmdi-account"></i></div>
                                    <div class="menu-info">
                                        <h4>8 New Members joined</h4>
                                        <p><i class="zmdi zmdi-time"></i> 14 mins ago </p>
                                    </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                    <div class="icon-circle bg-amber"><i class="zmdi zmdi-shopping-cart"></i></div>
                                    <div class="menu-info">
                                        <h4>4 Sales made</h4>
                                        <p><i class="zmdi zmdi-time"></i> 22 mins ago </p>
                                    </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                    <div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div>
                                    <div class="menu-info">
                                        <h4><b>Nancy Doe</b> Deleted account</h4>
                                        <p><i class="zmdi zmdi-time"></i> 3 hours ago </p>
                                    </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                    <div class="icon-circle bg-green"><i class="zmdi zmdi-edit"></i></div>
                                    <div class="menu-info">
                                        <h4><b>Nancy</b> Changed name</h4>
                                        <p><i class="zmdi zmdi-time"></i> 2 hours ago </p>
                                    </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                    <div class="icon-circle bg-grey"><i class="zmdi zmdi-comment-text"></i></div>
                                    <div class="menu-info">
                                        <h4><b>John</b> Commented your post</h4>
                                        <p><i class="zmdi zmdi-time"></i> 4 hours ago </p>
                                    </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                    <div class="icon-circle bg-purple"><i class="zmdi zmdi-refresh"></i></div>
                                    <div class="menu-info">
                                        <h4><b>John</b> Updated status</h4>
                                        <p><i class="zmdi zmdi-time"></i> 3 hours ago </p>
                                    </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                    <div class="icon-circle bg-light-blue"><i class="zmdi zmdi-settings"></i></div>
                                    <div class="menu-info">
                                        <h4>Settings Updated</h4>
                                        <p><i class="zmdi zmdi-time"></i> Yesterday </p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"><a href="javascript:void(0);">View All Notifications</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                    role="button"><i class="zmdi zmdi-flag"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu dropdown-menu-right slideDown">
                    <li class="header">TASKS</li>
                    <li class="body">
                        <ul class="menu tasks list-unstyled">
                            <li><a href="javascript:void(0);">
                                    <div class="progress-container progress-primary">
                                        <span class="progress-badge">Footer display issue</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                 aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 86%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li><a href="javascript:void(0);">
                                    <div class="progress-container progress-info">
                                        <span class="progress-badge">Answer GitHub questions</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                 aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 35%;">
                                                <span class="progress-value">35%</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li><a href="javascript:void(0);">
                                    <div class="progress-container progress-success">
                                        <span class="progress-badge">Solve transition issue</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                 aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 72%;">
                                                <span class="progress-value">72%</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li><a href="javascript:void(0);">
                                    <div class="progress-container">
                                        <span class="progress-badge"> Create new dashboard</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                 aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 45%;">
                                                <span class="progress-value">45%</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li><a href="javascript:void(0);">
                                    <div class="progress-container progress-warning">
                                        <span class="progress-badge">Panding Project</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                 aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 29%;">
                                                <span class="progress-value">29%</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"><a href="javascript:void(0);">View All</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="fullscreen hidden-sm-down" data-provide="fullscreen"
                   data-close="true"><i class="zmdi zmdi-fullscreen"></i></a>
            </li>
            <li><a href="Login.php" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a></li>

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


                    <a href="Login.php" title="Sign out"><i class="zmdi zmdi-power"></i></a>
                </div>
            </li>
            <li class="header">Quản lý cửa hàng</li>
            <li><a href="Vendor_Dashboard.php"><i class="zmdi zmdi-home"></i><span>Thông tin cửa hàng</span> </a>
            </li>
            <li class="active open"><a href="Product_Added.php"><i class="zmdi zmdi-plus-circle"></i><span>Thêm sản
                            phẩm</span> </a></li>
            <li><a href="Product_List.html"><i class="zmdi zmdi-sort-amount-desc"></i><span>Tất cả sản phẩm</span>
                </a></li>
            <li><a href="Order_List.html"><i class="zmdi zmdi-grid"></i><span>Đơn hàng</span> </a></li>
            <li><a href="Customer-List.html"><i class="zmdi zmdi-label-alt"></i><span>Khách hàng</span> </a></li>
            <li><a href="Comision_List.html"><i class="zmdi zmdi-blogger"></i><span>Lợi nhuận</span> </a></li>

        </ul>
    </div>
    <!-- #Menu -->
</aside>


<section class="content blog-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>New Post
                    <small>Welcome to Compass</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i>Nông Sản Xanh</a></li>
                    <li class="breadcrumb-item"><a href="Vendor_Dashboard.php">Cửa hàng</a></li>
                    <li class="breadcrumb-item active">Thêm sản phẩm</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Masked Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <form action="Product_Added.php" method="POST">
                        <div class="header">

                            <ul class="header-dropdown">
                                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle"
                                                        data-toggle="dropdown" role="button" aria-haspopup="true"
                                                        aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="demo-masked-input">
                                <div class="row clearfix">

                                    <div class="col-lg-6 col-md-6"><b>Tên Sản phẩm</b>
                                        <div class="input-group ">
                                            <span class="input-group-addon"><i class="zmdi zmdi-info"></i></span>
                                            <input type="text" class="form-control" id="Name"
                                                   placeholder="vd: Sầu riêng Ri6">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6"><b>Giá (Vnđ)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="zmdi zmdi-money"></i></span>
                                            <input type="number" id="Price" class="form-control business_money-coins"
                                                   placeholder="Ex: 125.000 vnđ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6"><b>Danh mục</b>

                                        <select class="form-control show-tick" id="ProductCategory" multiple>
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
                                    <div class="col-lg-3 col-md-6"><b>Đơn vị bán</b>
                                        <select class="form-control show-tick" id="ProductUnits">
                                            <option>Chọn đơn vị --</option>
                                            <option>Kg</option>
                                            <option>10kg</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-md-6"><b>Trạng thái hàng</b>
                                        <select class="form-control show-tick" id="ProductStatus">
                                            <option>Còn hàng/hết hàng --</option>
                                            <option>Còn hàng</option>
                                            <option>Hết hàng</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-6"><b>Hình ảnh sản phẩm</b>
                                        <!-- Thêm hình ảnh -->
                                        <div class="input-group">
                                            <p id="errorMessage"></p>

                                            <form action="Product_Img_Upload.php" id="FileUpload"
                                                  class="dropzone m-b-20 m-t-20"
                                                  method="post" enctype="multipart/form-data">

                                                <div class="fallback">
                                                    <input id="MainProductImg" name="FileName" type="file" multiple/>
                                                </div>
                                                <input id="UploadMainImgBtn" class="button button-input" type="submit"
                                                       name="AddMain" value="Thêm hình ảnh">
                                            </form>
                                            <!--                                            <div class="fallback">-->
                                            <!--                                                <input id="ProductImg" name="FileName" type="file" multiple/>-->
                                            <!--                                                <button id="upload" value="Thêm ảnh" />-->
                                            <!--                                            </div>-->
                                        </div>
                                        <div class="PreImg">
                                            <img src="assets/imgs/shop/cat-1.png" id="PreImg">

                                        </div>
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
                                    <div class="col-lg-3 col-md-6">
                                        <p><b>Multiple Select</b></p>
                                        <select class="form-control show-tick" multiple>
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <p><b>With Search Bar</b></p>
                                        <select class="form-control show-tick z-index" data-live-search="true">
                                            <option>Hot Dog, Fries and a Soda</option>
                                            <option>Burger, Shake and a Smile</option>
                                            <option>Sugar, Spice and all things nice</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-md-12"><b>Mô tả sản phẩm</b>
                                        <div class="form-group">
                                            <textarea id="Description" rows="5" class="form-control no-resize"
                                                      placeholder="Mô tả chung"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" id="AddProduct"
                                            class="btn btn-lg btn-brand btn-primary btn-rounded">Đăng sản phẩm
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="Product_Added.js"></script>
</body>

</html>