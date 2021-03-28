<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>หน้าหลัก</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">

    <!-- google font kanit -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,600;0,700;1,100;1,200;1,300;1,400;1,600&display=swap"
        rel="stylesheet">

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
                    <input type="search" name="search" class="search_input menu_mm" placeholder="Search"
                        required="required">
                    <button
                        class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                        <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
            <nav class="menu_nav">
                <ul class="menu_mm">
                    <li class="menu_mm"><a href="index.html">หน้าหลัก</a></li>
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
            <div class="home_slider_container">

                <!-- Home Slider -->
                <div class="owl-carousel owl-theme home_slider">

                    <!-- Home Slider Item -->
                    <div class="owl-item">
                        <div class="home_slider_background"
                            style="background-image:url('images/project/Presentation2.png')">
                        </div>
                        <div class="home_slider_content">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <div class="home_slider_title">ค้นหาหอพักไกล้ มมส.</div>
                                        <div class="home_slider_subtitle">คุณสามารถค้นหาหอพักได้ที่นี่</div>
                                        <div class="home_slider_form_container">
                                            <form action="#" id="home_search_form_1"
                                                class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                                                <div class="d-flex flex-row align-items-center justify-content-start">
                                                    <input type="search" name="search" class="home_search_input"
                                                        placeholder="ค้นหา" required="required">
                                                    <!-- <select class="dropdown_item_select home_search_input">
                                                        <option>Category Courses</option>
                                                        <option>Category</option>
                                                        <option>Category</option>
                                                    </select>
                                                    <select class="dropdown_item_select home_search_input">
                                                        <option>Select Price Type</option>
                                                        <option>Price Type</option>
                                                        <option>Price Type</option>
                                                    </select> -->
                                                </div>
                                                <button type="submit" class="home_search_button">ค้นหา</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Home Slider Item -->
                    <div class="owl-item">
                        <div class="home_slider_background" style="background-image:url('images/project/Slide2.PNG')">
                        </div>
                        <div class="home_slider_content">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <div class="home_slider_title">ค้นหาหอพักไกล้ มมส.</div>
                                        <div class="home_slider_subtitle">คุณสามารถค้นหาหอพักได้ที่นี่</div>
                                        <div class="home_slider_form_container">
                                            <form action="#" id="home_search_form_2"
                                                class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                                                <div class="d-flex flex-row align-items-center justify-content-start">
                                                    <input type="search" name="search" class="home_search_input"
                                                        placeholder="ค้นหา" required="required">
                                                    <!-- <select class="dropdown_item_select home_search_input">
                                                        <option>Category Courses</option>
                                                        <option>Category</option>
                                                        <option>Category</option>
                                                    </select>
                                                    <select class="dropdown_item_select home_search_input">
                                                        <option>Select Price Type</option>
                                                        <option>Price Type</option>
                                                        <option>Price Type</option>
                                                    </select> -->
                                                </div>
                                                <button type="submit" class="home_search_button">ค้นหา</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Home Slider Item -->
                    <div class="owl-item">
                        <div class="home_slider_background" style="background-image:url('images/project/Slide3.PNG')">
                        </div>
                        <div class="home_slider_content">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <div class="home_slider_title">ค้นหาหอพักไกล้ มมส.</div>
                                        <div class="home_slider_subtitle">คุณสามารถค้นหาหอพักได้ที่นี่</div>
                                        <div class="home_slider_form_container">
                                            <form action="#" id="home_search_form_3"
                                                class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                                                <div class="d-flex flex-row align-items-center justify-content-start">
                                                    <input type="search" name="search" class="home_search_input"
                                                        placeholder="ค้นหา" required="required">
                                                    <!-- <select class="dropdown_item_select home_search_input">
                                                        <option>Category Courses</option>
                                                        <option>Category</option>
                                                        <option>Category</option>
                                                    </select>
                                                    <select class="dropdown_item_select home_search_input">
                                                        <option>Select Price Type</option>
                                                        <option>Price Type</option>
                                                        <option>Price Type</option>
                                                    </select> -->
                                                </div>
                                                <button type="submit" class="home_search_button">ค้นหา</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Home Slider Nav -->

            <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
            <div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
        </div>



        <!-- Popular Courses -->

        <div class="courses">
            <div class="section_background parallax-window" data-parallax="scroll"
                data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <center>
                            <a href="./index.php" type="button" class="btn btn-success my-5 mx-3">ทั้งหมด</a>
                            <a href="./index.php?dl_id=1" type="button" class="btn btn-primary my-5 mx-3">หน้ามอ</a>
                            <a href="./index.php?dl_id=2" type="button" class="btn btn-info my-5 mx-3">ขามเรียง</a>
                            <a href="./index.php?dl_id=3" type="button" class="btn btn-success my-5 mx-3">ขอนยาง</a>
                            <a href="./index.php?dl_id=4" type="button" class="btn btn-warning my-5 mx-3">มอเก่า</a>
                        </center>
                        <div class="section_title_container text-center">
                            <h2 class="section_title">หอพักที่ไกล้มหาวิทยาลัยมหาสารคาม</h2>
                            <div class="section_subtitle">
                                <p>เราได้รวบรวมหอพักที่ดีที่สุด ไกล้มหาวิทยาลัยมหาสารคาม เดินทางสะดวกไว้ให้ท่านเเล้ว
                                    สามารถค้นหา เปรียบเทียบ เเละทำรายการจองได้เเล้ววันนี้</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row courses_row">

                    <?php

