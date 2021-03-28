<?php
session_start();
if (isset($_SESSION["a_email"])) {

    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>จัดการหอพัก</title>
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

    <!-- JQuery DataTable Css -->
    <link href="../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

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
            <!-- <div class="block-header">
                <h2>
                    JQUERY DATATABLES
                    <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
                </h2>
            </div> -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                จัดการหอพัก
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
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="../forms/addDormitory.php" type="button"
                                        class="btn bg-indigo waves-effect   text-left">
                                        <i class="material-icons">add</i>
                                        <span>เพิ่มหอพัก</span>
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table   table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th width="3%">ไอดีหอพัก</th>
                                            <th>ชื่อหอพัก</th>
                                            <th>ราคา</th>
                                            <th>ประเภทหอพัก</th>
                                            <th>ฝั่ง</th>
                                            <th>เจ้าของหอพัก</th>
                                            <th width="13%">สิ่งอำนวนความสะดวกหอพักภายในห้อง</th>
                                            <th width="13%">สิ่งอำนวยความสะดวก ในอาคาร</th>
                                            <th width="13%">ดำเนินการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

    include "../../connectdb.php";
    $sql = "SELECT * FROM tbl_dormitory d
       JOIN tbl_dormitory_owner ood USING(do_id)
       JOIN tbl_dormitory_type dt USING(dtp_id)
       JOIN tbl_dormitory_locations dl USING(dl_id)";
    $result = mysqli_query($conn, $sql);

    while ($data = mysqli_fetch_assoc($result)) {
        ?>
                                        <tr>
                                            <td><?=$data["dt_id"]?></td>
                                            <td><?=$data["dt_name"]?></td>
                                            <td><?=$data["dt_price"]?></td>
                                            <td><?=$data["dtp_name"]?></td>
                                            <td><?=$data["dl_name"]?></td>
                                            <?php
if ($data["do_id"] == 0) {
            ?>
                                            <td class="text-center">
                                                <a href="../forms/addDormitory_owner.php?dt_id=<?=$data["dt_id"]?>"
                                                    type="button" class="btn bg-indigo waves-effect">
                                                    <i class="material-icons">person_add</i>
                                                    <span>เพิ่มเจ้าของหอ</span>
                                                </a>

                                            </td>
                                            <?php
} else {?>
                                            <td class="text-center">
                                                <a href="../forms/showDormitory_owner.php?do_id=<?=$data["do_id"]?>"
                                                    type="button"
                                                    class="btn bg-purple btn-circle-sm waves-effect waves-circle waves-float">
                                                    <i class="material-icons">search</i>
                                                </a>
                                                <a type="button"
                                                    href="../forms/updateDormitory_owner.php?do_id=<?=$data["do_id"]?>"
                                                    class="btn bg-pink btn-circle-sm waves-effect waves-circle waves-float">
                                                    <i class="material-icons">edit</i>
                                                </a>

                                            </td>
                                            <?php
}
        ?>
                                            <td class="">
                                                <?php
if ($data["ac_d_id"] == 0) {?>
                                                <a href="../forms/add_accessory_in_room.php?dt_id=<?=$data["dt_id"]?>"
                                                    type="button" class="btn bg-indigo waves-effect">
                                                    <i class="material-icons">person_add</i>
                                                    <span>เพิ่มรายการ</span>
                                                </a>
                                                <?php } else {
            ?>
                                                <a href="../forms/show_accessory_in_room.php?ac_d_id=<?=$data["ac_d_id"]?>"
                                                    type="button"
                                                    class="btn bg-purple btn-circle-sm waves-effect waves-circle waves-float">
                                                    <i class="material-icons">search</i>
                                                </a>
                                                <a href="../forms/update_accessory_in_room.php?ac_d_id=<?=$data["ac_d_id"]?>"
                                                    type="button"
                                                    class="btn bg-red btn-circle-sm waves-effect waves-circle waves-float">
                                                    <i class="material-icons">edit</i>
                                                </a>

                                                <?php
}
        ?>

                                            </td>
                                            <td class="">
                                                <?php
if ($data["ac_d_o_id"] == 0) {?>
                                                <a href="../forms/add_accessory_out_room.php?dt_id=<?=$data["dt_id"]?>"
                                                    type="button" class="btn bg-indigo waves-effect">
                                                    <i class="material-icons">person_add</i>
                                                    <span>เพิ่มรายการ</span>
                                                </a>
                                                <?php } else {
            ?>
                                                <a href="../forms/show_accessory_out_room.php?ac_d_o_id=<?=$data["ac_d_o_id"]?>"
                                                    type="button"
                                                    class="btn bg-purple btn-circle-sm waves-effect waves-circle waves-float">
                                                    <i class="material-icons">search</i>
                                                </a>
                                                <a href="../forms/update_accessory_out_room.php?ac_d_o_id=<?=$data["ac_d_o_id"]?>"
                                                    type="button"
                                                    class="btn bg-red btn-circle-sm waves-effect waves-circle waves-float">
                                                    <i class="material-icons">edit</i>
                                                </a>

                                                <?php
}
        ?>

                                            </td>
                                            <td>
                                                <a href="../forms/showDormitory.php?dt_id=<?=$data["dt_id"]?>"
                                                    type="button"
                                                    class="btn bg-blue btn-circle-sm waves-effect waves-circle waves-float">
                                                    <i class="material-icons">search</i>
                                                </a>
                                                <a href="../forms/editDormitory.php?dt_id=<?=$data["dt_id"]?>"
                                                    type="button"
                                                    class="btn bg-orange btn-circle-sm waves-effect waves-circle waves-float">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a href="../forms/deleteDormitory.php?delete_dormitory=req&dt_id=<?=$data["dt_id"]?>&do_id=<?=$data["do_id"]?>&ac_d_id=<?=$data["ac_d_id"]?>&ac_d_o_id=<?=$data["ac_d_o_id"]?>"
                                                    type="button"
                                                    class="btn bg-pink btn-circle-sm waves-effect waves-circle waves-float">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php }?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
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

    <!-- Jquery DataTable Plugin Js -->
    <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>

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