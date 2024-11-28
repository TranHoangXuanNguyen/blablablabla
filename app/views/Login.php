<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script type="text/javascript">
        (function () {
            emailjs.init("uw_JjxTMw48C0fqxD");
        })();
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://kit.fontawesome.com/4e7f123d15.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <?php
        include ("./assets/css/login.css.php");
        // include ("./assets/css/root.css.php");
        // include ("./assets/css/bootstrap5.php");
    ?>
</head>
<body>
    <div class="container">
        <div class="body">
            <!-- Login Form Begin -->
            <div class="grid">
                <div class="content">
                    <div class="grid__row">
                        <div class="col-6 title__welcome">
                            <div class="titleWelcome">CHÀO MỪNG BẠN ĐẾN VỚI WOWBOX</div>
                        </div>
                        <div class="col-6">
                            <div class="form create-form">
                                <form id="accountForm">
                                    <div class="option content-12">
                                        <button type="button" class="signIn btn--big" onclick="signInSection()">
                                            <span class="btn--name">ĐĂNG NHẬP</span>
                                        </button>
                                        <button type="button" class="createAccount btn--big" onclick="createAccSection()">
                                            <span class="btn--name">TẠO TÀI KHOẢN</span>
                                        </button>
                                    </div>

                                    <!-- Create account form begin -->
                                     <div class="create--acc-section">
                                        <div class="content-12">
                                            <label for="userName" class="input--title-userName">Tên đăng nhập*:</label>
                                            <input class="userName" type="text" name="userName" id="userName-error" required />
                                            <br />
    
                                            <label for="email" class="input--title-email">Email*:</label>
                                            <input class="email" type="email" name="email" id="email-error" required />
                                            <br />
    
                                            <label for="phoneNum" class="input--title-phoneNum">Số điện thoại*:</label>
                                            <input class="phoneNum" type="tel" name="phoneNum" id="phoneNum-error" required />
                                            <br />
    
                                            <label for="password" class="input--title-password">Mật Khẩu*:</label>
                                            <input class="password" type="password" name="password" id="password-error" required />
                                            <br />
    
                                            <label for="confirmPassword" class="input--title-password">Nhập lại mật khẩu*:</label>
                                            <input class="confirmPassword" type="password" name="confirmPassword" id="confirmPassword-error" required />
                                            <br />
    
                                            <div class="checkBox">
                                                <input class="verify--checkBox" type="checkbox" name="verify" id="verify" required />
                                                <label for="verify" class="checkBox--des">Tôi đồng ý điều khoản dịch vụ</label>
                                                <span class="error-message" id="checkbox-error"></span>
                                            </div>
    
                                            <div class="button_box">
                                                <button type="button" class="sendOTP btn--small" onclick="sendOTPbtn()">GỬI MÃ XÁC NHẬN</button>
                                            </div>
    
                                            <p class="des--top--sendOTP mon">Bạn sẽ nhận được mã xác nhận trong email đã điền.</p>
                                            <p class="des--mid--sendOTP mon">Kiểm tra email và nhập mã xác nhận vào ô bên dưới để hoàn tất đăng ký.</p>
    
                                            <input class="OTP" type="number" name="OTP" placeholder="Nhập mã OTP" required />
                                            <span class="error-message" id="otp-error"></span>
    
                                            <p class="des--bot--sendOTP">Sau khi nhập mã nhấn ĐĂNG KÝ để hoàn tất!</p>
    
                                            <div class="button_box">
                                                <button type="button" class="create--acc--btn btn--small" onclick="validateForm()">ĐĂNG KÝ</button>
                                            </div>
                                        </div>
                                     </div>
                                    
                                    <!-- Create account form end -->

                                    <!-- Sign in form begin -->
                                    <div class="log--in--section">
                                        <div class="content-12 ">
                                            <label for="userName-login" class="input--title-userName">Tên đăng nhập*:</label>
                                            <input class="userName-login userName" type="text" name="userName" id="userName-login" required />
                                            <br />

                                            <label for="password-login" class="input--title-password">Mật Khẩu*:</label>
                                            <input class="password-login password" type="password" name="password" id="password-login" required />
                                            <span class="wrong--pass error-message">Tên đăng nhập hoặc mật khẩu sai, vui lòng nhập lại</span>

                                            <div class="check content">
                                                <div class="checkBox">
                                                    <input class="verify--checkBox" type="checkbox" name="save--pass" id="save--pass" />
                                                    <label for="save--pass" class="checkBox--des">Ghi nhớ mật khẩu</label>
                                                </div>
                                                <a href="" class="forgot--pass">Quên mật khẩu?</a>
                                            </div>
                                        </div>
                                        <div class="button_box">
                                            <button type="button" class="sign--in--btn btn--small" onclick="signIn()" style="margin-top: 34px;">ĐĂNG NHẬP</button>
                                        </div>
                                    </div>
                                    <!-- Sign in form end -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login form end -->
        </div>
    </div>
    <script src="../js/loginForm.js"></script>
    <script src="https://unpkg.com/axios@1.6.7/dist/axios.min.js"></script>
</body>
</html>
