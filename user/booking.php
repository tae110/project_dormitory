<?php
session_start();
if (isset($_SESSION['u_id'])) {
    if (isset($_GET['dt_id'])) {
        $dt_id = $_GET["dt_id"];
        // $bk_id = $_GET["bk_id"];
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>จองหอพัก</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                                    <li>จองหอพัก</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->

        <div class="contact">



            <!-- Contact Info -->

            <div class="contact_info_container">
                <div class="container">
                    <div class="row">

                        <!-- Contact Form -->
                        <div class="col-lg-6">
                            <div class="contact_form">
                                <div class="contact_info_title">รายละเอียดผู้จองห้องพัก</div>
                                <form action="" method="post" enctype="multipart/form-data" class="comment_form">
                                    <div>
                                        <div class="form_title">ชื่อ-สกุล</div>
                                        <input type="text" class="comment_input" value="<?=$_SESSION['u_name']?>"
                                            name="bk_c_name" required="required">
                                    </div>
                                    <div>
                                        <div class="form_title">เบอร์โทรศัพท์</div>
                                        <input type="text" min="0" class="comment_input" value="<?=$_SESSION['u_tel']?>"
                                            name="bk_c_tel" required="required">
                                    </div>
                                    <div>
                                        <div class="form_title">อีเมล</div>
                                        <input type="email" class="comment_input" value="<?=$_SESSION['u_email']?>"
                                            name="bk_c_email" required="required">
                                    </div>
                                    <div>
                                        <div class="form_title">เเนบสลิปโอนเงิน</div>
                                        <input type="file" class="comment_input" name="bk_slip" required="required">
                                    </div>
                                    <div>
                                        <div class="form_title">รายละเอียดเพิ่มเติม</div>
                                        <textarea class="comment_input comment_textarea" name="bk_orther"></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" name="bookingSubmit"
                                            class="comment_button trans_200">จองห้องพัก</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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

        while ($data = mysqli_fetch_array($result)) {?>

                        <!-- Contact Info -->
                        <div class="col-lg-6">
                            <div class="contact_info">
                                <div class="contact_info_title">หอพัก <?=$data["dt_name"]?></div>
                                <!--   -->
                                <div class="contact_info_location">
                                    <div class="contact_info_location_title">ค่ามัดจำ
                                        <span class="text-primary"><?php echo number_format($data["dt_deposit"]) ?>
                                        </span>บาท
                                    </div>
                                    <div class="contact_info_location_title">ค่าประกันหอพัก
                                        <span class="text-primary"><?php echo number_format($data["dt_insurance"]) ?>
                                        </span>บาท
                                    </div>
                                    <div class="contact_info_location_title">ค่าเช่า
                                        <span class="text-primary"><?php echo number_format($data["dt_price"]) ?>
                                        </span>บาท
                                    </div>
                                    <div class="contact_info_location_title text-danger">รวม
                                        <span class="text-primary"><?php
$sum = ($data["dt_deposit"] + $data["dt_insurance"] + $data["dt_price"]);
            echo number_format($sum)?>
                                        </span>บาท
                                    </div>
                                </div>
                                <div class="contact_info_location">
                                    <div class="contact_info_location_title">โอนมาที่</div>
                                    <ul class="location_list">
                                        <li>บัญชี <span class="text-primary"><?=$data["do_account_number"]?></span></li>
                                        <li>พร้อมเพย์<span class="text-primary"> <?=$data["do_pompay"]?></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <?php }

        ?>
                    </div>
                </div>
            </div>
        </div>



        <?php
if (isset($_POST["bookingSubmit"])) {
            include "./connectdb.php";

            $bk_slip_time = md5(date("Y-m-d h:i:s"));
            $bk_slip = uniqid() . $bk_slip_time . $_FILES["bk_slip"]["name"];

            $sql = "INSERT INTO `tbl_bookings` (`bk_id`, `bk_date`, `dt_id`, `u_id`, `st_id`, `bk_c_name`,
                 `bk_orther`, `bk_slip`,`bk_c_email`, `bk_c_tel`,`bk_total`)
                  VALUES (NULL, current_timestamp(), '$dt_id', '" . $_SESSION["u_id"] . "','1', '" . $_POST["bk_c_name"] . "',
                 '" . $_POST["bk_orther"] . "', '$bk_slip','" . $_POST["bk_c_email"] . "','" . $_POST["bk_c_tel"] . "','$sum' );";

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
                    $c = (intval($dt_count_room) - 1);
                    $sql_update1 = "UPDATE `tbl_dormitory` SET `dt_count_room` = '$c'
                                    WHERE `tbl_dormitory`.`dt_id` = '$dt_id';";
                    mysqli_query($conn, $sql_update1);
                }

                $path = "./images/slip/";
                move_uploaded_file($_FILES["bk_slip"]["tmp_name"], "$path/$bk_slip");

                echo "<script>";
                echo "alert('บันทึกข้อมูลสำเร็จ');";
                echo "</script>";

                echo "<script>";
                echo "location ='./bookingList.php';";
                echo "</script>";

            } else {
                $mes = "Error: " . $sql . "<br>" . mysqli_error($conn);
                echo "<script>";
                echo "alert('ไม่สามารถบันทึกข้อมูลได้')";
                echo "</script>";
            }

        }

        ?>


        <!-- Footer -->
        <?php include_once "./footer.php";?>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="plugins/marker_with_label/marker_with_label.js"></script>
    <script src="js/contact.js"></script>
</body>

</html>
<?php
}
} else {
    echo "<script>";
    echo "location='./login.php'";
    echo "</script>";
}

?>