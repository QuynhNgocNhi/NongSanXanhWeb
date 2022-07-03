<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://demos.jquerymobile.com/1.4.2/js/jquery.mobile-1.4.2.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nông Sản Xanh</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/global/2.jpg"/>
    <!-- call header footer -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        function loadPage(href) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", href, false);
            xmlhttp.send();
            return xmlhttp.responseText;
        }

    </script>
<!--    <script>-->
<!--        function CallActivePage() {-->
<!--            document.getElementById("sellers-page").classList.add("active");-->
<!--        }-->
<!--        $(document).ready(function () {-->
<!--            document.getElementById('header').innerHTML = loadPage('header.php');-->
<!--            CallActivePage();-->
<!--            document.getElementById('footer').innerHTML = loadPage('footer.php');-->
<!--        });-->
<!---->
<!--    </script>-->
    <!-- active seller pages -->
    <script>
        function myFunction() {
            document.getElementById("sellers-page").classList.add("active");
        }
        $(document).ready(function () {
            myFunction();
        });
    </script>

    <!-- Template CSS -->

    <link rel="stylesheet" href="providers.asset/provider-css/shop_provider_product_buyandsell.css">
    <link rel="stylesheet" href="providers.asset/grid_base.css/grid.css">
    <link rel="stylesheet" href="providers.asset/grid_base.css/Fshop_base.css">
    <link rel="stylesheet" href="providers.asset/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="providers.asset/provider-css/provider.css">
    <link rel="stylesheet" href="assets/css/mainf195.css?v=2.1"/>
</head>

<body>
<?php
require_once('header.php');
?>

<main class="main pages">
    <!-- breakcum -->
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.php" rel="nofollow"><i class="fi-rs-home mr-5"></i>Trang chủ</a>
                <span> Tài khoản</span>
            </div>
        </div>
    </div>
    <!-- content -->
    <div class="page-content pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 m-auto">
                    <div class="row main-row">
                        <div class="grid">
                            <div class="row wide">
                                <div class="firt-bar">
                                    <div class="wrap">
                                        <div class="search">
                                            <input type="text" class="searchTerm" placeholder="Sản phẩm tìm kiếm?">
                                            <button type="submit" class="searchButton">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                        <div class="provider-top">-->
