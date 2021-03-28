<?php
session_start();
if ($_SESSION["do_id"]) {?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>เเก้ไขข้อมูลหอพัก</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <!-- sidebar menu area start -->
        <?php include_once "./sidebar.php"?>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <?php include_once "./header.php"?>
            <!-- header area end -->
            <!-- page title area start -->
            <?php include_once "./page_title.php"?>
            <!-- page title area end -->
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 mt-5">

                        <?php
include "./connectDB.php";
    $sql = "SELECT * FROM tbl_dormitory WHERE do_id='" . $_SESSION["do_id"] . "' ;";
    $result = mysqli_query($conn, $sql);

    while ($data = mysqli_fetch_assoc($result)) {?>

                        <div class="card">
                            <div class="card-body">
                                <div class="invoice-area">
                                    <div class="invoice-head">
                                        <div class="row">
                                            <div class="iv-left col-6">
                                                <span>ข้อมูลหอพัก</span>
                                            </div>
                                            <!-- <div class="iv-right col-6 text-md-right">
                                                <span>#34445998</span>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <div class="invoice-address">
                                                <h3>ชื่อหอพัก <?=$data["dt_name"];?></h3>
                                                <!-- <h5>Verdie Hintz</h5>
                                                <p>4494 Weekley Street, San Antonio, 78205 Texas</p>
                                                <p>San Antonio</p>
                                                <p>Somalia</p> -->
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-6 text-md-right">
                                            <ul class="invoice-date">
                                                <li>Invoice Date : sat 18 | 07 | 2018</li>
                                                <li>Due Date : sat 18 | 07 | 2018</li>
                                            </ul>
                                        </div> -->
                                    </div>
                                    <div class=" mt-5">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>ชื่อหอพัก</label>
                                                <input type="text" name="dt_name" value="<?=$data["dt_name"];?>"
                                                    class="form-control" name="dt_name" value="<?=$data["dt_name"];?>"
                                                    placeholder="">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputEmail4">ค่าประกันหอพัก</label>
                                                    <input type="number" class="form-control" name="dt_insurance"
                                                        value="<?=$data["dt_insurance"];?>" placeholder="">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>ค่ามัดจำหอพัก</label>
                                                    <input type="number" class="form-control" name="dt_deposit"
                                                        value="<?=$data["dt_deposit"];?>" placeholder="">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>ราคาหอพัก</label>
                                                    <input type="number" class="form-control" name="dt_price"
                                                        value="<?=$data["dt_price"];?>" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label for="inputEmail4">ค่าไฟฟ้า</label>
                                                    <input type="number" class="form-control"
                                                        value="<?=$data["dt_electricity_cost"]?>"
                                                        name="dt_electricity_cost" placeholder="">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label>ค่าน้ำ</label>
                                                    <input type="number" class="form-control"
                                                        value="<?=$data["dt_water_cost"]?>" name="dt_water_cost"
                                                        required placeholder="">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label>ค่าบริการอื่นๆ</label>
                                                    <input type="number" class="form-control"
                                                        value="<?=$data["dt_orther_cost"]?>" name="dt_orther_cost"
                                                        placeholder="">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label>ค่าอินเตอร์เน็ต</label>
                                                    <input type="number" class="form-control" name="dt_price"
                                                        value="<?=$data["dt_price"];?>" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="">รายละเอียดเบื้องต้น ที่เเสดงหน้าเเรก</label>
                                                <textarea class="form-control" name="dt_title"
                                                    rows="4"><?=$data["dt_title"];?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="">รายละเอียดหอพัก</label>
                                                <textarea class="form-control" name="dt_detail"
                                                    rows="4"><?=$data["dt_detail"]?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="">รายละเอียดเพิ่มเติม</label>
                                                <textarea class="form-control" name="dt_orther"
                                                    rows="4"><?=$data["dt_orther"]?></textarea>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputEmail4">รูปภาพทที่ 1</label>
                                                    <input type="file" class="form-control" required name="dt_image1"
                                                        placeholder="">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputEmail4">รูปภาพทที่ 2</label>
                                                    <input type="file" name="dt_image2" required class="form-control"
                                                        placeholder="รูปภาพที่ 2">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputEmail4">รูปภาพทที่ 3</label>
                                                    <input type="file" name="dt_image3" required class="form-control"
                                                        placeholder="รูปภาพที่ 3">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputState">ประภเทหอพัก</label>
                                                    <select class="form-control show-tick" name="dtp_id" required>

                                                        <?php

        $sql = "SELECT * FROM `tbl_dormitory_type`";
        $result = mysqli_query($conn, $sql);

        while ($item = mysqli_fetch_assoc($result)) {?>
                                                        <option value="<?=$item["dtp_id"]?>" <?php
if ($data["dtp_id"] == $item["dtp_id"]) {
            echo "selected";
        }
            ?>><?=$item["dtp_name"]?>
                                                        </option>
                                                        <?php }

        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>ตำเเหน่องหอพัก หรือฝั่งที่อยู่ของหอพัก</label>
                                                    <select class="form-control show-tick" name="dl_id" required>

                                                        <?php

        $sql = "SELECT * FROM `tbl_dormitory_locations`";
        $result = mysqli_query($conn, $sql);

        while ($item = mysqli_fetch_assoc($result)) {?>
                                                        <option value="<?=$item["dl_id"]?>" <?php
if ($data["dl_id"] == $item["dl_id"]) {
            echo "selected";
        }
            ?>><?=$item["dl_name"]?></option>
                                                        <?php }

        ?>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="invoice-head">
                                                <div class="row">
                                                    <div class="iv-left col-6 mt-5">
                                                        <span>เเก้ไขข้อมูลสิ่งอำนวนความสะดวกหอพักภายในห้อง</span>
                                                    </div>
                                                    <!-- <div class="iv-right col-6 text-md-right">
                                                <span>#34445998</span>
                                            </div> -->
                                                </div>
                                            </div>

                                            <?php
$ac_d_id = $data["ac_d_id"];
        $sql1 = "SELECT * FROM tbl_accessory_in_room WHERE ac_d_id='" . $ac_d_id . "'";
        $result1 = mysqli_query($conn, $sql1);

        while ($data1 = mysqli_fetch_assoc($result1)) {?>

                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="">เครื่องปรับอากาศ</label>
                                                    <select class="form-control show-tick" name="ac_d_air" required>
                                                        <option value="0">ไม่มี</option>
                                                        <option value="1" <?php
if ($data1["ac_d_air"] == 1) {
            echo "selected";
        }
            ?>>มี</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">พัดลม</label>
                                                    <select class="form-control show-tick" name="ac_d_fan" required>
                                                        <option value="0">ไม่มี</option>
                                                        <option value="1" <?php
if ($data1["ac_d_fan"] == 1) {
                echo "selected";
            }
            ?>>มี</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">เครื่องปรับน้ำอุ่น</label>
                                                    <select class="form-control show-tick" name="ac_d_water_heater"
                                                        required>
                                                        <option value="0">ไม่มี</option>
                                                        <option value="1" <?php
if ($data1["ac_d_water_heater"] == 1) {
                echo "selected";
            }
            ?>>มี</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="">เฟอร์นิเจอร์ ตู้ เตียง</label>
                                                    <select class="form-control show-tick" name="ac_d_furniture"
                                                        required>
                                                        <option value="0">ไม่มี</option>
                                                        <option value="1" <?php
if ($data1["ac_d_furniture"] == 1) {
                echo "selected";
            }
            ?>>มี</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">ทรูวิชัน</label>
                                                    <select class="form-control show-tick" name="ac_d_truevision"
                                                        required>
                                                        <option value="0">ไม่มี</option>
                                                        <option value="1" <?php
if ($data1["ac_d_truevision"] == 1) {
                echo "selected";
            }
            ?>>มี</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">เคเบิลทีวี / ดาวเทียม</label>
                                                    <select class="form-control show-tick"
                                                        name="ac_d_cable_satellite_tv" required>
                                                        <option value="0">ไม่มี</option>
                                                        <option value="1" <?php
if ($data1["ac_d_cable_satellite_tv"] == 1) {
                echo "selected";
            }
            ?>>มี</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="">โทรศัพท์สายตรง</label>
                                                    <select class="form-control show-tick" name="ac_d_phone_direct"
                                                        required>
                                                        <option value="0">ไม่มี</option>
                                                        <option value="1" <?php
if ($data1["ac_d_phone_direct"] == 1) {
                echo "selected";
            }
            ?>>มี</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">อินเตอร์เน็ตไร้สาย ( WIFI ) ในห้องพัก</label>
                                                    <select class="form-control show-tick" name="ac_d_wifi" required>
                                                        <option value="0">ไม่มี</option>
                                                        <option value="1" <?php
if ($data1["ac_d_wifi"] == 1) {
                echo "selected";
            }
            ?>>มี</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">เลี้ยงสัตว์เลี้ยง</label>
                                                    <select class="form-control show-tick" name="ac_d_pets" required>
                                                        <option value="0">ไม่มี</option>
                                                        <option value="1" <?php
if ($data1["ac_d_pets"] == 1) {
                echo "selected";
            }
            ?>>มี</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="">ที่สูบบุหรี่</label>
                                                    <select class="form-control show-tick" name="ac_d_moking" required>
                                                        <option value="0">ไม่มี</option>
                                                        <option value="1" <?php
if ($data1["ac_d_moking"] == 1) {
                echo "selected";
            }
            ?>>มี</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <?php }

        ?>
                                            <div class="invoice-head">
                                                <div class="row">
                                                    <div class="iv-left col-6 mt-5">
                                                        <span>เเก้ไขข้อมูลสิ่งอำนวยความสะดวก ในอาคาร</span>
                                                    </div>
                                                    <!-- <div class="iv-right col-6 text-md-right">
                                                <span>#34445998</span>
                                            </div> -->
                                                </div>
                                            </div>

                                            <?php
$ac_d_o_id = $data["ac_d_o_id"];
        $sql2 = "SELECT * FROM tbl_accessory_out_room WHERE ac_d_o_id='" . $ac_d_o_id . "'";

        $result2 = mysqli_query($conn, $sql2);

        while ($data2 = mysqli_fetch_assoc($result2)) {?>

                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="">ที่จอดรถ</label>
                                                    <select class="form-control show-tick" name="ac_d_o_parking"
                                                        required>
                                                        <option value="0">ไม่มี</option>
                                                        <option value="1" <?php
if ($data2["ac_d_o_parking"] == 1) {
            echo "selected";
        }
            ?>>มี</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">ลิฟท์</label>
                                                    <select class="form-control show-tick" name="ac_d_o_elevator"
                                                        required>
                                                        <option value="0">ไม่มี</option>
                                                        <option value="1" <?php
if ($data2["ac_d_o_elevator"] == 1) {
                echo "selected";
            }
            ?>>มี</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">มีร้านอินเตอร์เน็ตภายในอาคาร</label>
                                                    <select class="form-control show-tick" name="ac_d_o_internet_cafe"
                                                        required>
                                                        <option value="0">ไม่มี</option>
                                                        <option value="1" <?php
if ($data2["ac_d_o_internet_cafe"] == 1) {
                echo "selected";
            }
            ?>>มี</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="">มีระบบรักษาความปลอดภัย (keycard)</label>
                                                    <select class="form-control show-tick" name="ac_d_o_keycard"
                                                        required>
                                                        <option value="0">ไม่มี</option>
                                                        <option value="1" <?php
if ($data2["ac_d_o_keycard"] == 1) {
                echo "selected";
            }
            ?>>มี</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">กล้องวงจรปิด (CCTV)</label>
                                                    <select class="form-control show-tick" name="ac_d_o_cctv" required>
                                                        <option value="0">ไม่มี</option>
                                                        <option value="1" <?php
if ($data2["ac_d_o_cctv"] == 1) {
                echo "selected";
            }
            ?>>มี</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">สระว่ายน้ำ</label>
                                                    <select class="form-control show-tick" name="ac_d_o_swimming_pool"
                                                        required>
                                                        <option value="0">ไม่มี</option>
                                                        <option value="1" <?php
if ($data2["ac_d_o_swimming_pool"] == 1) {
                echo "selected";
            }
            ?>>มี</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="">โรงยิม / ฟิตเนส</label>
                                                    <select class="form-control show-tick" name="ac_d_o_fitness"
                                                        required>
                                                        <option value="0">ไม่มี</option>
                                                        <option value="1" <?php
if ($data2["ac_d_o_fitness"] == 1) {
                echo "selected";
            }
            ?>>มี</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">ร้านซัก-รีด / มีบริการเครื่องซักผ้า</label>
                                                    <select class="form-control show-tick" name="ac_d_o_laundry_shop"
                                                        required>
                                                        <option value="0">ไม่มี</option>
                                                        <option value="1" <?php
if ($data2["ac_d_o_laundry_shop"] == 1) {
                echo "selected";
            }
            ?>>มี</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">ร้านทำผม-เสริมสวย</label>
                                                    <select class="form-control show-tick" name="ac_d_o_beauty_salon"
                                                        required>
                                                        <option value="0">ไม่มี</option>
                                                        <option value="1" <?php
if ($data2["ac_d_o_beauty_salon"] == 1) {
                echo "selected";
            }
            ?>>มี</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <?php
}

        ?>

                                            <button type="submit" name="submitEdit"
                                                class="btn btn-warning">เเก้ไข</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- <div class="invoice-buttons text-right">
                                    <a href="#" class="invoice-btn">print invoice</a>
                                    <a href="#" class="invoice-btn">send invoice</a>
                                </div> -->
                            </div>
                        </div>

                        <?php
}
    ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->



        <?php

    if (isset($_POST["submitEdit"])) {

        $do_id = $_SESSION["do_id"];

        $dt_image1_md5 = md5(date("Y-m-d h:i:s"));
        $dt_image2_md5 = md5(date("Y-m-d h:i:s"));
        $dt_image3_md5 = md5(date("Y-m-d h:i:s"));

        $dt_image2 = uniqid() . $dt_image2_md5 . $_FILES["dt_image2"]["name"];
        $dt_image1 = uniqid() . $dt_image1_md5 . $_FILES["dt_image1"]["name"];
        $dt_image3 = uniqid() . $dt_image3_md5 . $_FILES["dt_image3"]["name"];

        $sql_update1 = "UPDATE `tbl_dormitory` SET `dt_name` = '" . $_POST["dt_name"] . "',
            `dt_detail` = '" . $_POST["dt_detail"] . "',`dt_image1`= '" . $dt_image1 . "'
            ,`dt_image2`= '" . $dt_image2 . "',`dt_image3`= '" . $dt_image3 . "'
             ,`dt_price` = '" . $_POST["dt_price"] . "',`dtp_id` = '" . $_POST["dtp_id"] . "'
            ,`dl_id` = '" . $_POST["dl_id"] . "'   ,`dt_insurance` = '" . $_POST["dt_insurance"] . "',
            `dt_deposit` = '" . $_POST["dt_deposit"] . "',`dt_title` = '" . $_POST["dt_title"] . "',
            `dt_orther` = '" . $_POST["dt_orther"] . "',`dt_electricity_cost`='" . $_POST["dt_electricity_cost"] . "',
            `dt_water_cost`='" . $_POST["dt_water_cost"] . "',`dt_orther_cost`='" . $_POST["dt_orther_cost"] . "',
            `dt_internet_cost`='" . $_POST["dt_internet_cost"] . "'
             WHERE `tbl_dormitory`.`do_id` = '$do_id';";

        $sql_update_in = "UPDATE `tbl_accessory_in_room` SET `ac_d_air` = '" . $_POST["ac_d_air"] . "',
            `ac_d_fan` = '" . $_POST["ac_d_fan"] . "',`ac_d_water_heater` = '" . $_POST["ac_d_water_heater"] . "'
            ,`ac_d_furniture` = '" . $_POST["ac_d_furniture"] . "',`ac_d_truevision` = '" . $_POST["ac_d_truevision"] . "'
            ,`ac_d_cable_satellite_tv` = '" . $_POST["ac_d_cable_satellite_tv"] . "',`ac_d_phone_direct` = '" . $_POST["ac_d_phone_direct"] . "'
            ,`ac_d_wifi` = '" . $_POST["ac_d_wifi"] . "',`ac_d_pets` = '" . $_POST["ac_d_pets"] . "'
            ,`ac_d_moking` = '" . $_POST["ac_d_moking"] . "'
            WHERE `tbl_accessory_in_room`.`ac_d_id` = '$ac_d_id';";

        $sql_update_out = "UPDATE `tbl_accessory_out_room` SET `ac_d_o_parking` = '" . $_POST["ac_d_o_parking"] . "',
            `ac_d_o_elevator` = '" . $_POST["ac_d_o_elevator"] . "',`ac_d_o_internet_cafe` = '" . $_POST["ac_d_o_internet_cafe"] . "'
            ,`ac_d_o_keycard` = '" . $_POST["ac_d_o_keycard"] . "',`ac_d_o_cctv` = '" . $_POST["ac_d_o_cctv"] . "'
            ,`ac_d_o_swimming_pool` = '" . $_POST["ac_d_o_swimming_pool"] . "',`ac_d_o_fitness` = '" . $_POST["ac_d_o_fitness"] . "'
            ,`ac_d_o_laundry_shop` = '" . $_POST["ac_d_o_laundry_shop"] . "',`ac_d_o_beauty_salon` = '" . $_POST["ac_d_o_beauty_salon"] . "'

            WHERE `tbl_accessory_out_room`.`ac_d_o_id` = '$ac_d_o_id';";

        if (mysqli_query($conn, $sql_update1)) {
            if (mysqli_query($conn, $sql_update_in)) {
                if (mysqli_query($conn, $sql_update_out)) {
                    $path = "../../Admin/images/drm/";
                    move_uploaded_file($_FILES["dt_image1"]["tmp_name"], "$path/$dt_image1");
                    move_uploaded_file($_FILES["dt_image2"]["tmp_name"], "$path/$dt_image2");
                    move_uploaded_file($_FILES["dt_image3"]["tmp_name"], "$path/$dt_image3");
                    echo "<script>";
                    echo "alert('เเก้ไขข้อมูลสำเร็จ');";
                    echo "location ='./index.php';";
                    echo "</script>";

                } else {
                    echo "<script>";
                    echo "alert('ไม่สามารถเเก้ไขข้อมูลได้');";
                    echo "</script>";
                }
            } else {
                echo "<script>";
                echo "alert('ไม่สามารถเเก้ไขข้อมูลได้');";
                echo "</script>";
            }
        } else {
            echo "<script>";
            echo "alert('ไม่สามารถเเก้ไขข้อมูลได้');";
            echo "</script>";
        }

    }

    ?>

        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.
                </p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Added</h4>
                            <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You missed you Password!</h4>
                            <span class="time"><i class="ti-time"></i>09:20 Am</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Member waiting for you Attention</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You Added Kaji Patha few minutes ago</h4>
                            <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Ratul Hamba sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Hello sir , where are you, i am egerly waiting for you.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show recent activity</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch2" />
                                    <label for="switch2">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show your emails</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch3" />
                                    <label for="switch3">Toggle</label>
                                </div>
                            </div>
                            <p>Show email so that easily find you.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show Task statistics</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch5" />
                                    <label for="switch5">Toggle</label>
                                </div>
                            </div>
                            <p>Use checkboxes when looking for yes or no answers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
<?php
} else {
    echo "<script>";
    echo "location ='./login.php';";
    echo "</script>";
}
?>