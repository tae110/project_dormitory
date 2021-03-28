<?php
session_start();
if (isset($_SESSION["a_email"])) {?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ข้อมูลหอพัก</title>
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
                <h2>ข้อมูลหอพัก</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <!-- ฟอร์มข้อมูลหอพัก -->
                                <small>ข้อมูลรายละเอียดของหอพัก</small>
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
                            <h2 class="card-inside-title">ข้อมูลหอพัก</h2>
                            <form action="" method="post" enctype="multipart/form-data">
                                <?php
include "../../connectdb.php";

    $sqlData = "SELECT * FROM tbl_dormitory WHERE dt_id='" . $_GET["dt_id"] . "'";
    $resultD = mysqli_query($conn, $sqlData);

    while ($item = mysqli_fetch_assoc($resultD)) {
        ?>


                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <h5>ชื่อหอพัก</h5>
                                        <span class="ml-3"><?=$item["dt_name"]?></span>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5>ค่าประกันหอพัก</h5>
                                        <span class="ml-3"><?=$item["dt_insurance"]?></span>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <h5>ค่ามัดจำหอ</h5>
                                        <span class="ml-3"><?=$item["dt_deposit"]?></span>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5>ราคาหอพัก</h5>
                                        <span class="ml-3"><?=$item["dt_price"]?></span>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <h5>รายละเอียดเบื้องต้น ที่เเสดงหน้าเเรก</h5>
                                        <span class="ml-3"><?=$item["dt_title"]?></span>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <h5>รายละเอียดหอพัก</h5>
                                        <span class="ml-3"><?=$item["dt_detail"]?></span>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <h5>รายละเอียดข้อมูลเติม</h5>
                                        <span class="ml-3"><?=$item["dt_orther"]?></span>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <h5>รูปที่ 1</h5>
                                        <a href="../../images/drm/<?=$item["dt_image1"]?>"
                                            data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail"
                                                src="../../images/drm/<?=$item["dt_image1"]?>">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <h5>รูปที่ 2</h5>
                                        <a href="../../images/drm/<?=$item["dt_image2"]?>"
                                            data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail"
                                                src="../../images/drm/<?=$item["dt_image2"]?>">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <h5>รูปที่ 3</h5>
                                        <a href="../../images/drm/<?=$item["dt_image3"]?>"
                                            data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail"
                                                src="../../images/drm/<?=$item["dt_image3"]?>">
                                        </a>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <label for="">ประเภทหอพัก</label>
                                        <select class="form-control show-tick" name="dtp_id" readonly>

                                            <?php

        $sql = "SELECT * FROM `tbl_dormitory_type`";
        $result = mysqli_query($conn, $sql);

        while ($data = mysqli_fetch_assoc($result)) {?>
                                            <option value="<?=$data["dtp_id"]?>" <?php
if ($data["dtp_id"] == $item["dtp_id"]) {
            echo "selected";
        }
            ?>><?=$data["dtp_name"]?>
                                            </option>
                                            <?php }

        ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">ตำเเหน่องหอพัก หรือฝั่งที่อยู่ของหอพัก</label>
                                        <select class="form-control show-tick" name="dl_id" readonly>

                                            <?php

        $sql = "SELECT * FROM `tbl_dormitory_locations`";
        $result = mysqli_query($conn, $sql);

        while ($data = mysqli_fetch_assoc($result)) {?>
                                            <option value="<?=$data["dl_id"]?>" <?php
if ($data["dl_id"] == $item["dl_id"]) {
            echo "selected";
        }
            ?>><?=$data["dl_name"]?></option>
                                            <?php }

        ?>
                                        </select>
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <a href="../tables/manage_dormitory.php" type="submit"
                                            name="submitUpdateDormitory"
                                            class="btn btn-primary btn-block btn-lg">กลับ</a>
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