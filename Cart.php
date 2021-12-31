<?php
ob_start();
session_start();
?>
<?php
require_once('config.php');
//$sql = "SELECT * FROM products ORDER BY Id DESC";
//$result = mysqli_query($conn, $sql);
$message = "";


if (isset($_GET["remove"])) {
    $message = '
 <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  Sảm phẩm đã bị xóa khỏi giỏ hàng!
 </div>
 ';
}
if (isset($_GET["clearall"])) {
    $message = '
 <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  Giỏ hàng của bạn trống trơn...
 </div>
 ';
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
    <link rel="stylesheet" href="home.asset/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.asset/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="home.asset/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="home.asset/plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="home.asset/plugins/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="home.asset/plugins/slick/slick.css">
    <link rel="stylesheet" href="home.asset/plugins/lightGallery/dist/css/lightgallery.min.css">
    <!--    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>-->
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
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

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
                <a href="index.php" rel="nofollow"><i class="fi-rs-home mr-5"></i>Trang chủ</a>
                <span> Giỏ hàng</span>
            </div>
        </div>
    </div>
    <section class="section--shopping-cart">
        <div class="container shopping-container col-xl-10">
            <h4 class="pt-30"></h4><?php echo $message; ?>
            <div class="shopping-cart__content">
                <div class="row m-0">
                    <div class="col-12 col-lg-8">
                        <div class="shopping-cart__products">
                            <div class="shopping-cart__table">
                                <div class="shopping-cart-light">
                                    <div class="shopping-cart-row">
                                        <div class="col-5 cart-product">Sản phẩm</div>
                                        <div class="col-2 cart-price">Giá</div>
                                        <div class="col-2 cart-quantity">Số lượng</div>
                                        <div class="col-2 cart-total">Tổng cộng</div>
                                        <div class="col-1 cart-action">Xóa</div>
                                    </div>
                                </div>
                                <div class="shopping-cart-body">
                                    <?php

                                    if (!empty($_COOKIE['Cart'])) {
                                        $total = 0;
                                        $cookie_data = stripslashes($_COOKIE['Cart']);
                                        $CartData = json_decode($cookie_data, true);
                                        foreach ($CartData

                                                 as $keys => $values) {
                                            ?>
                                            <div class="shopping-cart-row">
                                                <div class="cart-product col-xl-5">
                                                    <div class="ps-product--mini-cart ">
                                                        <a href="<?= "Product_Details.php?ProductId=" . $values['Id'] ?>">
                                                            <img class="ps-product__thumbnail"
                                                                 src="data/Product_Img_Upload/<?= $values['Image'] ?>"
                                                                 alt="alt"/>
                                                        </a>
                                                        <div class="ps-product__content ">
                                                            <h5><a class="ps-product__name"
                                                                   href="<?= "Product_Details.php?ProductId=" . $values['Id'] ?>"> <?= $values['Name'] ?></a>
                                                            </h5>
                                                            <p class="ps-product__unit"><?= $values['Unit'] ?></p>
                                                            <p class="ps-product__soldby">Cửa hàng <a
                                                                        href="Vendor_Detail.php?StoreId=<?= $values['StoreId']; ?>"><span><?= $values['StoreName'] ?></span></a>
                                                            </p>
                                                            <p class="ps-product__meta">Giá: <span
                                                                        class="ps-product__price"><?= $values['Price'] ?></span>
                                                            </p>
                                                            <div class="def-number-input number-input safari_only">

                                                                <button class="minus"
                                                                        onclick="MinusToCart('<?= $values['Id'] ?>', this.parentNode.querySelector('input[type=number]').value);
                                                                                this.parentNode.querySelector('input[type=number]').stepDown(); TotalCaculate('<?= $values['Id'] ?>','PhoneTotalPerProduct','<?= $values['Price'] ?>', this.parentNode.querySelector('input[type=number]').value);">
                                                                    <i class="icon-minus"></i></button>

                                                                <input class="quantity" min="0" name="quantity"
                                                                       value="<?= $values['Quantity'] ?>"
                                                                       type="number"/>
                                                                <button class="plus"
                                                                        onclick="AddToCart(<?= $values['Id'] ?>); this.parentNode.querySelector('input[type=number]').stepUp(); TotalCaculate('<?= $values['Id'] ?>','PhoneTotalPerProduct','<?= $values['Price'] ?>', this.parentNode.querySelector('input[type=number]').value);">
                                                                    <i class="icon-plus"></i></button>
                                                            </div>
                                                            <div class="mt-10 ml-5">
                                                                <span class="ps-product__total heading-sm-1" id="PhoneTotalPerProduct<?= $values['Id'] ?>"><?php echo $values["Quantity"] * $values['Price']; ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 ps-product__remove"><i
                                                                    class="icon-trash2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2 cart-price text-center"><span
                                                            class="ps-product__price"><?= $values['Price'] ?></span>
                                                </div>
                                                <div class="col-2 cart-quantity">
                                                    <div class="def-number-input number-input safari_only">

                                                        <button class="minus"
                                                                onclick="MinusToCart('<?= $values['Id'] ?>', this.parentNode.querySelector('input[type=number]').value);
                                                                        this.parentNode.querySelector('input[type=number]').stepDown(); TotalCaculate('<?= $values['Id'] ?>','LaptopTotalPerProduct','<?= $values['Price'] ?>', this.parentNode.querySelector('input[type=number]').value);">
                                                            <i class="icon-minus"></i></button>

                                                        <input  class="quantity" min="0" name="quantity"
                                                               value="<?= $values['Quantity'] ?>"
                                                               type="number"/>
                                                        <button class="plus"
                                                                onclick="AddToCart(<?= $values['Id'] ?>); this.parentNode.querySelector('input[type=number]').stepUp(); TotalCaculate('<?= $values['Id'] ?>','LaptopTotalPerProduct','<?= $values['Price'] ?>', this.parentNode.querySelector('input[type=number]').value);">
                                                            <i class="icon-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="col-2 cart-total text-center"><span
                                                            class="ps-product__total" id="LaptopTotalPerProduct<?= $values['Id'] ?>"><?php echo $values['Total']; $total = $total+ $values['Total']; ?></span>

                                                </div>
                                                <div class="col-1 cart-action"><a
                                                            href="Cart.php?action=delete&Id=<?php echo $values["Id"]; ?>"><i
                                                                class="icon-trash2"></i></a></div>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="shopping-cart__step">
                                <a class="button right" href="Cart.php?action=clear"><i
                                            class="icon-sync"> </i>Xóa tất cả</a>
                                <a class="button left" href="Products.php"><i
                                            class="icon-arrow-left"></i>Tiếp tục chọn lựa</a></div>
<!--                            <div class="row">-->
<!--                                <div class="col-12 col-lg-6">-->
<!--                                    <div class="shopping-cart__block">-->
<!--                                        <h3 class="block__title">Using A Promo Code?</h3>-->
<!--                                        <div class="input-group">-->
<!--                                            <input class="form-control" type="text" placeholder="Coupon code">-->
<!--                                            <div class="input-group-append">-->
<!--                                                <button class="btn">Apply</button>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-12 col-lg-6">-->
<!--                                    <div class="shopping-cart__block">-->
<!--                                        <h3 class="block__title">Calculate Shipping</h3>-->
<!--                                        <div class="input-group">-->
<!--                                            <select class="single-select2" name="state">-->
<!--                                                <option value="uk">United Kingdom</option>-->
<!--                                                <option value="vn">Viet Nam</option>-->
<!--                                            </select>-->
<!--                                        </div>-->
<!--                                        <div class="input-group">-->
<!--                                            <input class="form-control" type="text" placeholder="Town/ City">-->
<!--                                        </div>-->
<!--                                        <div class="input-group">-->
<!--                                            <input class="form-control" type="text" placeholder="Postcode/ ZIP">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="shopping-cart__right">
                            <div class="shopping-cart__total">
                                <p class="shopping-cart__subtotal"><span>Tổng Đơn hàng:</span><span
                                            class="price" id="Subtotal"><?php if(!empty($_COOKIE['Cart'])) echo $total; ?></span></p>
                                    <p class="shopping-cart__shipping">Vận chuyển<br><span>Miễn phí vận chuyển</span><br>Estimate
                                    for <b>Viet Nam</b></p>
                                <p class="shopping-cart__subtotal"><span><b>Thành tiền</b></span><span id="TotalLast" class="price-total"><?php if(!empty($_COOKIE['Cart'])) echo $total; ?></span>
                                </p>
                            </div>
                            <a class="btn shopping-cart__checkout" href="Checkout.php">Đặt</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!--Footer -->
<div id="footer"></div>
<script src="Products.js"></script>
<?php

if (isset($_GET["action"])) {

    if ($_GET["action"] == "delete") {
        $cookie_data = stripslashes($_COOKIE['Cart']);
        $CartData = json_decode($cookie_data, true);
        foreach ($CartData as $keys => $values) {
            if ($CartData[$keys]['Id'] == $_GET["Id"]) {
                unset($CartData[$keys]);
                $CartDataFull = json_encode($CartData, JSON_UNESCAPED_UNICODE);
                setcookie("Cart", $CartDataFull, time() + 86400, "/");
                header("location:Cart.php?remove=1");
            }
        }
    }
    if ($_GET["action"] == "clear") {
        setcookie("Cart", "", time() +0,"/");
        header("location:Cart.php?clearall=1");
    }
}
//Update Product quantity


?>
</body>
</html>
