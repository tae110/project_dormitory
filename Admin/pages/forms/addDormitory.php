<?php
session_start();
if (isset($_SESSION["a_email"])) {?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>เพิ่มหอพัก</title>
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
                <h2>เพิ่มหอพัก</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ฟอร์มข้อมูลหอพัก
                                <small>เพิ่มรายละเอียดของหอพัก</small>
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
                            <h2 class="card-inside-title">เพิ่มหอพัก</h2>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="dt_name" required class="form-control"
                                                    placeholder="ชื่อหอพัก" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" name="dt_insurance" required class="form-control"
                                                    placeholder="ค่าประกันหอพัก" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" name="dt_deposit" required class="form-control"
                                                    placeholder="ค่ามัดจำหอ" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" name="dt_price" required class="form-control"
                                                    placeholder="ราคาหอพัก" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" name="dt_electricity_cost" required
                                                    class="form-control" placeholder="ค่าไฟฟ้า" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" name="dt_water_cost" required class="form-control"
                                                    placeholder="ค่าน้ำ" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" name="dt_orther_cost" required class="form-control"
                                                    placeholder="ค่าบริการอื่นๆ" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" name="dt_internet_cost" required
                                                    class="form-control" placeholder="ค่าอินเตอร์เน็ต" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="6" name="dt_title" required
                                                    class="form-control no-resize"
                                                    placeholder="รายละเอียดเบื้องต้น ที่เเสดงหน้าเเรก"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="6" name="dt_detail" required
                                                    class="form-control no-resize"
                                                    placeholder="รายละเอียดหอพัก"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="6" name="dt_orther" class="form-control no-resize"
                                                    placeholder="รายละเอียดเพิ่มเติม"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="dt_image1" required class="form-control"
                                                    placeholder="รูปภาพที่ 1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="dt_image2" required class="form-control"
                                                    placeholder="รูปภาพที่ 2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="dt_image3" required class="form-control"
                                                    placeholder="รูปภาพที่ 3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <label for="">ประเภทหอพัก</label>
                                        <select class="form-control show-tick" name="dtp_id" required>

                                            <?php
include "../../connectdb.php";

    $sql = "SELECT * FROM `tbl_dormitory_type`";
    $result = mysqli_query($conn, $sql);

    while ($data = mysqli_fetch_assoc($result)) {?>
                                            <option value="<?=$data["dtp_id"]?>"><?=$data["dtp_name"]?></option>
                                            <?php }

    ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">ตำเเหน่องหอพัก หรือฝั่งที่อยู่ของหอพัก</label>
                                        <select class="form-control show-tick" name="dl_id" required>

                                            <?php

    $sql = "SELECT * FROM `tbl_dormitory_locations`";
    $result = mysqli_query($conn, $sql);

    while ($data = mysqli_fetch_assoc($result)) {?>
                                            <option value="<?=$data["dl_id"]?>"><?=$data["dl_name"]?></option>
                                            <?php }

    ?>
                                        </select>
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <button type="submit" name="submitInsertDormitory"
                                            class="btn btn-primary btn-block btn-lg">เพิ่มพอพัก</button>
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
if (isset($_POST["submitInsertDormitory"])) {

        $dt_image1_md5 = md5(date("Y-m-d h:i:s"));
        $dt_image2_md5 = md5(date("Y-m-d h:i:s"));
        $dt_image3_md5 = md5(date("Y-m-d h:i:s"));

        $dt_image2 = uniqid() . $dt_image2_md5 . $_FILES["dt_image2"]["name"];
        $dt_image1 = uniqid() . $dt_image1_md5 . $_FILES["dt_image1"]["name"];
        $dt_image3 = uniqid() . $dt_image3_md5 . $_FILES["dt_image3"]["name"];

        $sql1 = "INSERT INTO `tbl_dormitory` (`dt_id`, `dt_name`, `dt_detail`, `dt_image1`, `dt_image2`,
         `dt_image3`, `dt_price`, `dtp_id`, `dl_id`,   `dt_insurance`, `dt_deposit`, `dt_title`,
         `dt_orther`,`dt_electricity_cost`,`dt_water_cost`,`dt_orther_cost`,`dt_internet_cost`)
         VALUES (NULL, '" . $_POST["dt_name"] . "', '" . $_POST["dt_detail"] . "', '" . $dt_image1 . "',
                '" . $dt_image2 . "', '" . $dt_image3 . "', '" . $_POST["dt_price"] . "',
                '" . $_POST["dtp_id"] . "', '" . $_POST["dl_id"] . "',
                '" . $_POST["dt_insurance"] . "','" . $_POST["dt_deposit"] . "', '" . $_POST["dt_title"] . "',
                '" . $_POST["dt_orther"] . "','" . $_POST["dt_electricity_cost"] . "','" . $_POST["dt_water_cost"] . "',
                 '" . $_POST["dt_orther_cost"] . "','" . $_POST["dt_internet_cost"] . "');";

        if (mysqli_query($conn, $sql1)) {
            echo "<script>";
            echo "alert('บันทึกข้อมูลสำเร็จ');";
            echo "location ='../tables/manage_dormitory.php';";
            echo "</script>";
            $path = "../../images/drm/";
            move_uploaded_file($_FILES["dt_image1"]["tmp_name"], "$path/$dt_image1");
            move_uploaded_file($_FILES["dt_image2"]["tmp_name"], "$path/$dt_image2");
            move_uploaded_file($_FILES["dt_image3"]["tmp_name"], "$path/$dt_image3");

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