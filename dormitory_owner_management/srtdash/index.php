<?php
session_start();
if (isset($_SESSION["do_id"])) {

    echo "<script>";
    echo "location='./newBookings.php'";
    echo "</script>";

} else {
    echo "<script>";
    echo "location='./login.php'";
    echo "</script>";
}