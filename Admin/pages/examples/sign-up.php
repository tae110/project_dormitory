﻿<?php
session_start();
if (isset($_SESSION["a_email"])) {?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>เพิ่มเเอดมิน</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>ระบบเเอดมิน</b></small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_up" method="POST" action="">
                    <div class="msg">เพิ่มผู้ดูเเลระบบ</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="a_name" placeholder="ชื่อผู้ดูเเลระบบ"
                                required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="a_email" placeholder="อีเมลผู้ดูเเลระบบ"
                                required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="a_password" minlength="6"
                                placeholder="รหัสผ่าน" required>
                        </div>
                    </div>
                    <!-- <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6"
                                placeholder="Confirm Password" required>
                        </div>
                    </div> -->
                    <!-- <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                        <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of
                                usage</a>.</label>
                    </div> -->

                    <button type="submit" name="submitSignUp" class="btn btn-block btn-lg bg-pink waves-effect"
                        type="submit">SIGN UP</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="sign-in.html">มีรหัสอยู่เเล้ว?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
if (isset($_POST["submitSignUp"])) {
    include "../../connectdb.php";
    $a_password = md5(mysqli_real_escape_string($conn, $_POST["a_password"]));
    $sql = "INSERT INTO `tbl_admin` (`a_email`, `a_name`, `a_password`)
        VALUES ('" . $_POST["a_email"] . "', '" . $_POST["a_name"] . "', '$a_password');";

    if (mysqli_query($conn, $sql)) {
        echo "<script>";
        echo "alert('เพิ่มผู้ดูเเลระบบสำเร็จ');";
        echo "location ='./sign-in.php';";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('ไม่สามารถเพิ่มผู้ดูเเลระบบได้')";
        echo "</script>";

    }

}

    ?>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/examples/sign-up.js"></script>
</body>

</html>
<?php
} else {
    echo "<script>";
    echo "location ='./sign-in.php';";
    echo "</script>";
}
?>