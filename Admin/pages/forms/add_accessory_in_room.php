<?php
session_start();
if (isset($_SESSION["a_email"])) {?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>เพิ่มสิ่งอำนวนความสะดวกหอพักภายในห้อง</title>
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
                <h2>เพิ่มสิ่งอำนวนความสะดวกหอพักภายในห้อง</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ฟอร์มเพิ่มสิ่งอำนวนความสะดวกหอพักภายในห้อง
                                <!-- <small>เพิ่มสิ่งอำนวนความสะดวกหอพักภายในห้อง</small> -->
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
                            <!-- <h2 class="card-inside-title">เพิ่มหอพัก</h2> -->
                            <form action="" method="post" enctype="multipart/form-data">

                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <label for="">เครื่องปรับอากาศ</label>
                                        <select class="form-control show-tick" name="ac_d_air" required>
                                            <option value="0">ไม่มี</option>
                                            <option value="1">มี</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">พัดลม</label>
                                        <select class="form-control show-tick" name="ac_d_fan" required>
                                            <option value="0">ไม่มี</option>
                                            <option value="1">มี</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">เครื่องปรับน้ำอุ่น</label>
                                        <select class="form-control show-tick" name="ac_d_water_heater" required>
                                            <option value="0">ไม่มี</option>
                                            <option value="1">มี</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <label for="">เฟอร์นิเจอร์ ตู้ เตียง</label>
                                        <select class="form-control show-tick" name="ac_d_furniture" required>
                                            <option value="0">ไม่มี</option>
                                            <option value="1">มี</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">ทรูวิชัน</label>
                                        <select class="form-control show-tick" name="ac_d_truevision" required>
                                            <option value="0">ไม่มี</option>
                                            <option value="1">มี</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">เคเบิลทีวี / ดาวเทียม</label>
                                        <select class="form-control show-tick" name="ac_d_cable_satellite_tv" required>
                                            <option value="0">ไม่มี</option>
                                            <option value="1">มี</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <label for="">โทรศัพท์สายตรง</label>
                                        <select class="form-control show-tick" name="ac_d_phone_direct" required>
                                            <option value="0">ไม่มี</option>
                                            <option value="1">มี</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">อินเตอร์เน็ตไร้สาย ( WIFI ) ในห้องพัก</label>
                                        <select class="form-control show-tick" name="ac_d_wifi" required>
                                            <option value="0">ไม่มี</option>
                                            <option value="1">มี</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">เลี้ยงสัตว์เลี้ยง</label>
                                        <select class="form-control show-tick" name="ac_d_pets" required>
                                            <option value="0">ไม่มี</option>
                                            <option value="1">มี</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <label for="">ที่สูบบุหรี่</label>
                                        <select class="form-control show-tick" name="ac_d_moking" required>
                                            <option value="0">ไม่มี</option>
                                            <option value="1">มี</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <button type="submit" name="submit_add_accessory_in_room"
                                            class="btn btn-primary btn-block btn-lg">บันทึกรายการ</button>
                                    </div>
                                </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Input -->
        </div>
    </section>

    <?php
if (isset($_POST["submit_add_accessory_in_room"])) {
    include "../../connectdb.php";
    $sql1 = "INSERT INTO `tbl_accessory_in_room` (`ac_d_id`, `ac_d_air`, `ac_d_fan`,
             `ac_d_water_heater`, `ac_d_furniture`, `ac_d_truevision`, `ac_d_cable_satellite_tv`,
              `ac_d_phone_direct`, `ac_d_wifi`, `ac_d_pets`, `ac_d_moking`)
             VALUES (NULL, '" . $_POST["ac_d_air"] . "', '" . $_POST["ac_d_fan"] . "',
                    '" . $_POST["ac_d_water_heater"] . "', '" . $_POST["ac_d_furniture"] . "',
                     '" . $_POST["ac_d_truevision"] . "', '" . $_POST["ac_d_cable_satellite_tv"] . "',
                     '" . $_POST["ac_d_phone_direct"] . "', '" . $_POST["ac_d_wifi"] . "',
                     '" . $_POST["ac_d_pets"] . "', '" . $_POST["ac_d_moking"] . "');";

    $sql2 = "SELECT * FROM `tbl_accessory_in_room` ORDER BY `tbl_accessory_in_room`.`ac_d_id` DESC LIMIT 1";

    if (mysqli_query($conn, $sql1)) {
        $result2 = mysqli_query($conn, $sql2);
        $dt_id = $_GET["dt_id"];
        while ($data = mysqli_fetch_assoc($result2)) {
            $ac_d_id = $data["ac_d_id"];
            $sql3 = "UPDATE `tbl_dormitory` SET `ac_d_id` = '$ac_d_id' WHERE `tbl_dormitory`.`dt_id` = $dt_id;";
            if (mysqli_query($conn, $sql3)) {
                echo "<script>";
                echo "alert('บันทึกข้อมูลสำเร็จ');";
                echo "location ='../tables/manage_dormitory.php';";
                echo "</script>";
            }
        }

    } else {
        echo "<script>";
        echo "alert('ไม่สามารถบันทึกข้อมูลได้');";
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