<?php
if ($_GET["deleteAccessory_in_room"] && $_GET["ac_d_id"]) {
    $ac_d_id = $_GET["ac_d_id"];
    $dt_id = $_GET["dt_id"];

    include "../../connectdb.php";
    $sql2 = "DELETE FROM `tbl_accessory_in_room` WHERE `tbl_accessory_in_room`.`ac_d_id` = $ac_d_id";
    if (mysqli_query($conn, $sql2)) {
        $sql = "UPDATE `tbl_dormitory` SET `do_id` = '0' WHERE `tbl_dormitory`.`dt_id` = '$dt_id';";
        mysqli_query($conn, $sql);

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