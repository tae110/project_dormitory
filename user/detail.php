<?php
session_start();
// if (isset($_SESSION['u_id'])) {

if (isset($_GET["dt_id"])) {
    $dt_id = $_GET["dt_id"];
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>รายละเอียดหอพัก</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/course.css">
    <link rel="stylesheet" type="text/css" href="styles/course_responsive.css">

    <link rel="stylesheet" type="text/css" href="styles/contact.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>

<body>

    <div class="super_container">

        <!-- Header -->
        <?php include_once "./header.php"?>

        <!-- Menu -->

        <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
            <div class="menu_close_container">
                <div class="menu_close">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="search">
                <form action="#" class="header_search_form menu_mm">
                    <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                    <button
                        class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                        <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
            <nav class="menu_nav">
                <ul class="menu_mm">
                    <li class="menu_mm"><a href="index.html">Home</a></li>
                    <li class="menu_mm"><a href="#">About</a></li>
                    <li class="menu_mm"><a href="#">Courses</a></li>
                    <li class="menu_mm"><a href="#">Blog</a></li>
                    <li class="menu_mm"><a href="#">Page</a></li>
                    <li class="menu_mm"><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>

        <!-- Home -->

        <div class="home">
            <div class="breadcrumbs_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="index.php">หน้าหลัก</a></li>
                                    <!-- <li><a href="courses.html">Courses</a></li> -->
                                    <li>รายละเอียดหอพัก</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Course -->

        <?php

    include "./connectdb.php";

    $sql = "SELECT * FROM tbl_dormitory d
        JOIN tbl_dormitory_locations l USING(dl_id)
        JOIN tbl_dormitory_owner doo USING(do_id)
        JOIN tbl_dormitory_type dt USING(dtp_id)
        JOIN tbl_accessory_in_room ai USING(ac_d_id)
        JOIN tbl_accessory_out_room aor USING(ac_d_o_id)
        WHERE dt_id='$dt_id';";
    $result = mysqli_query($conn, $sql);

    while ($data = mysqli_fetch_assoc($result)) {
        ?>

        <div class="course">
            <div class="container">
                <div class="row">

                    <!-- Course -->
                    <div class="col-lg-8">

                        <div class="course_container">
                            <div class="course_title">หอพัก <?=$data["dt_name"]?></div>
                            <div
                                class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

                                <!-- Course Info Item -->
                                <div class="course_info_item">
                                    <div class="course_info_title">ชื่อเจ้าของหอ : </div>
                                    <div class="course_info_text"><a
                                            href="./booking.php?dt_id=<?=$dt_id?>"><?=$data["do_fullname"]?></a></div>
                                </div>

                                <!-- Course Info Item -->
                                <div class="course_info_item">
                                    <div class="course_info_title">พื้นที่ตั้ง :</div>
                                    <!-- <div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div> -->
                                    <div class="course_info_text"><a
                                            href="./booking.php?dt_id=<?=$dt_id?>"><?=$data["dl_name"]?></a></div>
                                </div>

                                <!-- Course Info Item -->
                                <div class="course_info_item">
                                    <div class="course_info_title">ประเภทหอ :</div>
                                    <div class="course_info_text"><a
                                            href="./booking.php?dt_id=<?=$dt_id?>"><?=$data["dtp_name"]?></a></div>
                                </div>

                            </div>


                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="../Admin/images/drm/<?=$data["dt_image1"]?>" class="d-block w-100"
                                            alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../Admin/images/drm/<?=$data["dt_image2"]?>" class="d-block w-100"
                                            alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../Admin/images/drm/<?=$data["dt_image3"]?>" class="d-block w-100"
                                            alt="">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <!-- Course Tabs -->
                            <div class="course_tabs_container">
                                <div class="tabs d-flex flex-row align-items-center justify-content-start">
                                    <div class="tab active">รายละเอียด</div>
                                    <div class="tab">สิ่งอำนวยความสะดวก</div>
                                </div>
                                <div class="tab_panels">

                                    <!-- Description -->
                                    <div class="tab_panel active">
                                        <div class="tab_panel_title">หอพัก <?=$data["dt_name"]?></div>
                                        <div class="tab_panel_content">
                                            <div class="tab_panel_text">
                                                <p><?=$data["dt_title"]?></p>
                                            </div>
                                            <div class="tab_panel_section">
                                                <div class="tab_panel_subtitle">รายละเอียด</div>
                                                <p><?=$data["dt_detail"]?></p>
                                            </div>
                                            <div class="tab_panel_section">
                                                <div class="tab_panel_subtitle">เพิ่มเติม</div>
                                                <div class="tab_panel_text">
                                                    <p><?=$data["dt_orther"]?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Curriculum -->
                                    <div class="tab_panel tab_panel_2">
                                        <div class="tab_panel_content">
                                            <div class="tab_panel_title">สิ่งอำนวนความสะดวกหอพักภายในห้อง</div>
                                            <div class="tab_panel_content">
                                                <div class="tab_panel_text">
                                                    <li>
                                                        <span>เครื่องปรับอากาศ </span>

                                                        <?php
if ($data["ac_d_air"] == 1) {
            echo "<span class='text-success ml-3'>มี</span>";
        } else {
            echo "<span class='text-danger ml-3'>ไม่มี</span>";
        }
        ?>

                                                    </li>
                                                    <li>
                                                        <span>พัดลม </span>

                                                        <?php
if ($data["ac_d_fan"] == 1) {
            echo "<span class='text-success ml-3'>มี</span>";
        } else {
            echo "<span class='text-danger ml-3'>ไม่มี</span>";
        }
        ?>

                                                    </li>
                                                    <li>
                                                        <span>เครื่องปรับน้ำอุ่น </span>

                                                        <?php
if ($data["ac_d_water_heater"] == 1) {
            echo "<span class='text-success ml-3'>มี</span>";
        } else {
            echo "<span class='text-danger ml-3'>ไม่มี</span>";
        }
        ?>

                                                    </li>
                                                    <li>
                                                        <span>เฟอร์นิเจอร์ ตู้ เตียง </span>

                                                        <?php
if ($data["ac_d_furniture"] == 1) {
            echo "<span class='text-success ml-3'>มี</span>";
        } else {
            echo "<span class='text-danger ml-3'>ไม่มี</span>";
        }
        ?>

                                                    </li>
                                                    <li>
                                                        <span>ทรูวิชัน </span>

                                                        <?php
if ($data["ac_d_truevision"] == 1) {
            echo "<span class='text-success ml-3'>มี</span>";
        } else {
            echo "<span class='text-danger ml-3'>ไม่มี</span>";
        }
        ?>

                                                    </li>
                                                    <li>
                                                        <span>เคเบิลทีวี / ดาวเทียม </span>

                                                        <?php
if ($data["ac_d_cable_satellite_tv"] == 1) {
            echo "<span class='text-success ml-3'>มี</span>";
        } else {
            echo "<span class='text-danger ml-3'>ไม่มี</span>";
        }
        ?>

                                                    </li>
                                                    <li>
                                                        <span>โทรศัพท์สายตรง </span>

                                                        <?php
if ($data["ac_d_phone_direct"] == 1) {
            echo "<span class='text-success ml-3'>มี</span>";
        } else {
            echo "<span class='text-danger ml-3'>ไม่มี</span>";
        }
        ?>

                                                    </li>
                                                    <li>
                                                        <span>อินเตอร์เน็ตไร้สาย ( WIFI ) ในห้องพัก </span>

                                                        <?php
if ($data["ac_d_wifi"] == 1) {
            echo "<span class='text-success ml-3'>มี</span>";
        } else {
            echo "<span class='text-danger ml-3'>ไม่มี</span>";
        }
        ?>

                                                    </li>
                                                    <li>
                                                        <span>เลี้ยงสัตว์เลี้ยง </span>

                                                        <?php
if ($data["ac_d_pets"] == 1) {
            echo "<span class='text-success ml-3'>มี</span>";
        } else {
            echo "<span class='text-danger ml-3'>ไม่มี</span>";
        }
        ?>

                                                    </li>
                                                    <li>
                                                        <span>ที่สูบบุหรี่ </span>

                                                        <?php
if ($data["ac_d_moking"] == 1) {
            echo "<span class='text-success ml-3'>มี</span>";
        } else {
            echo "<span class='text-danger ml-3'>ไม่มี</span>";
        }
        ?>

                                                    </li>
                                                </div>
                                            </div>
                                            <div class="tab_panel_title">สิ่งอำนวยความสะดวก ในอาคาร</div>
                                            <div class="tab_panel_content">
                                                <div class="tab_panel_text">
                                                    <li>
                                                        <span>ที่จอดรถ </span>

                                                        <?php
if ($data["ac_d_o_parking"] == 1) {
            echo "<span class='text-success ml-3'>มี</span>";
        } else {
            echo "<span class='text-danger ml-3'>ไม่มี</span>";
        }
        ?>

                                                    </li>
                                                    <li>
                                                        <span>ลิฟท์ </span>

                                                        <?php
if ($data["ac_d_o_elevator"] == 1) {
            echo "<span class='text-success ml-3'>มี</span>";
        } else {
            echo "<span class='text-danger ml-3'>ไม่มี</span>";
        }
        ?>

                                                    </li>
                                                    <li>
                                                        <span>มีร้านอินเตอร์เน็ตภายในอาคาร </span>

                                                        <?php
if ($data["ac_d_o_internet_cafe"] == 1) {
            echo "<span class='text-success ml-3'>มี</span>";
        } else {
            echo "<span class='text-danger ml-3'>ไม่มี</span>";
        }
        ?>

                                                    </li>
                                                    <li>
                                                        <span>มีระบบรักษาความปลอดภัย (keycard) </span>

                                                        <?php
if ($data["ac_d_o_keycard"] == 1) {
            echo "<span class='text-success ml-3'>มี</span>";
        } else {
            echo "<span class='text-danger ml-3'>ไม่มี</span>";
        }
        ?>

                                                    </li>
                                                    <li>
                                                        <span>กล้องวงจรปิด (CCTV) </span>

                                                        <?php
if ($data["ac_d_o_cctv"] == 1) {
            echo "<span class='text-success ml-3'>มี</span>";
        } else {
            echo "<span class='text-danger ml-3'>ไม่มี</span>";
        }
        ?>

                                                    </li>
                                                    <li>
                                                        <span>สระว่ายน้ำ </span>

                                                        <?php
if ($data["ac_d_o_swimming_pool"] == 1) {
            echo "<span class='text-success ml-3'>มี</span>";
        } else {
            echo "<span class='text-danger ml-3'>ไม่มี</span>";
        }
        ?>

                                                    </li>
                                                    <li>
                                                        <span>โรงยิม / ฟิตเนส </span>

                                                        <?php
if ($data["ac_d_o_fitness"] == 1) {
            echo "<span class='text-success ml-3'>มี</span>";
        } else {
            echo "<span class='text-danger ml-3'>ไม่มี</span>";
        }
        ?>

                                                    </li>
                                                    <li>
                                                        <span>ร้านซัก-รีด / มีบริการเครื่องซักผ้า </span>

                                                        <?php
if ($data["ac_d_o_laundry_shop"] == 1) {
            echo "<span class='text-success ml-3'>มี</span>";
        } else {
            echo "<span class='text-danger ml-3'>ไม่มี</span>";
        }
        ?>

                                                    </li>
                                                    <li>
                                                        <span>ร้านทำผม-เสริมสวย </span>

                                                        <?php
if ($data["ac_d_o_beauty_salon"] == 1) {
            echo "<span class='text-success ml-3'>มี</span>";
        } else {
            echo "<span class='text-danger ml-3'>ไม่มี</span>";
        }
        ?>

                                                    </li>
                                                </div>

                                            </div>
                                        </div>



                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Course Sidebar -->
                    <div class="col-lg-4">
                        <div class="sidebar">

                            <!-- Feature -->
                            <div class="sidebar_section">
                                <div class="sidebar_section_title">ค่าเช่า</div>
                                <div class="sidebar_feature">
                                    <div class="course_price"><?php echo number_format($data["dt_price"]) ?> บาท/เดือน
                                    </div>
                                    <!-- <div class="course_price">1250-3000 บาท/เดือน</div> -->
                                    <!-- Features -->
                                    <div class="feature_list">

                                        <!-- Feature -->
                                        <div class="feature d-flex flex-row align-items-center justify-content-start">
                                            <div class="feature_title"><i class="fa fa-clock-o"
                                                    aria-hidden="true"></i><span>ค่ามัดจำ :</span></div>
                                            <div class="feature_text ml-auto">
                                                <?php echo number_format($data["dt_deposit"]) ?> บาท
                                            </div>
                                        </div>

                                        <!-- Feature -->
                                        <div class="feature d-flex flex-row align-items-center justify-content-start">
                                            <div class="feature_title"><i class="fa fa-clock-o"
                                                    aria-hidden="true"></i><span>ค่าประกันหอพัก :</span></div>
                                            <div class="feature_text ml-auto">
                                                <?php echo number_format($data["dt_insurance"]) ?> บาท
                                            </div>
                                        </div>



                                        <!-- Feature -->
                                        <div class="feature d-flex flex-row align-items-center justify-content-start">
                                            <div class="feature_title"><i class="fa fa-file-text-o"
                                                    aria-hidden="true"></i><span>ค่าไฟฟ้า :</span></div>
                                            <div class="feature_text ml-auto">
                                                <?php echo number_format($data["dt_electricity_cost"]) ?>
                                                บาท/ยูนิต</div>
                                        </div>

                                        <!-- Feature -->
                                        <div class="feature d-flex flex-row align-items-center justify-content-start">
                                            <div class="feature_title"><i class="fa fa-question-circle-o"
                                                    aria-hidden="true"></i><span>ค่าน้ำ :</span></div>
                                            <div class="feature_text ml-auto">
                                                <?php echo number_format($data["dt_water_cost"]) ?>
                                                บาท/ยูนิต</div>
                                        </div>

                                        <!-- Feature -->
                                        <div class="feature d-flex flex-row align-items-center justify-content-start">
                                            <div class="feature_title"><i class="fa fa-list-alt"
                                                    aria-hidden="true"></i><span>ค่าบริการอื่นๆ :</span></div>
                                            <div class="feature_text ml-auto">
                                                <?php echo number_format($data["dt_orther_cost"]) ?>
                                                บาท/เดือน</div>
                                        </div>

                                        <!-- Feature -->
                                        <div class="feature d-flex flex-row align-items-center justify-content-start">
                                            <div class="feature_title"><i class="fa fa-users"
                                                    aria-hidden="true"></i><span>อินเตอร์เน็ต :</span></div>
                                            <div class="feature_text ml-auto">
                                                <?php echo number_format($data["dt_internet_cost"]) ?>
                                                บาท/เดือน</div>
                                        </div>
                                        <div class="feature d-flex flex-row align-items-center justify-content-start">
                                            <div class="feature_title"><i class="fa fa-bed"
                                                    aria-hidden="true"></i><span>จำนวนห้องพักที่ว่าง :</span></div>
                                            <div class="feature_text ml-auto">
                                                <?php echo number_format($data["dt_count_room"]) ?> ห้อง</div>
                                        </div>
                                        <a href="./booking.php?dt_id=<?=$dt_id?>">
                                            <button type="btn" class="comment_button trans_200">จองห้องพัก</button>
                                        </a>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <a href="./booking.php?dt_id=<?=$dt_id?>">
                    <button type="btn" class="comment_button trans_200">จองห้องพัก</button>
                </a>

            </div>


        </div>


        <?php
}

    ?>
        <!-- Footer -->
        <?php include_once "./footer.php";?>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="plugins/colorbox/jquery.colorbox-min.js"></script>
    <script src="js/course.js"></script>
</body>

</html>
<?php
}
// } else {
//     echo "<script>";
//     echo "location='./login.php'";
//     echo "</script>";
// }
?>