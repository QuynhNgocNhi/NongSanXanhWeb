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
<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8"/>
    <title>Nông sản xanh</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:title" content=""/>
    <meta property="og:type" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:image" content=""/>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/global/2.jpg"/>
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/mainf195.css?v=2.1"/>

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <!-- homepage CSS -->
    <link rel="stylesheet" href="buyers-account.asset/acount.css"/>
    <!-- call global -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>

    <script type="text/javascript">
        function loadPage(href) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", href, false);
            xmlhttp.send();
            return xmlhttp.responseText;
        }

    </script>
    <script>
        $(document).ready(function () {
            document.getElementById('header').innerHTML = loadPage('header.php');
            document.getElementById('footer').innerHTML = loadPage('footer.php');
        });

    </script>


</head>

<body>

<div id="header"></div>
<!-- Begin container -->
<main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Trang chủ</a>
                <span> Tài khoản</span>
            </div>
        </div>
    </div>
    <div class="page-content pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row main-row">
                        <div class="col-md-3 ">
                            <div class="dashboard-menu account-main">
                                <ul class="nav flex-column" role="tablist">
                                    <li class="nav-item ">
                                        <a class="nav-link active" id="account-detail-tab" data-bs-toggle="tab"
                                           href="#account-detail" role="tab"
                                           aria-controls="account-detail" aria-selected="true"><i
                                                    class="fi-rs-user mr-10"></i>Chi tiết tài
                                            khoản</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " id="password-tab" data-bs-toggle="tab" href="#password"
                                           role="tab"
                                           aria-controls="password" aria-selected="false"><i
                                                    class="fi-rs-key mr-10"></i>Đổi mật khẩu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="post-management-tab" data-bs-toggle="tab"
                                           href="#post-management"
                                           role="tab" aria-controls="post-management" aria-selected="false"><i
                                                    class="fi-rs-form mr-10"></i>Quản lý bài đăng</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders"
                                           role="tab"
                                           aria-controls="orders" aria-selected="false"><i
                                                    class="fi-rs-shopping-bag mr-10"></i>Đơn hàng
                                            của bạn</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="viewed-product-tab" data-bs-toggle="tab"
                                           href="#viewed-product" role="tab"
                                           aria-controls="viewed-product" aria-selected="false"><i
                                                    class="fi-rs-check mr-10"></i>Sản phẩm
                                            đã xem</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="favorite-product-tab" data-bs-toggle="tab"
                                           href="#favorite-product"
                                           role="tab" aria-controls="favorite-product" aria-selected="false"><i
                                                    class="fi-rs-heart mr-10"></i>Sản phẩm ưa thích</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="login.php"><i class="fi-rs-sign-out mr-10"></i>Đăng
                                            xuất</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content account dashboard-content pl-50 ">
                                <div class="tab-pane fade active show" id="account-detail" role="tabpanel"
                                     aria-labelledby="account-detail-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <?php
                                            if (isset($_SESSION["UserName"])) {
                                                echo "<a href='User_Account.php'><span class='h3 text-brand lable ml-0'> Chào " . $_SESSION["UserName"];

                                            } else {
                                                echo "<h3 href='Amin_Dashboard.php'><span class='lable ml-0'>Admin</span></h3>";
                                            }
                                            ?>
                                            <!--                                            <h3 class="mb-0">Xin chào Rosie!</h3>-->
                                        </div>
                                        <div class="row">
                                            <div class="row-cols-4">
                                                <?php
                                                if (isset($_GET['error'])): ?>
                                                    <p><?php
                                                        if (isset($_GET['error'])) ; ?></p>
                                                <?php endif ?>
                                                <?php
                                                $UserId = $_SESSION['Id'];
                                                $sql = "SELECT * FROM images WHERE UserId = '" . $UserId . "' ORDER BY Id DESC ";
                                                $result = mysqli_query($conn, $sql);
                                                if ($result) {
                                                    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
                                                    $images = $row["ImgUrl"]; ?>
                                                    <!--                                                        Thêm role-->
                                                    <img class="justify-content-around rounded-circle center"
                                                         src="data/Avartar_Upload/<?= $images ?>">
                                                    <?php


                                                }
                                                ?>


                                                <!--                                                <img class="justify-content-around center"-->
                                                <!--                                                     src="assets/img/global/UserAvatar/Avatar0.png">-->
                                            </div>
                                            <div class=" button-input">
                                                <form action="Acount_Upload.php" method="post"
                                                      enctype="multipart/form-data">
                                                    <input class="buttun button-input" type="file" id="myAvatar"
                                                           name="FileName">


                                                    <input id="ChangeAvatar" class="button button-input" type="submit"
                                                           name="ChangeAvatar" value="Thay đổi">

                                                </form>
                                            </div>
                                        </div>


                                        <div class="card-body">
                                            <p>
                                                Tài khoản của bạn là tài khoản thành viên &amp; bạn có thể <a
                                                        href="#orders-tab">xem lại đơn hàng của mình</a>,<br/>
                                                lưu sản phẩm vào <a href="#favorite-product-tab">yêu thích</a> và <a
                                                        href="#account-detail-tab">chỉnh sửa lại chi tiết tài khoản và
                                                    đặt lại mật khẩu.</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card">

                                        <div class="card-body">
                                            <form method="post" name="enq">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label>Họ <span class="required">*</span></label>
                                                        <input required="" class="form-control" name="name"
                                                               type="text"/>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Tên <span class="required">*</span></label>
                                                        <input required="" class="form-control" name="phone"/>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Tên hiển thị <span class="required">*</span></label>
                                                        <input required="" class="form-control" name="dname"
                                                               type="text"/>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Địa chỉ email <span class="required">*</span></label>
                                                        <input required="" class="form-control" name="email"
                                                               type="email"/>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Số điện thoại <span class="required">*</span></label>
                                                        <input required="" class="form-control" name="pnumber"
                                                               type="text"/>
                                                    </div>
                                                    <div class="form-group gender">
                                                        <label>Giới tính <span class="required">*</span></label>
                                                        <br>
                                                        Nam<input
                                                                style="display: inline-block;height: 20px; width: 100px;"
                                                                required=""
                                                                class="gender" name="gender" type="radio"/>
                                                        Nữ<input
                                                                style="display: inline-block;height: 20px; width: 100px;"
                                                                required=""
                                                                class="gender" name="gender" type="radio"/>
                                                        Khác<input
                                                                style="display: inline-block;height: 20px; width: 100px;"
                                                                required=""
                                                                class="gender" name="gender" type="radio"/>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Ngày sinh<span class="required">*</span></label>
                                                        <input required="" class="form-control" name="DOB" type="date"/>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Địa chỉ<span class="required">*</span></label>
                                                        <input required="" class="form-control" name="address"
                                                               type="text"/>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit"
                                                                class="btn btn-fill-out submit font-weight-bold"
                                                                name="submit"
                                                                value="Submit">Lưu thay đổi
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Đổi mật khẩu</h3>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" name="enq">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label>Mật khẩu cũ<span class="required">*</span></label>
                                                        <input required="" class="form-control" name="old-password"
                                                               type="password"/>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Mật khẩu mới<span class="required">*</span></label>
                                                        <input required="" class="form-control" name="new-password"
                                                               type="password"/>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Nhập lại mật khẩu mới<span
                                                                    class="required">*</span></label>
                                                        <input required="" class="form-control" name="re-new-password"
                                                               type="password"/>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit"
                                                                class="btn btn-fill-out submit font-weight-bold"
                                                                name="submit"
                                                                value="Submit">Đổi mật khẩu
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="post-management" role="tabpanel"
                                     aria-labelledby="post-management-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Quản lý bài đăng</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <h4>Tin bán</h4>
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Hình ảnh</th>
                                                        <th>Bài đăng</th>
                                                        <th>Ngày đăng</th>
                                                        <th>Trạng thái</th>
                                                        <th>Thanh toán</th>
                                                        <th>Tùy chọn</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="./assets/imgs/shop/cat-13.png" alt=""></td>
                                                        <td>Sản phẩm tạm thời 1</td>
                                                        <td>30 Tháng 10, 2020</td>
                                                        <td>Công khai</td>
                                                        <td>Chưa thanh toán</td>
                                                        <td>
                                                            <a href="#"><i class="fi-rs-edit mr-10"></i></a>
                                                            <a href="#"><i class="fi-rs-delete mr-10"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="./assets/imgs/shop/cat-13.png" alt=""></td>
                                                        <td>Sản phẩm tạm thời 2</td>
                                                        <td>30 Tháng 10, 2020</td>
                                                        <td>Công khai</td>
                                                        <td>Chưa thanh toán</td>
                                                        <td>
                                                            <a href="#"><i class="fi-rs-edit mr-10"></i></a>
                                                            <a href="#"><i class="fi-rs-delete mr-10"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="./assets/imgs/shop/cat-13.png" alt=""></td>
                                                        <td>Sản phẩm tạm thời 3</td>
                                                        <td>30 Tháng 10, 2020</td>
                                                        <td>Công khai</td>
                                                        <td>Chưa thanh toán</td>
                                                        <td>
                                                            <a href="#"><i class="fi-rs-edit mr-10"></i></a>
                                                            <a href="#"><i class="fi-rs-delete mr-10"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="./assets/imgs/shop/cat-13.png" alt=""></td>
                                                        <td>Sản phẩm tạm thời 4</td>
                                                        <td>30 Tháng 10, 2020</td>
                                                        <td>Công khai</td>
                                                        <td>Chưa thanh toán</td>
                                                        <td>
                                                            <a href="#"><i class="fi-rs-edit mr-10"></i></a>
                                                            <a href="#"><i class="fi-rs-delete mr-10"></i></a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <h4>Tin mua</h4>
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Hình ảnh</th>
                                                        <th>Bài đăng</th>
                                                        <th>Ngày đăng</th>
                                                        <th>Trạng thái</th>
                                                        <th>Thanh toán</th>
                                                        <th>Tùy chọn</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="./assets/imgs/shop/cat-13.png" alt=""></td>
                                                        <td>Sản phẩm tạm thời 1</td>
                                                        <td>30 Tháng 10, 2020</td>
                                                        <td>Công khai</td>
                                                        <td>Chưa thanh toán</td>
                                                        <td>
                                                            <a href="#"><i class="fi-rs-edit mr-10"></i></a>
                                                            <a href="#"><i class="fi-rs-delete mr-10"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="./assets/imgs/shop/cat-13.png" alt=""></td>
                                                        <td>Sản phẩm tạm thời 2</td>
                                                        <td>30 Tháng 10, 2020</td>
                                                        <td>Công khai</td>
                                                        <td>Chưa thanh toán</td>
                                                        <td>
                                                            <a href="#"><i class="fi-rs-edit mr-10"></i></a>
                                                            <a href="#"><i class="fi-rs-delete mr-10"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="./assets/imgs/shop/cat-13.png" alt=""></td>
                                                        <td>Sản phẩm tạm thời 3</td>
                                                        <td>30 Tháng 10, 2020</td>
                                                        <td>Công khai</td>
                                                        <td>Chưa thanh toán</td>
                                                        <td>
                                                            <a href="#"><i class="fi-rs-edit mr-10"></i></a>
                                                            <a href="#"><i class="fi-rs-delete mr-10"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="./assets/imgs/shop/cat-13.png" alt=""></td>
                                                        <td>Sản phẩm tạm thời 4</td>
                                                        <td>30 Tháng 10, 2020</td>
                                                        <td>Công khai</td>
                                                        <td>Chưa thanh toán</td>
                                                        <td>
                                                            <a href="#"><i class="fi-rs-edit mr-10"></i></a>
                                                            <a href="#"><i class="fi-rs-delete mr-10"></i></a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="mb-0">Đơn hàng của bạn</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Mã đơn hàng</th>
                                                        <th width="100px">Ngày mua</th>
                                                        <th class="hidden-sm-down">Sản phẩm</th>
                                                        <th class="hidden-sm-down">Tổng tiền</th>
                                                        <th>Trạng thái</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $sqlOrder = "SELECT * FROM orders WHERE UserId = '" . $_SESSION['Id'] . "'";
                                                    $resultOrder = mysqli_query($conn, $sqlOrder);

                                                    while ($rowOrder = mysqli_fetch_assoc($resultOrder)) {
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <a href="Invoice.php?OrderId=<?= $rowOrder['Id'] ?>"><?php preg_match_all('!\d+!', $rowOrder['OrderDate'], $matches);
                                                                    echo implode('', $matches[0]); ?></a></td>
                                                            <td><?= $rowOrder['OrderDate'] ?></td>

                                                            <td class="hidden-sm-down"><?= $rowOrder['MainProductName'] ?></td>
                                                            <td><?= $rowOrder['OrderTotal'] ?></td>
                                                            <?php
                                                            $OrderStatusId = $rowOrder['OrderStatusId'];

                                                            $sqlOrderStatus = "SELECT * FROM orderstatus WHERE Id = '$OrderStatusId'";
                                                            $resultOrderStatus = mysqli_query($conn, $sqlOrderStatus);
                                                            $rowOrderStatus = mysqli_fetch_assoc($resultOrderStatus);
                                                            if ($rowOrderStatus) {
                                                                if ($rowOrderStatus['Id'] == 8)
                                                                    echo "<td class='text-danger'>" . $rowOrderStatus['OrderStatus'] . "</td>";
                                                                else {
                                                                    echo "<td class='text-success'>" . $rowOrderStatus['OrderStatus'] . "</td>";
                                                                }
                                                            }
                                                            ?>

                                                        </tr>
                                                    <?php } ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="viewed-product" role="tabpanel"
                                     aria-labelledby="viewed-product">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="mb-0">Sản phẩm bạn đã xem</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="viewed-product-item">
                                                <img src="./assets/imgs/shop/cat-1.png" alt="SP1">
                                                <p>Sản phẩm 1</p>
                                            </div>
                                            <div class="viewed-product-item">
                                                <img src="./assets/imgs/shop/cat-2.png" alt="SP1">
                                                <p>Sản phẩm 2</p>
                                            </div>
                                            <div class="viewed-product-item">
                                                <img src="./assets/imgs/shop/cat-3.png" alt="SP1">
                                                <p>Sản phẩm 3</p>
                                            </div>
                                            <div class="viewed-product-item">
                                                <img src="./assets/imgs/shop/cat-4.png" alt="SP1">
                                                <p>Sản phẩm 4</p>
                                            </div>
                                            <div class="viewed-product-item">
                                                <img src="./assets/imgs/shop/cat-5.png" alt="SP1">
                                                <p>Sản phẩm 5</p>
                                            </div>
                                            <div class="viewed-product-item">
                                                <img src="./assets/imgs/shop/cat-9.png" alt="SP1">
                                                <p>Sản phẩm 9</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="favorite-product" role="tabpanel"
                                     aria-labelledby="favorite-product">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="mb-0">Sản phẩm ưa thích</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="favorite-product-item">
                                                <img src="./assets/imgs/shop/product-1-1.jpg" alt="SP1">
                                                <p>Sản phẩm 11</p>
                                                <button type="submit" class="btn btn-fill-out submit font-weight-bold"
                                                        name="submit"
                                                        value="Submit">Xóa
                                                </button>
                                            </div>
                                            <div class="favorite-product-item">
                                                <img src="./assets/imgs/shop/product-1-2.jpg" alt="SP1">
                                                <p>Sản phẩm 12</p>
                                                <button type="submit" class="btn btn-fill-out submit font-weight-bold"
                                                        name="submit"
                                                        value="Submit">Xóa
                                                </button>
                                            </div>
                                            <div class="favorite-product-item">
                                                <img src="./assets/imgs/shop/product-2-1.jpg" alt="SP1">
                                                <p>Sản phẩm 21</p>
                                                <button type="submit" class="btn btn-fill-out submit font-weight-bold"
                                                        name="submit"
                                                        value="Submit">Xóa
                                                </button>
                                            </div>
                                            <div class="favorite-product-item">
                                                <img src="./assets/imgs/shop/product-2-2.jpg" alt="SP1">
                                                <p>Sản phẩm 22</p>
                                                <button type="submit" class="btn btn-fill-out submit font-weight-bold"
                                                        name="submit"
                                                        value="Submit">Xóa
                                                </button>
                                            </div>
                                            <div class="favorite-product-item">
                                                <img src="./assets/imgs/shop/product-3-1.jpg" alt="SP1">
                                                <p>Sản phẩm 31</p>
                                                <button type="submit" class="btn btn-fill-out submit font-weight-bold"
                                                        name="submit"
                                                        value="Submit">Xóa
                                                </button>
                                            </div>
                                            <div class="favorite-product-item">
                                                <img src="./assets/imgs/shop/product-3-2.jpg" alt="SP1">
                                                <p>Sản phẩm 32</p>
                                                <button type="submit" class="btn btn-fill-out submit font-weight-bold"
                                                        name="submit"
                                                        value="Submit">Xóa
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End container -->
<div id="footer"></div>

<!-- Vendor JS-->
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></scrip>
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="assets/js/plugins/slick.js"></script>
<script src="assets/js/plugins/jquery.syotimer.min.js"></script>
<script src="assets/js/plugins/wow.js"></script>
<script src="assets/js/plugins/jquery-ui.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.js"></script>
<script src="assets/js/plugins/magnific-popup.js"></script>
<script src="assets/js/plugins/select2.min.js"></script>
<script src="assets/js/plugins/waypoints.js"></script>
<script src="assets/js/plugins/counterup.js"></script>
<script src="assets/js/plugins/jquery.countdown.min.js"></script>
<script src="assets/js/plugins/images-loaded.js"></script>
<script src="assets/js/plugins/isotope.js"></script>
<script src="assets/js/plugins/scrollup.js"></script>
<script src="assets/js/plugins/jquery.vticker-min.js"></script>
<script src="assets/js/plugins/jquery.theia.sticky.js"></script>
<script src="assets/js/plugins/jquery.elevatezoom.js"></script>
<!-- Template  JS -->
<script src="assets/js/mainf195.js?v=2.1"></script>
<script src="assets/js/shopf195.js?v=2.1"></script>
</body>


</html>