include "./connectdb.php";

if (isset($_GET["dl_id"])) {
    $dl_id = $_GET["dl_id"];
    $sql = "SELECT * FROM tbl_dormitory d
        JOIN tbl_dormitory_locations l USING(dl_id)
        JOIN tbl_dormitory_owner doo USING(do_id)
        JOIN tbl_dormitory_type dt USING(dtp_id)
        JOIN tbl_accessory_in_room ai USING(ac_d_id)
        JOIN tbl_accessory_out_room aor USING(ac_d_o_id)
        WHERE  d.ac_d_id !='0' AND d.do_id != 0 AND d.ac_d_o_id !=0
        AND d.dt_count_room != '0' AND dl_id='$dl_id' ";

    if (isset($_GET["search"])) {
        $search = $_GET["search"];
        $sql = "SELECT * FROM tbl_dormitory d
        JOIN tbl_dormitory_locations l USING(dl_id)
        JOIN tbl_dormitory_owner doo USING(do_id)
        JOIN tbl_dormitory_type dt USING(dtp_id)
        JOIN tbl_accessory_in_room ai USING(ac_d_id)
        JOIN tbl_accessory_out_room aor USING(ac_d_o_id)
        WHERE d.dt_name LIKE '%$search%' OR
        l.dl_name LIKE '%$search%' OR
        dt.dtp_name LIKE '%$search%' AND
        d.ac_d_id !='0' AND d.do_id != 0 AND d.ac_d_o_id !=0
        AND d.dt_count_room != '0'";
    } else {
        $sql = "SELECT * FROM tbl_dormitory d
        JOIN tbl_dormitory_locations l USING(dl_id)
        JOIN tbl_dormitory_owner doo USING(do_id)
        JOIN tbl_dormitory_type dt USING(dtp_id)
        JOIN tbl_accessory_in_room ai USING(ac_d_id)
        JOIN tbl_accessory_out_room aor USING(ac_d_o_id)
        WHERE  d.ac_d_id !='0' AND d.do_id != 0 AND d.ac_d_o_id !=0
        AND d.dt_count_room != '0' AND dl_id='$dl_id' ";
    }

} else {
    $sql = "SELECT * FROM tbl_dormitory d
        JOIN tbl_dormitory_locations l USING(dl_id)
        JOIN tbl_dormitory_owner doo USING(do_id)
        JOIN tbl_dormitory_type dt USING(dtp_id)
        JOIN tbl_accessory_in_room ai USING(ac_d_id)
        JOIN tbl_accessory_out_room aor USING(ac_d_o_id)
        WHERE  d.ac_d_id !='0' AND d.do_id != 0 AND d.ac_d_o_id !=0
        AND d.dt_count_room != '0'  ";

    if (isset($_GET["search"])) {
        $search = $_GET["search"];
        $sql = "SELECT * FROM tbl_dormitory d
        JOIN tbl_dormitory_locations l USING(dl_id)
        JOIN tbl_dormitory_owner doo USING(do_id)
        JOIN tbl_dormitory_type dt USING(dtp_id)
        JOIN tbl_accessory_in_room ai USING(ac_d_id)
        JOIN tbl_accessory_out_room aor USING(ac_d_o_id)
        WHERE d.dt_name LIKE '%$search%' OR
        l.dl_name LIKE '%$search%' OR
        dt.dtp_name LIKE '%$search%' AND
        d.ac_d_id !='0' AND d.do_id != 0 AND d.ac_d_o_id !=0
        AND d.dt_count_room != '0'";
    } else {
        $sql = "SELECT * FROM tbl_dormitory d
        JOIN tbl_dormitory_locations l USING(dl_id)
        JOIN tbl_dormitory_owner doo USING(do_id)
        JOIN tbl_dormitory_type dt USING(dtp_id)
        JOIN tbl_accessory_in_room ai USING(ac_d_id)
        JOIN tbl_accessory_out_room aor USING(ac_d_o_id)
        WHERE  d.ac_d_id !='0' AND d.do_id != 0 AND d.ac_d_o_id !=0
        AND d.dt_count_room != '0'  ";
    }

}

