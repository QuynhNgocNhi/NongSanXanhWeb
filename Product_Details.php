<?php
ob_start();
session_start();
require_once('config.php');
?>
<?php
//Get Product
$ProductId = $_GET['ProductId'];
$sql = "SELECT * FROM products WHERE Id = '" . $ProductId . "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (!$row) {
    header("location: page-404.php");
}
//add to recentview
if (isset($_COOKIE['RecentView'])) {
    $cookie_data = stripslashes($_COOKIE['RecentView']);
    $RecentViewData = json_decode($cookie_data, true);
} else {
    $RecentViewData = array();
}
$item_id_list = array_column($RecentViewData, 'Id');
if (in_array($ProductId, $item_id_list)) {
    foreach ($RecentViewData as $keys => $values) {
        if ($values["Id"] == $ProductId) {
            unset($RecentViewData[$keys]);
        }

    }
}
//Product new in ViewedList
$ItemData = array(
    'Id' => $row['Id'],
    'Image' => $row['Img'],
);

$RecentViewData[] = $ItemData;
// Insert item to RecentView array
$RecentViewDataFull = json_encode($RecentViewData, JSON_UNESCAPED_UNICODE);
setcookie("RecentView", $RecentViewDataFull, time() + 86400, "/");
//end recently viewed

//Get store
$sql1 = "SELECT * FROM stores WHERE Id = '" . $row['StoreId'] . "'";
$result1 = mysqli_query($conn, $sql1);
$Store = mysqli_fetch_assoc($result1);

//todo: call from store, img, unit, category
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/mainf195.css?v=2.1"/>

    <title>Sản phẩm</title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/mainf195.css?v=2.1"/>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/global/2.jpg"/>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>

</head>

<body>

<?php
require_once('header.php');
?>

