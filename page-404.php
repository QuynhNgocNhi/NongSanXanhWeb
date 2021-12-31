<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/mainf195.css?v=2.1" />
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
        $(document).ready(function () {
            document.getElementById('header').innerHTML = loadPage('header.php');
            document.getElementById('footer').innerHTML = loadPage('footer.php');
        });
        $(document).ready(function () {
            $('#products-page').addClass("active");
        });
    </script>
</head>

<body>

    <div id="header"></div>

<!--End header-->
<main class="main page-404">
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-md-12 m-auto text-center">
                    <p class="mb-20"><img src="assets/imgs/page/page-404.png" alt="" class="hover-up"/></p>
                    <h1 class="display-2 mb-30">Không tìm được trang</h1>
                    <p class="font-lg text-grey-700 mb-30">
                        Địa chỉ bạn đang tìm có thể đã bị hỏng hoặc không còn nữa.<br/>
                        Trở lại <a href="index.php"> <span> Trang chủ</span></a> hoặc <a href="page-contact.html"><span>Liên hệ cho chúng tôi</span></a>
                       để giải quyết vấn đề này.
                    </p>
                    <a class="btn btn-default submit-auto-width font-xs hover-up mt-30" href="index.php"><i
                                class="fi-rs-home mr-5"></i> Về trang chủ</a>
                </div>
            </div>
        </div>
    </div>
</main>
<div id="footer"></div>

<!-- Vendor JS-->
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

</body>

<!-- Mirrored from wp.alithemes.com/html/nest/demo/page-404.php by HTTrack Website Copier/3.x [XR/YP'2000] -->
</html>
