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
  Sảm phẩm đã bị xóa khỏi yêu thích!
 </div>
 ';
}
if (isset($_GET["clearall"])) {
    $message = '
 <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  Bạn chưa lưu sản phẩm nào vào yêu thích...
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
    <title>Yêu thích</title>
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
                <span> Yêu thích</span>
            </div>
        </div>
    </div>
    <section class="section--wishlist section--shopping-cart">
        <div class="container shopping-container col-xl-10">
            <h4 class="pt-30"></h4><?php echo $message; ?>
            <div class="wishlist__content">
                <div class="wishlist__product">
                    <div class="wishlist__product--mobile">
                        <div class="row m-0">
                            <div class="col-6 col-md-4 p-0">
                                <div class="ps-product--standard"><a class="ps-product__trash"
                                                                     href="javascript:void(0);"><i
                                                class="icon-trash2"></i></a><a href="Products.php"><img
                                                class="ps-product__thumbnail" src="img/products/01-Fresh/01_18a.jpg"
                                                alt="alt"/></a>
                                    <div class="ps-product__content">
                                        <p class="ps-product__instock">In stock</p><a href="Products.php">
                                            <h5 class="ps-product__name">Extreme Budweiser Light Can</h5>
                                        </a>
                                        <p class="ps-product__unit">500g</p>
                                        <p class="ps-product__meta"><span class="ps-product__price">$3.90</span></p>
                                    </div>
                                    <div class="ps-product__footer">
                                        <button class="ps-product__addcart">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 p-0">
                                <div class="ps-product--standard"><a class="ps-product__trash"
                                                                     href="javascript:void(0);"><i
                                                class="icon-trash2"></i></a><a href="Products.php"><img
                                                class="ps-product__thumbnail" src="img/products/01-Fresh/01_31a.jpg"
                                                alt="alt"/></a>
                                    <div class="ps-product__content">
                                        <p class="ps-product__instock">In stock</p><a href="Products.php">
                                            <h5 class="ps-product__name">Honest Organic Still Lemonade</h5>
                                        </a>
                                        <p class="ps-product__unit">100g</p>
                                        <p class="ps-product__meta"><span
                                                    class="ps-product__price-sale">$5.99</span><span
                                                    class="ps-product__is-sale">$8.99</span></p>
                                    </div>
                                    <div class="ps-product__footer">
                                        <button class="ps-product__addcart">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 p-0">
                                <div class="ps-product--standard"><a class="ps-product__trash"
                                                                     href="javascript:void(0);"><i
                                                class="icon-trash2"></i></a><a href="Products.php"><img
                                                class="ps-product__thumbnail" src="img/products/01-Fresh/01_16a.jpg"
                                                alt="alt"/></a>
                                    <div class="ps-product__content">
                                        <p class="ps-product__instock">In stock</p><a href="Products.php">
                                            <h5 class="ps-product__name">Matures Own 100% Wheat</h5>
                                        </a>
                                        <p class="ps-product__unit">1.5L</p>
                                        <p class="ps-product__meta"><span class="ps-product__price">$12.90</span></p>
                                    </div>
                                    <div class="ps-product__footer">
                                        <button class="ps-product__addcart">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 p-0">
                                <div class="ps-product--standard"><a class="ps-product__trash"
                                                                     href="javascript:void(0);"><i
                                                class="icon-trash2"></i></a><a href="Products.php"><img
                                                class="ps-product__thumbnail" src="img/products/01-Fresh/01_1a.jpg"
                                                alt="alt"/></a>
                                    <div class="ps-product__content">
                                        <p class="ps-product__ofstock">Out of stock</p><a href="Products.php">
                                            <h5 class="ps-product__name">Corn, Yellow Sweet</h5>
                                        </a>
                                        <p class="ps-product__unit">500g</p>
                                        <p class="ps-product__meta"><span class="ps-product__price">$3.90</span></p>
                                    </div>
                                    <div class="ps-product__footer">
                                        <button class="wishlist__readmore">Read more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wishlist__product--desktop">
                        <table class="table">
                            <thead class="wishlist__thead">
                            <tr>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Cửa hàng</th>
                                <th scope="col">Giá</th>
                                <th scope="col"></th>
                                <th scope="col"></th>

                            </tr>
                            </thead>
                            <tbody class="wishlist__tbody">
                            <?php

                            if (!empty($_COOKIE['WishList'])) {
                                $total = 0;
                                $cookie_data = stripslashes($_COOKIE['WishList']);
                                $WishListData = json_decode($cookie_data, true);
                                foreach ($WishListData

                                         as $keys => $values) {
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="ps-product--vertical" style="padding: unset"><a
                                                        href="<?= "Product_Details.php?ProductId=" . $values['Id'] ?>"><img
                                                            style="width: 60px; height: 60px"
                                                            class="ps-product__thumbnail"
                                                            src="data/Product_Img_Upload/<?= $values['Image'] ?>"
                                                            alt="alt"/></a>
                                                <div class="ps-product__content">
                                                    <h5><a class="ps-product__name"
                                                           href="<?= "Product_Details.php?ProductId=" . $values['Id'] ?>"> <?= $values['Name'] ?></a>
                                                    </h5>
                                                    <p class="ps-product__unit"><?= $values['Unit'] ?></p>
                                                </div>

                                            </div>
                                        </td>
                                        <td><a href="Vendor_Detail.php?StoreId=<?= $values['StoreId']; ?>"><span
                                                        class="ps-product__price"><?= $values['StoreName'] ?></span></a>
                                        </td>
                                        <td><span class="ps-product__price"><?= $values['Price'] ?></span>
                                        </td>
                                        <td>
                                            <button class="btn wishlist__btn add-cart"
                                                    onclick="AddToCart(<?= $values['Id'] ?>)"><i
                                                        class="fi-rs-shopping-cart pr-10"></i>Thêm
                                            </button>
                                        </td>
                                        <td style="width: 5px">

                                            <div class="wishlist__trash"><a
                                                        href="WishList.php?action=delete&Id=<?php echo $values["Id"]; ?>"><i
                                                            class="icon-trash2"></i></a></div>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            <!--                            <tr>-->
                            <!--                                <td>-->
                            <!--                                    <div class="wishlist__trash"><i class="icon-trash2"></i></div>-->
                            <!--                                </td>-->
                            <!--                                <td>-->
                            <!--                                    <div class="ps-product--vertical"><a href="Products.php"><img-->
                            <!--                                                    class="ps-product__thumbnail" src="img/products/01-Fresh/01_1a.jpg"-->
                            <!--                                                    alt="alt"/></a>-->
                            <!--                                        <div class="ps-product__content">-->
                            <!--                                            <h5><a class="ps-product__name" href="Products.php">Corn, Yellow Sweet</a>-->
                            <!--                                            </h5>-->
                            <!--                                            <p class="ps-product__unit">500g</p>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                </td>-->
                            <!--                                <td><span class="ps-product__price">$3.90</span>-->
                            <!--                                </td>-->
                            <!--                                <td><span class="ps-product__ofstock">Out of stock</span>-->
                            <!--                                </td>-->
                            <!--                                <td>-->
                            <!--                                    <button class="btn wishlist__btn readmore">Read more</button>-->
                            <!--                                </td>-->
                            <!--                            </tr>-->
                            </tbody>
                        </table>
                    </div>
                    <div class="shopping-cart__step">
                        <a class="button right" href="WishList.php?action=clear"><i
                                    class="icon-sync"> </i>Xóa tất cả</a>
                        <a class="button left" href="Products.php"><i
                                    class="icon-arrow-left"></i>Tiếp tục chọn lựa</a>
                    </div>
                </div>
                <div class="wishlist__share">
                    <p>Share on: <a class="icon_social facebook" href="#"><i class="fa fa-facebook-f"></i></a><a
                                class="icon_social twitter" href="#"><i class="fa fa-twitter"></i></a><a
                                class="icon_social google" href="#"><i class="fa fa-google-plus"></i></a><a
                                class="icon_social pinterest" href="#"><i class="fa fa-pinterest-p"></i></a><a
                                class="icon_social wifi" href="#"><i class="fa fa-wifi"></i></a></p>
                </div>
            </div>
        </div>

    </section>
    <?php

    if (!empty($_COOKIE['RecentView'])) {
    $cookie_data = stripslashes($_COOKIE['RecentView']);
    $RecentViewData = json_decode($cookie_data, true);

    ?>
    <section class="section-recent--default ps-home--block">
        <div class="container">
            <div class="ps-block__header">
                <h3 class="ps-block__title">Sản phẩm đã xem</h3>
            </div>
            <div class="recent__content">
                <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000"
                     data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="8" data-owl-item-xs="3"
                     data-owl-item-sm="3" data-owl-item-md="5" data-owl-item-lg="8" data-owl-item-xl="8"
                     data-owl-duration="1000" data-owl-mousedrag="on">
                    <?php
                    foreach ($RecentViewData

                    as $keys => $values) {
                    ?>

                    <a class="recent-item" href="<?= "Product_Details.php?ProductId=" . $values['Id'] ?>"><img style="max-width: 134px"
                                                                    src="data/Product_Img_Upload/<?= $values['Image'] ?>"
                                                                    alt="alt"/></a>
                    <?php
                    }}
                    ?>
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
        $cookie_data = stripslashes($_COOKIE['WishList']);
        $WishListData = json_decode($cookie_data, true);
        foreach ($WishListData as $keys => $values) {
            if ($WishListData[$keys]['Id'] == $_GET["Id"]) {
                unset($WishListData[$keys]);
                $WishListDataFull = json_encode($WishListData, JSON_UNESCAPED_UNICODE);
                setcookie("WishList", $WishListDataFull, time() + 86400, "/");
                header("location:WishList.php?remove=1");
            }
        }
    }
    if ($_GET["action"] == "clear") {
        setcookie("WishList", "", time() + 0, "/");
        header("location:WishList.php?clearall=1");
    }
}
//Update Product quantity


?>
</body>
</html>