<!---->
<!--                            <h5 class="provider-top__header">TOP NHÀ CUNG ĐƯỢC ĐÁNH GIÁ CAO</h5>-->
<!--                            <div class="container mt-5 mb-5">-->
<!---->
<!--                                <div class="row g-2">-->
<!--                                    <div class="col-md-4 col-lg-2 d-flex justify-content-center">-->
<!--                                        <div class="card p-2">-->
<!--                                            <div class="text-center"><img-->
<!--                                                        src="assets/img/global/vendor/vendor1.jpg" class="img-fluid"-->
<!--                                                        width="150"/></div>-->
<!--                                            <div class="content">-->
<!--                                                <div class="d-flex justify-content-between align-items-center">-->
<!--                                                    <span class="category">Sầu riêng</span>-->
<!--                                                    <span class="price">*****</span>-->
<!---->
<!--                                                </div>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-apple-alt"> </i> Chuyên: Thủy sản</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-shopping-bag"> </i> Sản phẩm: 499</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-map-marker-alt"> </i> Lâm Đồng</p>-->
<!--                                                <p class="provider-item__decriotion-item">-->
<!--                                                    <i class="fas fa-user-friends"></i> Theo dõi: 100k-->
<!--                                                </p>-->
<!--                                                <div class="buttons d-flex justify-content-center">-->
<!--                                                    <button class="btn btn-outline-primary mr-1">Xem ngay</button>-->
<!--                                                    <button class="btn btn-primary">Chat ngay</button>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-4 col-lg-2 d-flex justify-content-center">-->
<!--                                        <div class="card p-2">-->
<!--                                            <div class="text-center"><img-->
<!--                                                        src="assets/img/global/vendor/vendor1.jpg" class="img-fluid"-->
<!--                                                        width="150"/></div>-->
<!--                                            <div class="content">-->
<!--                                                <div class="d-flex justify-content-between align-items-center">-->
<!--                                                    <span class="category">Sầu riêng</span>-->
<!--                                                    <span class="price">*****</span>-->
<!---->
<!--                                                </div>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-apple-alt"> </i> Chuyên: Thủy sản</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-shopping-bag"> </i> Sản phẩm: 499</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-map-marker-alt"> </i> Lâm Đồng</p>-->
<!--                                                <p class="provider-item__decriotion-item">-->
<!--                                                    <i class="fas fa-user-friends"></i> Theo dõi: 100k-->
<!--                                                </p>-->
<!--                                                <div class="buttons d-flex justify-content-center">-->
<!--                                                    <button-->
<!--                                                            class="btn btn-outline-primary mr-1">Xem ngay-->
<!--                                                    </button>-->
<!--                                                    <button class="btn btn-primary">Chat ngay</button>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-4 col-lg-2 d-flex justify-content-center">-->
<!--                                        <div class="card p-2">-->
<!--                                            <div class="text-center"><img-->
<!--                                                        src="assets/img/global/vendor/vendor1.jpg" class="img-fluid"-->
<!--                                                        width="150"/></div>-->
<!--                                            <div class="content">-->
<!--                                                <div class="d-flex justify-content-between align-items-center">-->
<!--                                                    <span class="category">Sầu riêng</span>-->
<!--                                                    <span class="price">*****</span>-->
<!---->
<!--                                                </div>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-apple-alt"> </i> Chuyên: Thủy sản</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-shopping-bag"> </i> Sản phẩm: 499</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-map-marker-alt"> </i> Lâm Đồng</p>-->
<!--                                                <p class="provider-item__decriotion-item">-->
<!--                                                    <i class="fas fa-user-friends"></i> Theo dõi: 100k-->
<!--                                                </p>-->
<!--                                                <div class="buttons d-flex justify-content-center">-->
<!--                                                    <button-->
<!--                                                            class="btn btn-outline-primary mr-1">Xem ngay-->
<!--                                                    </button>-->
<!--                                                    <button class="btn btn-primary">Chat ngay</button>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-4 col-lg-2 d-flex justify-content-center">-->
<!--                                        <div class="card p-2">-->
<!--                                            <div class="text-center"><img-->
<!--                                                        src="assets/img/global/vendor/vendor1.jpg" class="img-fluid"-->
<!--                                                        width="150"/></div>-->
<!--                                            <div class="content">-->
<!--                                                <div class="d-flex justify-content-between align-items-center">-->
<!--                                                    <span class="category">Sầu riêng</span>-->
<!--                                                    <span class="price">*****</span>-->
<!---->
<!--                                                </div>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-apple-alt"> </i> Chuyên: Thủy sản</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-shopping-bag"> </i> Sản phẩm: 499</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-map-marker-alt"> </i> Lâm Đồng</p>-->
<!--                                                <p class="provider-item__decriotion-item">-->
<!--                                                    <i class="fas fa-user-friends"></i> Theo dõi: 100k-->
<!--                                                </p>-->
<!--                                                <div class="buttons d-flex justify-content-center">-->
<!--                                                    <button-->
<!--                                                            class="btn btn-outline-primary mr-1">Xem ngay-->
<!--                                                    </button>-->
<!--                                                    <button class="btn btn-primary">Chat ngay</button>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-4 col-lg-2 d-flex justify-content-center">-->
<!--                                        <div class="card p-2">-->
<!--                                            <div class="text-center"><img-->
<!--                                                        src="assets/img/global/vendor/vendor1.jpg" class="img-fluid"-->
<!--                                                        width="150"/></div>-->
<!--                                            <div class="content">-->
<!--                                                <div class="d-flex justify-content-between align-items-center">-->
<!--                                                    <span class="category">Sầu riêng</span>-->
<!--                                                    <span class="price">*****</span>-->
<!---->
<!--                                                </div>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-apple-alt"> </i> Chuyên: Thủy sản</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-shopping-bag"> </i> Sản phẩm: 499</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-map-marker-alt"> </i> Lâm Đồng</p>-->
<!--                                                <p class="provider-item__decriotion-item">-->
<!--                                                    <i class="fas fa-user-friends"></i> Theo dõi: 100k-->
<!--                                                </p>-->
<!--                                                <div class="buttons d-flex justify-content-center">-->
<!--                                                    <button-->
<!--                                                            class="btn btn-outline-primary mr-1">Xem ngay-->
<!--                                                    </button>-->
<!--                                                    <button class="btn btn-primary">Chat ngay</button>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-4 col-lg-2 d-flex justify-content-center">-->
<!--                                        <div class="card p-2">-->
<!--                                            <div class="text-center"><img-->
<!--                                                        src="assets/img/global/vendor/vendor1.jpg" class="img-fluid"-->
<!--                                                        width="150"/></div>-->
<!--                                            <div class="content">-->
<!--                                                <div class="d-flex justify-content-between align-items-center">-->
<!--                                                    <span class="category">Sầu riêng</span>-->
<!--                                                    <span class="price">*****</span>-->
<!---->
<!--                                                </div>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-apple-alt"> </i> Chuyên: Thủy sản</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-shopping-bag"> </i> Sản phẩm: 499</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-map-marker-alt"> </i> Lâm Đồng</p>-->
<!--                                                <p class="provider-item__decriotion-item">-->
<!--                                                    <i class="fas fa-user-friends"></i> Theo dõi: 100k-->
<!--                                                </p>-->
<!--                                                <div class="buttons d-flex justify-content-center">-->
<!--                                                    <button-->
<!--                                                            class="btn btn-outline-primary mr-1">Xem ngay-->
<!--                                                    </button>-->
<!--                                                    <button class="btn btn-primary">Chat ngay</button>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="provider-top">-->
<!--                            <h5 class="provider-top__header">TOP NHÀ CUNG CẤP TIN CẬY</h5>-->
<!--                            <div class="container mt-5 mb-5">-->
<!---->
<!--                                <div class="row g-2">-->
<!--                                    <div class="col-md-4 col-lg-2 d-flex justify-content-center">-->
<!--                                        <div class="card p-2">-->
<!--                                            <div class="text-center"><img-->
<!--                                                        src="assets/img/global/vendor/vendor1.jpg" class="img-fluid"-->
<!--                                                        width="150"/></div>-->
<!--                                            <div class="content">-->
<!--                                                <div class="d-flex justify-content-between align-items-center">-->
<!--                                                    <span class="category">Sầu riêng</span>-->
<!--                                                    <span class="price">*****</span>-->
<!---->
<!--                                                </div>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-apple-alt"> </i> Chuyên: Thủy sản</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-shopping-bag"> </i> Sản phẩm: 499</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-map-marker-alt"> </i> Lâm Đồng</p>-->
<!--                                                <p class="provider-item__decriotion-item">-->
<!--                                                    <i class="fas fa-user-friends"></i> Theo dõi: 100k-->
<!--                                                </p>-->
<!--                                                <div class="buttons d-flex justify-content-center">-->
<!--                                                    <button-->
<!--                                                            class="btn btn-outline-primary mr-1">Xem ngay-->
<!--                                                    </button>-->
<!--                                                    <button class="btn btn-primary">Chat ngay</button>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-4 col-lg-2 d-flex justify-content-center">-->
<!--                                        <div class="card p-2">-->
<!--                                            <div class="text-center"><img-->
<!--                                                        src="assets/img/global/vendor/vendor1.jpg" class="img-fluid"-->
<!--                                                        width="150"/></div>-->
<!--                                            <div class="content">-->
<!--                                                <div class="d-flex justify-content-between align-items-center">-->
<!--                                                    <span class="category">Sầu riêng</span>-->
<!--                                                    <span class="price">*****</span>-->
<!---->
<!--                                                </div>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-apple-alt"> </i> Chuyên: Thủy sản</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-shopping-bag"> </i> Sản phẩm: 499</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-map-marker-alt"> </i> Lâm Đồng</p>-->
<!--                                                <p class="provider-item__decriotion-item">-->
<!--                                                    <i class="fas fa-user-friends"></i> Theo dõi: 100k-->
<!--                                                </p>-->
<!--                                                <div class="buttons d-flex justify-content-center">-->
<!--                                                    <button-->
<!--                                                            class="btn btn-outline-primary mr-1">Xem ngay-->
<!--                                                    </button>-->
<!--                                                    <button class="btn btn-primary">Chat ngay</button>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-4 col-lg-2 d-flex justify-content-center">-->
<!--                                        <div class="card p-2">-->
<!--                                            <div class="text-center"><img-->
<!--                                                        src="assets/img/global/vendor/vendor1.jpg" class="img-fluid"-->
<!--                                                        width="150"/></div>-->
<!--                                            <div class="content">-->
<!--                                                <div class="d-flex justify-content-between align-items-center">-->
<!--                                                    <span class="category">Sầu riêng</span>-->
<!--                                                    <span class="price">*****</span>-->
<!---->
<!--                                                </div>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-apple-alt"> </i> Chuyên: Thủy sản</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-shopping-bag"> </i> Sản phẩm: 499</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-map-marker-alt"> </i> Lâm Đồng</p>-->
<!--                                                <p class="provider-item__decriotion-item">-->
<!--                                                    <i class="fas fa-user-friends"></i> Theo dõi: 100k-->
<!--                                                </p>-->
<!--                                                <div class="buttons d-flex justify-content-center">-->
<!--                                                    <button-->
<!--                                                            class="btn btn-outline-primary mr-1">Xem ngay-->
<!--                                                    </button>-->
<!--                                                    <button class="btn btn-primary">Chat ngay</button>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-4 col-lg-2 d-flex justify-content-center">-->
<!--                                        <div class="card p-2">-->
<!--                                            <div class="text-center"><img-->
<!--                                                        src="assets/img/global/vendor/vendor1.jpg" class="img-fluid"-->
<!--                                                        width="150"/></div>-->
<!--                                            <div class="content">-->
<!--                                                <div class="d-flex justify-content-between align-items-center">-->
<!--                                                    <span class="category">Sầu riêng</span>-->
<!--                                                    <span class="price">*****</span>-->
<!---->
<!--                                                </div>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-apple-alt"> </i> Chuyên: Thủy sản</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-shopping-bag"> </i> Sản phẩm: 499</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-map-marker-alt"> </i> Lâm Đồng</p>-->
<!--                                                <p class="provider-item__decriotion-item">-->
<!--                                                    <i class="fas fa-user-friends"></i> Theo dõi: 100k-->
<!--                                                </p>-->
<!--                                                <div class="buttons d-flex justify-content-center">-->
<!--                                                    <button-->
<!--                                                            class="btn btn-outline-primary mr-1">Xem ngay-->
<!--                                                    </button>-->
<!--                                                    <button class="btn btn-primary">Chat ngay</button>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-4 col-lg-2 d-flex justify-content-center">-->
<!--                                        <div class="card p-2">-->
<!--                                            <div class="text-center"><img-->
<!--                                                        src="assets/img/global/vendor/vendor1.jpg" class="img-fluid"-->
<!--                                                        width="150"/></div>-->
<!--                                            <div class="content">-->
<!--                                                <div class="d-flex justify-content-between align-items-center">-->
<!--                                                    <span class="category">Sầu riêng</span>-->
<!--                                                    <span class="price">*****</span>-->
<!---->
<!--                                                </div>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-apple-alt"> </i> Chuyên: Thủy sản</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-shopping-bag"> </i> Sản phẩm: 499</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-map-marker-alt"> </i> Lâm Đồng</p>-->
<!--                                                <p class="provider-item__decriotion-item">-->
<!--                                                    <i class="fas fa-user-friends"></i> Theo dõi: 100k-->
<!--                                                </p>-->
<!--                                                <div class="buttons d-flex justify-content-center">-->
<!--                                                    <button-->
<!--                                                            class="btn btn-outline-primary mr-1">Xem ngay-->
<!--                                                    </button>-->
<!--                                                    <button class="btn btn-primary">Chat ngay</button>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-4 col-lg-2 d-flex justify-content-center">-->
<!--                                        <div class="card p-2">-->
<!--                                            <div class="text-center"><img-->
<!--                                                        src="assets/img/global/vendor/vendor1.jpg" class="img-fluid"-->
<!--                                                        width="150"/></div>-->
<!--                                            <div class="content">-->
<!--                                                <div class="d-flex justify-content-between align-items-center">-->
<!--                                                    <span class="category">Sầu riêng</span>-->
<!--                                                    <span class="price">*****</span>-->
<!---->
<!--                                                </div>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-apple-alt"> </i> Chuyên: Thủy sản</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-shopping-bag"> </i> Sản phẩm: 499</p>-->
<!--                                                <p class="provider-item__decriotion-item"><i-->
<!--                                                            class="fas fa-map-marker-alt"> </i> Lâm Đồng</p>-->
<!--                                                <p class="provider-item__decriotion-item">-->
<!--                                                    <i class="fas fa-user-friends"></i> Theo dõi: 100k-->
<!--                                                </p>-->
<!--                                                <div class="buttons d-flex justify-content-center">-->
<!--                                                    <button-->
<!--                                                            class="btn btn-outline-primary mr-1">Xem ngay-->
<!--                                                    </button>-->
<!--                                                    <button class="btn btn-primary">Chat ngay</button>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!---->
<!--                        </div>-->

                        <div class="provider-top">
                            <div class="container mt-5 mb-5">
