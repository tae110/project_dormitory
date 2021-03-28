<?php
session_start();
if (isset($_SESSION['u_id'])) {
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>รายการจอง</title>
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
    <link rel="stylesheet" type="text/css" href="styles/about.css">
    <link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>


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
                                    <li><a href="index.html">Home</a></li>
                                    <li>About</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About -->

        <div class="about">
            <div class="container">


                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <h2 class="section_title">รายการจองหอพัก</h2>
                            <!-- <div class="section_subtitle">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu
                                    Vestibulum</p>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="row about_row">

                    <!-- About Item -->
                    <div class="col-lg-12 about_col about_col_left">

                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ไอดีการจอง</th>
                                    <th>ชื่อหอพัก</th>
                                    <th>สลิปโอนเงิน</th>
                                    <th>จองเมื่อ</th>
                                    <th>สถานะ</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
include "./connectdb.php";
    $sql = "SELECT * FROM tbl_bookings b JOIN tbl_dormitory dt USING(dt_id)
           JOIN tbl_status USING(st_id) WHERE u_id='" . $_SESSION["u_id"] . "' ORDER BY bk_id DESC ";
    $result = mysqli_query($conn, $sql);

    while ($data = mysqli_fetch_assoc($result)) {
        ?>
                                <tr>
                                    <td><?=$data["bk_id"]?></td>
                                    <td><?=$data["dt_name"]?></td>
                                    <td><a href="./images/slip/<?=$data["bk_slip"]?>" type="button"
                                            class="btn btn-primary btn-sm text-white">สลิปโอนเงิน</a></td>
                                    <td><?=$data["bk_date"]?></td>
                                    <td>
                                        <?php
if ($data["st_id"] == 1) {?>
                                        <span class="badge badge-warning"><?=$data["st_name"]?></span>
                                        <?php

        } else {
            ?>
                                        <span class="badge badge-success"><?=$data["st_name"]?></span>

                                        <?php

        }
        ?>

                                    </td>
                                    <td>
                                        <a href="bookingDetail.php?bk_id=<?=$data["bk_id"]?>" type="button"
                                            class="btn btn-sm btn-primary">ดูรายการ</a>

                                        <?php
if ($data["st_id"] == 1) {?>
                                        <a href="./Editbooking.php?bk_id=<?=$data["bk_id"]?>&dt_id=<?=$data["dt_id"]?>"
                                            type="button" class="btn btn-sm btn-warning">เเก้ไข</a>
                                        <button type="button"
                                            onclick="deleteBooking(<?=$data['bk_id']?>,<?=$data['dt_id']?>)"
                                            class="btn btn-sm btn-danger">ลบ</button>
                                        <?php }
        ?>
                                    </td>
                                </tr>
                                <?php }

    ?>

                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include_once "./footer.php";?>
    </div>

    <script>
    function deleteBooking(bk_id, dt_id) {
        var txt;
        var r = confirm("ต้องการลบข้อมูลการจองหรือไม่");
        if (r == true) {
            location = './bookingList.php?deleteBooking=req&bk_id=' + bk_id + '&dt_id=' + dt_id;
        } else {
            location = './bookingList.php';
        }
    }
    </script>

    <?php
if (isset($_GET["deleteBooking"])) {

        include "./connectdb.php";
        $bk_id = $_GET["bk_id"];
        $dt_id = $_GET["dt_id"];
        $sql = "DELETE FROM `tbl_bookings` WHERE `tbl_bookings`.`bk_id` = '$bk_id'";

        if (mysqli_query($conn, $sql)) {

            $sql_s = "SELECT * FROM tbl_dormitory d
                            JOIN tbl_dormitory_locations l USING(dl_id)
                            JOIN tbl_dormitory_owner doo USING(do_id)
                            JOIN tbl_dormitory_type dt USING(dtp_id)
                            JOIN tbl_accessory_in_room ai USING(ac_d_id)
                            JOIN tbl_accessory_out_room aor USING(ac_d_o_id)
                            WHERE dt_id='$dt_id';";
            $result_s = mysqli_query($conn, $sql_s);

            while ($data_s = mysqli_fetch_assoc($result_s)) {
                $dt_count_room = $data_s["dt_count_room"];
                $c = (intval($dt_count_room) + 1);
                $sql_update1 = "UPDATE `tbl_dormitory` SET `dt_count_room` = '$c'
                                    WHERE `tbl_dormitory`.`dt_id` = '$dt_id';";
                mysqli_query($conn, $sql_update1);
            }

            echo "<script>";
            echo "alert('ลบข้อมูลสำเร็จ');";
            echo "</script>";

            echo "<script>";
            echo "location='./bookingList.php';";
            echo "</script>";

        } else {
            echo "<script>";
            echo "alert('ไม่สามารถลบข้อมูลได้');";
            echo "</script>";

            echo "<script>";
            echo "location='./bookingList.php';";
            echo "</script>";

        }

    }
    ?>

    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>
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
    <script src="plugins/colorbox/jquery.colorbox-min.js"></script>
    <script src="js/about.js"></script>
</body>

</html>
<?php
} else {
    echo "<script>";
    echo "location='./login.php'";
    echo "</script>";
}
?>