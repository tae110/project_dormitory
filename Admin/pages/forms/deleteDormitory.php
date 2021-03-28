<?php

if ($_GET["delete_dormitory"] && $_GET["dt_id"]) {
    $dt_id = intval($_GET["dt_id"]);
    $do_id = intval($_GET["do_id"]);
    $ac_d_id = intval($_GET["ac_d_id"]);
    $ac_d_o_id = intval($_GET["ac_d_o_id"]);
    include "../../connectdb.php";
    $sql = "DELETE FROM `tbl_dormitory` WHERE `tbl_dormitory`.`dt_id` ='$dt_id'";

    if (mysqli_query($conn, $sql)) {
        if ($do_id != 0) {
            $sql1 = "DELETE FROM `tbl_dormitory_owner` WHERE `tbl_dormitory_owner`.`do_id` = '$do_id'";
            mysqli_query($conn, $sql1);
        }
        if ($ac_d_id != 0) {
            $sql2 = "DELETE FROM `tbl_accessory_in_room` WHERE `tbl_accessory_in_room`.`ac_d_id` = '$ac_d_id'";
            mysqli_query($conn, $sql2);
        }
        if ($ac_d_o_id != 0) {
            $sql3 = "DELETE FROM `tbl_accessory_out_room` WHERE `tbl_accessory_out_room`.`ac_d_o_id` = '$ac_d_o_id'";
            mysqli_query($conn, $sql3);
        }
        echo "<script>";
        echo "alert('ลบข้อมูลสำเร็จ');";
        echo "location ='../tables/manage_dormitory.php';";
        echo "</script>";

    } else {
        echo "<script>";
        echo "alert('ลบข้อมูลสำเร็จ');";
        echo "location ='../tables/manage_dormitory.php';";
        echo "</script>";
    }

}