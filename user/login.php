<?php
session_start();
unset($_SESSION['u_id']);
unset($_SESSION['u_email']);
unset($_SESSION['u_name']);
unset($_SESSION['u_tel']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>เข้าสู่ระบบ</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="Login_v1/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v1/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v1/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v1/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v1/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v1/css/util.css">
    <link rel="stylesheet" type="text/css" href="Login_v1/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="Login_v1/images/img-01.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" action="" method="POST">
                    <span class="login100-form-title">
                        เข้าสู่ระบบเพื่อใช้งานระบบ
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" name="u_email" placeholder="อีเมล" required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="u_password" placeholder="รหัสผ่าน" required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <input type="submit" value="เข้าสู่ระบบ" name="submitLogin" class="login100-form-btn" />
                    </div>


                    <div class="text-center p-t-12">
                        <a class="txt2" href="./register.php">
                            ลงทะเบียนใช้งานระบบ
                        </a>
                    </div>

                    <div class="text-center p-t-136">
                        <!-- <a class="txt2" href="#">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a> -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php

if (isset($_POST["submitLogin"])) {
    include_once "./connectdb.php";
    $sql = "SELECT * FROM `tbl_users`
                            WHERE u_email='" . $_POST["u_email"] . "'
                            AND u_password='" . md5($_POST["u_password"]) . "' limit 1";

    $rs = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($rs);

    if ($num == 1) {
        $data = mysqli_fetch_array($rs);
        $_SESSION['u_id'] = $data['u_id'];
        $_SESSION['u_email'] = $data['u_email'];
        $_SESSION['u_name'] = $data['u_name'];
        $_SESSION['u_tel'] = $data['u_tel'];

        echo "<script>";
        echo "window.location='index.php';";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('Username หรือ Password ไม่ถูกต้อง');";
        echo "</script>";
        exit;
    }
}

?>



    <!--===============================================================================================-->
    <script src="Login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="Login_v1/vendor/bootstrap/js/popper.js"></script>
    <script src="Login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="Login_v1/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="Login_v1/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>