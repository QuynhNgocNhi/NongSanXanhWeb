<?php
ob_start();
session_start();
require_once('config.php');
if (!isset($_SESSION['Id'])) {
    header("location: login.php");
}
$IsAdmin = ($_SESSION['UserRoleId'] == 1);
if ($_SESSION['UserRoleId'] == 3) {
    header("location: Store_Register.php");
} elseif ($_SESSION['UserRoleId'] == 2) {
    require_once('Store_Dashboard_Process.php');
}
?>
<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="">

    <title>Đơn hàng</title>
    <link rel="icon" href="assets/img/global/2.jpg" type="image/x-icon">
    <!-- Favicon-->
    <link rel="stylesheet" href="Admin_Store.asset/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Admin_Store.asset/plugins/footable-bootstrap/css/footable.bootstrap.min.css"/>
    <link rel="stylesheet" href="Admin_Store.asset/plugins/footable-bootstrap/css/footable.standalone.min.css"/>

    <!-- Custom Css -->
    <link rel="stylesheet" href="Admin_Store.asset/css/main.css">
    <link rel="stylesheet" href="Admin_Store.asset/css/ecommerce.css">
    <link rel="stylesheet" href="Admin_Store.asset/css/color_skins.css">
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="theme-blush">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="Admin_Store.asset/images/logo.svg" width="48" height="48"
                                 alt="Compass"></div>
        <p>Chờ xíu đê...</p>
    </div>
</div>

<!-- Call Top Bar -->
<nav class="navbar">
    <div class="col-12">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="./index.php"><img src="Admin_Store.asset/images/logo.svg" width="30"
                                                            alt="Compass"><span class="m-l-10">Nông sản xanh</span></a>
        </div>
        <ul class="nav navbar-nav navbar-left">
            <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a>
            </li>
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
                    <div class="image"><a href="Vendor_Dashboard.php"><img src="Admin_Store.asset/images/profile_av.jpg"
                                                                   alt="User"></a></div>
                    <div class="detail">
                        <h4><?php if ($IsAdmin)  echo "Admin";
                        else echo $StoreName?></h4>
<!--                        <small>Chỉ bán Sầu riêng</small>-->
                    </div>


                    <a href="login.php" title="Sign out"><i class="zmdi zmdi-power"></i></a>
                </div>
            </li>
            <?php
            if ($IsAdmin) {
                echo '<li class="header">Quản lý Nông Sản Xanh</li>
            <li><a href="Admin_Dashboard.php"><i class="zmdi zmdi-home"></i><span>Dash board</span> </a>
            </li>
            <li><a href="Admin_Category_Added.php"><i class="zmdi zmdi-plus-circle"></i><span>Thêm danh mục</span>
                </a></li>
            <li><a href="Admin_Unit_Added.php"><i class="zmdi zmdi-plus-circle"></i><span>Thêm đơn vị</span>
                </a></li>
            <li ><a href="Product_List.php"><i class="zmdi zmdi-sort-amount-desc"></i><span>Tất cả sản phẩm</span>
                </a></li>
            <li class="active open"><a href="Order_List.php"><i class="zmdi zmdi-grid"></i><span>Đơn hàng mới</span> </a></li>
                        <li><a href="All_Order_List.php"><i class="zmdi zmdi-grid"></i><span>Tất cả Đơn hàng</span> </a></li>

            <li><a href="Customer_List.php"><i class="zmdi zmdi-label-alt"></i><span>Khách hàng</span> </a></li>
            <li><a href="Comision_List.php"><i class="zmdi zmdi-blogger"></i><span>Lợi nhuận</span> </a></li>
';

            }
            else
                echo'<li class="header">Quản lý cửa hàng</li>
            <li><a href="Vendor_Dashboard.php"><i class="zmdi zmdi-home"></i><span>Thông tin cửa hàng</span> </a></li>
            <li><a href="Product_Added.php"><i class="zmdi zmdi-plus-circle"></i><span>Thêm sản phẩm</span> </a></li>
            <li><a href="Product_List.php"><i class="zmdi zmdi-sort-amount-desc"></i><span>Tất cả sản phẩm</span> </a>
            </li>
            <li class="active open"><a href="Order_List.php"><i class="zmdi zmdi-grid"></i><span>Đơn hàng mới</span> </a>
            </li>

            <li ><a href="All_Order_List.php"><i class="zmdi zmdi-label-alt"></i><span>Tất cả đơn hàng</span> </a></li>
            <li><a href="Comision_List.php"><i class="zmdi zmdi-blogger"></i><span>Lợi nhuận</span> </a></li>
