<?php
session_start();
if (isset($_SESSION["a_email"])) {?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>เเก้ไขข้อมูลสิ่งอำนวยความสะดวก ในอาคาร</title>
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

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="../../plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
        rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="../../plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="../../plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <?php include_once "../../navbar2.php"?>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <?php include_once "../../aside2.php"?>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>เเก้ไขข้อมูลสิ่งอำนวยความสะดวก ในอาคาร</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ฟอร์มเเก้ไขข้อมูลสิ่งอำนวยความสะดวก ในอาคาร
                                <!-- <small>เเก้ไขข้อมูลสิ่งอำนวยความสะดวก ในอาคาร</small> -->
                            </h2>
                            <!-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                        <div class="body">
                            <!-- <h2 class="card-inside-title">เเก้ไขข้อมูลหอพัก</h2> -->
                            <form action="" method="post" enctype="multipart/form-data">
                                <?php
include "../../connectdb.php";
    $ac_d_o_id = $_GET["ac_d_o_id"];
    $sql = "SELECT * FROM tbl_accessory_out_room WHERE ac_d_o_id='$ac_d_o_id'";

    $result = mysqli_query($conn, $sql);

    while ($data = mysqli_fetch_assoc($result)) {?>

                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <label for="">ที่จอดรถ</label>
                                        <select class="form-control show-tick" name="ac_d_o_parking" required>
                                            <option value="0">ไม่มี</option>
                                            <option value="1" <?php
if ($data["ac_d_o_parking"] == 1) {
        echo "selected";
    }
        ?>>มี</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">ลิฟท์</label>
                                        <select class="form-control show-tick" name="ac_d_o_elevator" required>
                                            <option value="0">ไม่มี</option>
                                            <option value="1" <?php
if ($data["ac_d_o_elevator"] == 1) {
            echo "selected";
        }
        ?>>มี</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">มีร้านอินเตอร์เน็ตภายในอาคาร</label>
                                        <select class="form-control show-tick" name="ac_d_o_internet_cafe" required>
                                            <option value="0">ไม่มี</option>
                                            <option value="1" <?php
if ($data["ac_d_o_internet_cafe"] == 1) {
            echo "selected";
        }
        ?>>มี</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <label for="">มีระบบรักษาความปลอดภัย (keycard)</label>
                                        <select class="form-control show-tick" name="ac_d_o_keycard" required>
                                            <option value="0">ไม่มี</option>
                                            <option value="1" <?php
if ($data["ac_d_o_keycard"] == 1) {
            echo "selected";
        }
        ?>>มี</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">กล้องวงจรปิด (CCTV)</label>
                                        <select class="form-control show-tick" name="ac_d_o_cctv" required>
                                            <option value="0">ไม่มี</option>
                                            <option value="1" <?php
if ($data["ac_d_o_cctv"] == 1) {
            echo "selected";
        }
        ?>>มี</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">สระว่ายน้ำ</label>
                                        <select class="form-control show-tick" name="ac_d_o_swimming_pool" required>
                                            <option value="0">ไม่มี</option>
                                            <option value="1" <?php
if ($data["ac_d_o_swimming_pool"] == 1) {
            echo "selected";
        }
        ?>>มี</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <label for="">โรงยิม / ฟิตเนส</label>
                                        <select class="form-control show-tick" name="ac_d_o_fitness" required>
                                            <option value="0">ไม่มี</option>
                                            <option value="1" <?php
if ($data["ac_d_o_fitness"] == 1) {
            echo "selected";
        }
        ?>>มี</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">ร้านซัก-รีด / มีบริการเครื่องซักผ้า</label>
                                        <select class="form-control show-tick" name="ac_d_o_laundry_shop" required>
                                            <option value="0">ไม่มี</option>
                                            <option value="1" <?php
if ($data["ac_d_o_laundry_shop"] == 1) {
            echo "selected";
        }
        ?>>มี</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">ร้านทำผม-เสริมสวย</label>
                                        <select class="form-control show-tick" name="ac_d_o_beauty_salon" required>
                                            <option value="0">ไม่มี</option>
                                            <option value="1" <?php
if ($data["ac_d_o_beauty_salon"] == 1) {
            echo "selected";
        }
        ?>>มี</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <button type="submit" name="submit_update_accessory_out_room"
                                            class="btn btn-primary btn-block btn-lg">บันทึกรายการ</button>
                                    </div>
                                </div>


                                <?php }

    ?>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
        </div>
    </section>

    <?php
if (isset($_POST["submit_update_accessory_out_room"])) {
        include "../../connectdb.php";

        $sql = "UPDATE `tbl_accessory_out_room` SET `ac_d_o_parking` = '" . $_POST["ac_d_o_parking"] . "',
            `ac_d_o_elevator` = '" . $_POST["ac_d_o_elevator"] . "',`ac_d_o_internet_cafe` = '" . $_POST["ac_d_o_internet_cafe"] . "'
            ,`ac_d_o_keycard` = '" . $_POST["ac_d_o_keycard"] . "',`ac_d_o_cctv` = '" . $_POST["ac_d_o_cctv"] . "'
            ,`ac_d_o_swimming_pool` = '" . $_POST["ac_d_o_swimming_pool"] . "',`ac_d_o_fitness` = '" . $_POST["ac_d_o_fitness"] . "'
            ,`ac_d_o_laundry_shop` = '" . $_POST["ac_d_o_laundry_shop"] . "',`ac_d_o_beauty_salon` = '" . $_POST["ac_d_o_beauty_salon"] . "'

            WHERE `tbl_accessory_out_room`.`ac_d_o_id` = '$ac_d_o_id';";
        if (mysqli_query($conn, $sql)) {
            echo "<script>";
            echo "alert('เเก้ไขข้อมูลสำเร็จ');";
            echo "location ='../tables/manage_dormitory.php';";
            echo "</script>";

        } else {
            echo "<script>";
            echo "alert('ไม่สามารถเเก้ไขข้อมูลได้');";
            echo "</script>";
        }

    }

    ?>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="../../plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="../../plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="../../plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>
<?php
} else {
    echo "<script>";
    echo "location ='../examples/sign-in.php';";
    echo "</script>";
}
?>