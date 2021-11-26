<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="register-signin.asset/register-signin.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/mainf195.css?v=2.1" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/global/2.jpg" />
    <!-- homepage CSS -->
    <link rel="stylesheet" href="home.asset/home.css?v=2.1" />
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script type="text/javascript">
        $(function() {

            $('#SignInBtn').click(function(va) {
                var valid = this.form.checkValidity();
                if (valid) {
                    
                    var UserName = $('#UserName').val();
                    var Password = $('#Password').val();

                    va.preventDefault();

                    $.ajax({
                        type: 'POST',
                        url: 'process.php',
                        data: {
                            
                            UserName: UserName,
                            Password: Password
                        },
                        success: function(data) {
                            swal({
                                'title': 'Successful',
                                
                                text: "Đăng ký tài khoản thành công!",
                                icon: "success"

                            })
                        },
                        error: function(data) {
                            swal({
                                'title': 'error',
                                text: "Đăng ký tài khoản Thất bại!",
                                icon: "warning",
                                dangerMode: true

                            })
                        }
                    });

                }

                else {

                            }

            });

           


        });
    </script> -->
</head>

<body>
    <div id="header"></div>
    <div >
        <?php
        if (isset($_POST['SignIn'])) {
            
            $UserName = $_POST['UserName'];
            $Password = $_POST['Password'];
            
            $sql = "SELECT * FROM users WHERE UserName = '".$UserName."' AND Password = '".$Password."' ";
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_array($result);

            
            if($row){
                echo $row["UserRoleId"];
            if($row["UserRoleId"]==1){
                header("location: index_admin.php");
                echo $row["Id admin"];
            }
            elseif($row["UserRoleId"]==3){
                echo $row["Id"];
                header("location: index.php");
            }
            else
            {
               echo "error";
            }
            }
            else{
                echo "NO User found";
                header("location: login.php");
            }


        }

            ?>
    </div>

    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Trang chủ</a>
                    <span> Đăng nhập</span>
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
                                    <form action="login.php" method="POST" class="form" id="form-1">
                                        <h3 class="heading">Đăng nhập vào tài khoản</h3>
                                        <p class="mb-30">Chưa có tài khoản? <a href="register.html">Đăng ký ngay</a></p>


                                        <div class="spacer"></div>
                                        <div class="form-group">

                                            <input id="UserName" name="UserName" type="text"
                                                placeholder="Tài khoản" class="form-control" required>
                                            <span class="form-message"></span>
                                        </div>

                                        <div class="form-group">

                                            <input id="password" name="Password" type="password"
                                                placeholder="Nhập mật khẩu" class="form-control" required>
                                            <span class="form-message"></span>
                                        </div>

                                        <!-- Điều khoản và điều kiện -->
                                        <div class="login_footer form-group mb-20">
                                            <div class="chek-form">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="remember-checkbox" value="" />
                                                    <label class="form-check-label" for="remember-checkbox"><span>Nhớ
                                                            tài khoản.</span></label>
                                                </div>
                                            </div>
                                            <a target="_blank" href="index.html"><i
                                                    class="fi-rs-edit-alt mr-5 text-muted"></i>Quên mật khẩu?</a>
                                        </div>

                                        <div class="form-group register-btn mb-30 mt-50 position-relative">
                                            <button type="submit"
                                                class="btn btn-fill-out btn-block hover-up font-weight-bold position-absolute top-100 start-50 translate-middle"
                                                id= "SignInBtn" name="SignIn">Đăng nhập</button>

                                        </div>


                                    </form>
                                    
                                </div>

                            </div>
                            <!-- advantages -->
                            <div class="col-lg-6 advantages mt-50  mb-50">
                                <h4 class="heading">QUÀ TẶNG KHI MUA LẦN ĐẦU TIÊN</h4>
                                <p class="mt-20">Giảm 10% cho đơn hàng đầu tiên.<br>Chào mừng bạn đến với Nông
                                    sản Xanh!
                                </p>
                                
                                <!-- register by others -->
                                <div class="login__conect mt-20 text-center">
                                    <hr>
                                    <p>Hoặc đăng nhập bằng</p>
                                    <hr>

                                </div>
                                <div class="card-login mt-20">
                                    <a href="#" class="social-login facebook-login">
                                        <img src="assets/imgs/theme/icons/logo-facebook.svg" alt="" />
                                        <span>Đăng nhập bằng Facebook</span>
                                    </a>
                                    <a href="#" class="social-login google-login">
                                        <img src="assets/imgs/theme/icons/logo-google.svg" alt="" />
                                        <span>Đăng nhập bằng Google</span>
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
</body>

</html>