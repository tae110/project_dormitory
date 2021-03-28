<!DOCTYPE html>
<html lang="en">

<head>
    <title>ลงทะเบียนเข้าใช้งาน</title>
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
                        สมัครสมาชิกเพื่อใช้งานระบบ
                    </span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="u_name" required placeholder="ชื่อ-นามสกุล">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="u_tel" required placeholder="เบอร์โทรศัพท์">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" required name="u_email" placeholder="อีเมล">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" required name="u_password" placeholder="รหัสผ่าน">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" name="submitRegister" class="login100-form-btn">
                            ลงทะเบียน
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <a class="txt2" href="./login.php">
                            เข้าสู่ระบบ
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
    
    include_once("connectdb.php");
    // session_start();  
    // if(isset($_SESSION["email"]))  
    // {  
    //     header("location:login.php");  
    // }  
    if(isset($_POST["submitRegister"]))  
    {  
        if(empty($_POST["email"]) && empty($_POST["u_password"]))  
        {  
            echo '<script>alert("Both Fields are required")</script>';  
        }  
        else  
        {  
            $u_name = mysqli_real_escape_string($conn, $_POST["u_name"]);    
            $u_email = mysqli_real_escape_string($conn, $_POST["u_email"]);  
            $u_tel = mysqli_real_escape_string($conn, $_POST["u_tel"]);  
            $u_password = mysqli_real_escape_string($conn, $_POST["u_password"]);  
            $u_password = md5($u_password);  
            // $query = "INSERT INTO users (u_email, password) VALUES('$u_email', '$u_password')"; 
            $sql="INSERT INTO `tbl_users` (`u_id`, `u_name`, `u_email`, `u_password`, `u_tel`) 
                  VALUES (NULL,'$u_name','$u_email', '$u_password', '$u_tel');"; 
            if(mysqli_query($conn, $sql))  
            {  
                   echo '<script>alert("สมัครสมาชิกสำเร็จ")</script>'; 
                   echo "<script>location = 'login.php';</script>";     
            }  
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