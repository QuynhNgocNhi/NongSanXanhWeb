<?php
ob_start();
session_start();
?>
<?php
require_once('config.php');
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 2;
$offset = ($pageno - 1) * $no_of_records_per_page;
//Search by categỏy
if (isset($_GET['CategoryId'])) {
    $ProductCategoryId = $_GET['CategoryId'];
    $data_sql = "SELECT * FROM products  WHERE ProductCategoryId = '$ProductCategoryId' ORDER BY Id DESC LIMIT $offset, $no_of_records_per_page";
    $total_pages_sql = "SELECT COUNT(*) from products  WHERE ProductCategoryId = '$ProductCategoryId'";

} //Search by categỏy
elseif (isset($_POST['submit'])) {
    $Search = $_POST['Search'];
    $ProductCategoryId = $_POST['Category'];
    if ($ProductCategoryId == '0') {
        $data_sql = "SELECT * FROM products  WHERE Name LIKE '%$Search%' LIMIT $offset, $no_of_records_per_page";
        $total_pages_sql = "SELECT COUNT(*) from products WHERE Name LIKE '%$Search%'";
    } elseif ($ProductCategoryId != '0') {
        $data_sql = "SELECT * FROM products  WHERE ProductCategoryId = '$ProductCategoryId' AND Name LIKE '%$Search%' LIMIT $offset, $no_of_records_per_page";
        $total_pages_sql = "SELECT COUNT(*) from products  WHERE ProductCategoryId = '$ProductCategoryId'AND Name LIKE '%$Search%'";
    }

} else {
    $data_sql = "SELECT * FROM products LIMIT $offset, $no_of_records_per_page";
    $total_pages_sql = "SELECT COUNT(*) from products";

}
// Get data for current page
$res_data = mysqli_query($conn, $data_sql);
if ($res_data) {
    while ($Products = mysqli_fetch_array($res_data)) {
        $resultArray[] = $Products;
    }
}
// Get total pages
$result_total_pages = mysqli_query($conn, $total_pages_sql);
$total_products = mysqli_fetch_array($result_total_pages)[0];
$total_page_number = ceil($total_products / $no_of_records_per_page);

$wishlist_id_list=[];
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <link rel="stylesheet" href="register-signin.asset/register-signin.css">
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/mainf195.css?v=2.1"/>
    <script src="Products.js"></script>
    <script src="WishList.js"></script>
    <script>
        function CallActivePage() {
            document.getElementById("products-page").classList.add("active");
        }

        $(document).ready(function () {
            CallActivePage();
        });
    </script>
</head>

