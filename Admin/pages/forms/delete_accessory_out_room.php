<?php
if ($_GET["delete_accessory_out_room"] && $_GET["ac_d_o_id"]) {
    $ac_d_o_id = intval($_GET["ac_d_o_id"]);
    $dt_id = $_GET["dt_id"];
    include "../../connectdb.php";
    $sql3 = "DELETE FROM `tbl_accessory_out_room` WHERE `tbl_accessory_out_room`.`ac_d_o_id` = '$ac_d_o_id'";
    if (mysqli_query($conn, $sql3)) {
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