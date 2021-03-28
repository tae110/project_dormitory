<?php
session_start();
if (isset($_SESSION["a_email"])) {
    echo "<script>";
    echo "location ='./pages/tables/manage_dormitory.php';";
    echo "</script>";
} else {
    echo "<script>";
    echo "location ='./pages/examples/sign-in.php';";
    echo "</script>";
}