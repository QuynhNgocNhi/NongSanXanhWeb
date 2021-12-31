<!-- Template CSS -->
<link rel="stylesheet" href="assets/css/mainf195.css?v=2.1"/>
<!-- homepage CSS -->
<link rel="stylesheet" href="home.asset/home.css?v=2.1"/>
<!-- font -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<!--header-->
<header class="header-area header-style-1 header-height-2">
    <!--mobile front header-->
    <div class="mobile-promotion">
        <span>Miễn phí vận chuyển duy nhất trong ngày 11/11.</span>
    </div>
    <!--end mobile front header-->
    <!--top header-->
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="header-info">
                        <ul>
                            <li><a href="index.php">Về Nông Sản Xanh</a></li>
                            <li><a href="User_Account.php">Tài khoản</a></li>
                            <li><a href="WishList.php">Yêu thích</a></li>
                            <li><a href="User_Account.php?orders">Theo dõi đơn hàng</a></li>
                            <li><a href="">Trợ giúp</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3">
                    <div class="text-center ">
                        <div class=".d-none .d-lg-block">
                            <span>Miễn phí vận chuyển.</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info header-info-right">
                        <ul>
                            <li>
                                <a class="BuyandSell-dropdown-active" href="#">Mua ngay <i
                                            class="fi-rs-angle-small-down"></i></a>
                                <ul class="BuyandSell-dropdown">
                                    <li>
                                        <a href="#"><img src="" alt=""/>Xem tin bán</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="" alt=""/>Đăng tin mua</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="" alt=""/>Tìm nhà bán uy tín</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="BuyandSell-dropdown-active" href="#">Bán ngay <i
                                            class="fi-rs-angle-small-down"></i></a>
                                <ul class="BuyandSell-dropdown">
                                    <li>
                                        <a href="#"><img src="" alt=""/>Xem tin mua</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="" alt=""/>Đăng tin bán</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="" alt=""/>Đăng ký cửa hàng</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="" alt=""/>Cách bán trên NSX</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a class="language-dropdown-active" href="#">Vietnamese <i
                                            class="fi-rs-angle-small-down"></i></a>
                                <ul class="language-dropdown">
                                    <li>
                                        <a href="#"><img src="" alt=""/>Vietnamese</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="" alt=""/>English</a>
                                    </li>

                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end top header-->

    <!--mid header-->
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block sticky-bar">
        <div class="container">

            <div class="header-wrap justify-content-center">
                <div class="logo logo-width-1">
                    <a href="index.php"><img src="assets/img/global/logo_homepage_fixed.jpg" alt="NSX"/></a>
                </div>
                <div class="header-right">

                    <div class="search-style-2">
                        <form action="Products.php" method="post">

                            <select class="select-active" name="Category">
                                <option value="0">Danh mục</option>
                                <?php

                                include "config.php";

                                $sqlCategory = "select * from productcategory";
                                $resultCategory = mysqli_query($conn, $sqlCategory);

                                if (mysqli_num_rows($resultCategory) > 0) {
                                    $index = 1;
                                    while ($rowCategory = mysqli_fetch_row($resultCategory)) {
                                        echo "<option value='$index'>$rowCategory[1]</option>";
                                        $index++;

                                    }
                                } ?>

                            </select>
                            <input onchange="" name="Search" type="text" placeholder="Tìm kiếm..."/>
                            <button type="submit" name="submit" style="background-color: unset !important;"><img
                                        src="assets/imgs/theme/icons/search.png"></button>
                        </form>
                    </div>
                    <div class="header-action-right">
                        <div class="header-action-2">


                            <div class="header-action-icon-2">
                                <a target="_blank" href="WishList.php">
                                    <img class="svgInject" alt="NSX" src="assets/img/icons/icon-heart.svg"/>
                                    <span class="pro-count blue" id="wishlist-count"><?php
                                        if (!empty($_COOKIE['WishList'])) {
                                            $cookie_data_wishlist = stripslashes($_COOKIE['WishList']);
                                            $WishListData = json_decode($cookie_data_wishlist, true);
                                            $WishList_Array_Length = count($WishListData);
                                            $wishlist_id_list = array_column($WishListData, 'Id');

                                            echo $WishList_Array_Length;
                                        } else echo "0";

                                        ?></span>
                                </a>
                                <a target="_blank" href="WishList.php"><span class="lable ">Yêu
                                            thích</span></a>
                            </div>
                            <div class="header-action-icon-2">
                                <a target="_blank" class="mini-cart-icon" href="Cart.php">
                                    <img alt="NSX" src="assets/img/icons/icon-cart.svg"/>
                                    <span class="pro-count blue" id="cart-count">
                                        <?php
                                        if (!empty($_COOKIE['Cart'])) {
                                            $cookie_data_cart = stripslashes($_COOKIE['Cart']);
                                            $CartData = json_decode($cookie_data_cart, true);
                                            $Cart_Array_Length = count($CartData);
                                            echo $Cart_Array_Length;
                                        } else echo "0";

                                        ?>
                                    </span>
                                </a>
                                <!--                                Popup Giỏ hàng -->
                                <a target="_blank" href="Cart.php"><span class="lable">Giỏ hàng</span></a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul class="shopping-cart-header">
                                        <?php

                                        if (!empty($_COOKIE['Cart'])) {
                                            $total = 0;
                                            $cookie_data_cart = stripslashes($_COOKIE['Cart']);
                                            $CartData = json_decode($cookie_data_cart, true);
                                            foreach ($CartData

                                                     as $keys => $values) {
                                                ?>
                                                <li>

                                                    <div class="shopping-cart-img">
                                                        <img
                                                                alt="NSX"
                                                                src="data/Product_Img_Upload/<?= $values['Image'] ?>"/>
                                                    </div>
                                                    <div style="padding: 0px" class="shopping-cart-title col-lg-7">
                                                        <h4>
                                                            <a href="<?= "Product_Details.php?ProductId=" . $values['Id'] ?>"> <?= $values['Name'] ?></a>
                                                        </h4>
                                                        <h3>
                                                            <span> <?= $values['Quantity'] ?> × </span> <?= $values['Price'] ?>
                                                        </h3>
                                                    </div>
                                                    <div class="shopping-cart-delete">
                                                        <a href="Cart.php?action=delete&Id=<?php echo $values["Id"]; ?>"><i
                                                                    class="fi-rs-cross-small"></i></a>
                                                    </div>


                                                </li>
                                            <?php }
                                        } ?>

                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <!--                                        <div class="shopping-cart-total">-->
                                        <!--                                            <h4>Tổng <span>400.000 vnd</span></h4>-->
                                        <!--                                        </div>-->
                                        <div class="shopping-cart-button">
                                            <a href="Cart.php" class="outline">Xem giỏ hàng</a>
                                            <a href="Checkout.php">Thanh toán</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-action-icon-2">
                                <a href="Admin_Dashboard.php">
                                    <img class="svgInject" alt="NSX" src="assets/img/icons/icon-user.svg"/>
                                </a>
                                <?php
                                if (isset($_SESSION["UserName"])) {
                                    echo "<a href='User_Account.php'><span class='lable ml-0'> " . $_SESSION["UserName"];

                                } else {
                                    echo "<a href='login.php'><span class='lable ml-0'>Tài khoản</span></a>";
                                }
                                ?>
                                <!--                                <a href="page-account.html"><span class="lable ml-0">Tài khoản</span></a>-->
                                <div class="
                                        cart-dropdown-wrap cart-dropdown-hm2
                                        account-dropdown
                                    ">
                                    <ul>
                                        <?php

                                        if (isset($_SESSION["Id"])) {


                                            echo "<li><a href='User_Account.php'><i class='fi fi-rs-user mr-10'></i>Tài khoản</a></li>";
                                            if ($_SESSION["UserRoleId"] == 1) {
                                                echo "<li><a href='Admin_Dashboard.php'><i class='fi fi-rs-home mr-10'></i>Dashboard</a></li>";
                                            } elseif ($_SESSION["UserRoleId"] == 2) {
                                                echo "<li><a href='Vendor_Dashboard.php'><i class='fi fi-rs-home mr-10'></i>Cửa hàng</a></li>";
                                            } else {
                                                echo "<li><a href='Store_Register.php'><i class='fi fi-rs-user mr-10'></i>Tạo cửa hàng</a></li>";
                                            }

                                        } else {
                                            echo "<li><a href='Account_Registration.php'><i class='fi fi-rs-user mr-10'></i>Đăng ký tài khoản</a></li>";
                                            echo "<li><a href='login.php'><i class='fi fi-rs-user mr-10'></i>Đăng nhập</a></li>";
                                            echo "<li><a href='Store_Register.php'><i class='fi fi-rs-user mr-10'></i>Tạo cửa hàng</a></li>";

                                        }

                                        ?>


                                        <li>
                                            <a href="User_Account.php?orders"><i
                                                        class="fi fi-rs-location-alt mr-10"></i>Đơn
                                                mua</a>
                                        </li>
                                        <li>
                                            <a href="User_Account.php"><i
                                                        class="fi fi-rs-settings-sliders mr-10"></i>Cài
                                                đặt</a>
                                        </li>
                                        <?php
                                        if (isset($_SESSION['Id'])) {
                                            echo '<li>
                                            <a href="login.php"><i class="fi fi-rs-sign-out mr-10"></i>Đăng
                                                xuất</a>
                                        </li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end mid header-->

    <!-- main header-->
    <div class="header-bottom header-bottom-bg-color header-nav">
        <div class="container">
            <div class="header-wrap header-space-between position-relative ">
                <!-- mobile logo center -->
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="index.php"><img src="assets/img/global/logo_home.jpg" alt="logo"/></a>
                </div>
                <!-- end mobile logo center -->

                <div class=" col header-nav d-none d-lg-flex ">

                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                        <nav>
                            <ul>
                                <li>
                                    <a id="home-page" class="nav-link-main" href="index.php">Trang chủ</a>
                                </li>
                                <li>
                                    <a id="products-page" class="nav-link-main" href="Products.php">Sản phẩm</a>
                                </li>
                                <!--                                <li>-->
                                <!--                                    <a id="posts-page" class="nav-link-main" href="index.php">Tin đăng <i-->
                                <!--                                                class="fi-rs-angle-down"></i></a>-->
                                <!--                                    <ul class="sub-menu">-->
                                <!--                                        <li><a href="index.php">Tin mua</a></li>-->
                                <!--                                        <li><a href="index.php">Tin bán</a></li>-->
                                <!---->
                                <!--                                    </ul>-->
                                <!--                                </li>-->

                                <li>
                                    <a id="sellers-page" class="nav-link-main" href="Vendors.php">Nhà cung
                                        cấp <i class="fi-rs-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="index.php">Đã xác minh</a></li>
                                        <li><a href="index.php">Tin cậy</a></li>

                                    </ul>
                                </li>

                            </ul>

                        </nav>
                    </div>

                </div>

                <!-- Saved wishlist product -->

                <!-- end Saved wishlist product -->

                <!-- mobile menu -->
                <div class="header-act  ion-icon-2 d-block d-lg-none">
                    <div class="burger-icon burger-icon-white">
                        <span class="burger-icon-top"></span>
                        <span class="burger-icon-mid"></span>
                        <span class="burger-icon-bottom"></span>
                    </div>
                </div>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a href="WishList.php">
                                <img alt="NSX" src="assets/img/icons/icon-heart.svg"/>
                                <span class="pro-count white">4</span>
                            </a>
                        </div>
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="Cart.php">
                                <img alt="NSX" src="assets/img/icons/icon-cart.svg"/>
                                <span class="pro-count white">2</span>
                            </a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul>

                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="products.html"><img alt="NSX"
                                                                         src="home.asset/img/product/03-Multi/durian.jpg"/></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="products.html">Sầu riêng Ri6 3 trái</a></h4>
                                            <h3><span>1 × </span>320.000 vnd</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Tổng <span>400.000 vnd</span></h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a href="Cart.php">Xem giỏ hàng</a>
                                        <a href="Checkout.php">Thanh toán</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
<!--end main header-->

<!--mobile header-->
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="index.php"><img src="assets/img/global/Logo.png" alt="logo"/></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                <form action="#">
                    <input type="text" placeholder="Tìm kiếm..."/>
                    <button type="submit"><i class="fi-rs-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu font-heading">
                        <li class="ui-menu-item">
                            <a href="index.php">Trang chủ</a>

                        </li>
                        <li>
                            <a href="Products.php">Sản phẩm</a>
                        </li>
                        <li>
                            <a href="index.php">Tin đăng <i class="fi-rs-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="index.php">Tin mua</a></li>
                                <li><a href="index.php">Tin bán</a></li>

                            </ul>
                        </li>

                        <li>
                            <a href="Vendors.php">Nhà cung cấp <i class="fi-rs-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="index.php">Đã xác minh</a></li>
                                <li><a href="index.php">Tin cậy</a></li>

                            </ul>
                        </li>

                        <li class="menu-item-has-children">
                            <a href="#">Ngôn ngữ</a>
                            <ul class="dropdown">
                                <li>
                                    <a href="#"><img src="" alt=""/>Vietnamese</a>
                                </li>
                                <li>
                                    <a href="#"><img src="" alt=""/>English</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap">
                <div class="single-mobile-header-info">
                    <a href="index.php"><i class="fi-rs-marker"></i> Our location </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="login.php"><i class="fi-rs-user"></i>Log In / Sign Up </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="#"><i class="fi-rs-headphones"></i>(+01) - 2345 - 6789 </a>
                </div>
            </div>
            <div class="mobile-social-icon mb-50">
                <h6 class="mb-15">Follow Us</h6>
                <a href="#"><img src="assets/img/icons/icon-facebook-white.svg" alt=""/></a>
                <a href="#"><img src="assets/img/icons/icon-twitter-white.svg" alt=""/></a>
                <a href="#"><img src="assets/img/icons/icon-instagram-white.svg" alt=""/></a>
                <a href="#"><img src="assets/img/icons/icon-pinterest-white.svg" alt=""/></a>
                <a href="#"><img src="assets/img/icons/icon-youtube-white.svg" alt=""/></a>
            </div>
            <div class="site-copyright">Copyright 2021 © NSX. All rights reserved.</div>
        </div>
    </div>
</div>
<!--end header-->

<!-- Vendor JS-->
<!--<script data-cfasync="false" src="home.asset/js/email-decode.min.js"></script>-->
<!--<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>-->
<!--<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>-->
<!--<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>-->
<!--<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>-->
<!--<script src="assets/js/plugins/slick.js"></script>-->
<!--<script src="assets/js/plugins/jquery.syotimer.min.js"></script>-->
<!--<script src="assets/js/plugins/wow.js"></script>-->
<!--<script src="assets/js/plugins/jquery-ui.js"></script>-->
<!--<script src="assets/js/plugins/perfect-scrollbar.js"></script>-->
<!--<script src="assets/js/plugins/magnific-popup.js"></script>-->
<!--<script src="assets/js/plugins/select2.min.js"></script>-->
<!--<script src="assets/js/plugins/waypoints.js"></script>-->
<!--<script src="assets/js/plugins/counterup.js"></script>-->
<!--<script src="assets/js/plugins/jquery.countdown.min.js"></script>-->
<!--<script src="assets/js/plugins/images-loaded.js"></script>-->
<!--<script src="assets/js/plugins/isotope.js"></script>-->
<!--<script src="assets/js/plugins/scrollup.js"></script>-->
<!--<script src="assets/js/plugins/jquery.vticker-min.js"></script>-->
<!--<script src="assets/js/plugins/jquery.theia.sticky.js"></script>-->
<!--<script src="assets/js/plugins/jquery.elevatezoom.js"></script>-->
<!-- Template  JS -->
<!--<script src="assets/js/mainf195.js?v=2.1"></script>-->
<!--<script src="assets/js/shopf195.js?v=2.1"></script>-->

<!--</body>-->
<!---->
<!--</html>-->