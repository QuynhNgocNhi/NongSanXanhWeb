<?php
ob_start();
session_start();
?>
<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="register-signin.asset/register-signin.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/mainf195.css?v=2.1"/>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/global/2.jpg"/>
    <!-- homepage CSS -->
    <link rel="stylesheet" href="home.asset/home.css?v=2.1"/>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
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
        $(document).ready(function () {
            document.getElementById('header').innerHTML = loadPage('header.html');
            document.getElementById('footer').innerHTML = loadPage('footer.html');
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
                <span> Đăng ký tài khoản</span>
            </div>
        </div>
    </div>
    <div class="page-content pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 main-row m-auto">
                    <div class="row">
                        <!-- login -->
                        <div class="col-lg-6 ">
                            <div class="login-form">
                                <form action="Account_Registration.php" method="POST" class="form" id="form-1">
                                    <h3 class="heading">Đăng ký tài khoản</h3>
                                    <p class="mb-30">Đã có tài khoản? <a href="login.php">Đăng nhập</a></p>


                                    <div class="spacer"></div>
                                    <div class="form-group">

                                        <input id="Email" name="Email" type="Email"
                                               placeholder="Email VD: email@domain.com" class="form-control" required>
                                        <span class="form-message"></span>
                                    </div>
                                    <div class="form-group">

                                        <input id="UserName" name="UserName" type="text"
                                               placeholder="Tên tài khoản VD: NongSanXanh" class="form-control"
                                               required>
                                        <span class="form-message"></span>
                                    </div>
                                    <div class="form-group">

                                        <input id="Password" name="Password" type="password" placeholder="Nhập mật khẩu"
                                               class="form-control" required>
                                        <span class="form-message"></span>
                                    </div>

                                    <div class="form-group">

                                        <input id="PasswordConfirmation" name="PasswordConfirmation"
                                               placeholder="Nhập lại mật khẩu" type="password" class="form-control"
                                               required>
                                        <span class="form-message"></span>
                                    </div>
                                    <!-- choose role -->
                                    <div class="payment_option mb-20">
                                        <div class="custome-radio">
                                            <input class="form-check-input" required="" type="radio"
                                                   name="payment_option" id="exampleRadios3" checked=""/>
                                            <label class="form-check-label" for="exampleRadios3"
                                                   data-bs-toggle="collapse" data-target="#bankTranfer"
                                                   aria-controls="bankTranfer">Tôi là người mua</label>
                                        </div>
                                        <div class="custome-radio">
                                            <input class="form-check-input" required="" type="radio"
                                                   name="payment_option" id="exampleRadios4" checked=""/>
                                            <label class="form-check-label" for="exampleRadios4"
                                                   data-bs-toggle="collapse" data-target="#checkPayment"
                                                   aria-controls="checkPayment">Tôi là người bán</label>
                                        </div>
                                    </div>
                                    <!-- Điều khoản và điều kiện -->
                                    <div class="login_footer form-group mb-20">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox"
                                                       id="exampleCheckbox12" value=""/>
                                                <label class="form-check-label" for="exampleCheckbox12"><span>Tôi đồng ý với Điều khoản &amp;
                                                            điều kiện.</span></label>
                                            </div>
                                        </div>
                                        <a target="_blank" href="index.php"><i
                                                    class="fi-rs-book-alt mr-5 text-muted"></i>Tìm hiểu</a>
                                    </div>
                                    <p id="Message" class="text-center text-8"> </p>

                                    <div class="form-group register-btn mb-30 mt-50 position-relative">
                                        <button type="submit"
                                                class="btn btn-fill-out btn-block hover-up font-weight-bold position-absolute top-100 start-50 translate-middle"
                                                id="RegisterBtn" name="register" value="Sign Up">Đăng ký
                                        </button>

                                    </div>
                                </form>
                            </div>

                        </div>
                        <!-- advantages -->
                        <div class="col-lg-6 advantages mt-50  mb-50">
                            <h3 class="heading">Ưu đãi khi trở thành thành viên</h3>
                            <p class="mt-20"><b>NSX Bảo vệ người mua </b> kể từ khi nhấp đặt hàng đến khi giao hàng<br>Đăng
                                ký hoặc đăng nhập và bạn sẽ có thể: </p>
                            <div class="mt-30">
                                <p><i class="fi-rs-star"></i>Dễ dàng theo dõi đơn đặt hàng, trả hàng miễn phí.</p>
                                <p><i class="fi-rs-star"></i>Nhận các cảnh báo và khuyến nghị có liên quan.</p>
                                <p><i class="fi-rs-star"></i>Lưu lại sản phẩm yêu thích, đánh giá, xếp hạng và hơn thế
                                    nữa.</p>
                            </div>
                            <div class="mt-30">

                                <div class="mt-20">
                                    <h4 class="heading">QUÀ TẶNG KHI MUA LẦN ĐẦU TIÊN</h4>
                                    <p class="mt-20">Giảm 10% cho đơn hàng đầu tiên.<br>Chào mừng bạn đến với Nông sản
                                        Xanh!
                                    </p>
                                </div>
                            </div>
                            <!-- register by others -->
                            <h3 class="heading mt-30">Đăng ký bằng cách khác</h3>
                            <div class="card-login mt-20">
                                <a href="#" class="social-login facebook-login">
                                    <img src="assets/imgs/theme/icons/logo-facebook.svg" alt=""/>
                                    <span>Đăng ký bằng Facebook</span>
                                </a>
                                <a href="#" class="social-login google-login">
                                    <img src="assets/imgs/theme/icons/logo-google.svg" alt=""/>
                                    <span>Đăng ký bằng Google</span>
                                </a>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>


</main>

<div id="footer"></div>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    $(function () {

        $('#RegisterBtn').click(function (va) {
            var valid = this.form.checkValidity();
            if (valid) {
                var Email = $('#Email').val();
                var UserName = $('#UserName').val();
                var Password = $('#Password').val();
                var PasswordConfirmation = $('#PasswordConfirmation').val();


                va.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: 'Account_Process.php',
                    data: {
                        Email: Email,
                        UserName: UserName,
                        Password: Password,
                        PasswordConfirmation: PasswordConfirmation,


                    },
                    success: function () {
                        swal({
                            'title': 'Successful',
                            text: "Đăng ký tài khoản thành công!",
                            icon: "success"
                        })


                        // window.open('index.php', '_blank')

                    },
                    error: function () {

                        // window.open('login.php', '_blank')
                        swal({
                            'title': 'Thất bại',

                            text: "Vui lòng kiểm tra lại thông tin!",
                            icon: "error"
                        })

                    }


                });

            } else {

            }

        });


    });
</script>

</body>

</html>