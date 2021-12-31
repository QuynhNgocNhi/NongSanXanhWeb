<?php
ob_start();
session_start();
require_once('config.php');
if (!isset($_SESSION['Id'])) {
    header("location: login.php");
}

if ($_SESSION['UserRoleId'] == 3) {
    header("location: Store_Register.php");
}
    require_once('Store_Dashboard_Process.php');
?>
<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Tất cả sản phẩm</title>
    <link rel="icon" href="assets/img/global/2.jpg" type="image/x-icon">
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

            </li>
            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                    role="button"><i class="zmdi zmdi-flag"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>

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
            <?php
            if ($_SESSION['StoreId'] == 1) {
                echo '<li class="header">Quản lý Nông Sản Xanh</li>
            <li><a href="Admin_Dashboard.php"><i class="zmdi zmdi-home"></i><span>Dash board</span> </a>
            </li>
            <li><a href="Admin_Category_Added.php"><i class="zmdi zmdi-plus-circle"></i><span>Thêm danh mục</span>
                </a></li>
            <li><a href="Admin_Unit_Added.php"><i class="zmdi zmdi-plus-circle"></i><span>Thêm đơn vị</span>
                </a></li>
            <li class="active open"><a href="Product_List.php"><i class="zmdi zmdi-sort-amount-desc"></i><span>Tất cả sản phẩm</span>
                </a></li>
            <li><a href="Order_List.php"><i class="zmdi zmdi-grid"></i><span>Đơn hàng mới</span> </a></li>
                        <li><a href="All_Order_List.php"><i class="zmdi zmdi-grid"></i><span>Tất cả Đơn hàng</span> </a></li>

            <li><a href="Customer_List.php"><i class="zmdi zmdi-label-alt"></i><span>Khách hàng</span> </a></li>
            <li><a href="Comision_List.php"><i class="zmdi zmdi-blogger"></i><span>Lợi nhuận</span> </a></li>
';

            } else {
                echo '<li class="header">Quản lý cửa hàng</li>                
            <li ><a href="Vendor_Dashboard.php"><i class="zmdi zmdi-home"></i><span>Thông tin cửa hàng</span> </a> </li>
            <li> <a href="Product_Added.php"><i class="zmdi zmdi-plus-circle"></i><span>Thêm sản phẩm</span> </a> </li>
            <li class="active open"><a href="Product_List.php"><i class="zmdi zmdi-sort-amount-desc"></i><span>Tất cả sản phẩm</span> </a> </li>
            <li><a href="Order_List.php"><i class="zmdi zmdi-grid"></i><span>Đơn hàng</span> </a> </li>
            <li><a href="Customer_List.php"><i class="zmdi zmdi-label-alt"></i><span>Khách hàng</span> </a> </li>
            <li><a href="Comision_List.php"><i class="zmdi zmdi-blogger"></i><span>Lợi nhuận</span> </a> </li>
';
            }
            ?>

        </ul>
    </div>
    <!-- #Menu -->
</aside>

<section class="content contact">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Cửa hàng
                    <small class="text-muted">Sản phẩm của tôi</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i>Nông sản xanh</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Cửa hàng</a></li>
                    <li class="breadcrumb-item active">Sản phẩm của tôi</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card action_bar">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-1 col-md-2 col-3">
                                <div class="checkbox inlineblock delete_all">
                                    <input id="deleteall" type="checkbox">
                                    <label for="deleteall">
                                        All
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-6">
                                <div class="input-group search">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-search"></i>
                                    </span>
                                </div>
                            </div>
                            <!--                            todo: lọc-->
                            <div class="col-lg-6 col-md-5 col-3">
                                <div class="btn-group hidden-sm-down" role="group">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-simple dropdown-toggle btn-round"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="zmdi zmdi-label"></i>
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right slideDown">
                                            <li>
                                                <a href="javascript:void(0);">Family</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Work</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Google</a>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                            <li>
                                                <a href="javascript:void(0);">Create a Label</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <button type="button"
                                        class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round hidden-sm-down">
                                    <a href="Product_Added.php"><i class="zmdi zmdi-plus-circle"></i></a>
                                </button>
                                <button type="button"
                                        class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round hidden-sm-down">
                                    <i class="zmdi zmdi-archive"></i>
                                </button>
                                <button type="button"
                                        class="btn btn-icon btn-simple btn-icon-mini btn-round btn-danger float-md-right">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body table-responsive">

                        <table class="table table-hover m-b-0 c_list">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên sản phẩm</th>
                                <th data-breakpoints="xs sm md">Danh mục</th>
                                <th data-breakpoints="xs">Giá</th>
                                <th data-breakpoints="xs sm md">Đơn vị</th>

                                <th data-breakpoints="xs">Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if ($_SESSION['StoreId'] == 1) {
                                $sql = "SELECT * FROM products";
                            } else {
                                $sql = "SELECT * FROM products WHERE StoreId = '" . $_SESSION['StoreId'] . "'";
                            }
                            //todo: số trang
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                $index = 0;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>
                                    <td>
                                        <div class='checkbox'>
                                            <input id='delete_2' type='checkbox'>
                                            <label for='delete_2'>&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src='data/Product_Img_Upload/" . $row['Img'] . "' class='rounded-circle avatar' alt=''>
                                        <p class='c_name'>" . $row['Name'] . "</p>
                                    </td>
                                    <td>
                                        <span><i class='zmdi m-r-10'></i>" . $row['ProductCategory'] . "</span>
                                    </td>
                                    <td>
                                        <span ><a href='javascript:void(0);' title=''><i class='zmdi m-r-5'></i> " . $row['Price'] . "</a></span>
                                    </td>
                                    <td>
                                        <span><i class='zmdi'></i>" . $row['ProductUnitName'] . "</span>
                                    </td>
                                    <td>
                                        <a href='Product_Edit.php?ProductId=" . $row['Id'] . "'><button type='Submit' name='Edit' class='btn btn-default  btn-icon btn-success btn-icon-mini btn-round'><i class='zmdi zmdi-edit'></i></button></a>
                                        <a href='Product_Delete_Process.php?ProductId=" . $row['Id'] . "'><button type='Submit' name='Delete' class='btn btn-default btn-icon btn-danger btn-icon-mini btn-round'><i class='zmdi zmdi-delete'></i></button></a>
                                    </td>
                                </tr>";
                                }
                            }
                            ?>
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <ul class="pagination pagination-primary m-b-0">
                            <li class="page-item"><a class="page-link" href="#"><i class="zmdi zmdi-arrow-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i
                                            class="zmdi zmdi-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<script src="Admin_Store.asset/bundles/libscripts.bundle.js"></script>
<!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="Admin_Store.asset/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="Admin_Store.asset/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
<script src="Admin_Store.asset/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="Admin_Store.asset/bundles/knob.bundle.js"></script> <!-- Jquery Knob Plugin Js -->
<script src="Admin_Store.asset/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->

<script src="Admin_Store.asset/bundles/mainscripts.bundle.js"></script>
<script src="Admin_Store.asset/js/pages/index.js"></script>
</html>
