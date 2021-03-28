<?php
session_start();
if (isset($_SESSION['u_id'])) {
    if (isset($_GET['bk_id'])) {
        $bk_id = $_GET["bk_id"];
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

                        <?php
include "./connectdb.php";

        $sql = "SELECT * FROM tbl_bookings b JOIN tbl_status s USING(st_id)
               JOIN tbl_dormitory USING(dt_id) WHERE bk_id='$bk_id'";
        $result = mysqli_query($conn, $sql);

        while ($data = mysqli_fetch_array($result)) {?>
                        <!-- Contact Form -->
                        <div class="col-lg-6">
                            <div class="contact_form">
                                <div class="contact_info_title">รายละเอียดผู้จองห้องพัก</div>
                                <form action="" method="post" enctype="multipart/form-data" class="comment_form">
                                    <div>
                                        <div class="form_title">ชื่อ-สกุล</div>
                                        <span class="ml-3 text-primary"><?=$data['bk_c_name']?></span>
                                    </div>
                                    <div>
                                        <div class="form_title">เบอร์โทรศัพท์</div>
                                        <span class="ml-3 text-primary"><?=$data['bk_c_tel']?></span>
                                    </div>
                                    <div>
                                        <div class="form_title">อีเมล</div>
                                        <span class="ml-3 text-primary"><?=$data['bk_c_email']?></span>
                                    </div>
                                    <div>
                                        <div class="form_title">เเนบสลิปโอนเงิน</div>
                                        <img src="./images/slip/<?=$data["bk_slip"]?>" class="img-fluid">
                                    </div>
                                    <div>
                                        <div class="form_title">รายละเอียดเพิ่มเติม</div>
                                        <span class="ml-3 text-primary"><?=$data['bk_orther']?></span>
                                    </div>
                                    <div>
                                        <div class="form_title">สถานะ</div>
                                        <?php
if ($data['st_id'] == 1) {?>
                                        <span class="ml-3 text-warning"><?=$data['st_name']?></span>
                                        <?php
} else {
            ?>
                                        <span class="ml-3 text-success"><?=$data['st_name']?></span>
                                        <?php }
            ?>
                                    </div>

                                </form>
                                <div>
                                    <a href="bookingList.php">
                                        <button class="comment_button trans_200">กลับ
                                        </button>
                                    </a>

                                </div>
                            </div>
                        </div>


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

                            </div>
                        </div>

                        <?php }

        ?>

                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter -->





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