';
            ?>

        </ul>
    </div>
    <!-- #Menu -->
</aside>

<section class="content ecommerce-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Danh sách đơn hàng

                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> Nông sản xanh</a>
                    </li>
                    <li class="breadcrumb-item"><a href="Vendors.php">Cửa hàng</a></li>
                    <li class="breadcrumb-item active">Đơn hàng</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card product_item_list">
                    <div class="body table-responsive">
                        <table class="table table-hover m-b-0">
                            <thead>
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Tên sản phẩm</th>
                                <th class="col-2">Lưu ý</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Tổng cộng</th>
                                <th>Xác nhận/Hủy</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sqlOrderDetail="";
                            if ($IsAdmin) {
                                $sqlOrderDetail = "SELECT * FROM orderdetail";
                            } else
                                $sqlOrderDetail = "SELECT * FROM orderdetail WHERE StoreId = '" . $StoreId . "' AND VendorConfirm = 0";
                            $resultOrderDetail = mysqli_query($conn, $sqlOrderDetail);
                            while ($rowOrderDetail = mysqli_fetch_assoc($resultOrderDetail)) {

                                ?>
                                <tr>
                                    <td><?= $rowOrderDetail['Id'] ?></td>
                                    <td><h5><?= $rowOrderDetail['ProductName'] ?></h5></td>
                                    <td><span class="text-muted"><?= $rowOrderDetail['Note'] ?></span></td>
                                    <td><?= $rowOrderDetail['Quantity'] ?></td>
                                    <td><?= $rowOrderDetail['Price'] ?></td>
                                    <td><span class="col-green">$<?= $rowOrderDetail['Total'] ?></span></td>
                                    <td>
                                        <?php
                                        if($IsAdmin){
                                            echo' <a href=""
                                           class="btn btn-default disabled waves-effect waves-float waves-green"><i
                                                    class="zmdi zmdi-check"></i></a>
                                        <a href=""
                                           class="btn btn-default disabled waves-effect waves-float waves-red"><i
                                                    class="zmdi zmdi-close"></i></a>';
                                        }
                                        else{
                                            echo '<a href="javascript:Confirm('. $rowOrderDetail['Id'].');"
                                           class="btn btn-default waves-effect waves-float waves-green"><i
                                                    class="zmdi zmdi-check"></i></a>
                                        <a href="javascript:Cancel('.$rowOrderDetail['Id'] .');"
                                           class="btn btn-default waves-effect waves-float waves-red"><i
                                                    class="zmdi zmdi-close"></i></a>';
                                        }
                                        ?>

                                    </td>
                                </tr>
                            <?php } ?>

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
<script type="text/javascript">
    function Confirm(OrderId){

    $.ajax({
        type: 'POST',
        url: 'Order_List_Process.php',
        data: {
            "OrderId": OrderId,
            "Confirm": 2
        },
        success: function (data) {
            swal({
                'title': 'Thành công!',

                text: "Đã chấp nhận đơn hàng",
                icon: "success"

            }).then(function () {
                window.open('Order_List.php', '_self')
            });


        },
        error: function (data) {
            swal({
                'title': 'Opps',
                text: "Có lỗi rồi! >.<",
                icon: "warning",
                // dangerMode: true

            })
        }
    });

    }
    function Cancel(OrderId){
    $.ajax({
        type: 'POST',
        url: 'Order_List_Process.php',
        data: {
            "OrderId": OrderId,
            "Confirm": 3
        },
        success: function (data) {
            swal({
                'title': 'Thành công!',

                text: "Đã Hủy đơn hàng!",
                icon: "success"

            }).then(function () {
                window.open('Order_List.php', '_self')
            });
        },
        error: function (data) {
            swal({
                'title': 'Opps',
                text: "Có lỗi rồi! >.<",
                icon: "warning",
                // dangerMode: true

            })
        }
    });

    }
</script>
<!-- Jquery Core Js -->
<script src="Admin_Store.asset/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="Admin_Store.asset/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="Admin_Store.asset/bundles/footable.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="Admin_Store.asset/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="Admin_Store.asset/js/pages/blog/blog.js"></script>
<script src="Admin_Store.asset/js/pages/tables/footable.js"></script>
</body>
</html>