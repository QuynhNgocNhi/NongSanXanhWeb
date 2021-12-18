<?php
ob_start();
session_start();
?>
<?php
require_once('config.php');

if (isset($_GET['CategoryId'])) {
    $ProductCategoryId = $_GET['CategoryId'];
    $sql = "SELECT * FROM products  WHERE ProductCategoryId = '$ProductCategoryId' ORDER BY Id DESC";
    $result = mysqli_query($conn, $sql);

} else {
    $sql = "SELECT * FROM products ORDER BY Id DESC";
    $result = mysqli_query($conn, $sql);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <link rel="stylesheet" href="register-signin.asset/register-signin.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/mainf195.css?v=2.1"/>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/global/2.jpg"/>
    <!-- homepage CSS -->
    <link rel="stylesheet" href="home.asset/css/style.css"/>
    <link rel="stylesheet" href="home.asset/home.css?v=2.1"/>
    <link rel="stylesheet" href="home.asset/css/demo.css">
    <link rel="stylesheet" href="home.asset/css/nouislider.css">
    <link rel="stylesheet" href="home.asset/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="home.asset/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="home.asset/plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="home.asset/plugins/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="home.asset/plugins/slick/slick.css">
    <link rel="stylesheet" href="home.asset/plugins/lightGallery/dist/css/lightgallery.min.css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <!-- call header-footer -->
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
        function CallActivePage() {
            document.getElementById("products-page").classList.add("active");
        }

        $(document).ready(function () {
            document.getElementById('header').innerHTML = loadPage('header.php');
            CallActivePage();
            document.getElementById('footer').innerHTML = loadPage('footer.php');
        });


    </script>


</head>

<body>
<div id="header"></div>
<main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.php" rel="nofollow"><i class="fi-rs-home mr-5"></i>Trang chủ</a>
                <span> Sản phẩm</span>
            </div>
        </div>
    </div>
    <div class="container">
        <section class="section-shop section-featured--default ps-home--block">
            <div class="container">
                <div class="shop__content">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <div class="ps-shop--sidebar">
                                <div class="sidebar__category">

                                    <div class="sidebar__title daily-deals">Danh mục</div>
                                    <ul class="menu--mobile">
                                        <?php

                                        include "config.php";

                                        $sql1 = "select * from productcategory";
                                        $result1 = mysqli_query($conn, $sql1);

                                        if (mysqli_num_rows($result1) > 0) {

                                            while ($row1 = mysqli_fetch_row($result1)) {

                                                echo "<li class='category-item'><a href='Products.php?CategoryId=$row1[0]'>$row1[1]</a></li>";

                                            }
                                        }
                                        ?>


                                    </ul>
                                </div>
                                <div class="sidebar__sort">
                                    <div class="sidebar__block open">
                                        <div class="sidebar__title">BY BRANDS<span class="shop-widget-toggle"><i
                                                        class="icon-minus"></i></span></div>
                                        <form action="#">
                                            <div class="input-group">
                                                <input class="form-control" type="text" placeholder="Search brand...">
                                                <div class="input-group-append"><i class="icon-magnifier"></i></div>
                                            </div>
                                        </form>
                                        <div class="brand__content">
                                            <ul>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkbox0"
                                                               value="">
                                                        <label for="checkbox0"><img
                                                                    src="img/brand/brand_themeforest.jpg"
                                                                    alt><span>(39)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkbox1"
                                                               value="">
                                                        <label for="checkbox1"><img src="img/brand/brand_envato.jpg"
                                                                                    alt><span>(146)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkbox2"
                                                               value="">
                                                        <label for="checkbox2"><img src="img/brand/brand_codecanyon.jpg"
                                                                                    alt><span>(20)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkbox3"
                                                               value="">
                                                        <label for="checkbox3"><img
                                                                    src="img/brand/brand_cudicjungle.jpg"
                                                                    alt><span>(16)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkbox4"
                                                               value="">
                                                        <label for="checkbox4"><img src="img/brand/brand_videohive.jpg"
                                                                                    alt><span>(50)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkbox5"
                                                               value="">
                                                        <label for="checkbox5"><img src="img/brand/brand_photodune.jpg"
                                                                                    alt><span>(23)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkbox6"
                                                               value="">
                                                        <label for="checkbox6"><img src="img/brand/brand_evatotuts.jpg"
                                                                                    alt><span>(11)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkbox7"
                                                               value="">
                                                        <label for="checkbox7"><img src="img/brand/brand_3docean.jpg"
                                                                                    alt><span>(67)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkbox8"
                                                               value="">
                                                        <label for="checkbox8"><img src="img/brand/microlancer.jpg" alt><span>(34)</span></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sidebar__block open">
                                        <div class="sidebar__title">BY PRICE<span class="shop-widget-toggle"><i
                                                        class="icon-minus"></i></span></div>
                                        <div class="block__content">
                                            <div class="block__price">
                                                <div id="slide-price"></div>
                                            </div>
                                            <div class="block__input">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span
                                                                class="input-group-text">$</span></div>
                                                    <input class="form-control" type="text" id="input-with-keypress-0">
                                                </div>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span
                                                                class="input-group-text">$</span></div>
                                                    <input class="form-control" type="text" id="input-with-keypress-1">
                                                </div>
                                                <button>Go</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sidebar__block open">
                                        <div class="sidebar__title">SOLD BY<span class="shop-widget-toggle"><i
                                                        class="icon-minus"></i></span></div>
                                        <div class="block__content">
                                            <ul>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="sold0"
                                                               value="">
                                                        <label for="sold0">Farmart<span>(55)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="sold1"
                                                               value="">
                                                        <label for="sold1">All Vendors<span>(223)</span></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sidebar__block open">
                                        <div class="sidebar__title">OPTIONS<span class="shop-widget-toggle"><i
                                                        class="icon-minus"></i></span></div>
                                        <div class="block__content">
                                            <ul>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="option0"
                                                               value="">
                                                        <label for="option0">On Sales<span>(145)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="option1"
                                                               value="">
                                                        <label for="option1">new<span>(43)</span></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sidebar__block open">
                                        <div class="sidebar__title">DIETARY & LIFESTYLE<span class="shop-widget-toggle"><i
                                                        class="icon-minus"></i></span></div>
                                        <div class="block__content">
                                            <ul>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="life0"
                                                               value="">
                                                        <label for="life0">Vegetarian<span>(23)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="life1"
                                                               value="">
                                                        <label for="life1">Vegan<span>(37)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="life2"
                                                               value="">
                                                        <label for="life2">Gluten Free<span>(114)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="life3"
                                                               value="">
                                                        <label for="life3">Milk Free<span>(50)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="life4"
                                                               value="">
                                                        <label for="life4">Fat Free<span>(24)</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="life5"
                                                               value="">
                                                        <label for="life5">Organic<span>(18)</span></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-lg-9">


                            <a class="ps-button shop__link" href="shop-view-listing.html">Shop all product<i
                                        class="icon-chevron-right"></i></a>
                            <!--                            <div class="result__header">-->
                            <!--                                <h4 class="title">29<span>Product Found</span></h4>-->
                            <!--                                <div class="page">page-->
                            <!--                                    <input type="text" value="1" disabled>of 3-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <div class="filter__mobile">
                                <div class="viewtype--block">
                                    <div class="viewtype__sortby">
                                        <div class="select">
                                            <select class="single-select2-no-search" name="state">
                                                <option value="popularity" selected="selected">Sort by popularity
                                                </option>
                                                <option value="price">Sort by price</option>
                                                <option value="sale">Sort by sale of</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="viewtype__select"><span class="text ps-mobile-filter"><i
                                                    class="icon-equalizer"></i>Filter</span>
                                        <div class="type"><a href="shop-view-grid.html"><span class="active"><i
                                                            class="icon-icons"></i></span></a><a
                                                    href="shop-view-listing.html"><span><i
                                                            class="icon-list4"></i></span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="result__filter ps-mobile-result">
                                <h5>Your filters:</h5>
                                <ul>
                                    <?php


                                    if (isset($_GET['CategoryId'])) {
                                        $sqlCategoryName = "SELECT * FROM productcategory  WHERE Id = '$ProductCategoryId'";
                                        $resultCategoryName = mysqli_query($conn, $sqlCategoryName);
                                        $rowCategoryName = mysqli_fetch_assoc($resultCategoryName);
                                        $CategoryName = $rowCategoryName['Name'];
//                                       todo:lấy tên category note fetch các loại đều ảnh hưởng nhau
                                        echo "<li>";
                                        echo $CategoryName;
                                        echo "<i class='fi-rs-cross'></i></li>";

                                    }
                                    ?>
                                    <li>Min: $15.00<i class="fi-rs-cross"></i></li>
                                    <li>Max: $132.00<i class="icon-cross"></i></li>
                                    <li>FreshMarket<i class="icon-cross"></i></li>
                                    <li>Gluten Free<i class="icon-cross"></i></li>
                                    <li class="filter-clear">Clear all</li>
                                </ul>
                            </div>
                            <div class="result__sort">
                                <div class="viewtype--block">

                                    <div class="viewtype__select"><span class="text">Sắp xếp theo:</span>
                                        <div class="select">
                                            <select class="single-select2-no-search" name="View" id="View">
                                                <option value="popularity" selected="selected">Mới nhất
                                                </option>
                                                <option value="price">Giá cao nhất</option>
                                                <option value="sale">Giá thấp nhất</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="result__header mobile">
                                <h4 class="title">29<span>Product Found</span></h4>
                            </div>
                            <div class="result__content">
                                <div class="categories__products">
                                    <div class="row m-0">


                                        <?php
                                        $resultArray = array();
                                        while ($Products = mysqli_fetch_array($result)) {
                                            $resultArray[] = $Products;
                                        }
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
                                                            <p class="ps-product__unit"><?= $item['ProductUnitName']; ?></p>

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
                                <div class="ps-pagination blog--pagination">
                                    <ul class="pagination">
                                        <li class="chevron"><a href="#"><i class="icon-chevron-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="chevron"><a href="#"><i class="icon-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="footer"></div>

</main>
<script type="text/javascript">
    $(document).ready(function () {
        $("#View").change(function () {
            var ViewValue = $this.val();
            Sort(ViewValue);

        });

    });

    function Sort(ViewValue) {
        $.ajax({
            type: 'POST',
            url: 'Products_Process.php',
            data: {

                "Name": $('#Name').val(),

            },

            success: function (data) {
                swal({
                    'title': 'Successful',

                    text: "Thành công!",
                    icon: "success"

                }).then(function () {
                    window.open('Product_List.php', '_self')
                });
            },
            error: function (data) {
                swal({
                    'title': 'error',
                    text: "Thất bại!",
                    icon: "warning",
                    dangerMode: true

                })
            }
        });
    }
</script>

</body>
</html>