$result = mysqli_query($conn, $sql);

while ($data = mysqli_fetch_assoc($result)) {
    ?>

                    <!-- Course -->
                    <div class="col-lg-4 course_col my-3">
                        <a href="./detail.php?dt_id=<?=$data["dt_id"]?>">
                            <div class="course">
                                <div class="course_image">
                                    <img src="../Admin/images/drm/<?=$data["dt_image1"]?>" alt="" class="">
                                </div>
                                <div class="course_body">
                                    <h3 class="course_title"><a href="./detail.php?dt_id=<?=$data["dt_id"]?>">หอพัก
                                            <?=$data["dt_name"]?></a></h3>
                                    <!-- <div class="course_teacher">หอชาย</div> -->
                                    <div class="course_text">
                                        <p><?=$data["dt_title"]?></p>
                                    </div>
                                </div>
                                <div class="course_footer">
                                    <div
                                        class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_info">
                                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                            <span><?=$data["dtp_name"]?></span>
                                        </div>
                                        <div class="course_info">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <span><?=$data["dl_name"]?></span>
                                        </div>
                                        <div class="course_price ml-auto"><?php echo number_format($data["dt_price"]) ?>
                                            บาท
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <?php
}

?>




                </div>
                <!-- <div class="row">
                    <div class="col">
                        <div class="courses_button trans_200"><a href="#">view all courses</a></div>
                    </div>
                </div> -->
            </div>
        </div>

        <!-- Team -->

        <div class="team">
            <div class="team_background parallax-window" data-parallax="scroll"
                data-image-src="images/team_background.jpg" data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <h2 class="section_title">ทีมงานผู้พัฒนาระบบ</h2>
                            <div class="section_subtitle">
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu.
                                    Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row team_row">


                    <!-- Team Item -->
                    <div class="col-lg-3 col-md-6 team_col">
                        <div class="team_item">
                            <div class="team_image"><img
                                    src="https://scontent.fkkc3-1.fna.fbcdn.net/v/t1.0-9/121477282_3381194408640226_4657246642109814393_o.jpg?_nc_cat=102&ccb=3&_nc_sid=09cbfe&_nc_eui2=AeE0DgdDbpUjLuBQXAzsViIRpUv0rFyBDeWlS_SsXIEN5TRifh8GqqiAhdd0ebSn6PvEaBQDXmBCy6qDrwAFXHwm&_nc_ohc=075MZyTbqwAAX98yZiW&_nc_ht=scontent.fkkc3-1.fna&oh=33de23e104756df9272e66236c3700bf&oe=6060D624"
                                    alt=""></div>
                            <div class="team_body">
                                <div class="team_title"><a
                                        href="https://www.facebook.com/profile.php?id=100002491000264" target="_blank">
                                        ชวน ชำนาญพรม
                                    </a>
                                </div>
                                <div class="team_subtitle">Designer & Website</div>
                                <div class="social_list">
                                    <ul>
                                        <li><a target="_blank"
                                                href="https://www.facebook.com/profile.php?id=100002491000264"><i
                                                    class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <!-- <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
                                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Team Item -->
                    <div class="col-lg-3 col-md-6 team_col">
                        <div class="team_item">
                            <div class="team_image"><img
                                    src="https://scontent.fkkc3-1.fna.fbcdn.net/v/t1.0-9/121637372_3316862145099880_1115936021269485073_n.jpg?_nc_cat=102&ccb=3&_nc_sid=09cbfe&_nc_eui2=AeFtzKLRfGlr-GeMBkBRUXzEBQDmHnG3PzIFAOYecbc_MvB3XISAjnputmndof349flXRhs_8pye07P1Irjdkqaz&_nc_ohc=UsyMHOcydTUAX8rTJis&_nc_ht=scontent.fkkc3-1.fna&oh=9d8e2adb37630bcb8ed3867c62922c7f&oe=606204B4"
                                    alt=""></div>
                            <div class="team_body">
                                <div class="team_title"><a href="https://www.facebook.com/farm.chananyu"
                                        target="_blank">ชนัญญู
                                        นะ​วะ​โคโคกศรี</a></div>
                                <div class="team_subtitle">Programmer & Developer</div>
                                <div class="social_list">
                                    <ul>
                                        <li><a target="_blank" href="https://www.facebook.com/farm.chananyu"><i
                                                    class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <!-- <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
                                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- Footer -->
        <?php include_once "./footer.php";?>

    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>