<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.php" rel="nofollow"><i class="fi-rs-home mr-5"></i>Trang chủ</a>
                <span></span> <a href="products.html">Trái cây</a> <span></span> <?php echo $row['Name']; ?>
            </div>
        </div>
    </div>
    <div class="container mb-30">
        <div class="row">
            <div class="col-xl-11 col-lg-12 m-auto">
                <div class="row">
                    <div class="col-xl-9">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50 mt-30">
                                <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                    <div class="detail-gallery">
                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                        <!-- MAIN SLIDES -->
                                        <div class="product-image-slider">
                                            <!--                                            <figure class="border-radius-10">-->
                                            <!--                                                <img src="data/Product_Img_Upload/-->
                                            <?php //= $row['Img']; ?><!--"-->
                                            <!--                                                     alt="product image"/>-->
                                            <!--                                            </figure>-->
                                            <?php
                                            include "config.php";


                                            //Get image
                                            $sql1 = "SELECT * FROM productimgs WHERE ProductId = '" . $ProductId . "'";
                                            $result1 = mysqli_query($conn, $sql1);

                                            if (mysqli_num_rows($result1) > 0) {
                                                $index = 0;
                                                while ($ProductImages = mysqli_fetch_assoc($result1)) {
                                                    echo "<figure class='border-radius-10'>
                                                <img src= 'data/Product_Img_Upload/" . $ProductImages['ImgUrl'] . "' alt='product image'/>
                                            </figure>";

                                                }
                                            }
                                            ?>


                                            <!--                                                <figure class="border-radius-10">-->
                                            <!--                                                    <img src="assets/imgs/shop/product-16-3.jpg" alt="product image" />-->
                                            <!--                                                </figure>-->
                                            <!--                                                <figure class="border-radius-10">-->
                                            <!--                                                    <img src="assets/imgs/shop/product-16-4.jpg" alt="product image" />-->
                                            <!--                                                </figure>-->
                                            <!--                                                <figure class="border-radius-10">-->
                                            <!--                                                    <img src="assets/imgs/shop/product-16-5.jpg" alt="product image" />-->
                                            <!--                                                </figure>-->
                                            <!--                                                <figure class="border-radius-10">-->
                                            <!--                                                    <img src="assets/imgs/shop/product-16-6.jpg" alt="product image" />-->
                                            <!--                                                </figure>-->
                                            <!--                                                <figure class="border-radius-10">-->
                                            <!--                                                    <img src="assets/imgs/shop/product-16-7.jpg" alt="product image" />-->
                                            <!--                                                </figure>-->
                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class="slider-nav-thumbnails">
                                            <!--                                            <div><img src="data/Product_Img_Upload/-->
                                            <?php //= $row['Img']; ?><!--"-->
                                            <!--                                                      alt="product image"/>-->
                                            <!--                                            </div>-->
                                            <?php
                                            include "config.php";


                                            //Get image
                                            $sql1 = "SELECT * FROM productimgs WHERE ProductId = '" . $ProductId . "'";
                                            $result1 = mysqli_query($conn, $sql1);

                                            if (mysqli_num_rows($result1) > 0) {
                                                $index = 0;
                                                while ($ProductImages = mysqli_fetch_assoc($result1)) {
                                                    echo "<div><img src='data/Product_Img_Upload/" . $ProductImages['ImgUrl'] . "' alt='product image'/>
                                            </div>";

                                                }
                                            }
                                            ?>

                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info pr-30 pl-30">

                                        <h2 class="title-detail"><?= $row['Name']; ?></h2>
                                        <div class="product-detail-rating">
                                            <div class="product-rate-cover text-end">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 90%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (3 đánh giá)</span>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <span class="current-price text-brand"><?= $row['Price']; ?></span>
                                                <span>
                                                        <span class="ml-15">vnđ</span>
                                                        
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="short-desc mb-30">
                                            <p class="font-lg"></p>
                                        </div>
                                        <div class="attr-detail attr-size mb-30">
                                            <strong class="mr-10">Đóng gói / Đơn vị: </strong>

                                            <ul class="list-filter size-filter font-small">
                                                <li class="active"><a href="#"><?= $row['ProductUnitName']; ?></a></li>
                                            </ul>
                                            <!--                                                <ul class="list-filter size-filter font-small">-->
                                            <!--                                                    <li><a href="#">50kg</a></li>-->
                                            <!--                                                    <li class="active"><a href="#">60kg</a></li>-->
                                            <!--                                                    <li><a href="#">80kg</a></li>-->
                                            <!--                                                    <li><a href="#">100kg</a></li>-->
                                            <!--                                                    <li><a href="#">150kg</a></li>-->
                                            <!--                                                </ul>-->
                                        </div>
                                        <div class="detail-extralink mb-50">
                                            <div class="detail-qty border radius">
                                                <a href="#" class="qty-down"><i
                                                            class="fi-rs-angle-small-down"></i></a>
                                                <span class="qty-val">1</span>
                                                <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                            </div>
                                            <div class="product-extra-link2">
                                                <button type="submit" class="button button-add-to-cart"><i
                                                            class="fi-rs-shopping-cart"></i>Thêm vào giỏ
                                                </button>
                                                <button type="submit" class="button button-add-to-cart"><i
                                                            class="fi-rs-time-fast"></i>Mua ngay
                                                </button>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                   href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

                                            </div>
                                        </div>
                                        <div class="font-xs">
                                            <ul class="mr-50 float-start">
                                                <li class="mb-5">
                                                    Loại:
                                                    <a href="#" rel="tag"><?= $row['ProductCategory']; ?></a>
                                                </li>
                                                <li class="mb-5">
                                                    Ngày đăng:<span class="text-brand"><?= $row['DatePublic']; ?></span>
                                                </li>
                                                <li>
                                                    Còn hàng đến: <span class="text-brand">10/11/2021</span>
                                                </li>
                                            </ul>
                                            <ul class="float-start">
                                                <li class="mb-5">
                                                    HSD: <span href="#">5 ngày</span>
                                                </li>
                                                <li class="mb-5">
                                                    Tags: <a href="#" rel="tag">Trái cây</a>,
                                                    <a href="#" rel="tag">Sầu riêng</a>,
                                                    <a href="#" rel="tag">Ri6</a>
                                                </li>
                                                <li>
                                                    Tình trạng:<span class="in-stock text-brand ml-5"
                                                    >Còn hàng</span
                                                    >
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="tab-style3">
                                    <ul class="nav nav-tabs text-uppercase">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                                               href="#Description">Mô tả sản phẩm</a>
                                        </li>
                                        <!--                                        <li class="nav-item">-->
                                        <!--                                            <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab"-->
                                        <!--                                               href="#Additional-info">Thông tin thêm</a>-->
                                        <!--                                        </li>-->
                                        <li class="nav-item">
                                            <a class="nav-link" id="Vendor-info-tab" data-bs-toggle="tab"
                                               href="#Vendor-info">Nhà cung cấp</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab"
                                               href="#Reviews">Đánh giá (3)</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content shop_info_tab entry-main-content">
                                        <div class="tab-pane fade show active" id="Description">
                                            <div class="">
                                                <p><?= $row['Description']; ?></p>
                                                <ul class="product-more-infor mt-30">
                                                    <li><span>Đơn vị</span> <a
                                                                href="#"><?= $row['ProductUnitName']; ?></a></li>
                                                    <!--                                                        <li><span>Color</span> Green, Pink, Powder Blue, Purple</li>-->
                                                    <!--                                                        <li><span>Quantity Per Case</span> 100ml</li>-->
                                                    <!--                                                        <li><span>Ethyl Alcohol</span> 70%</li>-->
                                                    <!--                                                        <li><span>Piece In One</span> Carton</li>-->
                                                </ul>
                                                <!--                                                    <hr class="wp-block-separator is-style-dots" />-->
                                                <!--                                                    <p>Laconic overheard dear woodchuck wow this outrageously taut-->
                                                <!--                                                        beaver hey hello far meadowlark imitatively egregiously hugged-->
                                                <!--                                                        that yikes minimally unanimous pouted flirtatiously as beaver-->
                                                <!--                                                        beheld above forward energetic across this jeepers beneficently-->
                                                <!--                                                        cockily less a the raucously that magic upheld far so the this-->
                                                <!--                                                        where crud then below after jeez enchanting drunkenly more much-->
                                                <!--                                                        wow callously irrespective limpet.</p>-->
                                                <!--                                                    <h4 class="mt-30">Đóng gói và vận chuyển</h4>-->
                                                <!--                                                    <hr class="wp-block-separator is-style-wide" />-->
                                                <!--                                                    <p>Less lion goodness that euphemistically robin expeditiously-->
                                                <!--                                                        bluebird smugly scratched far while thus cackled sheepishly-->
                                                <!--                                                        rigid after due one assenting regarding censorious while-->
                                                <!--                                                        occasional or this more crane went more as this less much amid-->
                                                <!--                                                        overhung anathematic because much held one exuberantly sheep-->
                                                <!--                                                        goodness so where rat wry well concomitantly.</p>-->
                                                <!--                                                    <p>Scallop or far crud plain remarkably far by thus far iguana lewd-->
                                                <!--                                                        precociously and and less rattlesnake contrary caustic wow this-->
                                                <!--                                                        near alas and next and pled the yikes articulate about as less-->
                                                <!--                                                        cackled dalmatian in much less well jeering for the thanks-->
                                                <!--                                                        blindly sentimental whimpered less across objectively fanciful-->
                                                <!--                                                        grimaced wildly some wow and rose jeepers outgrew lugubrious-->
                                                <!--                                                        luridly irrationally attractively dachshund.</p>-->
                                                <!--                                                    <h4 class="mt-30">Suggested Use</h4>-->
                                                <!--                                                    <ul class="product-more-infor mt-30">-->
                                                <!--                                                        <li>Refrigeration not necessary.</li>-->
                                                <!--                                                        <li>Stir before serving</li>-->
                                                <!--                                                    </ul>-->
                                                <!--                                                    <h4 class="mt-30">Other Ingredients</h4>-->
                                                <!--                                                    <ul class="product-more-infor mt-30">-->
                                                <!--                                                        <li>Organic raw pecans, organic raw cashews.</li>-->
                                                <!--                                                        <li>This butter was produced using a LTG (Low Temperature-->
                                                <!--                                                            Grinding) process</li>-->
                                                <!--                                                        <li>Made in machinery that processes tree nuts but does not-->
                                                <!--                                                            process peanuts, gluten, dairy or soy</li>-->
                                                <!--                                                    </ul>-->
                                                <!--                                                    <h4 class="mt-30">Warnings</h4>-->
                                                <!--                                                    <ul class="product-more-infor mt-30">-->
                                                <!--                                                        <li>Oil separation occurs naturally. May contain pieces of-->
                                                <!--                                                            shell.</li>-->
                                                <!--                                                    </ul>-->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Additional-info">
                                            <!--                                                <table class="font-md">-->
                                            <!--                                                    <tbody>-->
                                            <!--                                                        <tr class="stand-up">-->
                                            <!--                                                            <th>Stand Up</th>-->
                                            <!--                                                            <td>-->
                                            <!--                                                                <p>35″L x 24″W x 37-45″H(front to back wheel)</p>-->
                                            <!--                                                            </td>-->
                                            <!--                                                        </tr>-->
                                            <!--                                                        <tr class="folded-wo-wheels">-->
                                            <!--                                                            <th>Folded (w/o wheels)</th>-->
                                            <!--                                                            <td>-->
                                            <!--                                                                <p>32.5″L x 18.5″W x 16.5″H</p>-->
                                            <!--                                                            </td>-->
                                            <!--                                                        </tr>-->
                                            <!--                                                        <tr class="folded-w-wheels">-->
                                            <!--                                                            <th>Folded (w/ wheels)</th>-->
                                            <!--                                                            <td>-->
                                            <!--                                                                <p>32.5″L x 24″W x 18.5″H</p>-->
                                            <!--                                                            </td>-->
                                            <!--                                                        </tr>-->
                                            <!--                                                        <tr class="door-pass-through">-->
                                            <!--                                                            <th>Door Pass Through</th>-->
                                            <!--                                                            <td>-->
                                            <!--                                                                <p>24</p>-->
                                            <!--                                                            </td>-->
                                            <!--                                                        </tr>-->
                                            <!--                                                        <tr class="frame">-->
                                            <!--                                                            <th>Frame</th>-->
                                            <!--                                                            <td>-->
                                            <!--                                                                <p>Aluminum</p>-->
                                            <!--                                                            </td>-->
                                            <!--                                                        </tr>-->
                                            <!--                                                        <tr class="weight-wo-wheels">-->
                                            <!--                                                            <th>Weight (w/o wheels)</th>-->
                                            <!--                                                            <td>-->
                                            <!--                                                                <p>20 LBS</p>-->
                                            <!--                                                            </td>-->
                                            <!--                                                        </tr>-->
                                            <!--                                                        <tr class="weight-capacity">-->
                                            <!--                                                            <th>Weight Capacity</th>-->
                                            <!--                                                            <td>-->
                                            <!--                                                                <p>60 LBS</p>-->
                                            <!--                                                            </td>-->
                                            <!--                                                        </tr>-->
                                            <!--                                                        <tr class="width">-->
                                            <!--                                                            <th>Width</th>-->
                                            <!--                                                            <td>-->
                                            <!--                                                                <p>24″</p>-->
                                            <!--                                                            </td>-->
                                            <!--                                                        </tr>-->
                                            <!--                                                        <tr class="handle-height-ground-to-handle">-->
                                            <!--                                                            <th>Handle height (ground to handle)</th>-->
                                            <!--                                                            <td>-->
                                            <!--                                                                <p>37-45″</p>-->
                                            <!--                                                            </td>-->
                                            <!--                                                        </tr>-->
                                            <!--                                                        <tr class="wheels">-->
                                            <!--                                                            <th>Wheels</th>-->
                                            <!--                                                            <td>-->
                                            <!--                                                                <p>12″ air / wide track slick tread</p>-->
                                            <!--                                                            </td>-->
                                            <!--                                                        </tr>-->
                                            <!--                                                        <tr class="seat-back-height">-->
                                            <!--                                                            <th>Seat back height</th>-->
                                            <!--                                                            <td>-->
                                            <!--                                                                <p>21.5″</p>-->
                                            <!--                                                            </td>-->
                                            <!--                                                        </tr>-->
                                            <!--                                                        <tr class="head-room-inside-canopy">-->
                                            <!--                                                            <th>Head room (inside canopy)</th>-->
                                            <!--                                                            <td>-->
                                            <!--                                                                <p>25″</p>-->
                                            <!--                                                            </td>-->
                                            <!--                                                        </tr>-->
                                            <!--                                                        <tr class="pa_color">-->
                                            <!--                                                            <th>Color</th>-->
                                            <!--                                                            <td>-->
                                            <!--                                                                <p>Black, Blue, Red, White</p>-->
                                            <!--                                                            </td>-->
                                            <!--                                                        </tr>-->
                                            <!--                                                        <tr class="pa_size">-->
                                            <!--                                                            <th>Size</th>-->
                                            <!--                                                            <td>-->
                                            <!--                                                                <p>M, S</p>-->
                                            <!--                                                            </td>-->
                                            <!--                                                        </tr>-->
                                            <!--                                                    </tbody>-->
                                            <!--                                                </table>-->
                                        </div>
                                        <div class="tab-pane fade" id="Vendor-info">
                                            <div class="vendor-logo d-flex mb-30">
                                                <img src="assets/img/global/vendor/vendor1.jpg" alt=""/>
                                                <div class="vendor-name ml-15">
                                                    <h6>
                                                        <a href="vendor-details-2.html"><?= $row['StoreName']; ?></a>
                                                    </h6>
                                                    <div class="product-rate-cover text-end">
                                                        <div class="product-rate d-inline-block">
                                                            <div class="product-rating" style="width: 90%"></div>
                                                        </div>
                                                        <span class="font-small ml-5 text-muted"> (32
                                                                reviews)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="contact-infor mb-50">
                                                <li><img src="assets/imgs/theme/icons/icon-location.svg"
                                                         alt=""/><strong>Địa chỉ: </strong>
                                                    <span><?= $Store['StoreAdress'] ?></span></li>
                                                <li><img src="assets/imgs/theme/icons/icon-contact.svg"
                                                         alt=""/><strong>Liên hệ cửa hàng:</strong><span>(+84) -
                                                            <?= $Store['StorePhone'] ?></span></li>
                                            </ul>
                                            <div class="d-flex mb-55">
                                                <div class="mr-30">
                                                    <p class="text-brand font-xs">Đánh giá</p>
                                                    <h4 class="mb-0">92%</h4>
                                                </div>
                                                <!--                                                    <div class="mr-30">-->
                                                <!--                                                        <p class="text-brand font-xs">Ship on time</p>-->
                                                <!--                                                        <h4 class="mb-0">100%</h4>-->
                                                <!--                                                    </div>-->
                                                <!--                                                    <div>-->
                                                <!--                                                        <p class="text-brand font-xs">Chat response</p>-->
                                                <!--                                                        <h4 class="mb-0">89%</h4>-->
                                                <!--                                                    </div>-->
                                            </div>
                                            <p><?= $Store['Info'] ?></p>
                                        </div>
                                        <div class="tab-pane fade" id="Reviews">
                                            <!--Comments-->
                                            <div class="comments-area">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <h4 class="mb-30">Hỏi và giải đáp</h4>
                                                        <div class="comment-list">
                                                            <div
                                                                    class="single-comment justify-content-between d-flex mb-30">
                                                                <div class="user justify-content-between d-flex">
                                                                    <div class="thumb text-center">
                                                                        <img src="assets/imgs/blog/author-2.png"
                                                                             alt=""/>
                                                                        <a href="#"
                                                                           class="font-heading text-brand">Sienna</a>
                                                                    </div>
                                                                    <div class="desc">
                                                                        <div
                                                                                class="d-flex justify-content-between mb-10">
                                                                            <div class="d-flex align-items-center">
                                                                                    <span
                                                                                            class="font-xs text-muted">December
                                                                                        4, 2021 at 3:12 pm </span>
                                                                            </div>
                                                                            <div
                                                                                    class="product-rate d-inline-block">
                                                                                <div class="product-rating"
                                                                                     style="width: 100%"></div>
                                                                            </div>
                                                                        </div>
                                                                        <p class="mb-10">Lorem ipsum dolor sit amet,
                                                                            consectetur adipisicing elit. Delectus,
                                                                            suscipit exercitationem accusantium
                                                                            obcaecati quos voluptate nesciunt
                                                                            facilis itaque modi commodi dignissimos
                                                                            sequi repudiandae minus ab deleniti
                                                                            totam officia id incidunt? <a href="#"
                                                                                                          class="reply">Reply</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                    class="single-comment justify-content-between d-flex mb-30 ml-30">
                                                                <div class="user justify-content-between d-flex">
                                                                    <div class="thumb text-center">
                                                                        <img src="assets/imgs/blog/author-3.png"
                                                                             alt=""/>
                                                                        <a href="#"
                                                                           class="font-heading text-brand">Brenna</a>
                                                                    </div>
                                                                    <div class="desc">
                                                                        <div
                                                                                class="d-flex justify-content-between mb-10">
                                                                            <div class="d-flex align-items-center">
                                                                                    <span
                                                                                            class="font-xs text-muted">December
                                                                                        4, 2021 at 3:12 pm </span>
                                                                            </div>
                                                                            <div
                                                                                    class="product-rate d-inline-block">
                                                                                <div class="product-rating"
                                                                                     style="width: 80%"></div>
                                                                            </div>
                                                                        </div>
                                                                        <p class="mb-10">Lorem ipsum dolor sit amet,
                                                                            consectetur adipisicing elit. Delectus,
                                                                            suscipit exercitationem accusantium
                                                                            obcaecati quos voluptate nesciunt
                                                                            facilis itaque modi commodi dignissimos
                                                                            sequi repudiandae minus ab deleniti
                                                                            totam officia id incidunt? <a href="#"
                                                                                                          class="reply">Reply</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                    class="single-comment justify-content-between d-flex">
                                                                <div class="user justify-content-between d-flex">
                                                                    <div class="thumb text-center">
                                                                        <img src="assets/imgs/blog/author-4.png"
                                                                             alt=""/>
                                                                        <a href="#"
                                                                           class="font-heading text-brand">Gemma</a>
                                                                    </div>
                                                                    <div class="desc">
                                                                        <div
                                                                                class="d-flex justify-content-between mb-10">
                                                                            <div class="d-flex align-items-center">
                                                                                    <span
                                                                                            class="font-xs text-muted">December
                                                                                        4, 2021 at 3:12 pm </span>
                                                                            </div>
                                                                            <div
                                                                                    class="product-rate d-inline-block">
                                                                                <div class="product-rating"
                                                                                     style="width: 80%"></div>
                                                                            </div>
                                                                        </div>
                                                                        <p class="mb-10">Lorem ipsum dolor sit amet,
                                                                            consectetur adipisicing elit. Delectus,
                                                                            suscipit exercitationem accusantium
                                                                            obcaecati quos voluptate nesciunt
                                                                            facilis itaque modi commodi dignissimos
                                                                            sequi repudiandae minus ab deleniti
                                                                            totam officia id incidunt? <a href="#"
                                                                                                          class="reply">Reply</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <h4 class="mb-30">Customer reviews</h4>
                                                        <div class="d-flex mb-30">
                                                            <div class="product-rate d-inline-block mr-15">
                                                                <div class="product-rating" style="width: 90%">
                                                                </div>
                                                            </div>
                                                            <h6>4.8 out of 5</h6>
                                                        </div>
                                                        <div class="progress">
                                                            <span>5 star</span>
                                                            <div class="progress-bar" role="progressbar"
                                                                 style="width: 50%" aria-valuenow="50"
                                                                 aria-valuemin="0" aria-valuemax="100">50%
                                                            </div>
                                                        </div>
                                                        <div class="progress">
                                                            <span>4 star</span>
                                                            <div class="progress-bar" role="progressbar"
                                                                 style="width: 25%" aria-valuenow="25"
                                                                 aria-valuemin="0" aria-valuemax="100">25%
                                                            </div>
                                                        </div>
                                                        <div class="progress">
                                                            <span>3 star</span>
                                                            <div class="progress-bar" role="progressbar"
                                                                 style="width: 45%" aria-valuenow="45"
                                                                 aria-valuemin="0" aria-valuemax="100">45%
                                                            </div>
                                                        </div>
                                                        <div class="progress">
                                                            <span>2 star</span>
                                                            <div class="progress-bar" role="progressbar"
                                                                 style="width: 65%" aria-valuenow="65"
                                                                 aria-valuemin="0" aria-valuemax="100">65%
                                                            </div>
                                                        </div>
                                                        <div class="progress mb-30">
                                                            <span>1 star</span>
                                                            <div class="progress-bar" role="progressbar"
                                                                 style="width: 85%" aria-valuenow="85"
                                                                 aria-valuemin="0" aria-valuemax="100">85%
                                                            </div>
                                                        </div>
                                                        <a href="#" class="font-xs text-muted">How are ratings
                                                            calculated?</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--comment form-->
                                            <div class="comment-form">
                                                <h4 class="mb-15">Add a review</h4>
                                                <div class="product-rate d-inline-block mb-30"></div>
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-12">
                                                        <form class="form-contact comment_form" action="#"
                                                              id="commentForm">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                            <textarea class="form-control w-100"
                                                                                      name="comment" id="comment"
                                                                                      cols="30"
                                                                                      rows="9"
                                                                                      placeholder="Write Comment"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" name="name"
                                                                               id="name" type="text"
                                                                               placeholder="Name"/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" name="email"
                                                                               id="email" type="email"
                                                                               placeholder="Email"/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <input class="form-control" name="website"
                                                                               id="website" type="text"
                                                                               placeholder="Website"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit"
                                                                        class="button button-contactForm">Submit
                                                                    Review
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-60">
                                <div class="col-12">
                                    <h2 class="section-title style-1 mb-30">Sản phẩm liên quan</h2>
                                </div>
                                <div class="col-12">
                                    <div class="row related-products">
                                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap hover-up">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="shop-product-right.html" tabindex="0">
                                                            <img class="default-img"
                                                                 src="assets/imgs/shop/product-2-1.jpg" alt=""/>
                                                            <img class="hover-img"
                                                                 src="assets/imgs/shop/product-2-2.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        <a aria-label="Quick view" class="action-btn small hover-up"
                                                           data-bs-toggle="modal"
                                                           data-bs-target="#quickViewModal"><i
                                                                    class="fi-rs-search"></i></a>
                                                        <a aria-label="Add To Wishlist"
                                                           class="action-btn small hover-up"
                                                           href="shop-wishlist.html" tabindex="0"><i
                                                                    class="fi-rs-heart"></i></a>
                                                        <a aria-label="Compare" class="action-btn small hover-up"
                                                           href="shop-compare.html" tabindex="0"><i
                                                                    class="fi-rs-shuffle"></i></a>
                                                    </div>
                                                    <div
                                                            class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="hot">Hot</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a href="shop-product-right.html" tabindex="0">Ulstra Bass
                                                            Headphone</a></h2>
                                                    <div class="rating-result" title="90%">
                                                        <span> </span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$238.85 </span>
                                                        <span class="old-price">$245.8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap hover-up">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="shop-product-right.html" tabindex="0">
                                                            <img class="default-img"
                                                                 src="assets/imgs/shop/product-3-1.jpg" alt=""/>
                                                            <img class="hover-img"
                                                                 src="assets/imgs/shop/product-4-2.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        <a aria-label="Quick view" class="action-btn small hover-up"
                                                           data-bs-toggle="modal"
                                                           data-bs-target="#quickViewModal"><i
                                                                    class="fi-rs-search"></i></a>
                                                        <a aria-label="Add To Wishlist"
                                                           class="action-btn small hover-up"
                                                           href="shop-wishlist.html" tabindex="0"><i
                                                                    class="fi-rs-heart"></i></a>
                                                        <a aria-label="Compare" class="action-btn small hover-up"
                                                           href="shop-compare.html" tabindex="0"><i
                                                                    class="fi-rs-shuffle"></i></a>
                                                    </div>
                                                    <div
                                                            class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="sale">-12%</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a href="shop-product-right.html" tabindex="0">Smart
                                                            Bluetooth Speaker</a></h2>
                                                    <div class="rating-result" title="90%">
                                                        <span> </span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$138.85 </span>
                                                        <span class="old-price">$145.8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap hover-up">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="shop-product-right.html" tabindex="0">
                                                            <img class="default-img"
                                                                 src="assets/imgs/shop/product-4-1.jpg" alt=""/>
                                                            <img class="hover-img"
                                                                 src="assets/imgs/shop/product-4-2.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        <a aria-label="Quick view" class="action-btn small hover-up"
                                                           data-bs-toggle="modal"
                                                           data-bs-target="#quickViewModal"><i
                                                                    class="fi-rs-search"></i></a>
                                                        <a aria-label="Add To Wishlist"
                                                           class="action-btn small hover-up"
                                                           href="shop-wishlist.html" tabindex="0"><i
                                                                    class="fi-rs-heart"></i></a>
                                                        <a aria-label="Compare" class="action-btn small hover-up"
                                                           href="shop-compare.html" tabindex="0"><i
                                                                    class="fi-rs-shuffle"></i></a>
                                                    </div>
                                                    <div
                                                            class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="new">New</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a href="shop-product-right.html" tabindex="0">HomeSpeak
                                                            12UEA Goole</a></h2>
                                                    <div class="rating-result" title="90%">
                                                        <span> </span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$738.85 </span>
                                                        <span class="old-price">$1245.8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-12 col-sm-6 d-lg-block d-none">
                                            <div class="product-cart-wrap hover-up mb-0">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="shop-product-right.html" tabindex="0">
                                                            <img class="default-img"
                                                                 src="assets/imgs/shop/product-5-1.jpg" alt=""/>
                                                            <img class="hover-img"
                                                                 src="assets/imgs/shop/product-3-2.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        <a aria-label="Quick view" class="action-btn small hover-up"
                                                           data-bs-toggle="modal"
                                                           data-bs-target="#quickViewModal"><i
                                                                    class="fi-rs-search"></i></a>
                                                        <a aria-label="Add To Wishlist"
                                                           class="action-btn small hover-up"
                                                           href="shop-wishlist.html" tabindex="0"><i
                                                                    class="fi-rs-heart"></i></a>
                                                        <a aria-label="Compare" class="action-btn small hover-up"
                                                           href="shop-compare.html" tabindex="0"><i
                                                                    class="fi-rs-shuffle"></i></a>
                                                    </div>
                                                    <div
                                                            class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="hot">Hot</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a href="shop-product-right.html" tabindex="0">Dadua Camera
                                                            4K 2021EF</a></h2>
                                                    <div class="rating-result" title="90%">
                                                        <span> </span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$89.8 </span>
                                                        <span class="old-price">$98.8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 primary-sidebar sticky-sidebar mt-30">
                        <div class="sidebar-widget widget-delivery mb-30 bg-grey-9 box-shadow-none">
                            <h5 class="section-title style-3 mb-20">Vận chuyển từ</h5>
                            <ul>
                                <li>
                                    <i class="fi fi-rs-marker mr-10 text-brand"></i>
                                    <span>
                                           <?= $Store['StoreAdress'] ?>
                                        </span>
                                    <!--                                    todo: tính giá vận chuyển-->
                                    <!--                                    <a href="#" class="change float-end">Change</a>-->
                                </li>
                                <li class="hr"><span></span></li>
                            </ul>
                            <h5 class="section-title style-3 mb-20">Chính sách đổi trả</h5>
                            <ul>
                                <li>
                                    <i class="fi fi-rs-shield-check mr-10 text-brand"></i>
                                    <span> 100% đạt chuẩn nông sản sạch. </span>
                                </li>
                                <li>
                                    <i class="fi fi-rs-time-forward-ten mr-10 text-brand"></i>
                                    <span> Hỗ trợ trả hàng. </span>
                                </li>
                                <li>
                                    <i class="fi fi-rs-diploma mr-10 text-brand"></i>
                                    <span> Đảm bảo chất lượng. </span>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-widget widget-vendor mb-30 bg-grey-9 box-shadow-none">
                            <h5 class="section-title style-3 mb-20">Cửa hàng</h5>
                            <div class="vendor-logo d-flex mb-30">
                                <img src="assets/img/global/vendor/vendor1.jpg" alt=""/>
                                <div class="vendor-name ml-15">
                                    <h6>
                                        <a href="Vendor_Detail.php?StoreId=<?= $row['StoreId']; ?>"><?= $row['StoreName']; ?></a>
                                    </h6>
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                    </div>
                                </div>
                            </div>
                            <ul class="contact-infor">
                                <li><img src="assets/imgs/theme/icons/icon-location.svg" alt=""/><strong>Đia chỉ cửa
                                        hàng:
                                    </strong> <span><?= $Store['StoreAdress'] ?></span></li>
                                <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt=""/><strong>Liên
                                        hệ:</strong><span>(+84) - <?= $Store['StorePhone'] ?></span></li>
                                <li class="hr"><span></span></li>
                            </ul>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-brand font-xs">Đánh giá</p>
                                    <h4 class="mb-0">92%</h4>
                                </div>
                                <div>
                                    <p class="text-brand font-xs">Chuẩn bị hàng</p>
                                    <h4 class="mb-0">100%</h4>
                                </div>
                                <div>
                                    <p class="text-brand font-xs">Trả lời tin nhắn </p>
                                    <h4 class="mb-0">89%</h4>
                                </div>
                            </div>
                            <ul>
                                <li class="hr"><span></span></li>
                            </ul>
                            <p>Trở thành người bán? <a href="Store_Register.php"> Đăng ký của hàng ngay</a></p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once('footer.php');
?>
<!-- Vendor JS-->
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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