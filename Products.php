<?php
ob_start();
session_start();
session_destroy();
?>
<?php
require_once('config.php');
$sql = "SELECT * FROM products ORDER BY Id DESC";
$result = mysqli_query($conn, $sql);

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
                                    <div class="sidebar__title">ALL CATEGORIES</div>
                                    <div class="sidebar__title">ALL CATEGORIES</div>
                                    <ul class="menu--mobile">
                                        <li class="daily-deals category-item"><a href="flash-sale.html">Daily Deals</a>
                                        </li>
                                        <li class="category-item"><a href="shop-categories.html">Top Promotions</a></li>
                                        <li class="category-item"><a href="shop-categories.html">New Arrivals</a></li>
                                        <li class="menu-item-has-children category-item"><a href="shop-categories.html">Fresh</a><span
                                                    class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="shop-view-grid.html">Meat & Poultry</a></li>
                                                <li><a href="shop-view-grid.html">Fruit</a></li>
                                                <li><a href="shop-view-grid.html">Vegetables</a></li>
                                                <li><a href="shop-view-grid.html">Milks, Butter & Eggs</a></li>
                                                <li><a href="shop-view-grid.html">Fish</a></li>
                                                <li><a href="shop-view-grid.html">Frozen</a></li>
                                                <li><a href="shop-view-grid.html">Cheese</a></li>
                                                <li><a href="shop-view-grid.html">Pasta & Sauce</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children category-item"><a href="shop-categories.html">Food
                                                Cupboard</a><span class="sub-toggle"><i
                                                        class="icon-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="shop-view-grid.html">Crisps, Snacks & Nuts</a></li>
                                                <li><a href="shop-view-grid.html">Breakfast Cereals</a></li>
                                                <li><a href="shop-view-grid.html">Tins & Cans</a></li>
                                                <li><a href="shop-view-grid.html">Chocolate & Sweets</a></li>
                                            </ul>
                                        </li>
                                        <li class="category-item"><a href="shop-categories.html">Bakery</a></li>
                                        <li class="category-item"><a href="shop-categories.html">Frozen Foods</a></li>
                                        <li class="menu-item-has-children category-item"><a href="shop-categories.html">Ready
                                                Meals</a><span class="sub-toggle"><i
                                                        class="icon-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="shop-view-grid.html">Traditional British</a></li>
                                                <li><a href="shop-view-grid.html">Indian</a></li>
                                                <li><a href="shop-view-grid.html">Italian</a></li>
                                                <li><a href="shop-view-grid.html">Chinese</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children category-item"><a href="shop-categories.html">Drinks,
                                                Tea &amp; Coffee</a><span class="sub-toggle"><i
                                                        class="icon-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="shop-view-grid.html">Tea & Coffee</a></li>
                                                <li><a href="shop-view-grid.html">Hot Drinks</a></li>
                                                <li><a href="shop-view-grid.html">Fizzy Drinks</a></li>
                                                <li><a href="shop-view-grid.html">Water</a></li>
                                            </ul>
                                        </li>
                                        <li class="category-item"><a href="shop-categories.html">Beer, Wine &
                                                Spirits</a></li>
                                        <li class="category-item"><a href="shop-categories.html">Baby & Child</a></li>
                                        <li class="category-item"><a href="shop-categories.html">Kitchen & Dining</a>
                                        </li>
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
                                        <div class="sidebar__title">AVG. REVIEW<span class="shop-widget-toggle"><i
                                                        class="icon-minus"></i></span></div>
                                        <div class="block__content">
                                            <ul>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="avg5"
                                                               value="">
                                                        <label for="rating5">
                                                            <select class="rating-stars" id="rating5">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5" selected="selected">5</option>
                                                            </select><span class="text-up">& Up</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="avg4"
                                                               value="">
                                                        <label for="rating4">
                                                            <select class="rating-stars" id="rating4">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4" selected="selected">4</option>
                                                                <option value="5">5</option>
                                                            </select><span class="text-up">& Up</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="avg3"
                                                               value="">
                                                        <label for="rating3">
                                                            <select class="rating-stars" id="rating3">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3" selected="selected">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select><span class="text-up">& Up</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="avg2"
                                                               value="">
                                                        <label for="rating2">
                                                            <select class="rating-stars" id="rating2">
                                                                <option value="1">1</option>
                                                                <option value="2" selected="selected">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select><span class="text-up">& Up</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="avg1"
                                                               value="">
                                                        <label for="rating1">
                                                            <select class="rating-stars" id="rating1">
                                                                <option value="1" selected="selected">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select><span class="text-up">& Up</span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
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
                            <div class="result__header">
                                <h4 class="title">29<span>Product Found</span></h4>
                                <div class="page">page
                                    <input type="text" value="1" disabled>of 3
                                </div>
                            </div>
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
                                    <li>Min: $15.00<i class="icon-cross"></i></li>
                                    <li>Max: $132.00<i class="icon-cross"></i></li>
                                    <li>FreshMarket<i class="icon-cross"></i></li>
                                    <li>Gluten Free<i class="icon-cross"></i></li>
                                    <li class="filter-clear">Clear all</li>
                                </ul>
                            </div>
                            <div class="result__sort">
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
                                    <div class="viewtype__select"><span class="text">View: </span>
                                        <div class="select">
                                            <select class="single-select2-no-search" name="state">
                                                <option value="25" selected="selected">25 per page</option>
                                                <option value="12">12 per page</option>
                                                <option value="5">5 per page</option>
                                            </select>
                                        </div>
                                        <div class="type"><a href="shop-view-grid.html"><span class="active"><i
                                                            class="icon-icons"></i></span></a><a
                                                    href="shop-view-extended.html"><span><i
                                                            class="icon-grid3"></i></span></a><a
                                                    href="shop-view-listing.html"><span><i
                                                            class="icon-list4"></i></span></a></div>
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
</body>
</html>

