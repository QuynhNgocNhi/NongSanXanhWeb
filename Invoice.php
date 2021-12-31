<!--todo: quay về tang chủ-->
<?php
ob_start();
session_start();
require_once('config.php');
?>
<?php
if (!isset($_SESSION['Id'])) {
    header("location: login.php");
}
//Get Invoice
$OrderId = $_GET['OrderId'];
$sql = "SELECT * FROM orders WHERE Id = '" . $OrderId . "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (!$row) {
    header("location: page-404.php");
}

?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nông Sản Xanh</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="description" content=""/>
    <meta property="og:title" content=""/>
    <meta property="og:type" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:image" content=""/>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/mainf195.css?v=2.1"/>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/global/2.jpg"/>
    <!-- homepage CSS -->
    <link rel="stylesheet" href="home.asset/css/style.css"/>
    <link rel="stylesheet" href="home.asset/home.css?v=2.1"/>
    <link rel="stylesheet" href="home.asset/fonts/Linearicons/Font/demo-files/demo.css">
    <link rel="stylesheet" href="home.asset/css/nouislider.css">
    <link rel="stylesheet" href="home.asset/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="home.asset/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="home.asset/plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="home.asset/plugins/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="home.asset/plugins/slick/slick.css">
    <link rel="stylesheet" href="home.asset/plugins/lightGallery/dist/css/lightgallery.min.css">
    <script data-cfasync="false" src="home.asset/js/email-decode.min.js"></script>
    <script src="home.asset/plugins/jquery.min.js"></script>
    <script src="home.asset/plugins/popper.min.js"></script>
    <script src="home.asset/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="home.asset/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="home.asset/plugins/jquery.matchHeight-min.js"></script>
    <script src="home.asset/plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="home.asset/plugins/select2/dist/js/select2.min.js"></script>
    <script src="home.asset/plugins/slick/slick.js"></script>
    <script src="home.asset/plugins/lightGallery/dist/js/lightgallery-all.min.js"></script>
    <script src="home.asset/plugins/nouislider.min.js"></script>
    <!-- custom code-->
    <script src="home.asset/js/main.js"></script>
    <!--        <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>-->
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">


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
<body>