<!--                                -->
                                <div class="grid__row app__content">

                                    <div class="grid__column-2">
                                        <nav class="provider-catagory">
                                            <div class="provider-catagory-filter">
                                                <h3 class="provider-catagory-filter__heading">
                                                    <i class="fas fa-list"></i>
                                                    Danh Mục
                                                </h3>
                                                <ul class="provider-catagory-filter-list">


                                                    <li class="provider-catagory-filter-item">
                                                        <a href="" class="provider-catagory-filter-link">
                                                            Tên danh mục
                                                        </a>
                                                    </li>

                                                    <li class="provider-catagory-filter-item">
                                                        <a href="" class="provider-catagory-filter-link">
                                                            Tên danh mục
                                                        </a>
                                                    </li>

                                                    <li class="provider-catagory-filter-item">
                                                        <a href="" class="provider-catagory-filter-link">
                                                            Tên danh mục
                                                        </a>
                                                    </li>


                                                </ul>

                                            </div>


                                            <div class="provider-catagory-search-filter">
                                                <h3 class="provider-catagory-search-filter__heading">
                                                    Bộ lọc
                                                </h3>
                                                <div class="provider-catagory-search-filter-NoiBan">
                                                    <h4 class="provider-catagory-search-filter__heading-2">
                                                        Nơi Bán
                                                    </h4>
                                                    <form>
                                                        <div class="provider-catagory-search-filter-form-container">
                                                            <input type="checkbox" id="address1" name="address1">
                                                            <label class="provider-catagory-search-filter__label"
                                                                   for="address1" value='TP.HCM'>TP.HCM</label><br>
                                                        </div>

                                                        <div class="provider-catagory-search-filter-form-container">
                                                            <input type="checkbox" id="address2" name="address2">
                                                            <label class="provider-catagory-search-filter__label"
                                                                   for="address2" value='Hà Nội'>Hà Nội</label><br>
                                                        </div>

                                                        <div class="provider-catagory-search-filter-form-container">
                                                            <input type="checkbox" id="address3" name="address3">
                                                            <label class="provider-catagory-search-filter__label"
                                                                   for="address3" value='Lâm Đồng'>Lâm Đồng</label><br>
                                                        </div>

                                                        <div class="provider-catagory-search-filter-form-container">
                                                            <input type="checkbox" id="address4" name="address4">
                                                            <label class="provider-catagory-search-filter__label"
                                                                   for="address4" value='Khác'>Khác</label><br>
                                                        </div>


                                                    </form>
                                                </div>


                                            </div>
                                        </nav>


                                    </div>

                                    <div class="grid__column-10">
                                        <div>
                                            <div class="provider-control-bar d-none d-lg-flex">
                                                <h4 class="provider-cotrol-bar__name">
                                                    Sắp xếp theo:
                                                </h4>

                                                <button class="btn-shop provider-control-bar__btn-pop ">
                                                    phổ biến
                                                </button>
                                                <button class="btn-shop provider-control-bar__btn-new">
                                                    mới nhất
                                                </button>
                                                <button class="btn-shop provider-control-bar_ntn_sale">
                                                    bán chạy

                                                </button>

                                                <button class="btn-shop provider-control-bar_price">
                                                    Giá
                                                    <button class="btn-shop provider-control-bar_price-up">
                                                        <i class="fas fa-chevron-up"></i>
                                                    </button>
                                                    <button class="btn-shop provider-control-bar_price-down">
                                                        <i class="fas fa-chevron-down"></i>
                                                    </button>
                                                </button>

                                            </div>


                                            <div class="all-provide">
                                                <div class="container mt-5 mb-5">

                                                    <div class="row g-2">
                                                        <?php
                                                        require_once('config.php');
                                                        $sql = "Select * from stores";
                                                        $result = mysqli_query($conn,$sql);


                                                        while($row = mysqli_fetch_assoc($result)){


                                                        ?>

                                                        <div class="col-md-3 d-flex justify-content-center">
                                                            <div class="card p-2">
                                                                <div class="text-center"><img
                                                                            src="assets/img/global/vendor/vendor1.jpg"
                                                                            class="img-fluid" width="150"/></div>
                                                                <div class="content">
                                                                    <div
                                                                            class="d-flex justify-content-between align-items-center">
                                                                        <a href="">
                                                                            <span class="category"><?= $row['StoreName']?></span>
                                                                        </a>
                                                                        <span class="price">*****</span>

                                                                    </div>
                                                                    <p class="provider-item__decriotion-item"><i
                                                                                class="fas fa-apple-alt"> </i> Chuyên:
                                                                       Trái cây</p>
                                                                    <p class="provider-item__decriotion-item"><i
                                                                                class="fas fa-shopping-bag"> </i> Sản
                                                                        phẩm: <?php
                                                                        $StoreId = $row['Id'];
                                                                        $sql1 = "Select COUNT(*) from products where StoreId = '$StoreId'";
                                                        $result1 = mysqli_query($conn,$sql1);
                                                        $row1=mysqli_fetch_array($result1)[0];
                                                        echo $row1;
                                                                        ?></p>
                                                                    <p class="provider-item__decriotion-item"><i
                                                                                class="fas fa-map-marker-alt"> </i><?=$row['StoreAdress']?></p>
                                                                    <p class="provider-item__decriotion-item">
                                                                        <i class="fas fa-user-friends"></i><?=$row['StorePhone']?>
                                                                    </p>
                                                                    <div
                                                                            class="buttons d-flex justify-content-center">
                                                                        <button
                                                                                class="btn btn-outline-primary mr-1">Xem
                                                                            ngay
                                                                        </button>
                                                                        <button
                                                                                class="btn btn-primary">Chat
                                                                            ngay
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        }
                                                        ?>




                                                    </div>
                                                </div>
                                                <div class="container mt-5 mb-5">

                                                    <div class="row g-2">






                                                    </div>
                                                </div>
                                                <div class="pagination__wrap">
                                                    <div class="pagination">
                                                        <a href="#">&laquo;</a>
                                                        <a href="#" class="active">1</a>
<!--                                                        <a href="#" >2</a>-->
<!--                                                        <a href="#">3</a>-->
<!--                                                        <a href="#">4</a>-->
<!--                                                        <a href="#">5</a>-->
<!--                                                        <a href="#">6</a>-->
                                                        <a href="#">&raquo;</a>
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
        </div>


    </div>


</main>

<div id="footer"></div>


</body>

</html>