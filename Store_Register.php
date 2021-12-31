<?php
ob_start();
session_start();
if (!isset($_SESSION['Id'])) {
    header("location: login.php");
}
if($_SESSION['UserRoleId']==2){
        header("location: Vendor_Dashboard.php");

}
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
    <title>Đăng ký cửa hàng</title>
    <link rel="stylesheet" href="register-signin.asset/register-signin.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/mainf195.css?v=2.1"/>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/global/2.jpg"/>
    <!-- homepage CSS -->
    <link rel="stylesheet" href="home.asset/home.css?v=2.1"/>

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
            document.getElementById('header').innerHTML = loadPage('header.php');
            document.getElementById('footer').innerHTML = loadPage('footer.php');
        });

    </script>

</head>

<body>
<?php
require_once('header.php');
?>
<main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.php" rel="nofollow"><i class="fi-rs-home mr-5"></i>Trang chủ</a>
                <span> Đăng ký cửa hàng</span>
            </div>
        </div>
    </div>
    <div class="page-content pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 main-row m-auto">
                    <div class="row">
                        <!-- login -->
                        <div class="col-lg-12 ">

                            <h3 class="heading mt-20 text-center ">Đăng ký cửa hàng</h3>

                            <div class="login-form">
                                <form action="Store_Register.php" method="POST" class="form register-store-form" id="form-register-seller">
                                    <div class="row">


                                        <div class="spacer"></div>
                                        <div class="col-lg-6 ">
                                           <p class="display-7 border-light text-center text-8 mb-30"> <strong>Thông tin chủ cửa hàng</strong></p>

                                            <div class="form-group">

                                                <input id="FullName" name="FullName" type="text" placeholder="Họ và tên"
                                                       class="form-control" required>
                                                <span class="form-message"></span>
                                            </div>
                                            <div class="form-group">

                                                <input id="CMND" name="CMND" type="number"
                                                       placeholder="Số CMMN/CCCD"
                                                       class="form-control" required>
                                                <span class="form-message"></span>
                                            </div>
                                            <div class="form-group">

                                                <input id="DOB" name="DOB" type="date" placeholder="Ngày/Tháng/Năm sinh"
                                                       class="form-control" required>
                                                <span class="form-message"></span>
                                            </div>
                                            <div id="Gender" class=" row form-group mt-20 ml-20">

                                                <div class="form-check form-check-inline">

                                                    <label class="form-check-label">
                                                        <input id="Gender1" class="form-check-input" type="radio" name="Gender"
                                                               value="1">Nam
                                                    </label>

                                                   <label id="Gender0" class="form-check-label pl-30">
                                                        <input class="form-check-input" type="radio" name="Gender"
                                                           value="0"> Nữ
                                                   </label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ">
                                           <p class="display-7 border-light text-center text-8 mb-30"> <strong>Thông tin cửa hàng</strong></p>
                                            <!-- choose category -->
                                            <div class="form-group">

                                                <input id="StoreName" name="StoreName" type="text"
                                                       placeholder="Tên cửa hàng"
                                                       class="form-control" required>
                                                <span class="form-message"></span>
                                            </div>
                                            <div class="form-group">

                                                <input id="StorePhone" name="StorePhone" type="number"
                                                       placeholder="Số điện thoại cửa hàng"
                                                       class="form-control" required>
                                                <span class="form-message"></span>
                                            </div>

                                            <div class="form-group">

                                                <input id="StoreAdress" name="StoreAdress"
                                                       placeholder="Địa chỉ cửa hàng"
                                                       type="text" class="form-control" required>
                                                <span class="form-message"></span>
                                            </div>


                                        </div>
                                        <div class="form-group">

                                        <textarea id="Info" name="Info" placeholder="Mô tả về cửa hàng của bạn"
                                                  type="textarea" aria-rowspan="5" required></textarea>
                                            <span class="form-message"></span>
                                        </div>
                                        <!-- Điều khoản và điều kiện -->
                                        <div class="login_footer form-group mb-20">
                                            <div class="chek-form">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                           id="exampleCheckbox12"
                                                           value="" required/>
                                                    <label class="form-check-label" for="exampleCheckbox12"><span>Tôi đồng ý với Điều khoản &amp;
                              điều kiện.</span></label>
                                                </div>
                                            </div>
                                            <a target="_blank" href="index.php"><i
                                                        class="fi-rs-book-alt mr-5 text-muted"></i>Tìm hiểu</a>
                                        </div>

                                        <div class="form-group register-btn mb-30 mt-50 position-relative">
                                            <button type="submit"
                                                    class="btn btn-fill-out btn-block hover-up font-weight-bold position-absolute top-100 start-50 translate-middle"
                                                    id="StoreRegisterBtn"

                                                    name="StoreRegister" value="StoreSignUp">Đăng ký
                                            </button>
                                        </div>
                                    </div>
                                </form>
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

<script>

    $(function () {

        $('#StoreRegisterBtn').click(function (va) {
            var valid = this.form.checkValidity();
            if (valid) {
                // var WhGender;
                // if(document.getElementById('Gender1').checked){
                //     WhGender = document.getElementById('Gender1').value;
                // }
                // else if(document.getElementById('Gender0').checked){
                //     WhGender = document.getElementById('Gender0').value;
                // }
                var FullName = $('#FullName').val();
                var Gender = $("input[type='radio'][name='Gender']:checked").val();;
                var DOB = $('#DOB').val();
                var CMND = $('#CMND').val();
                var StoreName = $('#StoreName').val();
                var StorePhone = $('#StorePhone').val();
                var StoreAdress = $('#StoreAdress').val();
                var Info = $('#Info').val();


                va.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: 'Store_Register_Process.php',
                    data: {
                        FullName: FullName,
                        Gender: Gender,
                        DOB: DOB,
                        CMND: CMND,
                        StoreName: StoreName,
                        StorePhone: StorePhone,
                        StoreAdress: StoreAdress,
                        Info: Info
                    },
                    success: function (data) {
                        swal({
                            'title': 'Successful',

                            text: "Đăng ký tài khoản thành công!",
                            icon: "success"

                        }).then(function () {
                                window.open('login.php', '_blank')
                            });
                    },
                    error: function (data) {
                        swal({
                            'title': 'error',
                            text: "Đăng ký tài khoản Thất bại!",
                            icon: "warning",
                            dangerMode: true

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