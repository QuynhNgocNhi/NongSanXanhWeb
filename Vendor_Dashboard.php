<?php
ob_start();
session_start();
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
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>Provider</title>
<link rel="icon" href="assets/img/global/2.jpg" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="Admin_Store.asset/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="Admin_Store.asset/plugins/jvectormap/jquery-jvectormap-2.0.3.css"/>
<link rel="stylesheet" href="Admin_Store.asset/plugins/morrisjs/morris.css" />
<!-- Custom Css -->
<link rel="stylesheet" href="Admin_Store.asset/css/main.css">
<link rel="stylesheet" href="Admin_Store.asset/css/blog.css">
<link rel="stylesheet" href="Admin_Store.asset/css/color_skins.css">
</head>
<body class="theme-blush">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="Admin_Store.asset/images/logo.svg" width="48" height="48" alt="Compass"></div>
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
            <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>            
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
                <a href="javascript:void(0);" class="fullscreen hidden-sm-down" data-provide="fullscreen" data-close="true"><i class="zmdi zmdi-fullscreen"></i></a>
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
                    <div class="image"><a href="Vendor_Dashboard.php"><img src="Admin_Store.asset/images/profile_av.jpg" alt="User"></a></div>
                    <div class="detail">
                        <h4><?= $StoreName ?></h4>
                    </div>
                    
                    
                    <a href="Login.php" title="Sign out"><i class="zmdi zmdi-power"></i></a>
                </div>
            </li>
            <li class="header">Quản lý cửa hàng</li>                
            <li class="active open"><a href="Vendor_Dashboard.php"><i class="zmdi zmdi-home"></i><span>Thông tin cửa hàng</span> </a> </li>
            <li> <a href="Product_Added.php"><i class="zmdi zmdi-plus-circle"></i><span>Thêm sản phẩm</span> </a> </li>
            <li><a href="Product_List.php"><i class="zmdi zmdi-sort-amount-desc"></i><span>Tất cả sản phẩm</span> </a> </li>
            <li><a href="Order_List.php"><i class="zmdi zmdi-grid"></i><span>Đơn hàng</span> </a> </li>
            <li><a href="Customer-List.php"><i class="zmdi zmdi-label-alt"></i><span>Khách hàng</span> </a> </li>
            <li><a href="Comision_List.php"><i class="zmdi zmdi-blogger"></i><span>Lợi nhuận</span> </a> </li>

        </ul>
    </div>
    <!-- #Menu --> 
</aside>