<body>
<?php
include_once('header.php');
?>

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
                                        $index = 1;
                                        $sql1 = "select * from productcategory";
                                        $result1 = mysqli_query($conn, $sql1);

                                        if (mysqli_num_rows($result1) > 0) {

                                            while ($row1 = mysqli_fetch_row($result1)) {

                                                echo "<li class='category-item'><a href='Products.php?CategoryId=$index'>$row1[1]</a></li>";
                                                $index++;

                                            }
                                        }
                                        ?>


                                    </ul>
                                </div>
                                <div class="sidebar__sort">

                                    <div class="sidebar__block open">
                                        <div class="sidebar__title">Lọc theo giá<span class="shop-widget-toggle"><i
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
                                        <div class="sidebar__title">Cửa hàng<span class="shop-widget-toggle"><i
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


                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-lg-9">
                            <div class="result__header">
                                <!--                                <div class="page">page-->
                                <!--                                    <input type="text" value="1" disabled>of 3-->
                                <!--                                </div>-->
                            </div>
                            <div class="filter__mobile">
                                <p class="title"><?php echo $total_products . " Products Found" ?></p>
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
                                        <div class="type"><a href="index.php"><span class="active"><i
                                                            class="icon-icons"></i></span></a><a
                                                    href="index.php"><span><i
                                                            class="icon-list4"></i></span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="result__filter ps-mobile-result">

                                <ul>
                                    <?php


                                    if (isset($_GET['CategoryId'])) {
                                        echo "<h5>Lọc theo:</h5>";
                                        $sqlCategoryName = "SELECT * FROM productcategory  WHERE No = '$ProductCategoryId'";
                                        $resultCategoryName = mysqli_query($conn, $sqlCategoryName);
                                        $rowCategoryName = mysqli_fetch_assoc($resultCategoryName);
                                        $CategoryName = $rowCategoryName['Name'];
//                                       todo:lấy tên category note fetch các loại đều ảnh hưởng nhau
                                        echo "<li>";
                                        echo $CategoryName;
                                        echo "<a href='Products.php'><i class='fi-rs-cross'></i></a></li>";
                                        echo "<li class='filter-clear'><a href='Products.php'>Xóa bộ lọc</a></li>";

                                    }
                                    ?>
                                    <!--                                    <li>Min: $15.00<i class="fi-rs-cross"></i></li>-->
                                    <!--                                    <li>Max: $132.00<i class="icon-cross"></i></li>-->
                                    <!--                                    <li>FreshMarket<i class="icon-cross"></i></li>-->
                                    <!--                                    <li>Gluten Free<i class="icon-cross"></i></li>-->

                                </ul>
                            </div>
                            <div class="result__sort">
                                <div class="viewtype--block">

                                    <p class="title">Có <?php echo $total_products . " kết quả tìm được." ?></p>
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
                                <h4 class="title"><?php echo $total_products . " Products Found" ?> </h4>
                            </div>
                            <?php
                            if (!empty($resultArray)){
                            ?>
                            <div class="result__content">
                                <div class="categories__products">

                                    <div class="row m-0">

                                        <?php


                                        foreach ($resultArray

                                                 as $item) {
                                            $id = $item['Id'];
                                            ?>

                                            <div class="col-6 col-md-4 col-lg-3 p-0">
                                                <div class="ps-product--standard"><a
                                                            href="<?= "Product_Details.php?ProductId=" . $id ?>">
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
                                                               href="<?= "Product_Details.php?ProductId=" . $id ?>"><?= $item['Name']; ?></a>
                                                        </h5>

                                                        <div class="Price-Unit">
                                                            <p class="ps-product__unit"><?= $item['ProductUnitName']; ?></p>

                                                            <p class="ps-product-price-block">
                                                                <span class="ps-product__sale">$<?= $item['Price']; ?> đ</span>
                                                            </p>
                                                        </div>

                                                        <div class="ps-product__box">
                                                            <button onclick="AddToCart(<?= $id ?>)"
                                                                    type="submit" id="<?= $id ?>"
                                                                    name="<?= $id ?>"
                                                                    class="ps-product__addcart"
                                                            <i class="fi-rs-shopping-cart pr-10"></i>Thêm
                                                            <?php

                                                            if (in_array($item['Id'], $wishlist_id_list)) {
                                                                echo '<button onclick="AddToWishList(' . $id . ',1); setColor(event);" class="ps-product__wishlist"><i
                                                                        id = "wishlist' . $id . '" class="fa fi-rs-heart text-danger "></i></button>';
                                                            } else echo '<button onclick="AddToWishList(' . $id . ',0); setColor(event); " class="ps-product__wishlist"><i
                                                                       id = "wishlist' . $id . '" class="fa fi-rs-heart text"></i></button>';
                                                            ?>

                                                        </div>
                                                    </div>


                                                </div>

                                            </div>


                                            <?php
                                        }
                                        } ?>

                                        <!--                                        <li class=""><a href="#"><i class="noUi-active fi-rs-angle-left"></i></a></li>-->
                                        <!--                                    <li class="active"><a href="#">1</a></li>-->
                                        <!--                                    <li><a href="#">2</a></li>-->
                                        <!--                                    <li><a href="#">3</a></li>-->
                                        <!--                                    <li class="chevron"><a href="#"><i class="icon-chevron-right"></i></a></li>-->

                                    </div>


                                </div>
                            </div>
                            <div class="ps-pagination blog--pagination">
                                <ul class="pagination">
                                    <li><a href="?pageno=1"><i class="fi-rs-angle-double-small-left"></i></a></li>
                                    <li class="<?php if ($pageno <= 1) {
                                        echo 'disabled';
                                    } ?>">
                                        <a href="<?php if ($pageno <= 1) {
                                            echo '#';
                                        } else {
                                            echo "?pageno=" . ($pageno - 1);
                                        } ?>"><i class="fi-rs-angle-small-left"></i></a>
                                    </li>
                                    <?php
                                    for ($i = 1; $i <= $total_page_number; $i++) {
                                        echo
                                            '<li class="page-item ' . (($pageno == $i) ? "active" : "") .
                                            '"><a class="" href=" ?pageno=' . $i . '">' . $i . '</a></li>
                                            ';

                                    }
                                    ?>
                                    <li class="<?php if ($pageno >= $total_page_number) {
                                        echo 'disabled';
                                    } ?>">
                                        <a href="<?php if ($pageno >= $total_page_number) {
                                            echo '#';
                                        } else {
                                            echo "?pageno=" . ($pageno + 1);
                                        } ?>"><i class="fi-rs-angle-small-right"></i></a>
                                    </li>
                                    <li><a href="?pageno=<?php echo $total_page_number; ?>"><i
                                                    class="fi-rs-angle-double-small-right"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!--Footer -->
    <?php
    require_once('footer.php');
    ?>
</main>

<script type="text/javascript">
    function setColor(e) {
        var target = e.target,
            status = e.target.classList.contains('text-danger');

        e.target.classList.add(status ? 'text' : 'text-danger');
        e.target.classList.remove(status ? 'text-danger' : 'text');
    }
</script>
<!--Footer -->

</body>
</html>

