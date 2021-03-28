<?php
if ($_GET["delete_dormitory_owner"] && $_GET["do_id"]) {
    $do_id = intval($_GET["do_id"]);
    $dt_id = $_GET["dt_id"];

    include "../../connectdb.php";
    $sql1 = "DELETE FROM `tbl_dormitory_owner` WHERE `tbl_dormitory_owner`.`do_id` = '$do_id'";
    if (mysqli_query($conn, $sql1)) {
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