<section class="content blog-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Cửa hàng của tôi
                    <small>Chào mừng bạn đến cửa hàng của mình</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Nông Sản Xanh</a></li>
                    <li class="breadcrumb-item"><a href="Vendor_Dashboard.php">Cửa hàng</a></li>
                    <li class="breadcrumb-item active">Store Name</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <ul class="row profile_state list-unstyled">
                        <li class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-eye col-amber"></i>
                                <h4>2,365</h4>
                                <span>Post View</span>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-thumb-up col-blue"></i>
                                <h4>365</h4>
                                <span>Likes</span>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-comment-text col-red"></i>
                                <h4>65</h4>
                                <span>Comments</span>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-account text-success"></i>
                                <h4>2,055</h4>
                                <span>Profile Views</span>
                            </div>
                        </li>                      
                    </ul>
                </div>
            </div>
        </div>       
        
        <div class="row clearfix">
            <div class="col-lg-3 col-md-12">
                <div class="card l-blue">
                    <div class="body">
                        <h4 class="m-t-0 m-b-0">2,048</h4>
                        <p class="m-b-0">Total Leads</p>
                    </div>
                    <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                    data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                    data-offset="90" data-width="100%" data-height="40px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                    data-fill-Color="rgba(255, 255, 255, 0.3)"> 7,6,7,8,5,9,8,6,7 </div>
                </div>
                <div class="card l-parpl">
                    <div class="body">
                        <h4 class="m-t-0 m-b-0">521</h4>
                        <p class="m-b-0 ">Total Connections</p>
                    </div>
                    <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                    data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                    data-offset="90" data-width="100%" data-height="42px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                    data-fill-Color="rgba(255, 255, 255, 0.3)"> 6,5,7,4,5,3,8,6,5 </div>
                </div>
                <div class="card l-seagreen">
                    <div class="body">
                        <h4 class="m-t-0 m-b-0">73</h4>
                        <p class="m-b-0 ">Articles</p>
                    </div>
                    <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                    data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                    data-offset="90" data-width="100%" data-height="45px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                    data-fill-Color="rgba(255, 255, 255, 0.3)"> 8,7,7,5,5,4,8,7,5 </div>
                </div>
                <div class="card l-pink">
                    <div class="body">
                        <h4 class="m-t-0 m-b-0">15</h4>
                        <p class="m-b-0">Categories</p>
                    </div>
                    <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                    data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                    data-offset="90" data-width="100%" data-height="45px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                    data-fill-Color="rgba(255, 255, 255, 0.3)"> 7,6,7,8,5,9,8,6,7 </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Browser</strong> Usage</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                    <li><a href="javascript:void(0);">Report</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="donut_chart" class="dashboard-donut-chart"></div>
                        <table class="table m-b-0">
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Chrome</td>
                                    <td>6985</td>
                                    <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Other</td>
                                    <td>2697</td>
                                    <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Safari</td>
                                    <td>3597</td>
                                    <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Firefox</td>
                                    <td>2145</td>
                                    <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Opera</td>
                                    <td>1854</td>
                                    <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>IE</td>
                                    <td>54</td>
                                    <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                                </tr>                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="card ">
                   <div class="header">
                       <h2><strong>Latest</strong> Comments</h2>
                       <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                    <li><a href="javascript:void(0);">Report</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                   </div>
                   <div class="body">
                       <ul class="inbox-widget list-unstyled clearfix">
                            <li class="inbox-inner"><a href="#">
                               <div class="inbox-item">
                                   <div class="inbox-img"> <img src="Admin_Store.asset/images/sm/avatar1.jpg" class="rounded" alt=""> </div>
                                   <div class="inbox-item-info">
                                       <p class="author">John Doe</p>
                                       <p class="inbox-message">Lorem Ipsum is simply dummy text of the been the industry's</p>
                                       <p class="inbox-date">12:34 PM</p>
                                   </div>
                                   <div class="hover_action">
                                        <a href="#"><i class="zmdi zmdi-favorite"></i></a>
                                        <a href="#"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="#"><i class="zmdi zmdi-check-circle"></i></a>
                                   </div>
                               </div>
                               </a>
                            </li>
                            <li class="inbox-inner"> <a href="#">
                                <div class="inbox-item">
                                   <div class="inbox-img"> <img src="Admin_Store.asset/images/sm/avatar2.jpg" class="rounded" alt=""> </div>
                                   <div class="inbox-item-info">
                                       <p class="author">Maryam Amiri</p>
                                       <p class="inbox-message">Lorem Ipsum is simply dummyLorem Ipsum has been the industry's</p>
                                       <p class="inbox-date">10:34 AM</p>
                                   </div>
                                   <div class="hover_action">
                                        <a href="#"><i class="zmdi zmdi-favorite"></i></a>
                                        <a href="#"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="#"><i class="zmdi zmdi-check-circle"></i></a>
                                   </div>
                                </div>
                                </a>
                            </li>
                            <li class="inbox-inner"> <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="Admin_Store.asset/images/sm/avatar3.jpg" class="rounded" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">Fidel Tonn</p>
                                        <p class="inbox-message">text of the printing and  has been the industry's</p>
                                        <p class="inbox-date">15:34 PM</p>
                                    </div>
                                    <div class="hover_action">
                                        <a href="#"><i class="zmdi zmdi-favorite"></i></a>
                                        <a href="#"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="#"><i class="zmdi zmdi-check-circle"></i></a>
                                   </div>
                                </div>
                                </a> </li>
                            <li class="inbox-inner"> <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="Admin_Store.asset/images/sm/avatar4.jpg" class="rounded" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">Gary Camara</p>
                                        <p class="inbox-message">simply dummy text of the printing and typesetting industry's</p>
                                        <p class="inbox-date">11:10 AM</p>
                                    </div>
                                    <div class="hover_action">
                                        <a href="#"><i class="zmdi zmdi-favorite"></i></a>
                                        <a href="#"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="#"><i class="zmdi zmdi-check-circle"></i></a>
                                   </div>
                                </div>
                                </a> </li>
                            <li class="inbox-inner"> <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-img"><img src="Admin_Store.asset/images/sm/avatar5.jpg" class="rounded" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">Tim Hank</p>
                                        <p class="inbox-message">text of the industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">18:45 PM</p>
                                    </div>
                                    <div class="hover_action">
                                        <a href="#"><i class="zmdi zmdi-favorite"></i></a>
                                        <a href="#"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="#"><i class="zmdi zmdi-check-circle"></i></a>
                                   </div>
                                </div>
                                </a>
                            </li>
                            <li class="inbox-inner"> <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="Admin_Store.asset/images/sm/avatar6.jpg" class="rounded" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">Hossein Shams </p>
                                        <p class="inbox-message">text of the printing and  has been the industry's</p>
                                        <p class="inbox-date">15:34 PM</p>
                                    </div>
                                    <div class="hover_action">
                                        <a href="#"><i class="zmdi zmdi-favorite"></i></a>
                                        <a href="#"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="#"><i class="zmdi zmdi-check-circle"></i></a>
                                   </div>
                                </div>
                                </a>
                            </li>
                       </ul>
                   </div>
               </div>
            </div>                        
        </div>        
        <div class="row clearfix">
            <div class="col-sm-12">
                 <div class="card">
                    <div class="header">
                        <h2><strong>Social</strong> Media</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                    <li><a href="javascript:void(0);">Report</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive social_media_table">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Media</th>
                                        <th>Name</th>
                                        <th>Like</th>                                                                                
                                        <th>Comments</th>
                                        <th>Share</th>
                                        <th>Members</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="social_icon linkedin"><i class="zmdi zmdi-linkedin"></i></span>
                                        </td>
                                        <td><span class="list-name">Linked In</span>
                                            <span class="text-muted">Florida, United States</span>
                                        </td>
                                        <td>19K</td>
                                        <td>14K</td>
                                        <td>10K</td>
                                        <td>
                                            <span class="badge badge-success">2341</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="social_icon twitter-table"><i class="zmdi zmdi-twitter"></i></span>
                                        </td>
                                        <td><span class="list-name">Twitter</span>
                                            <span class="text-muted">Arkansas, United States</span>
                                        </td>
                                        <td>7K</td>
                                        <td>11K</td>
                                        <td>21K</td>
                                        <td>
                                            <span class="badge badge-success">952</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="social_icon facebook"><i class="zmdi zmdi-facebook"></i></span>
                                        </td>
                                        <td><span class="list-name">Facebook</span>
                                            <span class="text-muted">Illunois, United States</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>8K</td>
                                        <td>
                                            <span class="badge badge-success">6127</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="social_icon google"><i class="zmdi zmdi-google-plus"></i></span>
                                        </td>
                                        <td><span class="list-name">Google Plus</span>
                                            <span class="text-muted">Arizona, United States</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>154</td>
                                        <td>
                                            <span class="badge badge-success">325</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="social_icon youtube"><i class="zmdi zmdi-youtube-play"></i></span>
                                        </td>
                                        <td><span class="list-name">YouTube</span>
                                            <span class="text-muted">Alaska, United States</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>200</td>
                                        <td>
                                            <span class="badge badge-success">160</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>   
</section>
<!-- Jquery Core Js --> 
<script src="Admin_Store.asset/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="Admin_Store.asset/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="Admin_Store.asset/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="Admin_Store.asset/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script><!-- USA Map Js -->

<script src="Admin_Store.asset/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
<script src="Admin_Store.asset/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="Admin_Store.asset/bundles/knob.bundle.js"></script> <!-- Jquery Knob Plugin Js -->

<script src="Admin_Store.asset/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="Admin_Store.asset/js/pages/blog/blog.js"></script>
<script src="Admin_Store.asset/js/pages/charts/jquery-knob.min.js"></script>
</body>
</html>