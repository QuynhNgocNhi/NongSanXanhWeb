<?php
session_start();
require_once('config.php');
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
    <!--    <link rel="stylesheet" href="assets/css/mainf195.css?v=2.1"/>-->
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/global/2.jpg"/>
    <!-- homepage CSS -->
    <link rel="stylesheet" href="home.asset/home.css?v=2.1"/>
    <link rel="stylesheet" href="home.asset/css/nouislider.css">
    <link rel="stylesheet" href="home.asset/fonts/Linearicons/Font/demo-files/demo.css">
    <link rel="stylesheet" href="home.asset/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.asset/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="home.asset/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="home.asset/plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="home.asset/plugins/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="home.asset/plugins/slick/slick.css">
    <link rel="stylesheet" href="home.asset/plugins/lightGallery/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="home.asset/css/style.css"/>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
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

    <script>
        function CallActivePage() {
            document.getElementById("home-page").classList.add("active");
        }

        $(document).ready(function () {
            CallActivePage();
        });
    </script>
    <script src="Products.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<body>
<?php
require_once('header.php');
?>
<main class="main">
    <!--banner section -->
    <section class="home-slider position-relative mb-30">
        <div class="container">
            <div class="row">
                <!-- bảng danh mục -->
                <div class="col d-none d-xl-block">
                    <div class="categories-dropdown-wrap style-2 font-heading mt-30">
                        <div class="d-flex categori-dropdown-inner">
                            <ul><?php

                                include "config.php";

                                $sqlCategory = "select * from productcategory";
                                $resultCategory = mysqli_query($conn, $sqlCategory);

                                if (mysqli_num_rows($resultCategory) > 0) {
                                    $index = 0;
                                    while ($rowCategory = mysqli_fetch_row($resultCategory)) {

                                        echo "<li>
                                    <a target='_blank' href='Products.php?CategoryId=$rowCategory[0]'>
                                    <img
                                                src='data/Category_Img_Upload/$rowCategory[3]'>$rowCategory[1]</a>
                                </li>";
                                        $index++;


                                        if ($index == 9) {

                                            echo ' </ul>
                        </div>
                        <div class="more_slide_open" style="display: none">
                            <div class="d-flex categori-dropdown-inner">
                                <ul>';
                                        }


                                    }
                                }

                                ?>

                            </ul>

                        </div>
                    </div>
                    <div class="more_categories"><span class="icon"></span> <a class="heading-sm-1">Xem tất
                            cả...</a></div>
                </div>


            </div>
            <!-- main banner  -->
            <div class="col-lg-12 col-xl-7">
                <div class="home-slide-cover mt-30">
                    <!-- email sign up  -->
                    <div class="hero-slider-1 style-3 dot-style-1 dot-style-1-position-2 ">
                        <div class=" single-hero-slider single-animation-wrap"
                             style="background-image: url(assets/img/slider/slider-2.png">
                            <div class="slider-content">
                                <h5 class="display-2 mb-40">
                                    Nền tảng giao dịch<br/>
                                    nông sản
                                </h5>
                                <p class="mb-65">Đăng ký nhận thông báo<br/></p>
                                <form class="form-subcriber d-flex">
                                    <input type="email" placeholder="Địa chỉ email"/>
                                    <button class="btn" type="submit">Nhận</button>
                                </form>
                            </div>
                        </div>
                        <div class="single-hero-slider single-animation-wrap"
                             style="background-image: url(assets/img/slider/slider-8.png">
                            <div class="slider-content">
                                <h5 class="display-2 mb-40">
                                    Rút ngắn<br/>
                                    khoảng cách
                                </h5>
                                <p class="mb-65">Đăng ký nhận thông báo <br/></p>
                                <form class="form-subcriber d-flex">
                                    <input type="email" placeholder="Địa chỉ email"/>
                                    <button class="btn" type="submit">Nhận</button>
                                </form>
                            </div>
                        </div>
                        <div class="single-hero-slider single-animation-wrap"
                             style="background-image: url(assets/img/slider/home-business/banner-03.jpg">
                            <div class="slider-content">
                                <h5 class="display-2 mb-40">
                                    Giữa bạn<br/>
                                    với nông dân
                                </h5>
                                <p class="mb-65">Đăng ký nhận thông báo <br/></p>
                                <form class="form-subcriber d-flex">
                                    <input type="email" placeholder="Địa chỉ email"/>
                                    <button class="btn" type="submit">Nhận</button>
                                </form>
                            </div>
                        </div>


                    </div>
                    <div class="slider-arrow hero-slider-1-arrow"></div>

                </div>

            </div>
            <!-- 2 Small banner -->
            <div class="col-lg-12 col-xl-3 small-banner">
                <div class="row">
                    <!-- first mini banner -->
                    <div class="col-sm-6 col-lg-6 col-xl-12">
                        <div class="banner-img img1  mt-30">
                            <img src="assets/img/promotion/drink_tea_01.jpg" alt=""/>
                            <div class="banner-text">

                                <a href="Products.php" class="btn btn-xs btn1">Mua ngay <i
                                            class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- second mini banner -->
                    <div class="col-sm-6 col-lg-6 col-xl-12">
                        <div class="banner-img img2  mt-5 ">
                            <img src="assets/img/promotion/home-sidebar/promotion-01.jpg" alt=""/>
                            <div class="banner-text">

                                <a href="Products.php" class="btn btn-xs btn2">Mua ngay <i
                                            class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--end 2 Small banner -->
        </div>


    </section>
    <!-- end banner section -->
    <!-- Category section -->
    <div class="container">
        <section class="section-featured--default ps-home--block">
            <div class="container">
                <div class="ps-block__header">
                    <h3 class="ps-block__title pt-30">Danh Mục</h3><a class="ps-block__view"
                                                                      href="Products.php">Xem tất cả<i
                                class="icon-chevron-right"></i></a>
                </div>
                <div class="featured--content pb-20">
                    <div class="featured__first d-lg-block d-none">
                        <div class="ps-product--vertical"><a href="Products.php"><img
                                        class="ps-product__thumbnail"
                                        src="assets/img/products/01-Fresh/01_1a.jpg"
                                        alt="alt"/></a>
                            <div class="ps-product__content"><a class="ps-product__name"
                                                                href="Products.php">Trái cây</a>
                                <p class="ps-product__quantity">5 sản phẩm</p>
                            </div>
                        </div>
                    </div>
                    <div class="featured__group">
                        <div class="row m-0">
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="ps-product--vertical"><a href="Products.php"><img
                                                class="ps-product__thumbnail"
                                                src="assets/img/products/09-KitchenDining/09_10a.jpg" alt="alt"/></a>
                                    <div class="ps-product__content"><a class="ps-product__name"
                                                                        href="Products.php">Sợi thực vật & gỗ</a>
                                        <p class="ps-product__quantity">34 items</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="ps-product--vertical"><a href="Products.php"><img
                                                class="ps-product__thumbnail"
                                                src="assets/img/products/03-Bakery/03_6a.jpg"
                                                alt="alt"/></a>
                                    <div class="ps-product__content"><a class="ps-product__name"
                                                                        href="Products.php">Thực phẩm chế biến
                                            sẳn</a>
                                        <p class="ps-product__quantity">27 items</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="ps-product--vertical"><a href="Products.php"><img
                                                class="ps-product__thumbnail"
                                                src="assets/img/products/01-Fresh/01_48a.jpg"
                                                alt="alt"/></a>
                                    <div class="ps-product__content"><a class="ps-product__name"
                                                                        href="Products.php">Chiết xuất từ động
                                            vật</a>
                                        <p class="ps-product__quantity">13 items</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="ps-product--vertical"><a href="Products.php"><img
                                                class="ps-product__thumbnail"
                                                src="assets/img/products/01-Fresh/01_50a.jpg" alt="alt"/></a>
                                    <div class="ps-product__content"><a class="ps-product__name"
                                                                        href="Products.php">Sữa, mật và sản phẩm
                                            từ sữa, mật</a>
                                        <p class="ps-product__quantity">42 items</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="ps-product--vertical"><a href="Products.php"><img
                                                class="ps-product__thumbnail"
                                                src="assets/img/products/01-Fresh/01_21a.jpg" alt="alt"/></a>
                                    <div class="ps-product__content"><a class="ps-product__name"
                                                                        href="Products.php">Đồ uống</a>
                                        <p class="ps-product__quantity">54 items</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="ps-product--vertical"><a href="Products.php"><img
                                                class="ps-product__thumbnail"
                                                src="assets/img/products/01-Fresh/01_51a.jpg"
                                                alt="alt"/></a>
                                    <div class="ps-product__content"><a class="ps-product__name"
                                                                        href="Products.php">Đậu, ngũ cốc, các loại hạt
                                            và nhân</a>
                                        <p class="ps-product__quantity">48 items</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="ps-product--vertical"><a href="Products.php"><img
                                                class="ps-product__thumbnail"
                                                src="assets/img/products/01-Fresh/01_38a.jpg" alt="alt"/></a>
                                    <div class="ps-product__content"><a class="ps-product__name"
                                                                        href="Products.php">Thực phẩm đông lạnh</a>
                                        <p class="ps-product__quantity">44 items</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="ps-product--vertical"><a href="Products.php"><img
                                                class="ps-product__thumbnail"
                                                src="assets/img/products/01-Fresh/01_32a.jpg" alt="alt"/></a>
                                    <div class="ps-product__content"><a class="ps-product__name"
                                                                        href="Products.php">Nguyên liệu nấu nướng</a>
                                        <p class="ps-product__quantity">23 items</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- show product section -->
        <section class="section-categories--default">
            <div class="container">

                <div class="categories--block">
                    <h3><a class="categories__title" id="freshFoodBlock">Sản phẩm mới nhất</a></h3>
                    <div class="categories__content">
                        <div class="col-lg-3 categories__promotion">
                            <div class="slick-single-item">

                                <div class="categories-carousel pt-10"><a href="#"><img style="max-width: 260px;"
                                                                                        class="carousel__thumbnail"
                                                                                        src="assets/imgs/banner/banner-6.png"
                                                                                        alt="alt"/></a></div>

                            </div>
                            <!--                            <div class="row categories__list">-->
                            <!--                                <div class="col-6">-->
                            <!--                                    <div class="categories__list-item"><a href="#"><b>Best Seller</b></a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Meat & Poultry</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Fruit</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Vegetables</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Milk, Butter & Eggs</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Fish</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Frozen</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Cheese</a></div>-->
                            <!--                                </div>-->
                            <!--                                <div class="col-6">-->
                            <!--                                    <div class="categories__list-item"><a href="#">Desserts</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Pasta & Sauce</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Ham, Deli & Dips</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Pizza</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Soups</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Accompaniments</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Vegetarian Foods</a></div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <div class="categories__footer">
                                <a href="Products.php">
                                    <u>View all</u>
                                    <i class="icon-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                        <!--                            Danh sách sản phẩm mới nhất-->

                        <div class="categories__products">
                            <div class="row m-0">

                                <?php
                                $sql = "SELECT * FROM products ORDER BY Id DESC";
                                $result = mysqli_query($conn, $sql);
                                $resultArray = array();
                                $index2 = 0;
                                while ($Products = mysqli_fetch_array($result)) {
                                    $index2++;
                                    if ($index2 == 8)
                                        continue;
                                    $resultArray[] = $Products;

                                }
                                ?>
                                <?php
                                foreach ($resultArray

                                         as $item) {
                                    ?>

                                    <div class="col-6 col-md-4 col-lg-3 p-0">
                                        <div class="ps-product--standard"><a
                                                    href="<?= "Product_Details.php?ProductId=" . $item['Id'] ?>">
                                                <img
                                                        class="ps-product__thumbnail"
                                                        src="<?= "data/Product_Img_Upload/" . $item['Img']; ?>"
                                                        alt="alt"/></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i
                                                            class="fi fi-rs-home "></i>
                                                    <a href="Vendor_Detail.php?StoreId=<?= $item['StoreId']; ?>">
                                                        <?= $item['StoreName']; ?>
                                                    </a>
                                                </p>
                                                <h5><a class="ps-product__name"
                                                       href="<?= "Product_Details.php?ProductId=" . $item['Id'] ?>"><?= $item['Name']; ?></a>
                                                </h5>

                                                <div class="Price-Unit">
                                                    <p class="ps-product__unit"><?= $item['ProductUnitName']; ?></p>

                                                    <p class="ps-product-price-block">
                                                        <span class="ps-product__sale">$<?= $item['Price']; ?> đ</span>
                                                    </p>
                                                </div>

                                                <div class="ps-product__box">
                                                    <button class="ps-product__addcart"
                                                            onclick="AddToCart(<?= $item['Id'] ?>)"><i
                                                                class="fi-rs-shopping-cart pr-10"></i>Thêm
                                                    </button>
                                                    <button class="ps-product__wishlist"><i
                                                                class="fa fi-rs-heart"></i></button>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>

                <!--                todo:lấy sản phẩm theo danh mục-->
                <div class="categories--block">
                    <h3><a class="categories__title" id="foodCupboardBlock">Trái cây</a></h3>
                    <div class="categories__content">
                        <div class="categories__promotion">
                            <div class="slick-single-item">
                                <div class="categories-carousel p-10"><a href="#"><img style="max-width: 260px;"
                                                                                       class="carousel__thumbnail"
                                                                                       src="assets/imgs/banner/popup-1.png"
                                                                                       alt="alt"/></a></div>

                            </div>
                            <!--                            <div class="row categories__list">-->
                            <!--                                <div class="col-6">-->
                            <!--                                    <div class="categories__list-item"><a href="#">Crisps, Snacks & Nuts</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Breakfast</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Tins & Cans</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Chocolate & Sweets</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Biscuits</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Rice</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Pasta & Pulses</a></div>-->
                            <!--                                </div>-->
                            <!--                                <div class="col-6">-->
                            <!--                                    <div class="categories__list-item"><a href="#">Cooking Sauces</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Cooking Ingredients</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Honey & Spreads</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Savoury Snacks</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Crackers</a></div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <div class="categories__footer"><a href="Products.php">
                                    <u>View all</u><i class="icon-chevron-right"></i></a></div>
                        </div>
                        <div class="categories__products">
                            <div class="row m-0">

                                <?php
                                require_once('config.php');
                                $sql1 = "SELECT * FROM products WHERE ProductCategoryId = '1'";
                                $result1 = mysqli_query($conn, $sql1);
                                $resultArray1 = array();
                                while ($Products1 = mysqli_fetch_array($result1)) {
                                    $resultArray1[] = $Products1;
                                }
                                ?>
                                <?php
                                foreach ($resultArray1

                                         as $item) {
                                    ?>

                                    <div class="col-6 col-md-4 col-lg-3 p-0">
                                        <div class="ps-product--standard"><a
                                                    href="<?= "Product_Details.php?ProductId=" . $item['Id'] ?>">
                                                <img
                                                        class="ps-product__thumbnail"
                                                        src="<?= "data/Product_Img_Upload/" . $item['Img']; ?>"
                                                        alt="alt"/></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type d-lg-block d-none"><i
                                                            class="fi fi-rs-home "></i>
                                                    <a href="Vendor_Detail.php?StoreId=<?= $item['StoreId']; ?>">
                                                        <?= $item['StoreName']; ?>
                                                    </a>
                                                </p>
                                                <h5><a class="ps-product__name"
                                                       href="<?= "Product_Details.php?ProductId=" . $item['Id'] ?>"><?= $item['Name']; ?></a>
                                                </h5>

                                                <div class="Price-Unit">
                                                    <p class="ps-product__unit"><?= $item['ProductUnitName']; ?></p>

                                                    <p class="ps-product-price-block">
                                                        <span class="ps-product__sale">$<?= $item['Price']; ?> đ</span>
                                                    </p>
                                                </div>

                                                <div class="ps-product__box">
                                                    <button class="ps-product__addcart"
                                                            onclick="AddToCart(<?= $item['Id'] ?>)"><i
                                                                class="fi-rs-shopping-cart pr-10"></i>Thêm
                                                    </button>
                                                    <button class="ps-product__wishlist"><i
                                                                class="fa fi-rs-heart"></i></button>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="categories--block pb-20">
                    <h3><a class="categories__title" id="foodCupboardBlock">Đặc sản vùng miền</a></h3>
                    <div class="categories__content">
                        <div class="categories__promotion">
                            <div class="slick-single-item">
                                <div class="categories-carousel p-10"><a href="#"><img style="max-width: 260px;"
                                                                                       class="carousel__thumbnail"
                                                                                       src="assets/imgs/banner/banner-5.png"
                                                                                       alt="alt"/></a></div>

                            </div>
                            <!--                            <div class="row categories__list">-->
                            <!--                                <div class="col-6">-->
                            <!--                                    <div class="categories__list-item"><a href="#">Crisps, Snacks & Nuts</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Breakfast</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Tins & Cans</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Chocolate & Sweets</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Biscuits</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Rice</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Pasta & Pulses</a></div>-->
                            <!--                                </div>-->
                            <!--                                <div class="col-6">-->
                            <!--                                    <div class="categories__list-item"><a href="#">Cooking Sauces</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Cooking Ingredients</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Honey & Spreads</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Savoury Snacks</a></div>-->
                            <!--                                    <div class="categories__list-item"><a href="#">Crackers</a></div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <div class="categories__footer"><a href="Products.php">
                                    <u>View all</u><i class="icon-chevron-right"></i></a></div>
                        </div>
                        <div class="categories__products">
                            <div class="row m-0">

                                <?php
                                require_once('config.php');
                                $sql1 = "SELECT * FROM products WHERE ProductCategoryId = '2'";
                                $result1 = mysqli_query($conn, $sql1);
                                $resultArray1 = array();
                                while ($Products1 = mysqli_fetch_array($result1)) {
                                    $resultArray1[] = $Products1;
                                }
                                ?>
                                <?php
                                foreach ($resultArray1

                                         as $item) {
                                    ?>

                                    <div class="col-6 col-md-4 col-lg-3 p-0">
                                        <div class="ps-product--standard"><a
                                                    href="<?= "Product_Details.php?ProductId=" . $item['Id'] ?>">
                                                <img
                                                        class="ps-product__thumbnail"
                                                        src="<?= "data/Product_Img_Upload/" . $item['Img']; ?>"
                                                        alt="alt"/></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i
                                                            class="fi fi-rs-home "></i>
                                                    <a href="Vendor_Detail.php?StoreId=<?= $item['StoreId']; ?>">
                                                        <?= $item['StoreName']; ?>
                                                    </a>
                                                </p>
                                                <h5><a class="ps-product__name"
                                                       href="<?= "Product_Details.php?ProductId=" . $item['Id'] ?>"><?= $item['Name']; ?></a>
                                                </h5>

                                                <div class="Price-Unit">
                                                    <p class="ps-product__unit"><?= $item['ProductUnitName']; ?></p>

                                                    <p class="ps-product-price-block">
                                                        <span class="ps-product__sale">$<?= $item['Price']; ?> đ</span>
                                                    </p>
                                                </div>

                                                <div class="ps-product__box">
                                                    <button class="ps-product__addcart"
                                                            onclick="AddToCart(<?= $item['Id'] ?>)"><i
                                                                class="fi-rs-shopping-cart pr-10"></i>Thêm
                                                    </button>
                                                    <button class="ps-product__wishlist"><i
                                                                class="fa fi-rs-heart"></i></button>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                <?php } ?>

                            </div>
                        </div>
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
                         data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="8"
                         data-owl-item-xs="3"
                         data-owl-item-sm="3" data-owl-item-md="5" data-owl-item-lg="8" data-owl-item-xl="8"
                         data-owl-duration="1000" data-owl-mousedrag="on">
                        <?php
                        foreach ($RecentViewData

                                 as $keys => $values) {
                            ?>

                            <a class="recent-item" href="<?= "Product_Details.php?ProductId=" . $values['Id'] ?>"><img
                                        style="max-width: 134px"
                                        src="data/Product_Img_Upload/<?= $values['Image'] ?>"
                                        alt="alt"/></a>
                            <?php
                        }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container pt-30">
        <!--End Deals-->
        <!--End 4 columns-->
    </div>
    <!--Footer -->
    <?php
    require_once('footer.php');
    ?>
</main>
</body>
</html>