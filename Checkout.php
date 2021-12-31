<?php
ob_start();
session_start();
if (!isset($_SESSION['Id'])) {
    header("location: login.php");
}
?>
<?php
require_once('config.php');
$sql = "SELECT * FROM products ORDER BY Id DESC";
$result = mysqli_query($conn, $sql);
$message = "";
if (empty($_COOKIE['Cart'])) {
    header("location: Cart.php?clearall=1");
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                <a href="Cart.php"><i class=""></i><span>Giỏ hàng</span></a>
                <span>Thanh toán</span>
            </div>
        </div>
    </div>
    <section class="section--checkout mb-20">
        <div class="container col-xl-10">
            <h4 class="pt-30"></h4><?php echo $message; ?>
            <div class="checkout__content">
                <div class="checkout__header">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <div class="checkout__header__box">
                                <p><i class="icon-user"></i>Đổi tài khoản? <a href="login.php">Đăng xuất</a></p>
                                <i class="icon-chevron-down"></i>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <div class="checkout__header__box">
                                <p><i class="icon-tags"></i>Có mã giảm giá? <a href="Cart.php">Thêm mã giảm giá
                                    </a></p><i class="icon-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="Checkout.php" method="post">
                    <div class="row">

                        <div class="col-12 col-lg-7 ">
                            <h3 class="checkout__title">Chi tiết đơn hàng</h3>
                            <div class="checkout__form">

                                <div class="form-row">
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>Họ: <span>*</span></label>
                                        <input class="form-control" type="text" name="firstname" id="FirstName"
                                               required>
                                    </div>
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>Tên<span>*</span></label>
                                        <input class="form-control is-invalid" type="text" name="lastname" id="LastName"
                                               required>
                                        <div class="invalid-feedback">Vui lòng điền tên họ của người nhận!</div>
                                    </div>
                                    <!--                                    <div class="col-12 form-group--block">-->
                                    <!--                                        <label>Tên công ty(Nếu có)</label>-->
                                    <!--                                        <input class="form-control" type="text" id=""> -->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="col-12 form-group--block">-->
                                    <!--                                        <label>Country: <span>*</span></label>-->
                                    <!--                                        <select class="single-select2" name="state">-->
                                    <!--                                            <option value="vn">Viet Nam</option>-->
                                    <!--                                        </select>-->
                                    <!--                                    </div>-->
                                    <hr>
                                    <div class="col-12 form-group--block">
                                        <label>Địa chỉ cụ thể: <span>*</span></label>
                                        <input class="form-control" type="text" name="address" id="Address"
                                               placeholder="Số nhà, số đường, ấp, phường, xã,...">
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Mã bưu điện/ ZIP</label>
                                        <input class="form-control" name="zip" type="text" id="Zip">
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Tỉnh/ Thành phố: <span>*</span></label>
                                        <input class="form-control" type="text" name="city" id="City" required>
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Số điện thoại người nhận: <span>*</span></label>
                                        <input class="form-control" type="text" name="telephone" id="Phone" required>
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Địa chỉ email người nhận: <span>*</span></label>
                                        <input class="form-control" type="email" name="email" id="Email" required>
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Lưu ý của người mua</label>
                                        <textarea class="form-control"
                                                  placeholder="Lưu ý về hàng hóa cho người bán."
                                                  id="Note"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <h3 class="checkout__title">Đơn mua hàng</h3>
                            <div class="checkout__products">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="checkout__label">Sản phẩm</div>
                                    </div>
                                    <div class="col-3 text-end">
                                        <div class="checkout__label">Tổng cộng</div>
                                    </div>
                                </div>
                                <?php
                                $total = 0;
                                $cookie_data = stripslashes($_COOKIE['Cart']);
                                $CartData = json_decode($cookie_data, true);
                                foreach ($CartData

                                as $keys => $values) {
                                ?>

                                <div class="checkout__list">
                                    <div class="checkout__product__item ">
                                        <div class="checkout-product col-7">
                                            <div id="Name" hidden><?= $values['Name'] ?></div>
                                            <div class="product__name"><?= $values['Name'] ?>
                                                <span>(x<?= $values['Quantity'] ?>)</span></div>
                                            <div class="product__unit"><?= $values['Price'] ?>
                                                /<?= $values['Unit'] ?></div>
                                        </div>
                                        <div class="checkout-price"><?= $values['Total'] ?> đ</div>
                                    </div>
                                    <?php $total = $total + $values['Total'];
                                    } ?>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="checkout__label">Tạm tính:</div>
                                    </div>
                                    <div class="col-4 text-right">
                                        <div class="checkout__label"><?php
                                            echo $total; ?> đ
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="checkout__label">Phí vận chuyển:</div>
                                <p>Free shipping</p>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="checkout__total">Thành tiền:</div>
                                    </div>
                                    <div class="col-4 text-right">
                                        <div class="checkout__money" id="OrderTotal"><?php echo $total; ?> đ</div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__payment">
                                <div class="checkout__label mb-3">Phương thức thanh toán:</div>
                                <div class="chek-form">
                                    <div class="form-group--block disabled custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="COD" id="checkboxBank"
                                               value="bank">
                                        <label class="form-check-label"><b class="text-heading">Chuyển
                                                khoản</b></label>
                                    </div>
                                    <div class="form-group--block custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="COD" value="cash"
                                               id="checkboxCash"
                                               checked="checked">
                                        <label class="form-check-label" for="checkboxCash"><b class="text-heading">Thanh
                                                toán sau(COD)</b></label>
                                    </div>
                                    <div class="checkout__payment__detail">Thanh toán khi nhận hàng
                                        <div class="triangle-box">
                                            <div class="triangle"></div>
                                        </div>
                                    </div>
                                    <div class="form-group--block disabled custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="COD" id="checkboxPaypal"
                                               value="paypal">
                                        <label class="form-check-label"><b
                                                    class="text-heading">PayPal </b><img
                                                    src="assets/img/global/payment-method.png"
                                            ></label>
                                    </div>
                                </div>
                                <p>Your personal data will be used to process your order, support your experience
                                    throughout
                                    this website, and for other purposes described in our <span class="text-success">privacy policy.</span>
                                </p>
                                <div class="form-group--block custome-checkbox">
                                    <input class="form-check-input" type="checkbox" id="checkboxAgree" value="agree"
                                           required>
                                    <label class="form-check-label" for="checkboxAgree"><b class="text-heading">I have
                                            read
                                            and
                                            agree to the website
                                            <a class="text-success">terms and conditions </a><span>*</span></b></label>
                                </div>
                                <button type="submit" name="Confirm" id="Checkout" class="checkout__order"
                                        href="Invoice.php">Thanh toán
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
    </section>
</main>
<!--Footer -->
<div id="footer"></div>
<script src="Checkout.js"></script>
</body>
</html>
