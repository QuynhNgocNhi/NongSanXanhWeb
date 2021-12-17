<?php
session_start();
?>
<?php

require_once('config.php');
$sql = "SELECT * FROM products ORDER BY Id DESC";
$result = mysqli_query($conn, $sql);

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
    <link rel="stylesheet" href="home.asset/css/demo.css">
    <link rel="stylesheet" href="home.asset/css/nouislider.css">
    <!--    <link rel="stylesheet" href="home.asset/plugins/bootstrap/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="home.asset/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="home.asset/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="home.asset/plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="home.asset/plugins/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="home.asset/plugins/slick/slick.css">
    <link rel="stylesheet" href="home.asset/plugins/lightGallery/dist/css/lightgallery.min.css">
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
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
        function CallActivePage() {
            document.getElementById("products-page").classList.add("active");
        }

        $(document).ready(function () {
            document.getElementById('header').innerHTML = loadPage('header.php');
            CallActivePage();
            document.getElementById('footer').innerHTML = loadPage('footer.php');
        });


    </script>
<body>

<!--header-->
<div id="header"></div>
<!--end header-->
<main class="main">
    <!--banner section -->
    <section class="home-slider position-relative mb-30">
        <div class="container">
            <div class="row">
                <!-- bảng danh mục -->
                <div class="col d-none d-xl-block">
                    <div class="categories-dropdown-wrap style-2 font-heading mt-30">
                        <div class="d-flex categori-dropdown-inner">
                            <ul>
                                <li>
                                    <a target="_blank" href="products.html"> <img
                                                src="assets/img/category-icons/vergetablePNG/48 x 48/01 Carrot.png"
                                                alt=""/>Trái cây</a>
                                </li>
                                <li>
                                    <a target="_blank" href="products.html"> <img
                                                src="assets/img/category-icons/vergetablePNG/48 x 48/02 Corn.png"
                                                alt=""/>Đặc sản vùng miền</a>
                                </li>
                                <li>
                                    <a target="_blank" href="products.html"> <img
                                                src="assets/img/category-icons/vergetablePNG/48 x 48/03 Broccoli.png"
                                                alt=""/>Rau, củ, quả và nấm</a>
                                </li>
                                <li>
                                    <a target="_blank" href="products.html"> <img
                                                src="assets/img/category-icons/vergetablePNG/48 x 48/04 Eggplant.png"
                                                alt=""/>Đậu, ngũ cốc, các loại hạt và nhân</a>
                                </li>
                                <li>
                                    <a target="_blank" href="products.html"> <img
                                                src="assets/img/category-icons/vergetablePNG/48 x 48/05 Tomato.png"
                                                alt=""/>Đồ uống</a>
                                </li>
                                <li>
                                    <a target="_blank" href="products.html"> <img
                                                src="assets/img/category-icons/vergetablePNG/48 x 48/06 Artichoke.png"
                                                alt=""/>Dược liệu</a>
                                </li>
                                <li>
                                    <a target="_blank" href="products.html"> <img
                                                src="assets/img/category-icons/vergetablePNG/48 x 48/07 Chili.png"
                                                alt=""/>Thực phẩm chế biến sẵn</a>
                                </li>
                                <li>
                                    <a target="_blank" href="products.html"> <img
                                                src="assets/img/category-icons/vergetablePNG/48 x 48/08 Garlic.png"
                                                alt=""/>Sữa, Mật - Sản phẩm từ Sữa, mật</a>
                                </li>
                                <li class="d-xl-none d-xxl-block">
                                    <a target="_blank" href="products.html"> <img
                                                src="assets/img/category-icons/vergetablePNG/48 x 48/09 Leek.png"
                                                alt=""/>Gia vị thực phẩm</a>
                                </li>
                                <li class="d-xl-none d-xxl-block">
                                    <a target="_blank" href="products.html"> <img
                                                src="assets/img/category-icons/vergetablePNG/48 x 48/10 Mushroom.png"
                                                alt=""/>Thủy - Hải sản</a>
                                </li>


                            </ul>

                        </div>
                        <div class="more_slide_open" style="display: none">
                            <div class="d-flex categori-dropdown-inner">
                                <ul>
                                    <li>
                                        <a target="_blank" href="products.html"> <img
                                                    src="assets/img/category-icons/vergetablePNG/48 x 48//11 Cucumber.png"
                                                    alt=""/>Gia súc & Sản phẩm Động vật</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="products.html"> <img
                                                    src="assets/img/category-icons/vergetablePNG/48 x 48/12 Cabbage.png"
                                                    alt=""/>Chiết xuất thực vật & dầu</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="products.html"> <img
                                                    src="assets/img/category-icons/vergetablePNG/48 x 48/13 Paprika.png"
                                                    alt=""/>Sợi thực vật & gỗ</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="products.html"> <img
                                                    src="assets/img/category-icons/vergetablePNG/48 x 48/14 Pumpkin.png"
                                                    alt=""/>Cây giống - Con giống</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="products.html"> <img
                                                    src="assets/img/category-icons/vergetablePNG/48 x 48/15 Turnip.png"
                                                    alt=""/>Vật tư nông nghiệpt</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="products.html"> <img
                                                    src="assets/img/category-icons/vergetablePNG/48 x 48/16 Spinach.png"
                                                    alt=""/>Sản phẩm - dịch vụ khác</a>
                                    </li>
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

                                    <a href="products.html" class="btn btn-xs btn1">Mua ngay <i
                                                class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- second mini banner -->
                        <div class="col-sm-6 col-lg-6 col-xl-12">
                            <div class="banner-img img2  mt-5 ">
                                <img src="assets/img/promotion/home-sidebar/promotion-01.jpg" alt=""/>
                                <div class="banner-text">

                                    <a href="products.html" class="btn btn-xs btn2">Mua ngay <i
                                                class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--end 2 Small banner -->
            </div>


        </div>
    </section>
    <!-- end banner section -->
    <!-- Category section -->
    <div class="container">
        <section class="section-featured--default ps-home--block">
            <div class="container">
                <div class="ps-block__header">
                    <h3 class="ps-block__title pt-30">Danh Mục</h3><a class="ps-block__view"
                                                                      href="shop-categories.html">Xem tất cả<i
                                class="icon-chevron-right"></i></a>
                </div>
                <div class="featured--content pb-20">
                    <div class="featured__first">
                        <div class="ps-product--vertical"><a href="product-default.html"><img
                                        class="ps-product__thumbnail"
                                        src="assets/img/category-icons/vergetablePNG/48 x 48/01 Carrot.png"
                                        alt="alt"/></a>
                            <div class="ps-product__content"><a class="ps-product__name"
                                                                href="product-default.html">Fresh</a>
                                <p class="ps-product__quantity">135 items</p>
                            </div>
                        </div>
                    </div>
                    <div class="featured__group">
                        <div class="row m-0">
                            <div class="col-3 p-0">
                                <div class="ps-product--vertical"><a href="product-default.html"><img
                                                class="ps-product__thumbnail"
                                                src="img/products/02-FoodCupboard/02_19a.jpg" alt="alt"/></a>
                                    <div class="ps-product__content"><a class="ps-product__name"
                                                                        href="product-default.html">Food Cupboard</a>
                                        <p class="ps-product__quantity">34 items</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-0">
                                <div class="ps-product--vertical"><a href="product-default.html"><img
                                                class="ps-product__thumbnail" src="img/products/03-Bakery/03_6a.jpg"
                                                alt="alt"/></a>
                                    <div class="ps-product__content"><a class="ps-product__name"
                                                                        href="product-default.html">Barkery</a>
                                        <p class="ps-product__quantity">27 items</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-0">
                                <div class="ps-product--vertical"><a href="product-default.html"><img
                                                class="ps-product__thumbnail" src="img/products/05-ReadyMeals/05_2a.jpg"
                                                alt="alt"/></a>
                                    <div class="ps-product__content"><a class="ps-product__name"
                                                                        href="product-default.html">Ready Meals</a>
                                        <p class="ps-product__quantity">13 items</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-0">
                                <div class="ps-product--vertical"><a href="product-default.html"><img
                                                class="ps-product__thumbnail"
                                                src="img/products/06-SoftDrinks-TeaCoffee/06_9a.jpg" alt="alt"/></a>
                                    <div class="ps-product__content"><a class="ps-product__name"
                                                                        href="product-default.html">Drinks, Tea &
                                            Coffee</a>
                                        <p class="ps-product__quantity">42 items</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-0">
                                <div class="ps-product--vertical"><a href="product-default.html"><img
                                                class="ps-product__thumbnail"
                                                src="img/products/07-Beer-WineSpirits/07_1a.jpg" alt="alt"/></a>
                                    <div class="ps-product__content"><a class="ps-product__name"
                                                                        href="product-default.html">Beer, Wine &
                                            Spirits</a>
                                        <p class="ps-product__quantity">54 items</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-0">
                                <div class="ps-product--vertical"><a href="product-default.html"><img
                                                class="ps-product__thumbnail" src="img/products/08-BabyChild/08_5a.jpg"
                                                alt="alt"/></a>
                                    <div class="ps-product__content"><a class="ps-product__name"
                                                                        href="product-default.html">Baby & Child</a>
                                        <p class="ps-product__quantity">48 items</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-0">
                                <div class="ps-product--vertical"><a href="product-default.html"><img
                                                class="ps-product__thumbnail"
                                                src="img/products/04-FrozenFoods/04_2a.jpg" alt="alt"/></a>
                                    <div class="ps-product__content"><a class="ps-product__name"
                                                                        href="product-default.html">Frozen Foods</a>
                                        <p class="ps-product__quantity">44 items</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-0">
                                <div class="ps-product--vertical"><a href="product-default.html"><img
                                                class="ps-product__thumbnail"
                                                src="img/products/09-KitchenDining/09_11a.jpg" alt="alt"/></a>
                                    <div class="ps-product__content"><a class="ps-product__name"
                                                                        href="product-default.html">Kitchen & Dining</a>
                                        <p class="ps-product__quantity">23 items</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="featured--content-mobile">
                    <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000"
                         data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="1"
                         data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1"
                         data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="product-slide"><a class="ps-product--vertical item-first"
                                                      href="product-default.html"><img class="ps-product__thumbnail"
                                                                                       src="img/products/01-Fresh/01_16a.jpg"
                                                                                       alt="alt"/>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Fresh</h5>
                                    <p class="ps-product__quantity">135 items</p>
                                </div>
                            </a><a class="ps-product--vertical" href="product-default.html"><img
                                        class="ps-product__thumbnail" src="img/products/02-FoodCupboard/02_19a.jpg"
                                        alt="alt"/>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Food Cupboard</h5>
                                    <p class="ps-product__quantity">34 items</p>
                                </div>
                            </a><a class="ps-product--vertical" href="product-default.html"><img
                                        class="ps-product__thumbnail" src="img/products/03-Bakery/03_6a.jpg"
                                        alt="alt"/>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Barkery</h5>
                                    <p class="ps-product__quantity">27 items</p>
                                </div>
                            </a>
                        </div>
                        <div class="product-slide"><a class="ps-product--vertical" href="product-default.html"><img
                                        class="ps-product__thumbnail" src="img/products/05-ReadyMeals/05_2a.jpg"
                                        alt="alt"/>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Ready Meals</h5>
                                    <p class="ps-product__quantity">13 items</p>
                                </div>
                            </a><a class="ps-product--vertical" href="product-default.html"><img
                                        class="ps-product__thumbnail"
                                        src="img/products/06-SoftDrinks-TeaCoffee/06_9a.jpg" alt="alt"/>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Drinks, Tea & Coffee</h5>
                                    <p class="ps-product__quantity">42 items</p>
                                </div>
                            </a><a class="ps-product--vertical" href="product-default.html"><img
                                        class="ps-product__thumbnail" src="img/products/07-Beer-WineSpirits/07_1a.jpg"
                                        alt="alt"/>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Beer, Wine & Spirits</h5>
                                    <p class="ps-product__quantity">54 items</p>
                                </div>
                            </a><a class="ps-product--vertical" href="product-default.html"><img
                                        class="ps-product__thumbnail" src="img/products/08-BabyChild/08_5a.jpg"
                                        alt="alt"/>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Baby & Child</h5>
                                    <p class="ps-product__quantity">48 items</p>
                                </div>
                            </a>
                        </div>
                        <div class="product-slide"><a class="ps-product--vertical" href="product-default.html"><img
                                        class="ps-product__thumbnail" src="img/products/04-FrozenFoods/04_2a.jpg"
                                        alt="alt"/>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Frozen Foods</h5>
                                    <p class="ps-product__quantity">44 items</p>
                                </div>
                            </a><a class="ps-product--vertical" href="product-default.html"><img
                                        class="ps-product__thumbnail" src="img/products/09-KitchenDining/09_11a.jpg"
                                        alt="alt"/>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Kitchen & Dining</h5>
                                    <p class="ps-product__quantity">23 items</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- show product section -->
        <section class="section-categories--default">
            <div class="container">

                <div class="categories--block">
                    <h3><a class="categories__title" id="freshFoodBlock">Trái cây</a></h3>
                    <div class="categories__content">
                        <div class="col-lg-3 categories__promotion">
                            <div class="slick-single-item">
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail"
                                                                                  src="assets/imgs/banner/banner-.png"
                                                                                  alt="alt"/></a></div>
                                <div class="categories-carousel"><a href="#"><img style="max-width: 170px;"
                                                                                  class="carousel__thumbnail"
                                                                                  src="assets/imgs/banner/banner-6.png"
                                                                                  alt="alt"/></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail"
                                                                                  src="assets/imgs/banner/banner-.png"
                                                                                  alt="alt"/></a></div>
                            </div>
                            <div class="row categories__list">
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#"><b>Best Seller</b></a></div>
                                    <div class="categories__list-item"><a href="#">Meat & Poultry</a></div>
                                    <div class="categories__list-item"><a href="#">Fruit</a></div>
                                    <div class="categories__list-item"><a href="#">Vegetables</a></div>
                                    <div class="categories__list-item"><a href="#">Milk, Butter & Eggs</a></div>
                                    <div class="categories__list-item"><a href="#">Fish</a></div>
                                    <div class="categories__list-item"><a href="#">Frozen</a></div>
                                    <div class="categories__list-item"><a href="#">Cheese</a></div>
                                </div>
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#">Desserts</a></div>
                                    <div class="categories__list-item"><a href="#">Pasta & Sauce</a></div>
                                    <div class="categories__list-item"><a href="#">Ham, Deli & Dips</a></div>
                                    <div class="categories__list-item"><a href="#">Pizza</a></div>
                                    <div class="categories__list-item"><a href="#">Soups</a></div>
                                    <div class="categories__list-item"><a href="#">Accompaniments</a></div>
                                    <div class="categories__list-item"><a href="#">Vegetarian Foods</a></div>
                                </div>
                            </div>
                            <div class="categories__footer">
                                <a href="shop-categories.html">
                                    <u>View all</u>
                                    <i class="icon-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                        <!--                            Danh sách sản phẩm mới nhất-->

                        <div class="categories__products">
                            <div class="row m-0">

                                <?php
                                $resultArray = array();
                                while ($Products = mysqli_fetch_array($result)) {
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
                                                    <a href="">
                                                        <?= $item['StoreName']; ?>
                                                    </a>
                                                </p>
                                                <h5><a class="ps-product__name"
                                                       href="<?= "Product_Details.php?ProductId=" . $item['Id'] ?>"><?= $item['Name']; ?></a>
                                                </h5>

                                                <div class="Price-Unit">
                                                    <p class="ps-product__unit">300g</p>

                                                    <p class="ps-product-price-block">
                                                        <span class="ps-product__sale">$<?= $item['Price']; ?> đ</span>
                                                    </p>
                                                </div>

                                                <div class="ps-product__box">
                                                    <button class="ps-product__addcart"
                                                            href="Cart.php"><i
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
                <div class="categories--block">
                    <h3><a class="categories__title" id="foodCupboardBlock">Food Cupboard</a></h3>
                    <div class="categories__content">
                        <div class="categories__promotion">
                            <div class="slick-single-item">
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail"
                                                                                  src="img/promotion/food_cupboard_01.jpg"
                                                                                  alt="alt"/></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail"
                                                                                  src="img/promotion/food_cupboard_02.jpg"
                                                                                  alt="alt"/></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail"
                                                                                  src="img/promotion/food_cupboard_02.jpg"
                                                                                  alt="alt"/></a></div>
                            </div>
                            <div class="row categories__list">
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#">Crisps, Snacks & Nuts</a></div>
                                    <div class="categories__list-item"><a href="#">Breakfast</a></div>
                                    <div class="categories__list-item"><a href="#">Tins & Cans</a></div>
                                    <div class="categories__list-item"><a href="#">Chocolate & Sweets</a></div>
                                    <div class="categories__list-item"><a href="#">Biscuits</a></div>
                                    <div class="categories__list-item"><a href="#">Rice</a></div>
                                    <div class="categories__list-item"><a href="#">Pasta & Pulses</a></div>
                                </div>
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#">Cooking Sauces</a></div>
                                    <div class="categories__list-item"><a href="#">Cooking Ingredients</a></div>
                                    <div class="categories__list-item"><a href="#">Honey & Spreads</a></div>
                                    <div class="categories__list-item"><a href="#">Savoury Snacks</a></div>
                                    <div class="categories__list-item"><a href="#">Crackers</a></div>
                                </div>
                            </div>
                            <div class="categories__footer"><a href="shop-categories.html">
                                    <u>View all</u><i class="icon-chevron-right"></i></a></div>
                        </div>
                        <div class="categories__products">
                            <div class="row m-0">
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/02-FoodCupboard/02_1a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Assorted
                                                    Donuts Each</a></h5>
                                            <p class="ps-product__unit">200g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__price-default">$4.49</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.49</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/02-FoodCupboard/02_2a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a><span
                                                class="ps-badge ps-product__offbadge">15% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Bunny Round
                                                    White</a></h5>
                                            <p class="ps-product__unit">150g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__sale">$3.99</span><span
                                                        class="ps-product__price">$4.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$3.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/02-FoodCupboard/02_3a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a><span
                                                class="ps-badge ps-product__offbadge">30% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Nesco</p>
                                            <h5><a class="ps-product__name" href="product-default.html">French
                                                    Bread</a></h5>
                                            <p class="ps-product__unit">150g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__sale">$4.99</span><span
                                                        class="ps-product__price">$8.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/02-FoodCupboard/02_14a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Bunny
                                                    Hmburger Buns</a></h5>
                                            <p class="ps-product__unit">300ml</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(13)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__price-default">$5.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$5.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/02-FoodCupboard/02_5a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Dozen Donut
                                                    Holes</a></h5>
                                            <p class="ps-product__unit">180g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(4)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__price-default">$6.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/02-FoodCupboard/02_11a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Natures Own
                                                    100% Wheat</a></h5>
                                            <p class="ps-product__unit">300g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__price-default">$12.00</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$12.00</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/02-FoodCupboard/02_12a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a><span
                                                class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">$ Ct Pills
                                                    Twirls</a></h5>
                                            <p class="ps-product__unit">200g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(34)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__sale">$6.90</span><span
                                                        class="ps-product__price">$9.99</span><span
                                                        class="ps-product__off">35% Off</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/02-FoodCupboard/02_19a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a><span
                                                class="ps-badge ps-product__offbadge">50% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Ball Park
                                                    Hot Dog Buns</a></h5>
                                            <p class="ps-product__unit">90lbs</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__sale">$4.99</span><span
                                                        class="ps-product__price">$8.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="categories--block">
                    <h3><a class="categories__title" id="readyMealBlock">Ready Meals</a></h3>
                    <div class="categories__content">
                        <div class="categories__promotion">
                            <div class="slick-single-item">
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail"
                                                                                  src="img/promotion/ready_meal_01.jpg"
                                                                                  alt="alt"/></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail"
                                                                                  src="img/promotion/ready_meal_02.jpg"
                                                                                  alt="alt"/></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail"
                                                                                  src="img/promotion/ready_meal_02.jpg"
                                                                                  alt="alt"/></a></div>
                            </div>
                            <div class="row categories__list">
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#"><span class='text-danger'>On
                                                    Sales</span></a></div>
                                    <div class="categories__list-item"><a href="#">Meals for 1</a></div>
                                    <div class="categories__list-item"><a href="#">Meals for 2</a></div>
                                    <div class="categories__list-item"><a href="#">Traditional British</a></div>
                                    <div class="categories__list-item"><a href="#">Indian</a></div>
                                    <div class="categories__list-item"><a href="#">Italian</a></div>
                                    <div class="categories__list-item"><a href="#">Chinese</a></div>
                                    <div class="categories__list-item"><a href="#">Thai & Oriental</a></div>
                                </div>
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#">Moroccan</a></div>
                                    <div class="categories__list-item"><a href="#">Mexican</a></div>
                                    <div class="categories__list-item"><a href="#">Lighter Meals</a></div>
                                    <div class="categories__list-item"><a href="#">Lunch & Veg Pots</a></div>
                                    <div class="categories__list-item"><a href="#">Kids' Meals</a></div>
                                </div>
                            </div>
                            <div class="categories__footer"><a href="shop-categories.html">
                                    <u>View all</u><i class="icon-chevron-right"></i></a></div>
                        </div>
                        <div class="categories__products">
                            <div class="row m-0">
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/05-ReadyMeals/05_1a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Fried
                                                    Chicken Tenders</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__price-default">$4.49</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.49</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/05-ReadyMeals/05_2a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a><span
                                                class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Hot Mashed
                                                    Potatoes</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__sale">$3.99</span><span
                                                        class="ps-product__price">$4.90</span><span
                                                        class="ps-product__off"></span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$3.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/05-ReadyMeals/05_3a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a><span
                                                class="ps-badge ps-product__offbadge">90% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Nesco</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Mac &
                                                    Cheese</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__sale">$4.99</span><span
                                                        class="ps-product__price">$8.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/05-ReadyMeals/05_4a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Fried piece
                                                    Chicken</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(13)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__price-default">$5.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$5.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/05-ReadyMeals/05_5a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Resers Cole
                                                    Slaw</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__price-default">$6.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/05-ReadyMeals/05_6a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Tailgater
                                                    Ham Sandwich Pack</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(4)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__price-default">$12.00</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$12.00</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/05-ReadyMeals/05_8a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a><span
                                                class="ps-badge ps-product__offbadge">25% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Rsr Potato
                                                    Salad</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__price-default">$</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/05-ReadyMeals/05_9a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Kret Ham Off
                                                    The Bone</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__price-default">$6.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="categories--block">
                    <h3><a class="categories__title" id="drinkTeaBlock">Drinks, Tea & Coffee</a></h3>
                    <div class="categories__content">
                        <div class="categories__promotion">
                            <div class="slick-single-item">
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail"
                                                                                  src="img/promotion/drink_tea_01.jpg"
                                                                                  alt="alt"/></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail"
                                                                                  src="img/promotion/drink_tea_02.jpg"
                                                                                  alt="alt"/></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail"
                                                                                  src="img/promotion/drink_tea_03.jpg"
                                                                                  alt="alt"/></a></div>
                            </div>
                            <div class="row categories__list">
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#">Tea & Coffee</a></div>
                                    <div class="categories__list-item"><a href="#">Hot Drinks</a></div>
                                    <div class="categories__list-item"><a href="#">Fizzy Drinks</a></div>
                                    <div class="categories__list-item"><a href="#">Water</a></div>
                                    <div class="categories__list-item"><a href="#">Squash</a></div>
                                    <div class="categories__list-item"><a href="#">Juices</a></div>
                                    <div class="categories__list-item"><a href="#">Mixers</a></div>
                                    <div class="categories__list-item"><a href="#">Still & Sparkling</a></div>
                                </div>
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#">No Added Sugar</a></div>
                                    <div class="categories__list-item"><a href="#">Still & Sparkling</a></div>
                                    <div class="categories__list-item"><a href="#">Cordials</a></div>
                                </div>
                            </div>
                            <div class="categories__footer"><a href="shop-categories.html">
                                    <u>View all</u><i class="icon-chevron-right"></i></a></div>
                        </div>
                        <div class="categories__products">
                            <div class="row m-0">
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/06-SoftDrinks-TeaCoffee/06_1a.jpg"
                                                    alt="alt"/></a><a class="ps-product__expand"
                                                                      href="javascript:void(0);" data-toggle="modal"
                                                                      data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Apple Rasp
                                                    Juice</a></h5>
                                            <p class="ps-product__unit">300g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__price-default">$4.49</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.49</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/06-SoftDrinks-TeaCoffee/06_3a.jpg"
                                                    alt="alt"/></a><a class="ps-product__expand"
                                                                      href="javascript:void(0);" data-toggle="modal"
                                                                      data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a><span
                                                class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Kevita Kom
                                                    Ginger</a></h5>
                                            <p class="ps-product__unit">200g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__sale">$4.90</span><span
                                                        class="ps-product__price">$3.99</span><span
                                                        class="ps-product__off">15% Off</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/06-SoftDrinks-TeaCoffee/06_5a.jpg"
                                                    alt="alt"/></a><a class="ps-product__expand"
                                                                      href="javascript:void(0);" data-toggle="modal"
                                                                      data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a><span
                                                class="ps-badge ps-product__offbadge">30% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Nesco</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Hs Grape
                                                    Juice</a></h5>
                                            <p class="ps-product__unit">550ml</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__sale">$4.99</span><span
                                                        class="ps-product__price">$8.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/06-SoftDrinks-TeaCoffee/06_12a.jpg"
                                                    alt="alt"/></a><a class="ps-product__expand"
                                                                      href="javascript:void(0);" data-toggle="modal"
                                                                      data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Mn
                                                    Lemonade</a></h5>
                                            <p class="ps-product__unit">1.5L</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__price-default">$5.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$5.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/06-SoftDrinks-TeaCoffee/06_11a.jpg"
                                                    alt="alt"/></a><a class="ps-product__expand"
                                                                      href="javascript:void(0);" data-toggle="modal"
                                                                      data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a><span
                                                class="ps-badge ps-product__offbadge">25% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Broccoli
                                                    Crowns</a></h5>
                                            <p class="ps-product__unit">1 box</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(4)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__sale">$9.99</span><span
                                                        class="ps-product__price">$5.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$9.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/06-SoftDrinks-TeaCoffee/06_2a.jpg"
                                                    alt="alt"/></a><a class="ps-product__expand"
                                                                      href="javascript:void(0);" data-toggle="modal"
                                                                      data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Always Save
                                                    Frozen Lemonade</a></h5>
                                            <p class="ps-product__unit">200g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__price-default">$12.00</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$12.00</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/06-SoftDrinks-TeaCoffee/06_9a.jpg"
                                                    alt="alt"/></a><a class="ps-product__expand"
                                                                      href="javascript:void(0);" data-toggle="modal"
                                                                      data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a><span
                                                class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Onions,
                                                    Green</a></h5>
                                            <p class="ps-product__unit">1.5L</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(2)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__sale">$6.90</span><span
                                                        class="ps-product__price">$9.99</span><span
                                                        class="ps-product__off">35% Off</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/06-SoftDrinks-TeaCoffee/06_8a.jpg"
                                                    alt="alt"/></a><a class="ps-product__expand"
                                                                      href="javascript:void(0);" data-toggle="modal"
                                                                      data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Kevita
                                                    Pineapple Peach</a></h5>
                                            <p class="ps-product__unit">330ml</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__price-default">$6.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="categories--block">
                    <h3><a class="categories__title" id="kitchenBlock">Kitchen & Dining</a></h3>
                    <div class="categories__content">
                        <div class="categories__promotion">
                            <div class="slick-single-item">
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail"
                                                                                  src="img/promotion/kitchen_01.jpg"
                                                                                  alt="alt"/></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail"
                                                                                  src="img/promotion/kitchen_02.jpg"
                                                                                  alt="alt"/></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail"
                                                                                  src="img/promotion/kitchen_03.jpg"
                                                                                  alt="alt"/></a></div>
                            </div>
                            <div class="row categories__list">
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#"><b>Most Popular</b></a></div>
                                    <div class="categories__list-item"><a href="#">Dining</a></div>
                                    <div class="categories__list-item"><a href="#">Outdoor Dining</a></div>
                                    <div class="categories__list-item"><a href="#">Party Tableware</a></div>
                                    <div class="categories__list-item"><a href="#">Food Storage</a></div>
                                    <div class="categories__list-item"><a href="#">Utensils</a></div>
                                    <div class="categories__list-item"><a href="#">Food Preparation</a></div>
                                    <div class="categories__list-item"><a href="#">Water Filters</a></div>
                                </div>
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#">Pots, Pans & Prep</a></div>
                                    <div class="categories__list-item"><a href="#">Baking & Preserving</a></div>
                                    <div class="categories__list-item"><a href="#">Glassware</a></div>
                                </div>
                            </div>
                            <div class="categories__footer"><a href="shop-categories.html">
                                    <u>View all</u><i class="icon-chevron-right"></i></a></div>
                        </div>
                        <div class="categories__products">
                            <div class="row m-0">
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/09-KitchenDining/09_1a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Cornboat
                                                    Holders</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__price-default">$4.49</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.49</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/09-KitchenDining/09_2a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a><span
                                                class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Saute Pan
                                                    Silver</a></h5>
                                            <p class="ps-product__unit">2 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__sale">$3.99</span><span
                                                        class="ps-product__price">$4.90</span><span
                                                        class="ps-product__off">15% Off</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$3.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/09-KitchenDining/09_3a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Nesco</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Crock Pot
                                                    Slow Cooker</a></h5>
                                            <p class="ps-product__unit">4 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__price-default">$4.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/09-KitchenDining/09_4a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a><span
                                                class="ps-badge ps-product__offbadge">49% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Emoticon
                                                    Cookie</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(13)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__sale">$5.99</span><span
                                                        class="ps-product__price">$6.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$5.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/09-KitchenDining/09_5a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Broccoli
                                                    Crowns</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(4)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__price-default">$6.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/09-KitchenDining/09_10a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a><span
                                                class="ps-badge ps-product__offbadge">30% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Arla Organic
                                                    Free Range Milk</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__sale">$3.99</span><span
                                                        class="ps-product__price">$4.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$3.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/09-KitchenDining/09_11a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a><span
                                                class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Dinamond
                                                    Pan</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(2)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__sale">$6.90</span><span
                                                        class="ps-product__price">$9.99</span><span
                                                        class="ps-product__off">35% Off</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img
                                                    class="ps-product__thumbnail"
                                                    src="img/products/09-KitchenDining/09_13a.jpg" alt="alt"/></a><a
                                                class="ps-product__expand" href="javascript:void(0);"
                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                    class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Pork Steak
                                                    Jumbo Pack</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(4)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span
                                                        class="ps-product__price-default">$6.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i
                                                            class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1"
                                                       type="number"/>
                                                <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i
                                                            class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal"
                                                    data-target="#popupAddToCart"><i class="icon-cart"></i>Add to
                                                cart
                                            </button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist"
                                                                            href="wishlist.html">Wishlist</a><a
                                                        class="ps-product__compare"
                                                        href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <div class="container pt-30">
        <!--End Deals-->
        <section class="ps-home--block section-featured--default section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 wow animate__animated animate__fadeInUp"
                         data-wow-delay="0">
                        <h4 class="section-title style-1 mb-30 animated animated">Top Selling</h4>
                        <div class="product-list-small animated animated">
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img src="assets/imgs/shop/thumbnail-1.jpg"
                                                                           alt=""/></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="shop-product-right.html">Nestle Original Coffee-Mate Coffee Creamer</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img src="assets/imgs/shop/thumbnail-2.jpg"
                                                                           alt=""/></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="shop-product-right.html">Nestle Original Coffee-Mate Coffee Creamer</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img src="assets/imgs/shop/thumbnail-3.jpg"
                                                                           alt=""/></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="shop-product-right.html">Nestle Original Coffee-Mate Coffee Creamer</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-md-0 wow animate__animated animate__fadeInUp"
                         data-wow-delay=".1s">
                        <h4 class="section-title style-1 mb-30 animated animated">Trending Products</h4>
                        <div class="product-list-small animated animated">
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img src="assets/imgs/shop/thumbnail-4.jpg"
                                                                           alt=""/></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="shop-product-right.html">Organic Cage-Free Grade A Large Brown Eggs</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img src="assets/imgs/shop/thumbnail-5.jpg"
                                                                           alt=""/></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="shop-product-right.html">Seeds of Change Organic Quinoa, Brown, & Red
                                            Rice</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img src="assets/imgs/shop/thumbnail-6.jpg"
                                                                           alt=""/></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="shop-product-right.html">Naturally Flavored Cinnamon Vanilla Light
                                            Roast Coffee</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-lg-block wow animate__animated animate__fadeInUp"
                         data-wow-delay=".2s">
                        <h4 class="section-title style-1 mb-30 animated animated">Recently added</h4>
                        <div class="product-list-small animated animated">
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img src="assets/imgs/shop/thumbnail-7.jpg"
                                                                           alt=""/></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="shop-product-right.html">Pepperidge Farm Farmhouse Hearty White
                                            Bread</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img src="assets/imgs/shop/thumbnail-8.jpg"
                                                                           alt=""/></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="shop-product-right.html">Organic Frozen Triple Berry Blend</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img src="assets/imgs/shop/thumbnail-9.jpg"
                                                                           alt=""/></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="shop-product-right.html">Oroweat Country Buttermilk Bread</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-xl-block wow animate__animated animate__fadeInUp"
                         data-wow-delay=".3s">
                        <h4 class="section-title style-1 mb-30 animated animated">Top Rated</h4>
                        <div class="product-list-small animated animated">
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img src="assets/imgs/shop/thumbnail-10.jpg"
                                                                           alt=""/></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="shop-product-right.html">Foster Farms Takeout Crispy Classic Buffalo
                                            Wings</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img src="assets/imgs/shop/thumbnail-11.jpg"
                                                                           alt=""/></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="shop-product-right.html">Angie’s Boomchickapop Sweet & Salty Kettle
                                            Corn</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img src="assets/imgs/shop/thumbnail-12.jpg"
                                                                           alt=""/></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="shop-product-right.html">All Natural Italian-Style Chicken
                                            Meatballs</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End 4 columns-->

    </div>

    <div id="footer"></div>

</main>

<!--Footer -->

<!-- Vendor JS-->
<script data-cfasync="false" src="home.asset/email-decode.min.js"></script>
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