<!--header-->
<?php
require_once('header.php');
?>
<!--end header-->
<main class="no-main main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.php" rel="nofollow"><i class="fi-rs-home mr-10"></i>Trang chủ</a>
                <a href="#"><i class=""></i><span>Đơn hàng của tôi</span></a>

            </div>
        </div>
    </div>
    <section class="section--checkout mb-20">
        <div class="container col-xl-10">
            <div class="row clearfix ml-25">
                <div class="col-lg-12 p-20">
                    <div class="card pl-5">
                        <div class="text-center ">

                            <h4 class="pt-30 pb-20">Chi tiết hóa đơn : <strong
                                        class="text-primary">#<?php preg_match_all('!\d+!', $row['OrderDate'], $matches);
                                    echo implode('', $matches[0]); ?></strong></h4>
                            <ul class="nav nav-tabs">
                                <li class="nav-item inlineblock col-xl-1 col-lg-2"><a class="nav-link active text-end"
                                                                                      data-toggle="tab"
                                                                                      href="#details"
                                                                                      aria-expanded="true">Chi
                                        tiết</a>
                                </li>

                                <li class="nav-item inlineblock col-xl-1 col-lg-2"><a class="nav-link text-end"
                                                                                      data-toggle="tab"
                                                                                      href="#history"
                                                                                      aria-expanded="false">Lịch
                                        sử</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane in active" id="details" aria-expanded="true">
                            <div class="card" id="details">
                                <div class="body">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 p-20">
                                            <address>
                                                <strong><?= $row['City'] ?></strong><br>Địa chỉ:
                                                <?= $row['Address'] ?><br>Zip:
                                                <?= $row['Zip'] ?><br>
                                                <!--                                                <abbr title="Phone">Điện thoại: </abbr> --><? //= $row['Phone'] ?>
                                                <abbr>Điện thoại: </abbr> <?= $row['Phone'] ?>
                                            </address>
                                        </div>
                                        <div class="col-md-6 col-sm-6 text-right p-20">
                                            <p class="m-b-0"><strong>Ngày đặt: </strong> <?= $row['OrderDate'] ?></p>
                                            <p class="m-b-0"><strong>Trạng thái: </strong> <span
                                                        class="badge bg-orange">Đang chờ xác nhận</span></p>
                                            <p><strong>Mã đơn hàng: </strong> #<?= $row['OrderDate'] ?></p>
                                        </div>
                                    </div>
                                    <div class="mt-40"></div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th width="60px"></th>
                                                        <th>Nhà cung cấp</th>
                                                        <th class="hidden-sm-down">Sản phẩm</th>
                                                        <th>Số lượng</th>
                                                        <th class="hidden-sm-down">Giá</th>
                                                        <th>Tạm tính</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $sqlOrderDetail = "SELECT * FROM orderdetail WHERE OrderId = '" . $OrderId . "'";
                                                    $resultOrderDetail = mysqli_query($conn, $sqlOrderDetail);
                                                    $index = 1;
                                                    while ($rowOrderDetail = mysqli_fetch_assoc($resultOrderDetail)) {
                                                        ?>
                                                        <tr>
                                                            <td><?= $index++; ?></td>
                                                            <td>
                                                                <img src="data/Product_Img_Upload/<?= $rowOrderDetail['ProductImage'] ?>"
                                                                     width="40"
                                                                     alt="Product img"></td>
                                                            <td><?= $rowOrderDetail['StoreName'] ?></td>
                                                            <td class="hidden-sm-down"><?= $rowOrderDetail['ProductName'] ?></td>
                                                            <td><?= $rowOrderDetail['Quantity'] ?></td>
                                                            <td class="hidden-sm-down"><?= $rowOrderDetail['Price'] ?></td>
                                                            <td><?= $rowOrderDetail['Total'] ?></td>
                                                        </tr>
                                                    <?php } ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12 pl-20">
                                            <h5>Lưu ý của người mua: </h5>
                                            <p><?= $row['Note'] ?></p>
                                        </div>

                                        <div class="col-md-6 text-right pl-20">
                                            <hr>
                                            <div class="shopping-cart__right">
                                                <div class="shopping-cart__total">
                                                    <p class="shopping-cart__subtotal">
                                                        <span>Tạm tính: </span><strong
                                                                class="price"
                                                                id="Subtotal"><?= $row['OrderTotal'] ?></strong>
                                                    </p>
                                                    <p class="shopping-cart__shipping">
                                                        Vận chuyển: <strong>FREE SHIPPING</strong></p>
                                                    <p class="shopping-cart__subtotal">
                                                        <span><b>Tổng Đơn hàng: </b></span><strong
                                                                class="price-total"><?= $row['OrderTotal'] ?></strong>
                                                    </p>
                                                </div>
                                                <a class="btn btn-default submit-auto-width font-xs hover-up mt-30"
                                                   href="index.php"><i
                                                            class="fi-rs-home mr-5"></i> Về trang chủ</a>
                                            </div>
                                        </div>

                                    </div>

                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="history" aria-expanded="false">
                            <div class="card" id="details">
                                <div class="body">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 p-20">
                                            <address>
                                                <strong><?= $row['City'] ?></strong><br>Địa chỉ:
                                                <?= $row['Address'] ?><br>Zip:
                                                <?= $row['Zip'] ?><br>
                                                <!--                                                <abbr title="Phone">Điện thoại: </abbr> --><? //= $row['Phone'] ?>
                                                <abbr>Điện thoại: </abbr> <?= $row['Phone'] ?>
                                            </address>
                                        </div>
                                        <div class="col-md-6 col-sm-6 text-right p-20">
                                            <p class="m-b-0"><strong>Ngày đặt: </strong> <?= $row['OrderDate'] ?></p>
                                            <p class="m-b-0"><strong>Trạng thái: </strong> <span
                                                        class="badge bg-orange">Đang chờ xác nhận</span></p>
                                            <p><strong>Mã đơn hàng: </strong> #<?= $row['OrderDate'] ?></p>
                                        </div>
                                    </div>
                                    <div class="mt-40"></div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Description</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Invoice Created</td>
                                                        <td><?= $row['OrderDate'] ?></td>
                                                        <td><span>Đang chờ xác nhận</span></td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <a class="btn btn-default submit-auto-width font-xs hover-up mt-30"
                                               href="index.php"><i
                                                        class="fi fi-rs-home mr-5 text-white"></i> Về trang chủ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<!--Footer -->
<div id="footer"></div>
<script src="Checkout.js"></script>
</body>
</html>
